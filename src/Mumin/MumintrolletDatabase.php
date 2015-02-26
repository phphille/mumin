<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletDatabase extends \Mos\Database\CDatabaseBasic
{
    /**
     * Constructor needed to call parent constructor.
     *
     * @return void
     *
     */
    public function __construct()
    {
        parent::__construct();
    }



    /**
    * My name is.
    *
    * @return string
    *
    */
    public function getName()
    {
        return "My Name is Mumintrollet.";
    }



    /**
    * My name is - from database.
    *
    * @return string
    *
    */
    public function getNameFromDatabase()
    {
        $this->select("name")
           ->from("test")
           ->where("id = ?")
        ;

        $res = $this->executeFetchAll([1]);
        $name = isset($res[0]->name) ? $res[0]->name : false;
        return $name;
    }
}
