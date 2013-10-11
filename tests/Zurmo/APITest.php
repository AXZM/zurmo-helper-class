<?php namespace Zurmo;

use \Mockery as m;

class APITest extends \PHPUnit_Framework_TestCase
{
	public function testLogin()
	{
	    $api = new \Zurmo\REST('https://youraddress.com', 'username', 'password');
	}
}