<?php
namespace App;


final class Killer{
    function getName($dead) {

        return $dead;
    }
    function unset($dead) {
        $coders = ['Magali', 'Claudia', 'Diego', 'Javi', 'Elena'];
        $dead = 'Diego';
        $killer = new Killer;
        unset($coders[array_search($dead, $coders)]);
    }
}
