<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\Behavior\ReadOnlyTrait;

use PhpPp\Collection\Component\{
    Exception\ReadOnlyException,
    Tests\Unit\TestCollection
};
use PHPUnit\Framework\TestCase;

/** @coversNothing */
final class SetTest extends TestCase
{
    public function testNotReadOnly(): void
    {
        $collection = new TestCollection([1, 2]);
        $collection->callDoSet(0, 4);

        static::addToAssertionCount(1);
    }

    public function testReadOnly(): void
    {
        $collection = (new TestCollection([1, 2]))->setReadOnly();

        $this->expectException(ReadOnlyException::class);
        $this->expectExceptionMessage('This collection is read only, you cannot edit it\'s values.');
        $this->expectExceptionCode(0);
        $collection->callDoSet(0, 4);
    }
}
