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
   $category=$_POST['category'];
   $description=$_POST['description'];
   $status=1;
   $query=mysqli_query($con,"insert into tblcategory(CategoryName,Description,Is_Active) values('$category','$description','$status')");
   if($query)
   {
   $msg="Category created ";
   }
   else{
   $error="Something went wrong . Please try again.";    
   } 
   }
   
   
   ?>

         
         <?php include('includes/topheader.php');?>
         
         <?php include('includes/leftsidebar.php');?>
         
         <div class="content-page">
            
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Añadir Comite</h4>
                           <ol class="breadcrumb p-0 m-0">
                              <li>
                                 <a href="#">Administrador</a>
                              </li>
                              <li>
                                 <a href="#">Comite </a>
                              </li>
                              <li class="active">
                                 añadir Comite
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box">
                           <h4 class="m-t-0 header-title"><b>Agregar Comite </b></h4>
                           <hr />
                           <div class="row">
                              <div class="col-sm-6">
                                   
                                 <?php if($msg){ ?>
                                 <div class="alert alert-success" role="alert">
                                    <strong>Informacion Actualizada!</strong> <?php echo htmlentities($msg);?>
                                 </div>
                                 <?php } ?>
                                 
                                 <?php if($error){ ?>
                                 <div class="alert alert-danger" role="alert">
                                    <strong>Error!</strong> <?php echo htmlentities($error);?>
                                 </div>
                                 <?php } ?>
                              </div>
                           </div>
                                 <form class="row" name="category" method="post">
                                    <div class="form-group col-md-6">
                                       <label class="control-label">Comite</label>
                                          <input type="text" class="form-control" value="" name="category" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label class=" control-label">Descripcion Comite</label>
                                          <textarea class="form-control" rows="5" name="description" required></textarea>
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
                  
               </div>
            
            </div>
            
            <?php include('includes/footer.php');?>

   
<?php } ?>