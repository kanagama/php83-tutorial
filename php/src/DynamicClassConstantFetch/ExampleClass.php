<?php

namespace App\DynamicClassConstantFetch;

/**
 * クラス定数の文字列指定
 */
final class ExampleClass
{
    /**
     * @static
     * @var string
     */
    public const string PHP = 'Class PHP8.3';

    /**
     * @return string
     */
    public static function dynamicClassConstantFetch(): string
    {
        return self::{$php = 'PHP'};
    }
}