# A Project Name Generator
Generate a quirky code names to help developer quickly start on projects. Can be used for project names, unique ids, passwords,..

Inspired by https://github.com/aceakash/project-name-generator

# Install
```
composer install
composer dump-autoload --optimize
```

# Getting Started
```php
require_once "vendor/autoload.php");

use MinhD\Generator as Generator;

echo Generator::dashed(); // happy-ocean

echo Generator::raw(); // ["happy", "ocean"]

echo Generator::generate("_", 4, 2); // happy_adjoining_longing_plot_19

```

# Test
```
phpunit
```