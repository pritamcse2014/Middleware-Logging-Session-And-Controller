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
    
    function DemoAction3():string {
        return "Hello World Three!";
    }
    
    function DemoAction4():string {
        return "Hello World Four!";
    }
}
