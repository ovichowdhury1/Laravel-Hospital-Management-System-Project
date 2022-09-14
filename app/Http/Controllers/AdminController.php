<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;
use Notification;
use App\Notifications\SendEmailNotification;
use App\Models\Schedule;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;

        $image = $request->file;

        $imagename = time().'.'.$image->getClientOriginalExtension();


        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;
        
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specality=$request->speciality;


        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Succcessfully');

    }

    public function showappointment()
    { 

         $data = Appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }
      public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

    public function emailview($id)
    {
        $data = appointment::find($id);
        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {
         $data = appointment::find($id);

         $details =[
            'greeting' => $request->greeting,
            'body' =>$request->body,
            'actiontext' => $request->actiontext,
            'actionturl' => $request->actionturl,
            'endpart' => $request->endpart,
         ];


         Notification::send($data,new SendEmailNotification($details));
         return redirect()->back();
    }

    public function showschedule()
    { 

         $data = schedule::all();
        return view('admin.showschedule',compact('data'));
    }
   
}

