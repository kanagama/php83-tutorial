<?php

namespace App\DeepCloningOfReadonlyProperties;

/**
 * 読み取り専用プロパティのディープクローン
 */
class ExampleClass
{
    /**
     * @param Php $php
     */
    public function __construct(
        public readonly Php $php,
    ) {
    }

    /**
     * @return void
     */
    public function __clone(): void
    {
        $this->php = clone $this->php;
    }
}
