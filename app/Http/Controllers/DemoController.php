<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    function DemoAction(Request $request):string {
        return "Hello World!";
    }
}
