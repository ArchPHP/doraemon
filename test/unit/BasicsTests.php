<?php

namespace ArchPHP\Doraemon;

use ArchPHP\Doraemon\Basics\ArrayHelper;
use PHPUnit\Framework\TestCase;

class BasicsTests extends TestCase
{
    public function testCompact()
    {
        $arr = [ NULL,false,0,"hello" => "", "world" => "world", "", [], json_decode('{}')];
        $r = count(ArrayHelper::compact($arr)) === 1;
        $this->assertTrue($r);
    }

}