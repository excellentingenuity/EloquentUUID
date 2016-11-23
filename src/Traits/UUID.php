<?php

namespace eig\EloquentUUID\Traits;

use eig\UUID\Facades\UUID as UUIDGenerator;

trait UUID
{
    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = array())
    {
        $this->{$this->getKeyName()} = (string)$this->generateUUID();
        parent::__construct($attributes);
    }

    /**
     * generateUUID
     * @return \Ramsey\Uuid\UuidInterface
     */
    protected function generateUUID()
    {
        return UUIDGenerator::generate();
    }
}
