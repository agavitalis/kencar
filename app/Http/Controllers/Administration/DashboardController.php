<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {

        return view('admin.dashboard');
    }

    public function users()
    {

        return view('admin.listUsers');
    }

    

}
