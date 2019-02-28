# Laravel Nova Time Field

This package adds a basic HTML5 time field to Laravel Nova with the ability to include seconds.


## Installation
Use composer to install the package.

```shell
composer require warksit/Time
```


## Usage
To include seconds call `includeSeconds()` when you add the field.


```php
namespace App\Nova;

use Warksit\Time\Time;

class BlogPost extends Resource
{
    // ...

    public function fields(Request $request)
    {
        return [
            // ...

            Time::make('Post start Time')->includeSeconds(),
            // ...
        ];
    }
}
```

If you would like finer grained control you can call `step($value)` with the required value.