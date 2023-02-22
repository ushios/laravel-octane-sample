<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Swoole\Server;

class HelloController extends Controller
{
    public function index() {
        sleep(10);
        return view('welcome');
    }


    public function detail() {
        return view('welcome');
    }
}

