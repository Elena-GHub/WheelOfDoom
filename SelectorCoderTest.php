<?php
use PHPUnit\Framework\TestCase;
use App\SelectorCoder;


final class SelectorCoderTest extends TestCase
{
    public function testSelectionCoderFromList()
    {include ('src\CodersList.php');
    $selectorCoder = new SelectorCoder;
    $selected = $selectorCoder-> getName ($coders);
    $this->assertTrue (in_array($selected, $coders));
    }
    public function testSelectionCoderFromOne()
    {include ('src\CodersList.php');
    $selectorCoder = new SelectorCoder;
    $selected = $selectorCoder-> getName ($coders);
    $this->assertTrue (in_array($selected, $coders));
    }
    public function testRandomSelectionCoderFromList()
    {include ('src\CodersList.php');
        $selectorCoder = new SelectorCoder;
        $selected = $selectorCoder-> getName ($coders);
        $selected2 = $selectorCoder-> getName ($coders);
        $this->assertNotSame ($selected, $selected2);
        echo "Tiene que salir... ¡$selected!";
    }
}
