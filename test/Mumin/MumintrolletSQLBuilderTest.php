<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletSQLBuilderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     *
     * @return void
     *
     */
    public function testGetName()
    {
        $mumin = new \Mos\Mumin\MumintrolletSQLBuilder();

        $res = $mumin->getName();
        $exp = "My Name is Mumintrollet.";
        $this->assertEquals($res, $exp, "The name does not match.");
    }
}
