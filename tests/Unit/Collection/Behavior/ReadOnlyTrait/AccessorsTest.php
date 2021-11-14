<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\Behavior\ReadOnlyTrait;

use PhpPp\Collection\Component\Tests\Unit\TestCollection;
use PHPUnit\Framework\TestCase;

/** @coversNothing */
final class AccessorsTest extends TestCase
{
    public function testSetTrue(): void
    {
        $collection = (new TestCollection())->setReadOnly(true);

        static::assertTrue($collection->isReadOnly());
    }

    public function testSetFalse(): void
    {
        $collection = (new TestCollection())->setReadOnly(false);

        static::assertFalse($collection->isReadOnly());
    }
}
