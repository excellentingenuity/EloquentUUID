<?php

namespace eig\EloquentUUID;

use eig\EloquentUUID\Traits\UUID;
use Illuminate\Foundation\Auth\User as Authenticatable;

abstract class UUIDUser extends Authenticatable
{
    use UUID;
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

}