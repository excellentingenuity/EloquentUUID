<?php

namespace eig\EloquentUUID\Tests;

use eig\UUID\Traits\IsUUID;
use PHPUnit\Framework\TestCase;
use eig\EloquentUUID\Tests\Fixtures\UUIDModel;

/**
 * Class EloquentUUIDTest
 * @package eig\EloquentUUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class EloquentUUIDTest extends TestCase
{
    use IsUUID;

    /**
     * testHasUUID
     *
     * @test
     */
    public function testHasUUID()
    {
        $model = new UUIDModel();
        $this->assertIsUuid($model->id);
    }
}
