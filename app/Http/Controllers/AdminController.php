<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function AdminDash()
    {
        return view('AdminDash/Dash');
    }
    public function ClientDash()
    {
        return view('AdminDash/Client');
    }
}
