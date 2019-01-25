<?php
/**
 * the ArchPHP Doraemon project
 *
 * @author      Yumin Gui <guiyumin@gmail.com>
 * @copyright   (c) Yumin Gui
 * @link        https://github.com/archphp/doraemon
 * @license     MIT
 */

namespace ArchPHP\Doraemon;

use ArchPHP\Doraemon\Basics\StringHelper;
use PHPUnit\Framework\TestCase;

class StringHelperTests extends TestCase
{
    public function testCamelCase()
    {
        $str1 = "--foo##Bar  你好abc";
        $r1 = StringHelper::camelCase($str1);
        $this->assertEquals('fooBarAbc', $r1);
    }

    public function testPascalCase()
    {
        $str1 = "--foo##bAR  你好abc";
        $r1 = StringHelper::pascalCase($str1);
        $this->assertEquals('FooBarAbc', $r1);
    }

    public function testKebabCase()
    {
        $str1 = "--foo##Bar  你好abc";
        $r1 = StringHelper::kebabCase($str1);
        $this->assertEquals('foo-bar-abc', $r1);
    }

    public function testSnakeCase()
    {
        $str1 = "--foo##Bar  你好abc-";
        $r1 = StringHelper::snakeCase($str1);
        $this->assertEquals('foo_bar_abc', $r1);
    }

}