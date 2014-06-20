<?php

namespace ByteUnits;

class ParseTest extends \PHPUnit_Framework_TestCase
{
    public function testParseInMetricSystem()
    {
        $this->assertEquals(Metric::bytes(1000), parse('1.00kB'));
        $this->assertEquals(Metric::bytes(1250000), parse('1.25MB'));
    }

    public function testParseInBinarySystem()
    {
        $this->assertEquals(Binary::bytes(1024), parse('1.00KiB'));
        $this->assertEquals(Binary::bytes(1310720), parse('1.25MiB'));
    }

    public function testParseWithoutUnit()
    {
        $this->assertEquals(Metric::bytes(1000), parse('1000'));
    }
}
