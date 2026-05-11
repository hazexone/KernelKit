<?php
/**
 * Tests for KernelKit
 */

use PHPUnit\Framework\TestCase;
use Kernelkit\Kernelkit;

class KernelkitTest extends TestCase {
    private Kernelkit $instance;

    protected function setUp(): void {
        $this->instance = new Kernelkit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Kernelkit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
