<?php

namespace Ddd\Infrastructure\Application\Service;

/**
 * Class DummySessionTest
 * @package Ddd\Infrastructure\Application\Service
 */
class DummySessionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function methodIsExecuted()
    {
        $expectedValue = new \stdClass();

        $this->assertSame(
            $expectedValue,
            (new DummySession())->executeAtomically(
                function() use ($expectedValue) {
                    return $expectedValue;
                }
            )
        );
    }
}
