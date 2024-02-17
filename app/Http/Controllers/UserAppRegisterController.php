<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class UserAppRegisterController extends Controller
{
    public function appRegister(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $items = Application::all();
        return view('pages.app-register', ['items' => $items]);
    }
}
