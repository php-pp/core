<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Exception\InvalidKeyTypeException;

use PhpPp\Collection\Component\{
    Collection\StringCollection,
    Exception\InvalidKeyTypeException
};
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Collection\Component\Exception\InvalidKeyTypeException::createFromAllowedTypes */
final class CreateFromAllowedTypesTest extends TestCase
{
    public function testEmptyTypes(): void
    {
        static::assertSame(
            'Key should be of type .',
            InvalidKeyTypeException::createFromAllowedTypes(new StringCollection())->getMessage()
        );
    }

    public function testOneType(): void
    {
        static::assertSame(
            'Key should be of type foo.',
            InvalidKeyTypeException::createFromAllowedTypes(new StringCollection(['foo']))->getMessage()
        );
    }

    public function testTreeType(): void
    {
        static::assertSame(
            'Key should be of type foo, bar, baz.',
            InvalidKeyTypeException::createFromAllowedTypes(new StringCollection(['foo', 'bar', 'baz']))->getMessage()
        );
    }
}
