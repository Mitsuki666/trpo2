<?php

use Semenov\SolutionLine;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SolutionLineTest extends TestCase
{
    /**
     * @test
     * @dataProvider providerLin
     */

    public function linTest ($a , $b , $result) {
        $test = new SolutionLine();
        $this->assertEquals( $result, $test->lin($a , $b));
    }

    public function  providerLin() {
        return array (
            array(1,1,-1),
            array(10,-2,5),
        );
    }
    /**
     * @test
     * @dataProvider providerLinException
     */
    public function linTestException($a , $b , $result){
        $this->expectException(\Semenov\SemenovException::class);
        $test = new SolutionLine();
        $this->assertEquals( $result, $test->lin($a , $b));
    }
    public function  providerLinException() {
        return array (
            array(0,1,-1),
            array(0,0,-1)
        );
    }
}