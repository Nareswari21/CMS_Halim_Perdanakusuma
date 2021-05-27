<?php
include '../koneksi.php';
$page = $_SERVER['PHP_SELF'];
$sec = "300";

$result = $conn->query("SELECT file_name FROM tbl_images5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title> CMS Halim </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
        .tombhol{
            opacity: 0;
        }
        .tombhol:hover {
            opacity: 100;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        
        <div class="row margin-0">
            <div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators tombhol">
                    <a class="btn btn-info" aria-hidden="true" href="../login.php" role="button">Admin</a>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner" role="listbox">
                    <?php
                        $i = 0;
                        foreach ($result as $row) {
                            $actives = '';
                            if($i == 0){
                                $actives = 'active';
                            }   
                    ?>
                    <div class="carousel-item <?= $actives; ?> tampilan">
                        <img src="<?php echo '../upload/uploads5/'.$row['file_name']?>" class="img-fluid">
                    </div>
                    <?php $i++; } ?>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>

                </div>
            </div>
        </div>
    </div>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>