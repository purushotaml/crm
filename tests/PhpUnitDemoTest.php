<?php
require_once APPLICATION_PATH.'/vendor/autoload.php';
require_once APPLICATION_PATH.'/PhpUnitDemo.php';
class PhpUnitDemoTest extends PHPUnit_Framework_TestCase
{	
	/**
	 * @covers PhpUnitDemo::add
	 */
	
	function testUnSignedNumber() {
		$w = new PhpUnitDemo();
		$input = array("3","4");
		$this->assertEquals(7, $w->add($input));
	}
	
	/**
	 * @covers PhpUnitDemo::add
	 */
	function testSignedNumber() {
		$w = new PhpUnitDemo();
		$input = array("-3","4");
		$this->assertEquals(1, $w->add($input));
	}

}