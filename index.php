<?php

ini_set('display_errors', 'on');

function divide(float $number1, float $number2): float
{
    if ($number2 === 0.0) {
        throw new Exception("Attention on ne peut pas diviser par zéro");
    }
    
    return $number1 / $number2;
}

if (! empty($_POST)) {
    try {
        if ($_POST['number1'] === '' || $_POST['number2'] === '') {
            throw new Exception("Au-moins un des champs est vide");
        }
        
        $result = divide($_POST['number1'], $_POST['number2']);
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
}

require 'index.phtml';