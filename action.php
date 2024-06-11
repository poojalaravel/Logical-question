<?php
$str =str_replace(' ', '', 'MuKesh Singh');
$arr =str_split(strtolower($str));

$array =array();
foreach($arr as $val){
    if(isset($array[$val])){
        $array[$val] +=1;
    }else{
        $array[$val] =1;
    }
}

print_r($array);
?>
