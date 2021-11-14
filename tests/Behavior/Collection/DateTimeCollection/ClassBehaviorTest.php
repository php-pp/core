<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Behavior\Collection\DateTimeCollection;

use PhpBehavior\{
    BehaviorTestCase\AbstractClassBehaviorTestCase,
    BehaviorTestCase\ClassImplementTrait
};
use PhpPp\Core\Component\Collection\DateTimeCollection;
use PhpPp\Core\Contract\{
    Collection\CollectionInterface,
    Collection\CommonObjectCollectionInterface,
    Collection\DateTimeCollectionInterface,
    Collection\ToArrayInterface
};

/** @coversNothing */
final class ClassBehaviorTest extends AbstractClassBehaviorTestCase
{
    use ClassImplementTrait;

    protected static function getClassName(): string
    {
        return DateTimeCollection::class;
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
            DateTimeCollectionInterface::class
        ];
    }
}
