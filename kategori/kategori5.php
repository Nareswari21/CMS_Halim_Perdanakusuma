<?php
    include_once('../koneksi.php');
    session_start();
    if(isset($_SESSION['User']))
    {
        
    }
    else
    {
        header("location:../logout.php?logout");
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin CMS</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="../admin.php">CMS HALIM</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Kategori<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="kategori1.php"><i class="fa fa-circle-o"></i>Kategori 1</a>
                            </li>
                            <li>
                                <a href="kategori2.php"><i class="fa fa-circle-o "></i>Kategori 2</a>
                            </li>
                             <li>
                                <a href="kategori3.php"><i class="fa fa-circle-o "></i>Kategori 3</a>
                            </li>
                             <li>
                                <a href="kategori4.php"><i class="fa fa-circle-o"></i>Kategori 4</a>
                            </li>
                             <li>
                                <a href="kategori5.php"><i class="fa fa-circle-o"></i>Kategori 5</a>
                            </li>
                             <li>
                                <a href="kategori6.php"><i class="fa fa-circle-o"></i>Kategori 6</a>
                            </li>
                             <li>
                                <a href="kategori7.php"><i class="fa fa-circle-o"></i>Kategori 7</a>
                            </li>
                             <li>
                                <a href="kategori8.php"><i class="fa fa-circle-o"></i>Kategori 8</a>
                            </li>
                            <li>
                                <a href="kategori9.php"><i class="fa fa-circle-o"></i>Kategori 9</a>
                            </li>
                            <li>
                                <a href="kategori10.php"><i class="fa fa-circle-o"></i>Kategori 10</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../logout.php?logout"><i class="fa fa-edit " action="refresh.php"></i>Logout</a>
                    </li>
                    <li>
                        <a href="../edit.php"><i class="fa fa-edit " action="refresh.php"></i>Edit</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="container" style="width: 90%; margin-top: 40px">
                    <form action="../add/add5.php" method="POST" enctype="multipart/form-data">
                        <label>Upload Gambar</label>
                        <input type="file" name="file_name" class="form-control" id="exampleInputEmail1"> <br>
                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                    </form>
                    <br>
                    <form action="../aksitampilkan/aksitampilkan5.php?logout" method="POST" >
                    <button type="submit" name="submit" class="btn btn-success">Tampilkan</button>
                    </form>
                </div>
                <br><br>

                <div class="container" style="width: 80%">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama file</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $data="select * from tbl_images5";
                                    $result = mysqli_query($conn, $data);
                                    while($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><img inlineblock src="<?php echo '../upload/uploads5/'.$row['file_name'];?>" width="100px" height="60px" /></td>
                                    <td><?php echo $row['file_name'] ?></td>
                                    <td><a class="btn btn-danger" href="../delete/delete5.php?op=delete&file_name=<?php echo $row['file_name']?>" role="button">Hapus</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>


</body>
</html>
