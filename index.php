<?php
require_once('file_functions.php');
error_reporting(E_ERROR | E_PARSE);

$filename = 'config.txt';

if(file_exists($filename)){
    $filetext = nl2br(read_file($filename)).'<br>';
    $fileArr = explode("<br />",$filetext);

    //var_dump($fileArr);
    
    $dataConfigArr = null;

    foreach($fileArr as $key => $value){
        
        //echo $key . " - ". $value.'<br>';
        if(firstLine($value) !== '#' && firstLine($value) != null){
            $parsLine = setData($value);
            $parseConfig = explode(".", $parsLine[0]);
            $configLineValue = $parsLine[1];
            $dataConfigArr = recursiveArr($dataConfigArr, 0, $parseConfig, $configLineValue);
        }
        
    }

    var_dump($dataConfigArr);
    
}
else echo "File doesn't exist";

?>
