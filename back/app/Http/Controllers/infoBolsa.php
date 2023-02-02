<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoBolsa extends Controller
{

    public function randomizador()
    {
        $random = mt_rand(1, 2);

        $perc = mt_rand(0.01, 0.2);

        if ($random == 1) {
            $res = $perc;
        } else {
            $res = $perc;
        }
        return $res;
    }
   
    public function calculador($actual)
    {
        $res = $this->randomizador();
        
        $bajada = $actual * $res;
        
        if($res>0){
            $actual = $bajada + $res;
        }elseif($res<0){
            $actual = $bajada - $res;
        }
        return $actual;
    }

    public function cadaMinuto()
    {
        while (true) {
            
            for ($x = 0; $x < 10; $x++) {
                $id = $this->id($x);
                
                $valor = $this->calculador($actual)






            }
            
        sleep(60);}
    }        
    
    public function id($id){
        $dato = Table::find($id);
        return $dato;
    }

    public function obtencionValor(){

    }
}    

