<?php

function read_file($filename){
    return file_get_contents($filename);
}

function firstLine($line){
    return substr(trim($line), 0, 1);
}

function setData($line){
    $arrData = explode("=",$line);
    return $arrData;
}

function recursiveArr($arr, $step, $cArr, $value){
        if($step == count($cArr)) return ((is_numeric($value)) ? $cArr=$value : $cArr=$value);
        $arr[$cArr[$step]] = recursiveArr($arr[$cArr[$step]],++$step,$cArr,$value);
        return $arr;
    }

?>
