<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Appointment;
use App\Models\TimeSlot;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schedule()
    {
        $appointments = Appointment::where('user_id', Auth::user()->id)->first();
         
        $appointment_today = Appointment::where('user_id', Auth::user()->id)->where('date', now())->orderBy('time', 'asc')->get();

        if(isset($_GET['search'])) {

            $appointment_upcoming = Appointment::join(env('DB_DATABASE2').'.users', 'appointments.doctor_id', '=', 'users.id')
                     ->select('appointments.*', 'users.name', 'users.phone_no')
                     ->where('user_id', Auth::user()->id)
                     ->where('date','>', now())
                     ->where(function ($query) {
                        $query->where('appointments.type', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('date', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('title', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('category', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('name', 'LIKE', '%' . $_GET['search'] . '%')
                            ->orWhere('phone_no', 'LIKE', '%' . $_GET['search'] . '%');
                    })->orderBy('time', 'asc')->paginate(10);

        }
        else{

            $appointment_upcoming = Appointment::join(env('DB_DATABASE2').'.users', 'appointments.doctor_id', '=', 'users.id')
                     ->select('appointments.*', 'users.name', 'users.phone_no')
                     ->where('user_id', Auth::user()->id)->where('date', '>', now())->orderBy('time', 'asc')->paginate(10);

        }

        $appointment_next_date = Appointment::where('user_id', Auth::user()->id)->where('date', '>', now())->first();
        

        if(isset($appointment_next_date)){
            
            $appointment_next = Appointment::where('user_id', Auth::user()->id)->where('date',  $appointment_next_date->date)->orderBy('time', 'asc')->get();  

        }

        else{

            $appointment_next = null;

        }

        return view('appointment.schedule', compact('appointments', 'appointment_today', 'appointment_next', 'appointment_next_date', 'appointment_upcoming'));
    }

    public function history()
    {
        return view('appointment.history');
    }

    public function book()
    {
        return view('appointment.book');
    }

    public function bookDate(Request $request)
    {
        $validator = $request->validate([
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $type = $request->type;
        $category = $request->category;
        $title = $request->title;
        $description = $request->description;

        $available_days = TimeSlot::where('doctor_id', '!=' , 0)->select('day')->groupBy('day')->pluck('day');

        return view('appointment.book-date', compact('type', 'category', 'title', 'description', 'available_days'));
    }

    public function bookTime(Request $request)
    {
        $validator = $request->validate([
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $type = $request->type;
        $category = $request->category;
        $title = $request->title;
        $description = $request->description;
        $date = $request->date;

        $day = date('l', strtotime($date));

        $available_days = TimeSlot::where('doctor_id', '!=' , 0)->select('day')->groupBy('day')->pluck('day');

        $time_booked = Appointment::where('date', $date)->pluck('time');

        if($day == "Saturday" || $day == "Sunday"){
            return back()->with('error', 'No appointment for weekends!');
        }

        $timeslots = TimeSlot::where('doctor_id', '!=' , 0)
                            ->where('day', $day)
                            ->pluck('time');

        $available_timeslots = TimeSlot::where('doctor_id', '!=' , 0)
                            ->where('day', $day)
                            ->whereNotIn('time', $time_booked)
                            ->pluck('time');

        if(count($timeslots) < 1){

            return back()->with('error', 'Appointment is not available on '.$day.'!');

        }

        if(count($available_timeslots) < 1){
            return back()->with('error', 'Appointment is fully booked on '.date('d/m/Y', strtotime($date)).'!');
        }

        return view('appointment.book-time', compact('type', 'category', 'title', 'description', 'date', 'available_days', 'day', 'available_timeslots'));
    }

    public function confirm(Request $request)
    {
        $validator = $request->validate([
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $type = $request->type;
        $category = $request->category;
        $title = $request->title;
        $description = $request->description;
        $date = $request->date;
        $time = $request->time;

        return view('appointment.confirm', compact('type', 'category', 'title', 'description', 'date', 'time'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'type' => 'required',
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        $type = $request->type;
        $category = $request->category;
        $title = $request->title;
        $description = $request->description;
        $date = $request->date;
        $time = $request->time;

        

        $day = date('l', strtotime($date));

        $timeslot = TimeSlot::where('day', $day)
                            ->where('time', $time)
                            ->first();

        $doctor = Doctor::where('id', $timeslot->doctor_id)->first();

        $check_book = Appointment::where('date', $date)
                                 ->where('time', $time)
                                 ->get();

        if(count($check_book) < 1){

            $time_booked = Appointment::where('date', $date)->pluck('time');

            $timeslots = TimeSlot::where('doctor_id', '!=' , 0)
                            ->where('day', $day)
                            ->pluck('time');

            $available_timeslots = TimeSlot::where('doctor_id', '!=' , 0)
                            ->where('day', $day)
                            ->whereNotIn('time', $time_booked)
                            ->pluck('time');

            if(count($timeslots) < 1){

                return redirect()->action(
                    [AppointmentController::class, 'bookTime'], ['type' => $type, 'category' => $category, 'title' => $title, 'description' => $description, 'date' => $date, 'time' => $time]
                )->with('error', 'Appointment has been booked on '.date('d/m/Y', strtotime($date)).' at '.date('G:i', strtotime($time)).'!');
    
            }
    
            if(count($available_timeslots) < 1){

                return redirect()->action(
                    [AppointmentController::class, 'bookDate'], ['type' => $type, 'category' => $category, 'title' => $title, 'description' => $description]
                )->with('error', 'Appointment is fully booked on '.date('d/m/Y', strtotime($date)).'!');

            }


        }
    
        Appointment::create([
            'user_id' => Auth::user()->id,
            'doctor_id' => $doctor->id,
            'doctor_name' => $doctor->name,
            'type' => $request->type,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->action([AppointmentController::class, 'schedule'])->with('success','Appointment '.$title. ' on '. date('l', strtotime($date)).', '.date('d/m/Y', strtotime($date)).' at '.date('G:i', strtotime($time)) .' has been booked successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($id, $title)
    {
        $appointment = Appointment::where('id', $id)->first();

        return view('appointment.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
