<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\StringCollection;

use PhpPp\Core\Component\{
    Collection\ScalarCollection,
    Collection\StringCollection,
    Tests\Unit\Collection\AssertKeysOrderTrait
};
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Core\Component\Collection\StringCollection::add */
final class AddTest extends TestCase
{
    use AssertKeysOrderTrait;

    /**
     * This test can't test anything as StringCollection::add() only call parent::doAdd()
     * @see \PhpPp\Core\Component\Tests\Behavior\Collection\StringCollection\AddTest
     */
    public function testFillKeys(): void
    {
        $collection = new StringCollection();
        $collection->add('foo');
        $this->addToAssertionCount(1);
    }
}
