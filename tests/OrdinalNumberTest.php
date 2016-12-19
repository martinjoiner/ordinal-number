<?php

use PHPUnit\Framework\TestCase;

use MartinJoiner\OrdinalNumber\OrdinalNumber as OrdinalNumber;

class OrdinalNumberTest extends TestCase {

	public function test2(){
		$this->assertEquals(OrdinalNumber::convert(2), "second");
	}

	public function test78(){
		$this->assertEquals(OrdinalNumber::convert(78), "seventy eighth");
	}

	public function test101(){
		$this->assertEquals(OrdinalNumber::convert(101,true), "one hundred and first");
	}

	public function test378(){
		$this->assertEquals(OrdinalNumber::convert(378), "three hundred seventy eighth");
	}

	public function test500(){
		$this->assertEquals(OrdinalNumber::convert(500), "five hundredth");
	}

	public function test872(){
		$this->assertEquals(OrdinalNumber::convert(872,false,true), "Eight hundred seventy second");
	}

	public function test1000(){
		$this->assertEquals(OrdinalNumber::convert(1000), "one thousandth");
	}

	public function test4000(){
		$this->assertEquals(OrdinalNumber::convert(4000,true), "four thousandth");
	}

	public function test4796(){
		$this->assertEquals(OrdinalNumber::convert(4796,true,true), "Four thousand seven hundred and ninety sixth");
	}

	public function test6700(){
		$this->assertEquals(OrdinalNumber::convert(6700,true,true), "Six thousand seven hundredth");
	}

	public function test8184(){
		$this->assertEquals(OrdinalNumber::convert(8184,true,true), "Eight thousand one hundred and eighty fourth");
	}

	public function test9003(){
		$this->assertEquals(OrdinalNumber::convert(9003,true), "nine thousand and third");
	}

	public function test9278(){
		$this->assertEquals(OrdinalNumber::convert(9278,true), "nine thousand two hundred and seventy eighth");
	}

	public function test9999(){
		$this->assertEquals(OrdinalNumber::convert(9999,true,true), "Nine thousand nine hundred and ninety ninth");
	}

}

