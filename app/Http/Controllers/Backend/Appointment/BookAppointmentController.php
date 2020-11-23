<?php

namespace App\Http\Controllers\Backend\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Appointment\BookAppointment;
use Illuminate\Http\Request;

class BookAppointmentController extends Controller
{
    public function index()
    {
        
        $appointments = BookAppointment::orderBy('id','desc')->get();
        return view('backend.appointment.index',compact('appointments'));
    }

    public function edit($id) {

        $appointment = BookAppointment::findOrFail($id);
        return view('backend.appointment.edit',compact('appointment'));
    }

    public function destroy ($id)
    {
        $appointment = BookAppointment::find($id);



        if($appointment->delete()){
            return redirect()->back()->with('success', 'Booking Appointment Deleted Successfully.');
        }
     
    }

    
}