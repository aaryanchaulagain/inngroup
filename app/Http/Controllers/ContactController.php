<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Show the contact form page.
     */
    public function index()
    {
        return view('website.contact');
    }

    /**
     * Store a newly created contact/appointment in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name'             => 'required|string|max:255',
        'email'            => 'required|email|max:255',
        'whatsapp'         => 'nullable|string|max:20', // New field
        'department'       => 'required|string',
        'appointment_date' => 'nullable|date',
        'message'          => 'required|string',
    ]);

    try {
        DB::table('contacts')->insert([
            'name'             => $request->name,
            'email'            => $request->email,
            'whatsapp'         => $request->whatsapp, // New field
            'department'       => $request->department,
            'appointment_date' => $request->appointment_date,
            'subject'          => $request->subject ?? 'Appointment Request',
            'message'          => $request->message,
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);

        return redirect()->back()->with('success', 'Request submitted successfully!');

    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'Error: ' . $e->getMessage());
    }
}
}
