<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Exception\EmptyCollectionException;

use PhpPp\Collection\Component\Exception\EmptyCollectionException;
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Exception\EmptyCollectionException::__construct */
final class ConstructTest extends TestCase
{
    public function testValue(): void
    {
        static::assertSame('Collection is empty.', (new EmptyCollectionException())->getMessage());
    }

    public function testCode(): void
    {
        static::assertSame(42, (new EmptyCollectionException(42))->getCode());
    }

    public function testPrevious(): void
    {
        $previous = new \Exception();
        static::assertSame($previous, (new EmptyCollectionException(0, $previous))->getPrevious());
    }
}
