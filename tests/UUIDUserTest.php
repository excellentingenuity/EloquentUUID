<?php

namespace eig\EloquentUUID\Tests;

use eig\UUID\Traits\IsUUID;
use PHPUnit\Framework\TestCase;
use eig\EloquentUUID\Tests\Fixtures\UUIDUserModel;
/**
 * Class UUIDUserTest
 * @package eig\EloquentUUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class UUIDUserTest extends TestCase
{
    use IsUUID;

    /**
     * testHasUUID
     *
     * @test
     */
    public function testHasUUID()
    {
        $model = new UUIDUserModel();
        $this->assertIsUuid($model->id);
    }
}
