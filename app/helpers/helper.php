<?php

function gender($gen = ''){
	$gender = [
		'0'=>'--Gender--',
		'1'=>'Male',
		'2'=>'Female',
		'3'=>'Other'
	]; 
	return $gen ? $gender[$gen] : $gender;
}

function status($sta = ''){

	$status = [
   '0' =>'--Status--',
    '1' =>'active',
   '2' =>'Inactive'
	];
	return $sta ? $status[$sta] : $status;
}

function feature($feat = ''){

	$feature = [
    '1' =>'NO',
   '2' =>'YES'
	];
	return $feat ? $feature[$feat] : $feature;
}

function navigaion($navigat = ''){

	$navigaion=[
    '1' =>'NO',
    '2'=>'YES'
     ];
     	return $navigat ? $navigaion[$navigat] : $navigaion;
}
?>