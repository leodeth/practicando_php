<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


     
    function calcular(){
     if(isset($_REQUEST["button"])){
    $numero1 = $_REQUEST["casilla1"];
    $numero2 = $_REQUEST["casilla2"];
    $operacion = $_REQUEST["operacion"];
    
    if($operacion == "suma"){
        $resultado = $numero1 + $numero2;
        echo "el resultado es: $resultado";
    } 
     if($operacion == "resta"){
        $resultado = $numero1 - $numero2;
        echo "el resultado es: $resultado";
    }
  }
}
calcular();
