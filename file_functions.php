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

function arr_parent_leaves($key,$keyArr,$value){
    $nkey = $keyArr[0];
    $nArr = array_slice($keyArr, 1);

    if(intval(count($keyArr)) > 1){
        $key[$nkey] = null;
        arr_parent_leaves($key[$nkey], $nArr ,$value);
    }

    $key[$nkey] = $value;
    //var_dump($key);
    return $key;
}

?>