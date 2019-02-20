<?php

namespace SDM\FizzBuzz;

class FizzBuzz implements FizzBuzzInterface
{
    public function __construct()
    {
    }

    public function getResults($testNumber, $Fizz = 3, $Buzz = 5): string{
            {
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

    };
}
