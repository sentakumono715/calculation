<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index_Squared(Request $request)
    {
        $number = $request->input('number');
        return $number*$number;
    }

    public function index_box(Request $request)
    {
        $number = $request->input('number');
        return $number*$number*$number;
    }

    public function index_Circle(Request $request)
    {
        $number = $request->input('number');
        return $number*$number*3.14;
    }
}
