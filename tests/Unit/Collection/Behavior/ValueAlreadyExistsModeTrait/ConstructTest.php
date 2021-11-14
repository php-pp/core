<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\Behavior\ValueAlreadyExistsModeTrait;

use PhpPp\Collection\Component\Tests\Unit\TestCollection;
use PhpPp\Collection\Contract\Collection\CollectionInterface;
use PHPUnit\Framework\TestCase;

/** @coversNothing */
final class ConstructTest extends TestCase
{
    public function testDefaultValue(): void
    {
        static::assertSame(
            CollectionInterface::VALUE_ALREADY_EXISTS_ADD,
            (new TestCollection())->getValueAlreadyExistsMode()
        );
    }
}
