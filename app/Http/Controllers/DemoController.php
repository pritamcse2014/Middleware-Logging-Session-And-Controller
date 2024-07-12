<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    function DemoAction1():string {
        return "Hello World!";
    }
    
    function DemoAction2():string {
        return "Hello World Two!";
    }
}
