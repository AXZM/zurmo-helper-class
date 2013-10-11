<?php namespace Zurmo;

use \Mockery as m;

class APITest extends \PHPUnit_Framework_TestCase
{
	public function testTrueIsTrue()
	{
	    $foo = true;
	    $this->assertTrue($foo);
	}

    public function tearDown()
    {
        m::close();
    }
}