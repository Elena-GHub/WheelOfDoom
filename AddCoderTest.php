<?php

use PHPUnit\Framework\TestCase;
use App\AddCoder;
use App\CoderList;

final class AddCoderTest extends TestCase
{
    public function testAddCoderToList()
    {
        include('src\CoderList.php');
        $addCoder = new AddCoder;
        $new = $addCoder->addName($coders);
        $this->assertFalse(in_array($new, $coders));
        echo $new;


    }
}
