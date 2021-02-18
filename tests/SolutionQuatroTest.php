<?php

use Semenov\SemenovException;
use Semenov\SolutionQuatro;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SolutionQuatroTest extends TestCase

{

    /**
     * @dataProvider providerSolve
     */
    public function testSolve($a, $b, $c, $res) {
        $fTest = new SolutionQuatro();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[540 ,-675]),
            array (1, 6, -40,[ 95,-101]),
            array (0, 1, 1,[-1]),
        );
    }
    /**
     * @dataProvider providerSolveEx
     */
    public function testSolveEx($a, $b, $c, $res) {
        $this->expectException(SemenovException::class);
        $fTest = new SolutionQuatro();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolveEx (): array
    {
        return array (
            array (8, 7, 6, []),
            array (7, 6 , 8, [])
        );
    }
}