<?php
/**
 * Tests for ContractWeave
 */

use PHPUnit\Framework\TestCase;
use Contractweave\Contractweave;

class ContractweaveTest extends TestCase {
    private Contractweave $instance;

    protected function setUp(): void {
        $this->instance = new Contractweave(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractweave::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
