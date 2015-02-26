<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletSession extends \Mos\Mumin\Mumintrollet implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;



    /**
     * Get name from session.
     *
     * @return string
     *
     */
    public function getNameFromSession()
    {
        if ($this->session->has('name')) {
            return $this->session->get('name');
        } else {
            return "No name is set in session.";
        }
    }



    /**
     * Set name in session.
     *
     * @return void
     *
     */
    public function setNameInSession($name)
    {
        $this->session->set('name', $name);
    }
}
