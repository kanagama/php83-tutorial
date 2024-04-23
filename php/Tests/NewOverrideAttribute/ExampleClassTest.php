<?php

namespace Tests\NewOverrideAttribute;

use App\NewOverrideAttribute\ExampleClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ExampleClassTest extends TestCase
{
    // fatal error を補足できないので保留
    // #[Test]
    public function newでfatalErrorが発生する()
    {
        new ExampleClass();
    }
}