<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletSessionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     *
     * @return void
     *
     */
    public function testGetNameFromSession()
    {
        $mumin = new \Mos\Mumin\MumintrolletSession();
        $di    = new \Anax\DI\CDIFactoryDefault();
        $mumin->setDI($di);

        $di->setShared('session', function () {
            $session = new \Anax\Session\CSession();
            $session->configure(ANAX_APP_PATH . 'config/session.php');
            $session->name();
            //$session->start();
            return $session;
        });

        $name = "Snusmumriken";
        $mumin->setNameInSession($name);

        $name2 = $mumin->getNameFromSession();
        $this->assertEquals($name, $name2, "The name does not match.");
    }
}
