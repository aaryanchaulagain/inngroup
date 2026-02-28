@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap"
        rel="stylesheet">
@endpush

@section('content')
    <div class="contact-page-wrapper">
        <div class="form-container">
            <div class="header-section">
                <span>GREETINGS</span>
                <h1>Make an appointment</h1>
            </div>

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="grid">
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" name="name" placeholder="e.g. Julianne Moore" required>
                    </div>
                    <div class="form-group">
                        <label>E-Mail*</label>
                        <input type="email" name="email" placeholder="hello@domain.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>WhatsApp Number</label>
                    <input type="text" name="whatsapp" placeholder="e.g. +61 412 345 678" pattern="^(\+61|0)4\d{8}$"
                        title="Enter a valid Australian mobile number (e.g. +61412345678 or 0412345678)" required>
                </div>
                <div class="form-group">
                    <label>Department*</label>
                    <select name="department" required>
                        <option value="" disabled selected>Select a department</option>
                        <option value="Accounting & Taxation">Accounting & Taxation</option>
                        <option value="Finance">Finance</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Remit">Remit</option>


                    </select>
                </div>

                <div class="form-group">
                    <label>Desired Time & Date</label>
                    <input type="datetime-local" name="appointment_date">
                </div>

                <div class="form-group">
                    <label>Subject*</label>
                    <input type="text" name="subject" required>
                </div>

                <div class="form-group">
                    <label>Message*</label>
                    <textarea name="message"></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Request</button>
            </form>
        </div>
    </div>
@endsection
