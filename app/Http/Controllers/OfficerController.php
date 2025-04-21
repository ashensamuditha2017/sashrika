<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerController extends Controller
{
    /**
     * Show the officer dashboard.
     */
    public function index()
    {
        $officer = Auth::user();
        return view('officer.home', compact('officer')); // Ensure officer.home view exists
    }

    public function predictions()
    {
        $officer = Auth::user();
        return view('officer.predictions', compact('officer'));
    }

    public function report()
    {
        $officer = Auth::user();
        // Get a list of farmers (you might need to adjust this based on your data)
        $farmers = User::where('role', 'farmer')->get();
        return view('officer.damage-report', compact('farmers', 'officer')); // Ensure officer.damage-report view exists
    }

    public function alerts()
    {
        $officer = Auth::user();
        return view('officer.notifications', compact('officer')); // Ensure officer.alerts view exists
    }

    public function messages()
    {
        $officer = Auth::user();
        return view('officer.messages', compact('officer')); // Ensure officer.messages view exists
    }
}