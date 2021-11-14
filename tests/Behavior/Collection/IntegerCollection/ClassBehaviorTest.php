<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Behavior\Collection\IntegerCollection;

use PhpBehavior\{
    BehaviorTestCase\AbstractClassBehaviorTestCase,
    BehaviorTestCase\ClassImplementTrait
};
use PhpPp\Collection\Contract\{
    Collection\CollectionInterface,
    Collection\IntegerCollectionInterface,
    Collection\ToArrayInterface
};
use PhpPp\Collection\Component\Collection\IntegerCollection;

/** @coversNothing */
final class ClassBehaviorTest extends AbstractClassBehaviorTestCase
{
    use ClassImplementTrait;

    protected static function getClassName(): string
    {
        return IntegerCollection::class;
    }

    protected static function getExpectedInterfaces(): array
    {
        return [
            \Traversable::class,
            \Iterator::class,
            \Countable::class,
            CollectionInterface::class,
            ToArrayInterface::class,
            IntegerCollectionInterface::class
        ];
    }
}
