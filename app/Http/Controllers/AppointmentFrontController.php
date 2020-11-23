<?php

namespace App\Http\Controllers;

use App\Models\Appointment\BookAppointment;
use Illuminate\Http\Request;

class AppointmentFrontController extends Controller
{
    public function add(Request $request,$locale) {
            
        $request->validate([
            'name' => 'required|min:3',
            'address' => 'required',
            'message' => 'required|min:10',
            'phone' =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
            'email' => 'required|email',
            'date' => 'required|date'
        ]);

        $appointment = new BookAppointment;

        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->address = $request->address;
        $appointment->phone = $request->phone;
        $appointment->date = $request->date;
        $appointment->message = $request->message;

        $appointment->save();

        return view("pages.appointmentConfirm.index");
    }
}