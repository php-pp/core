<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\AbstractScalarCollection;

use PhpPp\Collection\Component\{
    Exception\InvalidValueTypeException,
    Tests\Unit\TestNullableScalarCollection,
    Tests\Unit\TestScalarCollection
};
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Collection\AbstractScalarCollection::assertValueType */
final class AssertValueTypeArrayTest extends TestCase
{
    public function testArray(): void
    {
        $collection = new TestScalarCollection();

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Value should be of type string, integer, float.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType([]);
    }

    public function testNullableArray(): void
    {
        $collection = new TestNullableScalarCollection();

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Value should be of type string, integer, float, null.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType([]);
    }
}
