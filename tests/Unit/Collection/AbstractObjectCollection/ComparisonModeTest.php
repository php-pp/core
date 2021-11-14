<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\AbstractObjectCollection;

use PhpPp\Collection\Component\{
    Collection\AbstractObjectCollection,
    Tests\Unit\TestStdClassCollection
};
use PhpPp\Collection\Contract\Collection\CommonObjectCollectionInterface;
use PHPUnit\Framework\TestCase;

/**
 * @covers \PhpPp\Collection\Component\Collection\AbstractObjectCollection::doSetComparisonMode
 * @covers \PhpPp\Collection\Component\Collection\AbstractObjectCollection::getComparisonMode
 */
final class ComparisonModeTest extends TestCase
{
    public function testDefault(): void
    {
        $collection = new TestStdClassCollection();

        static::assertSame(CommonObjectCollectionInterface::COMPARISON_OBJECT_HASH, $collection->getComparisonMode());
    }

    public function testSetHash(): void
    {
        $collection = (new TestStdClassCollection())
            ->callDoSetComparisonMode(CommonObjectCollectionInterface::COMPARISON_OBJECT_HASH);

        static::assertSame(CommonObjectCollectionInterface::COMPARISON_OBJECT_HASH, $collection->getComparisonMode());
    }

    public function testSetString(): void
    {
        $collection = (new TestStdClassCollection())
            ->callDoSetComparisonMode(CommonObjectCollectionInterface::COMPARISON_STRING);

        static::assertSame(CommonObjectCollectionInterface::COMPARISON_STRING, $collection->getComparisonMode());
    }
}
