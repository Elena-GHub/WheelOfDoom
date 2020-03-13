<?php
namespace App;


final class Killer{
    function getName($dead) {

        return $dead;
    }
    function array_push($dead) {
        $dead = 'Pepe';
        $codersCemetery = [];
        array_push($codersCemetery, $dead);
        print_r($codersCemetery);
    }
    function unset($dead) {
        $coders = ['Magali', 'Claudia', 'Diego', 'Javi', 'Elena'];
        $dead = 'Diego';
        $killer = new Killer;
        unset($coders[array_search($dead, $coders)]);
    }
}
