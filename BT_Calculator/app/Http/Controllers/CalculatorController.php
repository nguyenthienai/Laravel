<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function index()
    {
        return view('index');
    }

    function add()
    {
        $btn = request('btn');
        $num1 = request('num1');
        $num2 = request('num2');

        switch ($btn){
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                $result = $num1 / $num2;
                break;
        }

        return redirect()->back()->with('result',$result);
    }
}
