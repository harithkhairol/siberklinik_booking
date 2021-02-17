<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\TimeSlot;
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
        return view('appointment.schedule');
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

        // foreach ($available_days as $available_day) {
            
        // }

        if($day == "Saturday" || $day == "Sunday"){
            return back()->with('error', 'No appointment for weekends!');
        }

        $timeslots = TimeSlot::where('doctor_id', '!=' , 0)
                            ->where('day', $day)
                            ->pluck('time');

        if(count($timeslots) < 1){
            return back()->with('error', 'Appointment is not available on '.$day.'!');
        }

        return view('appointment.book-time', compact('type', 'category', 'title', 'description', 'date', 'available_days', 'day', 'timeslots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
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
