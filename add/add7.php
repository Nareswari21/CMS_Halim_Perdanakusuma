<?php
	include_once('../koneksi.php');
	if (isset($_POST['submit'])) 
	{
	
	 $file_name = rand(1000,100000)."-".$_FILES['file_name']['name'];
	 $file_loc = $_FILES['file_name']['tmp_name'];
	 $folder = "../upload/uploads7/";
	 $new_file_name = strtolower($file_name);
	 $final_file = str_replace(' ','-',$new_file_name);

	 if(move_uploaded_file($file_loc,$folder.$final_file))
	 {
	 	$sql = "INSERT INTO tbl_images7(file_name) VALUES ('$final_file')";
	 		mysqli_query($conn, $sql);
	 		

		echo '<script language="javascript">alert("Upload Berhasil")</script>';
		echo '<meta http-equiv="refresh" content="0; URL=../kategori/kategori7.php">';	
	 }
	 else
	 {
        echo '<script language="javascript">alert("Gagal Upload")</script>';
		echo '<meta http-equiv="refresh" content="0; URL=../kategori/kategori7.php">';
	 }
	}

	?>