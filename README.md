## the ArchPHP/Doraemon project
 - Apparently, Doraemon is the robotic cat, who has lots of magic tools.
 - The PHP community needs such a cat desperately.
 - We hope our peer PHP developers would enjoy the tools this cat provides.

## Getting Started
> composer require archphp/doraemon

## Usage
```php
use ArchPHP\Doraemon\Basics\ArrayHelper;

$myArr = [ 
    NULL,
    false,
    0,
    "hello" => "",
    "world" => "world", 
    "", 
    []
];

echo ArrayHelper::compact($myArr); // ["world" => "world"]
```