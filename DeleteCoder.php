<?php
namespace App;


final class DeleteCoder{

    function deleteName($coder,$coders) {

        if (!(in_array($coder,$coders))){
            echo "User not found";
            return "Coder not found";
        }
        unset($coders[array_search($coder,$coders)]);
        print_r($coders);

    }

}