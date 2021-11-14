<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\Behavior\ValueAlreadyExistsModeTrait;

use PhpPp\Collection\Component\Tests\Unit\TestCollection;
use PhpPp\Collection\Contract\Collection\CollectionInterface;
use PHPUnit\Framework\TestCase;

/** @coversNothing */
final class SetValueAlreadyExistsModeTest extends TestCase
{
    public function testAdd(): void
    {
        $collection = (new TestCollection())
            ->setValueAlreadyExistsMode(TestCollection::VALUE_ALREADY_EXISTS_ADD);

        static::assertSame(
            CollectionInterface::VALUE_ALREADY_EXISTS_ADD,
            $collection->getValueAlreadyExistsMode()
        );
    }

    public function testDoNotAdd(): void
    {
        $collection = (new TestCollection())
            ->setValueAlreadyExistsMode(TestCollection::VALUE_ALREADY_EXISTS_DO_NOT_ADD);

        static::assertSame(
            CollectionInterface::VALUE_ALREADY_EXISTS_DO_NOT_ADD,
            $collection->getValueAlreadyExistsMode()
        );
    }

    public function testException(): void
    {
        $collection = (new TestCollection())
            ->setValueAlreadyExistsMode(TestCollection::VALUE_ALREADY_EXISTS_EXCEPTION);

        static::assertSame(
            CollectionInterface::VALUE_ALREADY_EXISTS_EXCEPTION,
            $collection->getValueAlreadyExistsMode()
        );
    }
}
