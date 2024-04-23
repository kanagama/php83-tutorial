<?php

namespace Test\JsonValidate;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class ExampleClassTest extends TestCase
{
    /**
     * @param  bool  $result
     * @param  string  $json
     */
    #[Test]
    #[DataProvider('validateProvider')]
    public function jsonValidateの動作を確認する(bool $result, string $json)
    {
        $this->assertSame($result, json_validate($json));
    }

    /**
     * @return array
     */
    public static function validateProvider(): array
    {
        return [
            '正しいJSON' => [
                'result' => true,
                'json' => '{"key": "value"}',
            ],
            '正しくないJSON' => [
                'result' => false,
                'json' => '{"key": "value"}}',
            ],
        ];
    }
}