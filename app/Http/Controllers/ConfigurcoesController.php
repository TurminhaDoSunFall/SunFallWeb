<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigurcoesController extends Controller
{
    public function index()
    {
        return view("config");
    }
}
