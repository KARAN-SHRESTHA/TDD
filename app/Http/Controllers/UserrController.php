<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserrController extends Controller
{
    public function store()
    {
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')
        ]);
    }
}
