<?php

namespace App\Http\Controllers\Administration;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {

    }

    public function list()
    {
        return User::all();
    }

}
