<?php

namespace App\Http\Controllers\Administration;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index(Request $request)
    {

        $data = $request->session()->put('location', 'Lekki-Ajah');
        //$users = DB::table('users')->get();

        //return view('user.index', ['users' => $users]);
        return $data;

    }

    public function list()
    {
        return User::all();
    }

}
