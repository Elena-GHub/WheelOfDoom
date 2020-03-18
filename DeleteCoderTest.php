<?php

use PHPUnit\Framework\TestCase;
use App\DeleteCoder;
use App\CoderList;

final class DeleteCoderTest extends TestCase
{
    public function testDeleteCoderFromList()
    {
        $coders = array('Javi','Laura','Diego');
        $coder = 'Laura';
        $deleteCoder = new DeleteCoder;
        $out = $deleteCoder->deleteName($coder,$coders);
        $this->assertFalse(in_array($out,$coders));
    }

    public function testMessageIfCoderIsNotInList()
    {
        $coders = array('Javi','Laura','Diego');
        $coder = 'Pepe';
        $deleteCoder = new DeleteCoder;
        $out = $deleteCoder->deleteName($coder, $coders);
        $this->assertSame("Coder not found",$out);
    }



}
