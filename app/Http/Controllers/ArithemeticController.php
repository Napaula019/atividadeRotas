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
                $Sign = '+';
                $title = "Soma";
                break;

            case 'sub':
                $result = $n1 - $n2;
                $Sign = '-';
                $title = "Subtracão";
                break;

            case 'div':
                $result = $n1 / $n2;
                $Sign = '/';
                $title = "Divisão";
                break;
        }

        // return view("calc")->with('titulo', $title)->with('sign', $Sign);

        return view(
            "calc",
            [
                'Titulo' => $title,
                'Sign' => $Sign,
                'n1' => $n1,
                'n2' => $n2,
                'Resultado' => $result
            ]
        );
    }
}
