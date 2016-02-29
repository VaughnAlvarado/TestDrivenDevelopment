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
	function testHowManyNumberOf4DigitsInNumber( $number, $countOfDigits4 )
	{
		$this->assertEquals(self::functionTest($number), $countOfDigits4);
	}

	//------------------>>Data provider for the functionTest
	function eqVals()
	{
		return [
			[10, 1],
            [4, 1],
            [3,0],
            [328, 60]
		];
	}	


	function functionTest ( $number )
	{
        $counter = 0;
        for($i = 0; $i <= $number; $i++) {
            $counter = self::countDigitFour(str_split($i), $counter);
        }
        return $counter;
	}
	function countDigitFour(array $splitNumber, $number)
    {
        foreach ($splitNumber as $seperatedNumber) {
            if ($seperatedNumber == 4) {
                $number++;
                break;
            }
        }
        return $number;
    }

}
