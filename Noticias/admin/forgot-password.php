<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
  {
    $username=$_POST['username'];
    $email=$_POST['email'];
$password=md5($_POST['newpassword']);
        $query=mysqli_query($con,"select id from tbladmin where  AdminEmailId='$email' and AdminUserName='$username' ");
        
    $ret=mysqli_num_rows($query);
    if($ret>0){
      $query1=mysqli_query($con,"update tbladmin set AdminPassword='$password'  where  AdminEmailId='$email' && AdminUserName='$username' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

   }
     
    }
    else{
    
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }

  ?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Noticias Portal">
        <meta name="author" content="xyz">


       
        <title>Noticias Portal | Has Olvidado Tu Contraseña</title>

        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="assets/js/modernizr.min.js"></script>
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.php" class="text-success">
                                            <span><img src="assets/images/MasterPRO.png" alt="" height="56"></span>
                                        </a>
                                    </h2>
                                   
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Usuario" autocomplete="off">
                                            </div>
                                        </div>
<div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="email" placeholder="Email" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                               <input type="password" class="form-control" id="userpassword" name="confirmpassword" placeholder="Nueva Contraseña">
                                            </div>
                                        </div>
<div class="form-group">
                                            <div class="col-xs-12">
                                               <input type="password" class="form-control" id="userpassword" name="newpassword" placeholder="Confirmar Contraseña">
                                            </div>
                                        </div>

                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                            <div class="form-group account-btn text-center m-t-10 mb-3 form-group">
                                          <div class="g-recaptcha" data-sitekey="6LcJPRYpAAAAAOjVvJTkXABKRpJOkjhFXdETmSTL"></div>
                                          </div>
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="submit">Cambiar Clave</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>
<a href="../index.php"><i class="mdi mdi-home"></i> Volver</a>
                                </div>
                            </div>
                           


                    

                        </div>
                       

                    </div>
                </div>
            </div>
          </section>
          

        <script>
            var resizefunc = [];
        </script>

       
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>