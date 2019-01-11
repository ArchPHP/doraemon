<?php

namespace ArchPHP\Doraemon;

use ArchPHP\Doraemon\Basics\ArrayHelper;
use PHPUnit\Framework\TestCase;

class BasicsTests extends TestCase
{
    public function testCompact()
    {
        $arr = [NULL,false,0];
        $r = count(ArrayHelper::compact($arr)) == 0;
        $this->assertTrue($r);
    }
}