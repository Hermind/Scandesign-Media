<?php

namespace SDM\Import;

abstract class Import implements ImportInterface
{
    /**
     * Importer.
     *
     * @param string $filePath  The path to the csv file
     * @param string $delimiter CSV delimter
     */
    public function __construct(string $filePath, string $delimiter = ',')
    {
        try{
            $csv = array_map('str_getcsv', file($filePath));
            

            foreach($this->productArray($csv) as $product){
                $this->addProduct($product);
            }
            
        }
        catch(Exception $e){
            throw new Exception("File error");
        }
        
    }
    
    public function productArray($csv):array{
        array_walk($csv, function(&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
         });
         array_shift($csv);
         return $csv
    }
}
