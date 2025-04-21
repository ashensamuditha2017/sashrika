<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FarmerController extends Controller
{
    /**
     * Show the farmer dashboard.
     */
    public function index()
    {
        $farmer = Auth::user();
        return view('farmer.home', compact('farmer'));
    }

    public function predictions()
    {
        $farmer = Auth::user();
        return view('farmer.predictions', compact('farmer'));
    }

    public function reports()
    {
        $farmer = Auth::user();
        return view('farmer.reports', compact('farmer'));
    }

    public function messages()
    {
        $farmer = Auth::user();
        return view('farmer.messages', compact('farmer'));
    }

    public function notifications()
    {
        $farmer = Auth::user();
        return view('farmer.notifications', compact('farmer'));
    }
}