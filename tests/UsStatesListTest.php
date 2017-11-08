<?php declare(strict_types=1);

namespace Cdtweb;

use PHPUnit\Framework\TestCase;

class UsStatesListTest extends TestCase
{
    /**
     * @covers UsStatesList::all(), UsStatesList::abbreviations(), UsStatesList::names()
     */
    public function testUsStatesList()
    {
        $states = UsStatesList::all();
        $abbreviations = UsStatesList::abbreviations();
        $names = UsStatesList::names();
        $this->assertTrue(is_array($states) && is_array($abbreviations) && is_array($names));
        $this->assertEquals($states, array_combine($abbreviations, $names));
    }
}
