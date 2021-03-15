<?php

class Tingkatan {
	
	public $nama_depan;
	public $nama_belakang;
	public $umur;
	public $status;
	public $gender;
	
	public $model;
	
	public function getNama()
	{
		return "Nama  : " . $this -> nama_depan ." ". $this -> nama_belakang;
	}
	
	public function getUmur()
	{
		return "Umur  : ".$this -> umur." tahun";
	}
	
	public function getGender()
	{
		return "Gender : ".$this -> gender;
	}
	
	public function getStatus()
	{
		if ($this -> umur >= 20 . $this -> status = 'menikah')$hubungan = "Sudah Menikah";
		else $hubungan = 'Belum Menikah';
		return "$hubungan";
	}
	
}

$novi = new Tingkatan();
$hans = new Tingkatan();
$nisya = new Tingkatan();
$siska = new Tingkatan();
$putri = new Tingkatan();

$novi -> nama_depan = 'Novi';
$novi -> nama_belakang = 'Safitri';
$novi -> umur = 19;
$novi -> status = 'single';
$novi -> gender = 'perempuan';

$hans -> nama_depan = 'Hans';
$hans -> nama_belakang = 'Akbar';
$hans -> umur = 20;
$hans -> status = 'menikah';
$hans -> gender = 'cowok';

$nisya -> nama_depan = 'Nisya';
$nisya -> nama_belakang = 'Ulfah';
$nisya -> umur = 18;
$nisya -> status = 'single';
$nisya -> gender = 'perempuan';

$siska -> nama_depan = 'Siska';
$siska -> nama_belakang = 'Anjar';
$siska -> umur = 18;
$siska -> status = 'menikah';
$siska -> gender = 'perempuan';

$putri -> nama_depan = 'Putri';
$putri -> nama_belakang = 'Eka';
$putri -> umur = 25;
$putri -> status = 'menikah';
$putri -> gender = 'perempuan';

echo $novi -> getNama();
echo "<br/>";
echo $novi -> getUmur();
echo "<br/>";
echo $novi -> getGender();
echo "<br/>";
echo "Status : ".$novi-> getStatus();
echo "<br/>";
echo "<br/>";
echo $nisya -> getNama();
echo "<br/>";
echo $nisya -> getUmur();
echo "<br/>";
echo $nisya -> getGender();
echo "<br/>";
echo "status : ".$nisya -> getStatus();
echo "<br/>";
echo "<br/>";
echo $hans -> getNama();
echo "<br/>";
echo $hans -> getUmur();
echo "<br/>";
echo $hans -> getGender();
echo "<br/>";
echo "Status : ".$hans -> getStatus();
echo "<br/>";
echo "<br/>";
echo $siska -> getNama();
echo "<br/>";
echo $siska -> getUmur();
echo "<br/>";
echo $siska -> getGender();
echo "<br/>";
echo "Status : ".$siska -> getStatus();
echo "<br/>";
echo "<br/>";
echo $putri -> getNama();
echo "<br/>";
echo $putri -> getUmur();
echo "<br/>";
echo $putri -> getGender();
echo "<br/>";
echo "Status : ".$putri -> getStatus();

?>