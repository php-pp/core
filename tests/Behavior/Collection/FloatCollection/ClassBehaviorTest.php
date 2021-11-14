<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Behavior\Collection\FloatCollection;

use PhpBehavior\{
    BehaviorTestCase\AbstractClassBehaviorTestCase,
    BehaviorTestCase\ClassImplementTrait
};
use PhpPp\Collection\Contract\{
    Collection\CollectionInterface,
    Collection\FloatCollectionInterface,
    Collection\ToArrayInterface
};
use PhpPp\Collection\Component\Collection\FloatCollection;

/** @coversNothing */
final class ClassBehaviorTest extends AbstractClassBehaviorTestCase
{
    use ClassImplementTrait;

    protected static function getClassName(): string
    {
        return FloatCollection::class;
    }

    protected static function getExpectedInterfaces(): array
    {
        return [
            \Traversable::class,
            \Iterator::class,
            \Countable::class,
            CollectionInterface::class,
            ToArrayInterface::class,
            FloatCollectionInterface::class
        ];
    }
}
