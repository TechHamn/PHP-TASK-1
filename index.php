<?php
require_once('file_functions.php');

$filename = 'config.txt';

if(file_exists($filename)){
    $filetext = nl2br(read_file($filename)).'<br>';
    $fileArr = explode("<br />",$filetext);

    //var_dump($fileArr);
    
    $dataFile = [];

    foreach($fileArr as $key => $value){
        
        //echo $key . " - ". $value.'<br>';
        if(firstLine($value) !== '#' && firstLine($value) != null){
            $arr = setData($value);
            $data1 = explode('.',$arr[0]);
            $arrVal = $arr[1];
            $dataFile [] = arr_parent_leaves($dataFile,$data1,$arrVal);
        }
        
    }

    var_dump($dataFile);
    
}
else echo "File doesn't exist";



?>