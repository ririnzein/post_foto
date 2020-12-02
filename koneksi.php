<?php  

class koneksi{
	
	private $user ="localhost";
	private $username = "root";
	private $password = "";
	private $database = "formulirdb";

	function getkoneksi(){
		return new mysqli($this->user, $this->username, $this->password, $this->database);
	}
}

$koneksiobj = new koneksi();
$koneksi =$koneksiobj->getkoneksi();

if($koneksi->connect_error){
	echo "Gagal Koneksi :". $koneksi->connect_eror;
	echo "</td></tr>";
}

?>