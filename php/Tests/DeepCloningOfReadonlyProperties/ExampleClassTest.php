<?php

namespace Tests\DeepCloningOfReadonlyProperties;

use App\DeepCloningOfReadonlyProperties\ExampleClass;
use App\DeepCloningOfReadonlyProperties\Php;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ExampleClassTest extends TestCase
{
    #[Test]
    public function cloneしたオブジェクトのプロパティが上書きできる()
    {
        $example = new ExampleClass(new Php());

        $cloned = clone $example;
        $cloned->php->version = '8.3';

        $this->assertSame('8.2', $example->php->version);
        $this->assertSame('8.3', $cloned->php->version);
    }
}