<?php
use SDMTests\Import;

//include_once __DIR__.'/src/Import/ImportInterface.php';
//include_once __DIR__.'/src/Import/Import.php';
//include_once __DIR__.'/src/Import/ProductInterface.php';
//include_once __DIR__.'/src/Import/SimpleProductInterface.php';
//include_once __DIR__.'/src/Import/ConfigurableProductInterface.php';

//$test = new Import();

//$test->setUp();

//echo $test->__construct()




print file_get_contents(__DIR__.'/tests/Import/files/test5.csv');


//$csv = array_map('str_getcsv', file(__DIR__.'/tests/Import/files/test1.csv'));
$content = file(__DIR__.'/tests/Import/files/test1.csv');
print "------------";
print_r($content);
print "-----------------";
    $csv = str_getcsv($content, ",");
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    array_shift($csv);
    
    
    print_r($csv);
?>
