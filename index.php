<?php
/* 
* This file includes functions related by reding text file and converting it to array 
* Created By Zeinab Moghbel
* On 2022-01-19
*/

require_once('file_functions.php');
error_reporting(E_ERROR | E_PARSE);

$filename = 'config.txt'; // the text file

if(file_exists($filename)){
    $filetext = nl2br(read_file($filename)).'<br>'; //add br to end of each line
    $fileArr = explode("<br />",$filetext); //Separate each line and insert it in array

    //var_dump($fileArr);
    
    # The output array
    $dataConfigArr = null; 

    # for each line, we run several task
    foreach($fileArr as $key => $value){
        
        //echo $key . " - ". $value.'<br>';
        if(firstLine($value) !== '#' && firstLine($value) != null){
            $parsLine = setData($value);
            $parseConfig = explode(".", $parsLine[0]); // The config part of line in array form
            $configLineValue = $parsLine[1]; // The value part of line 

            # Call recursive function to get result
            $dataConfigArr = recursiveArr($dataConfigArr, 0, $parseConfig, $configLineValue);
        }
        
    }

    var_dump($dataConfigArr);
    
}
else echo "File doesn't exist";

?>
