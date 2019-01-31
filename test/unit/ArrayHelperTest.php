<?php
/**
 * the ArchPHP Doraemon project
 *
 * @author      Yumin Gui <guiyumin@gmail.com>
 * @copyright   (c) Yumin Gui
 * @link        https://github.com/archphp/doraemon
 * @license     MIT
 */

namespace ArchPHP\Doraemon\test\unit;

use ArchPHP\Doraemon\Basics\ArrayHelper;
use PHPUnit\Framework\TestCase;

class ArrayHelperTest extends TestCase
{
    public function testChunk()
    {
        $arr1 = ['a', 'b' => 'b', 'c', 'd'];
        $r1 = ArrayHelper::chunk($arr1, 2) === [['a','b'],['c','d']];
        
        $arr2 = ['a', 'b', 'c', 'd'=>'d'];
        $r2 = ArrayHelper::chunk($arr2,3,true) === [['a','b','c'],['d'=>'d']];
    
        $r = $r1 && $r2;
        $this->assertTrue($r);
    }
    public function testCompact()
    {
        $arr = [ NULL,false,0,"hello" => "", "world" => "world", "", []];
        $r = count(ArrayHelper::compact($arr)) === 1;
        $this->assertTrue($r);
    }

}