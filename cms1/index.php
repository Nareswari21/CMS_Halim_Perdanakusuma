 <!DOCTYPE html>
 <html>
 <head>
   <title> Delete Images</title>
</head>
<center>
<body>

  <form action="add.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file_name"><br>
          <button type="submit" name="submit">Add</button>
  </form>

<hr>

<h2> View Images</h2>
    <?php
    include_once('connection.php');
        $data="select * from tbl_images";
        $result = mysqli_query($conn, $data);
        while($row = mysqli_fetch_array($result))
          {
            ?>
        
        <right><a href="delete.php?op=delete&file_name=<?php echo $row['file_name']?>">DELETE</a></right> <br/>

        <img src="<?php echo 'uploads/'.$row['file_name'];?>" width="100px" height="100px" />
        <?php
        }
      ?>
</body>
</center>
</html>