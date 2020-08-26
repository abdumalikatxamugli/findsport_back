<?php
function index_by_id($array){
    $newarr=array();
    foreach ($array as $value) {
        $newarr[$value->id]=$value;
    }
    return $newarr;
}
?>
