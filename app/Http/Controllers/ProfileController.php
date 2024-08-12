<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProfileController extends Controller
{
    public function profile() 
    {
        return view('profile');
    }
}