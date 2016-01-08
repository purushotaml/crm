<?php
require_once __DIR__ . '/src/vendor/autoload.php';
require_once __DIR__ . '/src/PhpUnitDemo.php';
class PhpUnitDemoTest extends PHPUnit_Framework_TestCase
{	
	function testUnSignedNumber() {
		$w = new PhpUnitDemo();
		$input = array("3","4");
		$this->assertEquals(7, $w->add($input));
	}
	function testSignedNumber() {
		$w = new PhpUnitDemo();
		$input = array("-3","4");
		$this->assertEquals(1, $w->add($input));
	}

}