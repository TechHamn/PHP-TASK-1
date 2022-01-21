<?php
/* 
* This file includes functions related to reding text file and converting it to array 
* Created By Zeinab Moghbel
* On 2022-01-19
*/

# Read the text file
function read_file($filename){
    return file_get_contents($filename);
}

# Read the first word of the lind
function firstLine($line){
    return substr(trim($line), 0, 1);
}

# Separate config from value in the line
function setData($line){
    $arrData = explode("=",$line);
    return $arrData;
}

# Recursive Function for getting the output array
function recursiveArr($arr, $step, $cArr, $value){
        if($step == count($cArr)) return ((is_numeric($value)) ? $cArr=$value : $cArr=$value);
        $arr[$cArr[$step]] = recursiveArr($arr[$cArr[$step]],++$step,$cArr,$value);
        return $arr;
    }

?>
