<?php

namespace Tests\TypedClassConstants;

use App\TypedClassConstants\ExampleClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ExampleClassTest extends TestCase
{
    #[Test]
    public function phpConstantでinterfaceではなくclassの定数が取得できる()
    {
        $this->assertSame('Class PHP8.3', ExampleClass::PHP);
    }
}