<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index(){

        $users = User::all();

        // dd($users);

        return view('coba', [
            'users' => $users
        ]);
    }
}