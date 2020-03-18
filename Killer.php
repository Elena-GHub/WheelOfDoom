<?php

namespace App;

final class Killer
{

    function unset($dead,$coders)   {

        $crypt= array();

            if(!(in_array($dead,$coders))){
            echo "User not found";
            return "Coder not found";
        }

        array_push($crypt, $dead);
        unset($coders[array_search($dead,$coders)]);


    }
}








