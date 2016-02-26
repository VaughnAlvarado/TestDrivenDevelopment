<?php
class ExampleTest extends TestCase 
{


	/**
	 * @dataProvider tVals()
	 */
	function testTrue( $testVal ) 
	{
		$this->assertTrue( self::functionTest ( $testVal ) );
	}
	/**
	 * @dataProvider fVals()
	 */
	function testFalse( $testVal )
	{
		$this->assertFalse( self::functionTest ($testVal ) );
	}
	/**
	 * @dataProvider eqVals()
	 */
	function testEqual( $n, $c, $m, $expected)
	{
		$this->assertEquals( $expected, self::functionTest ( $n, $c, $m ) );
	}

	function tVals()
	{
		return [
			[  true]
		];
	}
	function fVals()
	{
		return [
			[ false]
		];
	}
	function eqVals()
	{
		return [
			[ true]
		];
	}	

	function functionTest ( $val )
	{
		
	}

}
