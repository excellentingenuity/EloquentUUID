# EloquentUUID
[![Build Status](https://travis-ci.org/excellentingenuity/EloquentUUID.svg?branch=master)](https://travis-ci.org/excellentingenuity/EloquentUUID)
[![Latest Stable Version](https://poser.pugx.org/eig/eloquent-uuid/v/stable)](https://packagist.org/packages/eig/eloquent-uuid)
[![Coverage Status](https://coveralls.io/repos/github/excellentingenuity/EloquentUUID/badge.svg?branch=master)](https://coveralls.io/github/excellentingenuity/EloquentUUID?branch=master)
[![License](https://poser.pugx.org/eig/eloquent-uuid/license)](https://packagist.org/packages/eig/eloquent-uuid)
[![StyleCI](https://styleci.io/repos/52610557/shield)](https://styleci.io/repos/52610557)
[![Total Downloads](https://poser.pugx.org/eig/eloquent-uuid/downloads)](https://packagist.org/packages/eig/eloquent-uuid) 
[![Latest Unstable Version](https://poser.pugx.org/eig/eloquent-uuid/v/unstable)](https://packagist.org/packages/eig/eloquent-uuid) 


A Package for easily adding UUID's to Eloquent Models supporting Laravel 5.1, 5.2, and 5.3

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
- 5.6+
- 7.0
- hhvm

