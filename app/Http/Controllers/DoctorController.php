<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class DoctorController extends Controller
{
    public function addschedule(){
        return view('doctor.add_schedule');
    }
     public function uploadschedule(Request $request)
    {
        $schedule = new schedule;

        
        $schedule->name=$request->name;
        $schedule->phone=$request->number;
        $schedule->room=$request->room;
        $schedule->specality=$request->speciality;
        $schedule->date=$request->date;
        $schedule->time=$request->time;



        $schedule->save();

        return redirect()->back()->with('message','schedule Added Succcessfully');

    }
}
