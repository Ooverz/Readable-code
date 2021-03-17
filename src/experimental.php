<?php

function orderPizza() {
    $type = ["Margherita", "Golden", "Calzone"];

    for ($i = 0; $i < count($type); $i++) { 
        
        echo 'Creating new order... <br>';
        echo "A " . $type[$i] . " pizza should be sent to " . custChoice($type[$i]) . ". <br>The address: " . custAdr(custChoice($type[$i])) . '.<br>';
        echo "The bill is €" . costCalc($type[$i]) . '.<br>';
        echo "Order finished.<br><br>";
    }
}

function custChoice($pizza){

    $name = "";

    switch($pizza){
        case "Margherita" : 
            $name = "Nick";
            break;
        case "Golden" : 
            $name = "students";
            break;
        case "Calzone" : 
            $name = "Nico";
            break;
    }
    return $name;
}

function costCalc($pizza){
    $cost = 'unknown';

    switch($pizza){
        case "Margherita" : 
            $cost = 5;
            break;
        case "Golden" : 
            $cost = 100;
            break;
        case "Calzone" : 
            $cost = 10;
            break;
    }
    return $cost;
}

function custAdr($name){

    if($name == 'Nico'){

        return "a peniche in Liège";

    } elseif ($name == "Nick"){

        return "somewhere in Belgium";

    } elseif ($name == "students") {

        return "BeCode office";
    }
}

orderPizza();
