<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.login'); // your custom login blade
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check admin from 'admins' table
        $admin = DB::table('admins')->where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // store admin info in session
            $request->session()->put('admin_id', $admin->id);
            $request->session()->put('admin_name', $admin->name);

            return redirect('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ])->onlyInput('email');
    }

    // Dashboard page
    public function dashboard(Request $request)
    {
        // Only allow if admin is logged in
        if (!$request->session()->has('admin_id')) {
            return redirect('/admin/login');
        }

        $adminName = $request->session()->get('admin_name');

        // Example: fetch total contacts
        $totalContacts = DB::table('contacts')->count();

        // Fetch latest 10 contacts
        $contacts = DB::table('contacts')->latest()->take(10)->get();

        return view('admin.dashboard', compact('adminName', 'contacts', 'totalContacts'));
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->forget(['admin_id', 'admin_name']);
        return redirect('/admin/login');
    }
}
