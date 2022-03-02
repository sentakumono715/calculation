<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index_Squared(Request $request)
    {
        $number = $request->input('number');
        $result = $number * $number;
        $name = "squared";
        $link = mysqli_connect('mysql746.db.sakura.ne.jp', 'tcagame01', 'tcagame2021', 'tcagame01_20j70014');
        $stmt = mysqli_prepare($link, "INSERT INTO results  (name, result) VALUES (?, ?)");
        //?は後から定義する
        mysqli_stmt_bind_param($stmt, "ss", $name, $result);
        mysqli_stmt_execute($stmt);
        mysqli_close($link);

        return $result;
    }

    public function index_box(Request $request)
    {
        $number = $request->input('number');
        $result = $number * $number * $number;
        $name = "cude";
        $link = mysqli_connect('mysql746.db.sakura.ne.jp', 'tcagame01', 'tcagame2021', 'tcagame01_20j70014');
        $stmt = mysqli_prepare($link, "INSERT INTO results  (name, result) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $name, $result);
        mysqli_stmt_execute($stmt);
        mysqli_close($link);
        return $result;
    }

    public function index_Circle(Request $request)
    {
        $number = $request->input('number');
        $result = $number * $number * 3.14;
        $name = "circle";
        $link = mysqli_connect('mysql746.db.sakura.ne.jp', 'tcagame01', 'tcagame2021', 'tcagame01_20j70014');
        $stmt = mysqli_prepare($link, "INSERT INTO results  (name, result) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $name, $result);
        mysqli_stmt_execute($stmt);
        mysqli_close($link);
        return $result;
    }
}
