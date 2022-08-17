<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
    protected $functions;

    protected function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($expected, ...$arg)
    {
        $this->assertEquals($expected, $this->functions->countArguments(...$arg));
    }

    public function positiveDataProvider(): array
    {
        return [
            [[
                'argument_count' => 1,
                'argument_values' => [0 => 'hello']
            ], 'hello'
            ],
            [[
                'argument_count' => 3,
                'argument_values' => [0 => 'hello', 1 => 'world', 2=> 'everybody']
            ], 'hello','world','everybody'
            ],
            [[
                'argument_count' => 0,
                'argument_values' => []
            ]
            ],
        ];
    }

}