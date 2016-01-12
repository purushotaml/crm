<?php
DEFINE("APPLICATION_HOME","E:\\xampp\\htdocs\\projects\crm\\");
require_once APPLICATION_HOME.'src/vendor/autoload.php';
require_once APPLICATION_HOME.'src/PhpUnitDemo.php';
echo APPLICATION_HOME."its here";echo "\n";
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