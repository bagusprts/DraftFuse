<?php
/**
 * Tests for DraftFuse
 */

use PHPUnit\Framework\TestCase;
use Draftfuse\Draftfuse;

class DraftfuseTest extends TestCase {
    private Draftfuse $instance;

    protected function setUp(): void {
        $this->instance = new Draftfuse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftfuse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
