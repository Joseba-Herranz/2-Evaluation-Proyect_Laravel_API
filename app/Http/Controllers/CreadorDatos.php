<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreadorDatos extends Controller
{

    public function randomizador()
    {
        $random = mt_rand(1, 2);

        $perc = mt_rand(0.01, 0.2);

        if ($random == 1) {
            $res = $perc;
        } else {
            $res = (-($perc));
        }
        echo $res;
        return $res;
    }

    public function calculador($res)
    {
        $actual = $actual * $res;
    }

}