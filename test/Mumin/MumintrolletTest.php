<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     *
     * @return void
     *
     */
    public function testGetName()
    {
        $mumin = new \Mos\Mumin\Mumintrollet();

        $res = $mumin->getName();
        $exp = "My Name is Mumintrollet.";
        $this->assertEquals($res, $exp, "The name does not match.");
    }
}
