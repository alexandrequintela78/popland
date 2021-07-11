<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\Vue;

class PoplandController extends Controller
{
    function show() {
        return view('welcome');
    }
}


