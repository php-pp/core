<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Exception\ReadOnlyException;

use PhpPp\Collection\Component\Exception\ReadOnlyException;
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Exception\ReadOnlyException::__construct */
final class ConstructTest extends TestCase
{
    public function testMessage(): void
    {
        static::assertSame(
            'This collection is read only, you cannot edit it\'s values.',
            (new ReadOnlyException())->getMessage()
        );
    }

    public function testCode(): void
    {
        static::assertSame(42, (new ReadOnlyException(42))->getCode());
    }

    public function testPrevious(): void
    {
        $previous = new \Exception();
        static::assertSame($previous, (new ReadOnlyException(0, $previous))->getPrevious());
    }
}
