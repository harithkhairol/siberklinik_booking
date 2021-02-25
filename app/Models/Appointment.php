<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'doctor_name',
        'type',
        'category',
        'title',
        'description',
        'date',
        'time',
    ];

    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'doctor_id');
    }

}
