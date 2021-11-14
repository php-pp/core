<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\Behavior\ReadOnlyTrait;

use PhpPp\Collection\Component\{
    Exception\ReadOnlyException,
    Tests\Unit\TestCollection
};
use PHPUnit\Framework\TestCase;

/** @coversNothing */
final class MergeTest extends TestCase
{
    public function testNotReadOnly(): void
    {
        $collection1 = new TestCollection([1, 2]);
        $collection2 = new TestCollection([1, 2]);
        $collection1->merge($collection2);

        static::addToAssertionCount(1);
    }

    public function testReadOnly(): void
    {
        $collection1 = (new TestCollection([1, 2]))->setReadOnly();
        $collection2 = (new TestCollection([1, 2]));

        $this->expectException(ReadOnlyException::class);
        $this->expectExceptionMessage('This collection is read only, you cannot edit it\'s values.');
        $this->expectExceptionCode(0);
        $collection1->merge($collection2);
    }
}
