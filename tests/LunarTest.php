<?php
namespace Xkcms\String\Test;
use PHPUnit\Framework\TestCase;
use Xkcms\String\Lunar;

class LunarTest extends TestCase
{
    function testLunar()
    {
        $lunar = new Lunar();
        $month = $lunar->convertSolarToLunar('2019', '10', '16');//将阳历转换为阴历
        $this->assertEquals($month[6], '猪');
    }
}