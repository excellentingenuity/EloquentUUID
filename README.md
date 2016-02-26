# EloquentUUID
A Package for easily adding UUID to Eloquent Models

## Usage
To use UUID in an Eloquent Model install the package with:
```
composer require eig/eloquent-uuid
```

Then in you Model instead of extending `Model` extend `EloquentUUID` like so:

```
<?php

namespace App;

class UUIDModel extends EloquentUUID
{

}
```

## Supported PHP Versions
- 5.6
- hhvm

PHP 7 support planned for the future in conjunction with a dependency's support for PHP 7.
