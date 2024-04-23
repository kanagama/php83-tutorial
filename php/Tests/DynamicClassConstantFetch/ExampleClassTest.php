<?php

namespace Tests\DynamicClassConstantFetch;

use App\DynamicClassConstantFetch\ExampleClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ExampleClassTest extends TestCase
{
    #[Test]
    public function dynamicClassConstantFetchが正常に動作する()
    {
        $this->assertSame('Class PHP8.3', ExampleClass::dynamicClassConstantFetch());
    }
}