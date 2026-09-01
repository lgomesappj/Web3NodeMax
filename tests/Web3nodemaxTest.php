<?php
/**
 * Tests for Web3NodeMax
 */

use PHPUnit\Framework\TestCase;
use Web3nodemax\Web3nodemax;

class Web3nodemaxTest extends TestCase {
    private Web3nodemax $instance;

    protected function setUp(): void {
        $this->instance = new Web3nodemax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3nodemax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
