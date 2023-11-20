<?php
 session_start();

include('includes/config.php');

if(isset($_POST['login']))
  {
 
    
     $uname=$_POST['username'];
    $password=md5($_POST['password']);
    
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword,userType FROM tbladmin WHERE (AdminUserName='$uname' && AdminPassword='$password')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{

$_SESSION['login']=$_POST['username'];
$_SESSION['utype']=$num['userType'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  }else{
echo "<script>alert('Invalid Details');</script>";
  }
 
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Noticias Portal">
        <meta name="author" content="xyz">


        <title>Login | Admin Panel</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/elements.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </head>


    <body class="bg-transparent color-fondo">

        
        <section>
            <div class="container m-t-50 .bg-image ">
                <div class="row align-items-center m-t-50 contenedor">
                    <div class="img-fondo">
                        
                        <img src="assets/images/top-circle.svg" alt="top circle" class="bg-image bg-image--top" />
                       <img src="assets/images/bottom-circle.svg"alt="bottom circle" class="bg-image bg-image--bottom"
    />
                    </div>
                    <div class="col-md-4 cuadro-login">

                        <div class="wrapper-page ">

                            <div class="m-t-40 account-pages">
                                <div class="account-logo-box text-center">
                                    <h2 class="text-uppercase ">
                                        <a href="index.php" class="text-success ">
                                            <span><img class="img-junta" src="assets/images/favicon.jpg" ></span>
                                        </a>
                                    </h2>
                                    <p class="titulo-login">Barrio Vision Colombia Inicie sesión.</p>
                                    
                                </div>
                                <div class="account-content ">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Usuario o Email" autocomplete="off">
                                            </div>
                                        </div>
                                        
    
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                            <div class="text-right mb-2"><a href="forgot-password.php"><i class="mdi mdi-lock"></i> ¿Olvidaste tu contraseña?</a></div>

                                        </div>


                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            
                                            <div class="col-xs-12">
                                            <div class="form-group account-btn text-center m-t-10 mb-3 form-group">
                                          <div class="g-recaptcha" data-sitekey="6LcJPRYpAAAAAOjVvJTkXABKRpJOkjhFXdETmSTL "required="" autocomplete="off">></div>
                                          </div>
                                                <button class="btn btn-custom waves-effect waves-light btn-md w-100" type="submit" name="login">Login</button>
                                            </div>
                                        </div>

                                    </form>
                                <div class="text-center">
                                    <a href="../index.php"><i class="mdi mdi-home"></i> Noticias</a>
                                </div>
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
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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