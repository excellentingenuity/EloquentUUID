<?php

namespace eig\EloquentUUID\Tests;

use Apostle\PHPUnit\TestCase;
use eig\EloquentUUID\UUIDModel;

/**
 * Class EloquentUUIDTest.
 *
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class EloquentUUIDTest extends TestCase
{
    /**
     * testHasUUID.
     */
    public function testHasUUID()
    {
        $model = new UUIDModel();
        $this->assertUuid($model->id);
    }
}
