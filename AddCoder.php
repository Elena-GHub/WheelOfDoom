<?php
namespace App;


final class AddCoder{

    function addName($coders) {

        $new = 'Pepe';
        array_push($coders, "$new");
        print_r($coders);


    }



}