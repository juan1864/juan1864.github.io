<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
//Current Password hashing 
$password=$_POST['password'];
$options = ['cost' => 12];
$hashedpass=password_hash($password, PASSWORD_BCRYPT, $options);
$adminid=$_SESSION['login'];
// new password hashing 
$newpassword=$_POST['newpassword'];
$newhashedpass=password_hash($newpassword, PASSWORD_BCRYPT, $options);

date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
$sql=mysqli_query($con,"SELECT AdminPassword FROM  tbladmin where AdminUserName='$adminid' || AdminEmailId='$adminid'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $dbpassword=$num['AdminPassword'];

if (password_verify($password, $dbpassword)) {

 $con=mysqli_query($con,"update tbladmin set AdminPassword='$newhashedpass', updationDate='$currentTime' where AdminUserName='$adminid'");
$msg="Password Changed Successfully !!";
}
}
else
{
$error="Old Password not match !!";
}
}


?>





   
 <?php include('includes/topheader.php');?>


    <script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>


           <?php include('includes/leftsidebar.php');?>
 

            <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Cambiar la contraseña</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Administrador</a>
                                        </li>
                                    
                                        <li class="active">
                                        Cambiar la contraseña
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                       


                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Cambiar la contraseña </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Bien Echo!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>


<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Error!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>





<form class="row" name="chngpwd" method="post" onSubmit="return valid();">

<div class="form-group  col-md-6">
 <label class="control-label">Contraseña actual</label>
<input type="text" class="form-control" value="" name="password" required>
</div>
	                                     

<div class="form-group col-md-6">
<label class="control-label">Nueva Contraseña</label>
<input type="text" class="form-control" value="" name="newpassword" required>
</div>


<div class="form-group col-md-6">
<label class="control-label">Confirmar contraseña</label>

<input type="text" class="form-control" value="" name="confirmpassword" required>

</div>

 <div class="form-group col-md-12">

                                                  
<button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Enviar
                                                </button>
                                                   
                                                </div>

	                                        </form>
                        				


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->



<?php include('includes/footer.php');?>
 

           
<?php } ?>