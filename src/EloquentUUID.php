<?php

namespace eig\EloquentUUID;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Generator\RandomLibAdapter;
use Ramsey\Uuid\Uuid as RUUID;
use Ramsey\Uuid\UuidFactory;

/**
 * Class EloquentUUID.
 *
 * @license MIT
 * @author James Johnson
 * @author Excellent InGenuity LLC
 */
abstract class EloquentUUID extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     *
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        $this->{$this->getKeyName()} = (string) $this->generateUUID();
        parent::__construct($attributes);
    }

    /**
     * generateUUID.
     *
     * @return \Ramsey\Uuid\UuidInterface
     */
    protected function generateUUID()
    {
        $uuidFactory = new UuidFactory();
        $uuidFactory->setRandomGenerator(new RandomLibAdapter());
        RUUID::setFactory($uuidFactory);

        $uuid = RUUID::uuid4();

        return $uuid;
    }
}
