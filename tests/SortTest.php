<?php
declare(strict_types=1);
include "sortir.php";

use PHPUnit\Framework\TestCase;

final class SortTest extends TestCase
{
    public function testEquality()
    {
        $obj1 = $this->getObject(1);
        $obj2 = $this->getObject(2);
        $obj3 = $this->getObject(3);

        $array1 = [$obj1, $obj2, $obj3];
        $array2 = [$obj2, $obj1, $obj3];

        // Pass
        $this->assertEqualsCanonicalizing($array1, $array2);

        // Fail
        $this->assertEquals($array1, $array2);
    }

    private function getObject($value)
    {
        $result = new \stdClass();
        $result->property = $value;
        return $result;
    }
}
 

