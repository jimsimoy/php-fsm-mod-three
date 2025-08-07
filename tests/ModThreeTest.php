<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/FSM.php';
require_once __DIR__ . '/../src/modThree.php';

class ModThreeTest extends TestCase
{
    public function testExamples() {
        $this->assertEquals(1, modThree("1101"));   // 13 % 3 = 1
        $this->assertEquals(2, modThree("1110"));   // 14 % 3 = 2
        $this->assertEquals(0, modThree("1111"));   // 15 % 3 = 0
        $this->assertEquals(0, modThree("110"));    // 6 % 3  = 0
        $this->assertEquals(1, modThree("1010"));   // 10 % 3 = 1
        $this->assertEquals(0, modThree("0"));      // 0 % 3 = 0
        $this->assertEquals(1, modThree("1"));      // 1 % 3 = 1
        $this->assertEquals(2, modThree("10"));     // 2 % 3 = 2
    }

    public function testEmptyInput() {
        $this->expectException(InvalidArgumentException::class);
        modThree(""); //-- Empty Input
    }

    public function testInvalidInput() {
        $this->expectException(InvalidArgumentException::class);
        modThree("10a1"); //-- Invalid character 'a'
        modThree("1121"); //-- Invalid character '2'
    }
}
