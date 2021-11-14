<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\Behavior\ValueAlreadyExistsModeTrait;

use PhpPp\Collection\Component\{
    Collection\ScalarCollection,
    Exception\ValueAlreadyExistsException,
    Tests\Unit\AssertKeysOrderTrait,
    Tests\Unit\TestCollection
};
use PHPUnit\Framework\TestCase;

/** @coversNothing */
final class ReplaceTest extends TestCase
{
    use AssertKeysOrderTrait;

    public function testAdd(): void
    {
        $collection = (new TestCollection())
            ->setValueAlreadyExistsMode(TestCollection::VALUE_ALREADY_EXISTS_ADD)
            ->replace([10, 11, 11, 13]);

        static::assertCount(4, $collection);
        static::assertKeysOrder($collection, new ScalarCollection([0, 1, 2, 3]));
        static::assertSame(10, $collection->get(0));
        static::assertSame(11, $collection->get(1));
        static::assertSame(11, $collection->get(2));
        static::assertSame(13, $collection->get(3));

        static::assertSame(0, $collection->key());
        static::assertSame(10, $collection->get(0));
    }

    public function testDoNotAdd(): void
    {
        $collection = (new TestCollection())
            ->setValueAlreadyExistsMode(TestCollection::VALUE_ALREADY_EXISTS_DO_NOT_ADD)
            ->replace([10, 11, 11, 13]);

        static::assertCount(3, $collection);
        static::assertKeysOrder($collection, new ScalarCollection([0, 1, 3]));
        static::assertSame(10, $collection->get(0));
        static::assertSame(11, $collection->get(1));
        // @see https://github.com/php-pp/collection/issues/8
        static::assertSame(13, $collection->get(3));

        static::assertSame(0, $collection->key());
        static::assertSame(10, $collection->get(0));
    }

    public function testException(): void
    {
        $collection = (new TestCollection())
            ->setValueAlreadyExistsMode(TestCollection::VALUE_ALREADY_EXISTS_EXCEPTION);

        $this->expectException(ValueAlreadyExistsException::class);
        $this->expectExceptionMessage('Value "11" already exists.');
        $this->expectExceptionCode(0);
        $collection->replace([10, 11, 11, 13]);
    }
}
