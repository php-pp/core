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
final class AssertValueTypeStringTest extends TestCase
{
    public function testString(): void
    {
        (new TestNullableScalarCollection())
            ->callAssertValueType('foo');

        $this->addToAssertionCount(1);
    }

    public function testNullableString(): void
    {
        (new TestNullableScalarCollection())
            ->callAssertValueType('foo');

        $this->addToAssertionCount(1);
    }

    public function testStringDiallowed(): void
    {
        $collection = (new TestScalarCollection())
            ->setAllowString(false);

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Type string is not allowed by configuration.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType('foo');
    }

    public function testNullableStringDiallowed(): void
    {
        $collection = (new TestNullableScalarCollection())
            ->setAllowString(false);

        $this->expectException(InvalidValueTypeException::class);
        $this->expectExceptionMessage('Type string is not allowed by configuration.');
        $this->expectExceptionCode(0);
        $collection->callAssertValueType('foo');
    }
}
