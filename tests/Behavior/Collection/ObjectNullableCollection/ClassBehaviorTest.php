<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Behavior\Collection\ObjectNullableCollection;

use PhpBehavior\{
    BehaviorTestCase\AbstractClassBehaviorTestCase,
    BehaviorTestCase\ClassImplementTrait
};
use PhpPp\Collection\Contract\{
    Collection\CollectionInterface,
    Collection\CommonObjectCollectionInterface,
    Collection\ObjectNullableCollectionInterface,
    Collection\NullableInterface,
    Collection\ToArrayInterface
};
use PhpPp\Collection\Component\Collection\ObjectNullableCollection;

/** @coversNothing */
final class ClassBehaviorTest extends AbstractClassBehaviorTestCase
{
    use ClassImplementTrait;

    protected static function getClassName(): string
    {
        return ObjectNullableCollection::class;
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
            CommonObjectCollectionInterface::class,
            ObjectNullableCollectionInterface::class
        ];
    }
}
