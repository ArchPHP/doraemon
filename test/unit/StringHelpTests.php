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
        $str1 = "foo##baa  你好abc";
        $r1 = StringHelper::camelCase($str1);
        $this->assertEquals('fooBaaAbc', $r1);
    }
}