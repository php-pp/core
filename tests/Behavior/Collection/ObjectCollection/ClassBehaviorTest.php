<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Behavior\Collection\ObjectCollection;

use PhpBehavior\{
    BehaviorTestCase\AbstractClassBehaviorTestCase,
    BehaviorTestCase\ClassImplementTrait
};
use PhpPp\Collection\Component\Collection\ObjectCollection;
use PhpPp\Collection\Contract\{
    Collection\CollectionInterface,
    Collection\CommonObjectCollectionInterface,
    Collection\ObjectCollectionInterface,
    Collection\ToArrayInterface
};

/** @coversNothing */
final class ClassBehaviorTest extends AbstractClassBehaviorTestCase
{
    use ClassImplementTrait;

    protected static function getClassName(): string
    {
        return ObjectCollection::class;
    }

    protected static function getExpectedInterfaces(): array
    {
        return [
            \Traversable::class,
            \Iterator::class,
            \Countable::class,
            CollectionInterface::class,
            ToArrayInterface::class,
            CommonObjectCollectionInterface::class,
            ObjectCollectionInterface::class
        ];
    }
}
