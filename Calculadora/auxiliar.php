<?php


/**
 * 
 * @author Enrique Cuevas Garcia
 * 
 * @copyright Copyright (c) 2022 Enrique Cuevas Garcia
 * 
 * @license 
 * 
 * 
 * 
 * Calcula el resultado de hacer la operacion de $oper sobre
 * los argumentos $oper1 y $oper2
 *
 * @param mixed $oper1 El primer operando
 * @param string $oper El operador (valores validos: '+','-','*','/')
 * @param mixed $oper2 El segundo operando
 * 
 * 
 */


function calcular_resultado($oper1,$oper,$oper2)
{

    switch ($oper) {
        case '+':
            $res = $oper1 + $oper2;
            break;

        case '-':
            $res = $oper1 - $oper2;
            break;
        case '*':
            $res = $oper1 * $oper2;
            break;

        case '/':
            $res = $oper1 / $oper2;
            break;

        default:
            $res  ='Error operacion incorrecta';
            break;
    }

    return $res;

}

?>