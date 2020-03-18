<?php


use PHPUnit\Framework\TestCase;
use App\Killer;

final class KillerTest extends TestCase{

    function testDeadIsInCoders(){


        $coders = ['Magali','Javi','Diego','Claudia','Elena'];
        $dead = 'Javi';
        $killer = new Killer;
        $dead = $killer->unset($dead,$coders);
        $this->assertFalse(in_array($dead,$coders));

    }

    function testDeadIsInCementery(){

        $coders = ['Magali','Javi','Diego','Claudia','Elena'];
        $dead = 'Javi';
        $crypt = array ();
        $killer = new Killer;
        $name = $killer->unset($dead,$coders);
        $this->assertFalse(in_array($name,$crypt));

    }

    public function testMessageIfDeadIsNotInList()
    {
        $coders = array('Javi','Laura','Diego');
        $dead = 'Pepe';
        $killer = new Killer;
        $dead = $killer->unset($dead,$coders);
        $this->assertSame("Coder not found",$dead);
    }

}

