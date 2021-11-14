<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\AbstractCollection;

use PhpPp\Collection\Component\{
    Collection\ScalarCollection,
    Exception\ReadOnlyException,
    Tests\Unit\AssertKeysOrderTrait,
    Tests\Unit\TestCollection,
    Tests\Unit\TestIterator,
    Tests\Unit\TestToArray
};
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Collection\AbstractCollection::doFillKeys */
final class DoFillKeysTest extends TestCase
{
    use AssertKeysOrderTrait;

    public function testEmpty(): void
    {
        $collection = (new TestCollection())
            ->callDoFillKeys(['foo', 10], 'bar');

        static::assertCount(2, $collection);
        static::assertKeysOrder($collection, new ScalarCollection(['foo', 10]));
        static::assertSame('bar', $collection->get('foo'));
        static::assertSame('bar', $collection->get(10));
    }

    public function testAlreadyFilled(): void
    {
        $collection = (new TestCollection(['foo', 1]))
            ->callDoFillKeys(['foo', 10], 'bar');

        static::assertCount(2, $collection);
        static::assertKeysOrder($collection, new ScalarCollection(['foo', 10]));
        static::assertSame('bar', $collection->get('foo'));
        static::assertSame('bar', $collection->get(10));
    }

    public function testKeysArray(): void
    {
        $collection = (new TestCollection())
            ->callDoFillKeys(['foo', 10], 'bar');

        static::assertCount(2, $collection);
        static::assertKeysOrder($collection, new ScalarCollection(['foo', 10]));
        static::assertSame('bar', $collection->get('foo'));
        static::assertSame('bar', $collection->get(10));
    }

    public function testKeysToArrayInterface(): void
    {
        $collection = (new TestCollection())
            ->callDoFillKeys(new TestToArray(['foo', 10]), 'bar');

        static::assertCount(2, $collection);
        static::assertKeysOrder($collection, new ScalarCollection(['foo', 10]));
        static::assertSame('bar', $collection->get('foo'));
        static::assertSame('bar', $collection->get(10));
    }

    public function testKeysIterator(): void
    {
        $collection = (new TestCollection())
            ->callDoFillKeys(new TestIterator(['foo', 10]), 'bar');

        static::assertCount(2, $collection);
        static::assertKeysOrder($collection, new ScalarCollection(['foo', 10]));
        static::assertSame('bar', $collection->get('foo'));
        static::assertSame('bar', $collection->get(10));
    }

    public function testReadOnly(): void
    {
        $collection = (new TestCollection())
            ->setReadOnly(true);

        $this->expectException(ReadOnlyException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('This collection is read only, you cannot edit it\'s values.');
        $collection->callDoFillKeys(['foo'], 1);
    }
}
