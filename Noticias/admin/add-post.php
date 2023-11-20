<?php 
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   
   // For adding post  
   if(isset($_POST['submit']))
   {
   $posttitle=$_POST['posttitle'];
   $catid=$_POST['category'];
   $subcatid=$_POST['subcategory'];
   $postdetails=$_POST['postdescription'];
   $postedby=$_SESSION['login'];
   $arr = explode(" ",$posttitle);
   $url=implode("-",$arr);
   $imgfile=$_FILES["postimage"]["name"];
   
   $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
   
   $allowed_extensions = array(".jpg","jpeg",".png",".gif");
   
   if(!in_array($extension,$allowed_extensions))
   {
   echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
   }
   else
   {
   
   $imgnewfile=md5($imgfile).$extension;
   
   move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);
   
   $status=1;
   $query=mysqli_query($con,"insert into tblposts(PostTitle,CategoryId,SubCategoryId,PostDetails,PostUrl,Is_Active,PostImage,postedBy) values('$posttitle','$catid','$subcatid','$postdetails','$url','$status','$imgnewfile','$postedby')");
   if($query)
   {
   $msg="Post successfully added ";
   }
   else{
   $error="Something went wrong . Please try again.";    
   } 
   
   }
   }
   ?>

         
        
   <?php include('includes/topheader.php');?>
      <script>
         function getSubCat(val) {
           $.ajax({
           type: "POST",
           url: "get_subcategory.php",
           data:'catid='+val,
           success: function(data){
             $("#subcategory").html(data);
           }
           });
           }
           
      </script>
         
         <?php include('includes/leftsidebar.php');?>
      
         <div class="content-page">
           
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Agregar publicación </h4>
                           <ol class="breadcrumb p-0 m-0">
                              <li>
                                 <a href="#">Publicacion</a>
                              </li>
                              <li>
                                 <a href="#">Agregar publicación </a>
                              </li>
                              <li class="active">
                              Agregar publicación
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-sm-6">
                    
                        <?php if($msg){ ?>
                        <div class="alert alert-success" role="alert">
                           <strong>Bien Echo!</strong> <?php echo htmlentities($msg);?>
                        </div>
                        <?php } ?>
                        
                        <?php if($error){ ?>
                        <div class="alert alert-danger" role="alert">
                           <strong>Error!</strong> <?php echo htmlentities($error);?>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
                 
                        
                              <form name="addpost" method="post" class="row" enctype="multipart/form-data">
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Titulo de Publicacion</label>
                                    <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Comite</label>
                                    <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
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
                                    <label for="exampleInputEmail1">Categoria</label>
                                    <select class="form-control" name="subcategory" id="subcategory" required>
                                    </select> 
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card-box">
                                          <h4 class="m-b-30 m-t-0 header-title"><b>Detalles de la publicación</b></h4>
                                          <textarea class="summernote" name="postdescription" required></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card-box">
                                          <h4 class="m-b-30 m-t-0 header-title"><b>Imagen destacada</b></h4>
                                          <input type="file" class="form-control" id="postimage" name="postimage"  required>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" name="submit" class="btn btn-custom waves-effect waves-light btn-md">Guardar y publicar</button>
                                 <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                              </form>
                    
               </div>
            
            </div>
            
            <?php include('includes/footer.php');?>

        
<?php } ?>