<?php

namespace eig\EloquentUUID\Tests;

use PHPUnit\Framework\TestCase;
use eig\EloquentUUID\UUIDModel;
use Apostle\PHPUnit\Constraint\String\IsUuid;

/**
 * Class EloquentUUIDTest
 * @package eig\EloquentUUID\Tests
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
class EloquentUUIDTest extends TestCase
{
    /**
     * testHasUUID
     */
    public function testHasUUID()
    {
        $model = new UUIDModel();
        $this->assertUuid($model->id);
    }

    /**
     * functions added because of a lack of support for PHP 7
     * by the phpunit-validation package that checks the UUID
     * if support is added in the package these functions will not
     * be necessary.
     */
    public function assertUuid($value, $strict = false, array $versions = array(1, 2, 3, 4, 5), $message = '')
    {
        self::assertThat($value, self::isUuid($strict, $versions), $message);
    }

    public static function isUuid($strict = false, array $versions = array(1, 2, 3, 4, 5))
    {
        return new IsUuid($strict, $versions);
    }
}
