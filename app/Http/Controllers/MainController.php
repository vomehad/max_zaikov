<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        dd('gh');
        return view('main.index');
    }
}
