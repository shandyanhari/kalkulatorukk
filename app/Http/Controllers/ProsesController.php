<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function store(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $op = $request->op;

        if ($op == "+") {
            $hasil = $a + $b;
        } elseif ($op == "-") {
            $hasil = $a - $b;
        } elseif ($op == "X") {
            $hasil = $a * $b;
        } elseif ($op == "/") {
            if ($b > 0 || $b < 0) {
                $hasil = $a / $b;
            } else {
                $hasil = "Tidak dapat membagi dengan 0";
            }
        }
        return view('kalkulator.hasil', compact('hasil'));
    }
}
