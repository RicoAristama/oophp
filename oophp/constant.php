<?php 

// define('NAMA', 'Rico Aristama');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
// 	const NAMA = "Rico Aristama";	
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;
?>