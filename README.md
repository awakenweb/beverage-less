beverage-less
=============

Less compiler module for Beverage task runner

Prerequisites
-------------

* PHP 5.4+
* [Composer](https://getcomposer.org/)

Install
-------

Add this to your composer.json file:
```json
{
    "require": {
        "awakenweb/beverage-less": "dev-master"
    }
}
```

Configuration
-------------

In your `drinkmenu.php` file, add the following task:

```php
<?php

use Awakenweb\Beverage\Beverage;
use Awakenweb\BeverageLess\Less;

function defaultTask()
{
    less();
}

function less()
{
    Beverage::files('main.less', ['less'])
            ->then(new Less('less', Less::LESSJS))
            ->destination('build/css');
}

```

Options
-------


The `Less` class accepts 2 parameters :

* `importPath` : tells the Less compiler where to search for when it encounters an import directive.

* `formatter` : choose from the 3 available formatters : `Less::LESSJS`, `Less::COMPRESSED`, or `Less::NORMAL`.


Contributing
------------

__Bugs__

* If you found a bug and feel confident enough to correct it, please send a pull request with your bugfix and a unit test to identify the bug.

* If you can't correct the bug by yourself, please fill an issue on this Github repository.

__Security vulnerabilities__

* If you think you found a security vulnerability in this package, please contact Mathieu SAVELLI by email before doing anything else.

__New Features__

* __Before__ sending a Pull Request for a new feature you want to add directly to the Beverage codebase, please contact Mathieu SAVELLI by email. If the feature is found to be a good fit for Beverage, you are free to make a pull request.

* __If you like this package, the best thing you can do is to provide new awesome modules for Beverage and notify me. I'll add them to this readme.__

Contributors
------------

* Main developer: __Mathieu SAVELLI__ (_mathieu.savelli@awakenweb.fr_)


License
-------

Beverage and its official modules are released under the [MIT License](http://opensource.org/licenses/MIT)
