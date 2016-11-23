<?php


namespace eig\EloquentUUID;

use eig\EloquentUUID\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EloquentUUID
 * @package App
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
abstract class EloquentUUID extends Model
{
    use UUID;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
