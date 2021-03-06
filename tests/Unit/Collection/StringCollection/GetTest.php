<?php

declare(strict_types=1);

namespace PhpPp\Core\Component\Tests\Unit\Collection\StringCollection;

use PhpPp\Core\Component\Collection\StringCollection;
use PHPUnit\Framework\TestCase;

/** @covers \PhpPp\Core\Component\Collection\StringCollection::get */
final class GetTest extends TestCase
{
    /**
     * This test can't test anything as StringCollection::get() only call parent::doGet()
     * @see \PhpPp\Core\Component\Tests\Behavior\Collection\StringCollection\GetTest
     */
    public function testGet(): void
    {
        $collection = new StringCollection(['foo']);
        $collection->get(0);
        $this->addToAssertionCount(1);
    }
}
