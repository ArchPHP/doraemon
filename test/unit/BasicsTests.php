<?php

namespace ArchPHP\Doraemon;

use ArchPHP\Doraemon\Basics\ArrayHelper;
use PHPUnit\Framework\TestCase;

class BasicsTests extends TestCase
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