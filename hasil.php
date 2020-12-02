</head>
<body>
<center>
	<?php 

	 $name 		= $_POST['name'];
	 $alamat 	= $_POST['alamat'];
	 $foto_diri = $_POST['name'];
	 $file 		= $_FILES['foto_diri']['name'];
	 $tmp_name 	= $_FILES['foto_diri']['tmp_name'];

	 move_uploaded_file($tmp_name, "foto/".$file);


	 $query="insert into table_formulir(
	 	name,
	 	alamat,
	 	foto_diri
	)values(
		'$name',
		'$alamat',
		'$file'
	)";

	require_once('koneksi.php');

	if($koneksi->query($query)===true){
		echo "Data Berhasil Disimpan";
	}else{
		echo "Data Gagal Disimpan";
	}
?>
</center>

</body>
</html>