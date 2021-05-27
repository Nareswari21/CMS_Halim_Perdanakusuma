<?php
	include('../koneksi.php');

	if ($_GET['op']=="delete") 
	{
	 $del_img=$_GET['file_name'];
	 $query = "DELETE FROM tbl_images8 WHERE file_name='$del_img'";
	 $result=mysqli_query($conn, $query);
	 if ($result) {
	 	?>
	 	<script>
	 	alert('Berhasil menghapus gambar');
	 	window.location.href='../kategori/kategori8.php?deleted';
	 	</script>

	 <?php
	 	unlink("upload/uploads8/$del_img");
	 }
	 else{
	 	?>
	 	<script>
	 		alert('Gagal menghapus gambar');
	 		window.location.href='../kategori/kategori8.php?error';
	 	</script>
	 	<?php
	 }
	}
?>