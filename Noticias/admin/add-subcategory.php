<?php
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   if(isset($_POST['submitsubcat']))
   {
   $categoryid=$_POST['category'];
   $subcatname=$_POST['subcategory'];
   $subcatdescription=$_POST['sucatdescription'];
   $status=1;
   $query=mysqli_query($con,"insert into tblsubcategory(CategoryId,Subcategory,SubCatDescription,Is_Active) values('$categoryid','$subcatname','$subcatdescription','$status')");
   if($query)
   {
   $msg="Sub-Category created ";
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
                           <h4 class="page-title">Añadir Sub-Categoria</h4>
                           <ol class="breadcrumb p-0 m-0">
                              <li>
                                 <a href="#">Administrador</a>
                              </li>
                              <li>
                                 <a href="#">Categoria </a>
                              </li>
                              <li class="active">
                                 Añadir Categoria
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box">
                           <h4 class="m-t-0 header-title"><b>Añadir Categoria </b></h4>
                           <hr>
                           <div class="row">
                              <div class="col-sm-6">
                                
                                 <?php if($msg){ ?>
                                 <div class="alert alert-success" role="alert">
                                    <strong>Informaicion Actualizada!</strong> <?php echo htmlentities($msg);?>
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
                                          <select class="form-control" name="category" required>
                                             <option value="">Seleccione Comite </option>
                                             <?php
                                                
                                                $ret=mysqli_query($con,"select id,CategoryName from  tblcategory where Is_Active=1");
                                                while($result=mysqli_fetch_array($ret))
                                                {    
                                                ?>
                                             <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
                                             <?php } ?>
                                          </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label class="control-label">Categoria</label>
                                          <input type="text" class="form-control" value="" name="subcategory" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label class="control-label">Descripcion Categoria</label>
                                          <textarea class="form-control" rows="5" name="sucatdescription" required></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                          <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submitsubcat">
                                          Añadir
                                          </button>
                                    </div>
                                 </form>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- container -->
            </div>
            <!-- content -->
            <?php include('includes/footer.php');?>
 
        
<?php } ?>