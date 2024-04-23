<?php

namespace App\NewOverrideAttribute;

use Override;

/**
 * アトリビュート#[\Override]の追加
 */
final class ExampleClass extends ParentExampleClass
{
    /**
     * @return string
     */
    #[Override]
    public function test(): string
    {
        return 'test';
    }
}