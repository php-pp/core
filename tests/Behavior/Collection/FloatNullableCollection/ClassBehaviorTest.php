<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Behavior\Collection\FloatNullableCollection;

use PhpBehavior\{
    BehaviorTestCase\AbstractClassBehaviorTestCase,
    BehaviorTestCase\ClassImplementTrait
};
use PhpPp\Collection\Contract\{
    Collection\CollectionInterface,
    Collection\FloatNullableCollectionInterface,
    Collection\NullableInterface,
    Collection\ToArrayInterface
};
use PhpPp\Collection\Component\Collection\FloatNullableCollection;

/** @coversNothing */
final class ClassBehaviorTest extends AbstractClassBehaviorTestCase
{
    use ClassImplementTrait;

    protected static function getClassName(): string
    {
        return FloatNullableCollection::class;
    }

    protected static function getExpectedInterfaces(): array
    {
        return [
            \Traversable::class,
            \Iterator::class,
            \Countable::class,
            CollectionInterface::class,
            NullableInterface::class,
            ToArrayInterface::class,
            FloatNullableCollectionInterface::class
        ];
    }
}
