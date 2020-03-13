<?php
use PHPUnit\Framework\TestCase;
use App\Killer;

final class KillerTest extends TestCase
{
    public function testVictimKilled()
    {
        $victim = 'Marc';
        $killer = new Killer;
        $dead = $killer -> getName ($victim);
        $this->assertSame ($victim, $dead);
        echo $dead;
    }
    public function testDeadAddedToCemetery()
    {
        $dead = 'Pepe';
        $codersCemetery = [];
        array_push($codersCemetery, $dead);
        $this->assertTrue (in_array($dead, $codersCemetery));
        print_r($codersCemetery);
    }
    public function testDeadRemovedFromList()
    {
        $coders = ['Magali', 'Claudia', 'Diego', 'Javi', 'Elena'];
        $killer = new Killer;
        $victim = 'Diego';
        $key = array_search('Elena', $coders);
        $dead = $killer->unset($coders[$key]);
        $this->assertFalse (in_array($dead, $coders));
        print_r($coders);

    }
}
