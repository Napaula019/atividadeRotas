<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithemeticController extends Controller
{
    public function calc(string $op, int $n1, int $n2)
    {

        switch ($op) {
            case 'soma':
                $result = $n1 + $n2;
                break;

            case 'sub':
                $result = $n1 - $n2;
                break;

            case 'div':
                $result = $n1 / $n2;
                break;
        }

        return view("calc", ['XuxuBelezaaa' => $result]);
    }
}
