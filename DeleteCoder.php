<?php
namespace App;


final class DeleteCoder{

    function deleteName() {

        $coders = array('Javi','Pepe','Diego');
        $out = 'Pepe';

        unset($coders[array_search($out,$coders)]);
        print_r($coders);



    }



}