<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Exception\InvalidSortOrderException;

use PhpPp\Collection\Component\Exception\InvalidSortOrderException;
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Exception\InvalidSortOrderException::__construct */
final class ConstructTest extends TestCase
{
    public function testValue(): void
    {
        static::assertSame('Invalid sort order "42".', (new InvalidSortOrderException(42))->getMessage());
    }

    public function testCode(): void
    {
        static::assertSame(42, (new InvalidSortOrderException(0, 42))->getCode());
    }

    public function testPrevious(): void
    {
        $previous = new \Exception();
        static::assertSame($previous, (new InvalidSortOrderException(0, 0, $previous))->getPrevious());
    }
}
