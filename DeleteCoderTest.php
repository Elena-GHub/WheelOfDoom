<?php

use PHPUnit\Framework\TestCase;
use App\DeleteCoder;
use App\CoderList;

final class DeleteCoderTest extends TestCase
{
    public function testDeleteCoderFromList()
    {
        $coders = array('Javi','Pepe','Diego');
        $deleteCoder = new DeleteCoder;
        $out = $deleteCoder->deleteName();
        $this->assertFalse(in_array($out,$coders));




    }



}
