<?php

namespace App\Http\Controllers;


use App\Models\informations;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $admins = Informations::latest()->get();
    //   dd($admins);
        return view('dashboard', ['admins' => $admins]); // Ensure this corresponds to resources/views/dashboard.blade.php
    }

    public function viewResume(informations $informations){
        // dd($informations->name);
        $resume = Informations::where('id', '1')->first();
        dd($resume->name);
        return view('resume', ['resume' => $informations]);
    }
}

