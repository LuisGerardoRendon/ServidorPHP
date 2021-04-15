<?php
namespace service;


use calculadora\calculadoraIf;
use calculadora\OperacionIvalida;

class CalculadoraHandler implements calculadoraIf
{


    public function division($dividendo, $divisor)
    {
        if(is_int($dividendo) && is_int($divisor) && $divisor != 0 ){
            $total = $dividendo / $divisor;
        } else {
            $exception = new OperacionIvalida();
            $exception-> $exception = "Division invalida";
            throw $exception;
        }

        return $total;
    }

    public function suma($numero1, $numero2)
    {
        if(is_int($numero1) && is_int($numero2)){
            $total = $numero1 + $numero2;
        } else {
            $exception = new OperacionIvalida();
            $exception-> $exception = "Suma invalida";
            throw  $exception;
        }

        return $total;
    }

    public function multiplicacion($numero1, $numero2)
    {
        if(is_int($numero1) && is_int($numero2)){
            $total = $numero1 * $numero2;
        } else {
            $exception = new OperacionIvalida();
            $exception-> $exception = "Multiplicacion invalida";
            throw  $exception;
        }

        return $total;
    }

    public function resta($minuendo, $sustraendo)
    {
        if(is_int($minuendo) && is_int($sustraendo)){
            $total = $minuendo - $sustraendo;
        } else {
            $exception = new OperacionIvalida();
            $exception-> $exception = "Resta invalida";
            throw  $exception;
        }

        return $total;
    }
}