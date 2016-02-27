<?php
class ExampleTest extends TestCase 
{



	//----------------> These are tests using dataproviders to plug in numbers using fibonnaci function
	/**
	 * @dataProvider tVals()
	 */
	function testIfNumberIsAFibonnaci( $testVal ) 
	{
		$this->assertTrue( self::isFibonacciBooleanTest ( $testVal ) );
	}
	/**
	 * @dataProvider fVals()
	 */
	function testIfNumberIsNotAFibonnaci( $testVal )
	{
		$this->assertFalse( self::isFibonacciBooleanTest ( $testVal ) );
	}

	//---------------->>Data providers for the fibbonacci tests
	function tVals()
	{
		return [
			[ 89 ],
			[ 8 ]   
		];
	}
	function fVals()
	{
		return [
			[ 5467 ]
		];
	}
	//----------------->> Code to pass the fibonnaci tests
	function isFibonacciBooleanTest($n)
	{
		$firstFibonnaciEquation = sqrt(5 * $n * $n - 4);
		$secondFibonnaciEquation = sqrt(5 * $n * $n + 4);
        if ($firstFibonnaciEquation - ceil($firstFibonnaciEquation) == 0) {
            return true;
        } else if ($secondFibonnaciEquation - ceil($secondFibonnaciEquation) == 0) {
            return true;
        }
        return false;
	}

//======================================================================> STARTING NEW TEST

	//---------------> This is a test using a dataprovider to plug in numbers using the functionTest 
	/**
	 * @dataProvider eqVals()
	 */
	function testEqual( $n, $c, $m, $expected)
	{
		$this->assertEquals( $expected, self::functionTest ( $n, $c, $m ) );
	}

	//------------------>>Data provider for the functionTest
	function eqVals()
	{
		return [
			[ ]
		];
	}	


	function functionTest ( $val )
	{
		
	}

}
