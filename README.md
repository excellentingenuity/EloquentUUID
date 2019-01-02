# EloquentUUID
[![Build Status](https://travis-ci.org/excellentingenuity/EloquentUUID.svg?branch=master)](https://travis-ci.org/excellentingenuity/EloquentUUID)
[![Latest Stable Version](https://poser.pugx.org/eig/eloquent-uuid/v/stable)](https://packagist.org/packages/eig/eloquent-uuid)
[![Coverage Status](https://coveralls.io/repos/github/excellentingenuity/EloquentUUID/badge.svg?branch=master)](https://coveralls.io/github/excellentingenuity/EloquentUUID?branch=master)
[![License](https://poser.pugx.org/eig/eloquent-uuid/license)](https://packagist.org/packages/eig/eloquent-uuid)
[![StyleCI](https://styleci.io/repos/52610557/shield)](https://styleci.io/repos/52610557)
[![Total Downloads](https://poser.pugx.org/eig/eloquent-uuid/downloads)](https://packagist.org/packages/eig/eloquent-uuid) 
[![Latest Unstable Version](https://poser.pugx.org/eig/eloquent-uuid/v/unstable)](https://packagist.org/packages/eig/eloquent-uuid) 


A Package for easily adding UUID's to Eloquent Models supporting Laravel 5.5+

## Usage
To use UUID in an Eloquent Model install the package with:
```
composer require eig/eloquent-uuid
```

Then in your Model instead of extending `Model` extend `EloquentUUID` like so:

```
<?php

namespace App;

use eig\EloquentUUID\EloquentUUID;

class UUIDModel extends EloquentUUID
{

}
```

Then in your migrations make sure you set id to string or uuid like this:
```
public function up()
    {
        Schema::create('client_models', function (Blueprint $table) {
            $table->uuid('id');
            $table->softDeletes();
            $table->timestamps();
        });
    }
```

## User UUID Model
For Laravel 5.3+, the standard user model that comes with the framework extends `Authenticatble` for the new 
multi-auth system. To add in UUID's to the user model extend `eig\EloquentUUID\UUIDUser` which will add in the UUID
to the user while still extending Laravel's `Authenticatable` class. The migration schema changes for extending 
`EloquentUUID` are the same for extending from `UUIDUser`.

## UUID Trait
As of version 1.1.0, EloquentUUID now has a trait named `UUID` in the namespace `eig\EloquentUUID\Traits\UUID`,
 that you can use to compose a UUID class. The trait implements a UUID assignment in a `__constructor()` method. 
 The migration schema changes for extending `EloquentUUID` are the same for using the `UUID` trait.

## Supported PHP Versions
- 5.6+ Use the [1.x branch releases](https://github.com/excellentingenuity/EloquentUUID/releases/tag/1.1.1)
- 7.0 Use the [master branch releases of 2.x+](https://github.com/excellentingenuity/EloquentUUID/releases/tag/2.0.0)
- 7.1+ Use the [master branch releases of 2.1+](https://github.com/excellentingenuity/EloquentUUID/releases/tag/2.1.0)

