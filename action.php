<?php

//let's understand how to count repeated letter in given string 
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

//let's understand how to short array without using any inbuild function 

$arrashort =[1,3,1,3,2,99,8,99,30];

for($i =0; $i < count($arrashort); $i++){
	for($j =0; $j < count($arrashort) -1; $j++){
		if($arrashort[$j] > $arrashort[$j +1]){
			$temp = $arrashort[$j];
			$arrashort[$j]  = $arrashort[$j + 1];
			$arrashort[$j + 1] = $temp;
		}
	}
}
print_r($arrashort);

?>
