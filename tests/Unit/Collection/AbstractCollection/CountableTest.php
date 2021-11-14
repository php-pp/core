<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\AbstractCollection;

use PhpPp\Collection\Component\{
    Collection\ScalarCollection,
    Tests\Unit\AssertKeysOrderTrait,
    Tests\Unit\TestCollection,
    Tests\Unit\TestNullableCollection
};
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Collection\AbstractCollection::count */
final class CountableTest extends TestCase
{
    use AssertKeysOrderTrait;

    public function testEmpty(): void
    {
        static::assertCount(0, new TestCollection());
    }

    public function testCount(): void
    {
        $collection = new TestNullableCollection([1, '2', null]);

        static::assertCount(3, $collection);
    }
}
