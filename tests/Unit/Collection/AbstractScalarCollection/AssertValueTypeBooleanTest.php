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
final class AssertValueTypeBooleanTest extends TestCase
{
    public function testTrue(): void
    {
        $collection = new TestScalarCollection();

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Value should be of type string, integer, float.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType(true);
    }

    public function testNullableTrue(): void
    {
        $collection = new TestNullableScalarCollection();

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Value should be of type string, integer, float, null.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType(true);
    }

    public function testFalse(): void
    {
        $collection = new TestScalarCollection();

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Value should be of type string, integer, float.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType(false);
    }

    public function testNullableFalse(): void
    {
        $collection = new TestNullableScalarCollection();

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Value should be of type string, integer, float, null.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType(false);
    }
}
