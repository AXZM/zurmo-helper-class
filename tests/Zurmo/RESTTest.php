<?php

use \Mockery as m;

class RESTTest extends \PHPUnit_Framework_TestCase
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