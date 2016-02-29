# EloquentUUID
[![Build Status](https://travis-ci.org/excellentingenuity/EloquentUUID.svg?branch=master)](https://travis-ci.org/excellentingenuity/EloquentUUID)
[![Coverage Status](https://coveralls.io/repos/github/excellentingenuity/EloquentUUID/badge.svg?branch=master)](https://coveralls.io/github/excellentingenuity/EloquentUUID?branch=master)
[![StyleCI](https://styleci.io/repos/52610557/shield)](https://styleci.io/repos/52610557)

A Package for easily adding UUID's to Eloquent Models

## Usage
To use UUID in an Eloquent Model install the package with:
```
composer require eig/eloquent-uuid
```

Then in you Model instead of extending `Model` extend `EloquentUUID` like so:

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
        Schema::create('lient_models', function (Blueprint $table) {
            $table->uuid('id');
            $table->softDeletes();
            $table->timestamps();
        });
    }
```

## Supported PHP Versions
- 5.6
- hhvm

PHP 7 support planned for the future in conjunction with a dependency's support for PHP 7.
