<?php

namespace SDM\FizzBuzz;

interface FizzBuzzInterface
{
    /**
     * FizzBuzz calculator.
     *
     * @param int $testNumber The number to test
     * @param int $fizz       A number which should be divided to say Fizz
     * @param int $buzz       A number which should be divided to say Buzz
     *
     * @return string
     *
     * @throws \RuntimeException Exception thrown if the test number is above 100
     * @throws \RuntimeException Exception thrown if the test number is below 1
     */
    public function getResults(int $testNumber, int $fizz = 3, int $buzz = 5): string{
            
        if((int)($testNumber)<1){
            throw self::should_throw_a_exeception_when_testnumber_is_below_1();
        }
        if((int)($testNumber)>1){
            throw self::should_throw_a_exeception_when_testnumber_is_above_100();
        }

        try{
            if(($testNumber % $Fizz == 0 )&&($testNumber % $Buzz == 0)){
                return 'FizzBuzz';
            }
            if($testNumber % $Fizz == 0){
                return 'Fizz';
            }
            if($testNumber % $Buzz == 0){
                return 'Buzz';
            }
            
            
        }
        catch(Exception $e){
            throw new Exception($e);
        }
    }
}
