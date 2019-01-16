<?php

namespace Loong\Doraemon;

use Loong\Doraemon\Basics\ArrayHelper;
use PHPUnit\Framework\TestCase;

class BasicsTests extends TestCase
{
    public function testChunk()
    {
        $arr1 = ['a', 'b' => 'b', 'c', 'd'];
        $arr2 = ['a', 'b', 'c', 'd'=>'d'];
        $result1 = ArrayHelper::chunk($arr1, 2);
        $result2 = ArrayHelper::chunk($arr2,3,true);
        $r1 =$result1 === [['a','b'],['c','d']];
        $r2 = $result2 === [['a','b','c'],['d'=>'d']];
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