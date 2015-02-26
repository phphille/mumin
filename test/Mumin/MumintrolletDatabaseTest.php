<?php

namespace Mos\Mumin;

/**
 * A testclass
 *
 */
class MumintrolletDatabaseTest extends \PHPUnit_Framework_TestCase
{

    static private $mumin;
    const NAME =  "Mumintrollet in db";



    /**
     * setUpBeforeClass, called once for all tests in this class.
     *
     * @return void
     *
     */
    public static function setUpBeforeClass()
    {
        self::$mumin = new \Mos\Mumin\MumintrolletDatabase();
        self::$mumin->setOptions(['dsn' => "sqlite:memory::", "verbose" => false]);
        self::$mumin->connect();

        self::$mumin->dropTableIfExists("test");
        self::$mumin->execute();

        self::$mumin->createTable(
            'test',
            [
                'id'    => ['integer', 'auto_increment', 'primary key', 'not null'],
                'name'  => ['varchar(20)'],
            ]
        );
        self::$mumin->execute();

        self::$mumin->insert(
            'test',
            ['name']
        );
        self::$mumin->execute([self::NAME]);

        /*
        self::$mumin->select("*")
            ->from("test")
        ;
        var_dump(self::$mumin->executeFetchAll());
        */
    }



    /**
     * SetUp, called before each testcase.
     *
     * @return void
     *
     */
    public function setUp()
    {
        // Nothing to do.
    }



    /**
    * Test
    *
    * @return void
    *
    */
    public function testGetName()
    {
        $res = self::$mumin->getName();
        $exp = "My Name is Mumintrollet.";
        $this->assertEquals($res, $exp, "The name does not match.");
    }



    /**
    * Test
    *
    * @return void
    *
    */
    public function testGetNameFromDatabase()
    {
        $res = self::$mumin->getNameFromDatabase();
        $exp = self::NAME;
        $this->assertEquals($res, $exp, "The name does not match name from db.");
    }
}
