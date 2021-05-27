<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

</head>
<body style="background-color: #E2E2E2;">
    
<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-dark mt-5">
                <div class="card-title bg-primary text-white mt-5">
                    <h3 class="text-center py-3">Login Halim</h3>
                </div>
 
                <?php 
                    if(@$_GET['Empty']==true)
                    {
                ?>
                <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                <?php
                    }
                ?>
 
 
                <?php 
                    if(@$_GET['Invalid']==true)
                    {
                ?>
                <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                <?php
                    }
                ?>
 
                <div class="card-body">
                    <form action="loginaksi.php" method="post">
                        <input type="text" name="UName" placeholder=" Username" class="form-control mb-3">
                        <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                        <button class="btn btn-success mt-3" name="Login"> Login </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
