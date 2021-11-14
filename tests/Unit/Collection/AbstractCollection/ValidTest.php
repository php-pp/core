<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\AbstractCollection;

use PhpPp\Collection\Component\Tests\Unit\TestCollection;
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Collection\AbstractCollection::valid */
final class ValidTest extends TestCase
{
    public function testEmpty(): void
    {
        static::assertFalse((new TestCollection())->valid());
    }

    public function testValid(): void
    {
        static::assertTrue((new TestCollection([1]))->valid());
    }
}
