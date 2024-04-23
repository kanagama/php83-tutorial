<?php

namespace Test\NewRandomizerGetBytesFromStringMethod;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Random\Randomizer;

class ExampleClassTest extends TestCase
{
    #[Test]
    public function getBytesFromStringでランダム文字列を生成できる()
    {
        $result = (new Randomizer())->getBytesFromString('1', 16);
        $this->assertSame('1111111111111111', $result);
    }
}