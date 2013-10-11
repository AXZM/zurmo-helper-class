<?php

use \Mockery as m;
use Zurmo\API;

class APITest extends \PHPUnit_Framework_TestCase
{
   function testLogin() {
   		// mock API class
   		$api = $this->getMockBuilder('\Zurmo\API')
   			->setConstructorArgs(array('http://www.google.com', 'ross@axzm.com', 'password'))
   			->getMock();
   }
}
