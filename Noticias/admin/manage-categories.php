<?php
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   if($_GET['action']=='del' && $_GET['rid'])
   {
    $id=intval($_GET['rid']);
    $query=mysqli_query($con,"update tblcategory set Is_Active='0' where id='$id'");
    $msg="Category deleted ";
   }
   // Code for restore
   if($_GET['resid'])
   {
    $id=intval($_GET['resid']);
    $query=mysqli_query($con,"update tblcategory set Is_Active='1' where id='$id'");
    $msg="Category restored successfully";
   }
   
   // Code for Forever deletionparmdel
   if($_GET['action']=='parmdel' && $_GET['rid'])
   {
    $id=intval($_GET['rid']);
    $query=mysqli_query($con,"delete from  tblcategory  where id='$id'");
    $delmsg="Category deleted forever";
   }
   
   ?>

      <!-- Top Bar Start -->
      <?php include('includes/topheader.php');?>
      <!-- ========== Left Sidebar Start ========== -->
      <?php include('includes/leftsidebar.php');?>

      <div class="content-page">
         <!-- Start content -->
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="page-title-box">
                        <h4 class="page-title">Administrar categorías</h4>
                        <ol class="breadcrumb p-0 m-0">
                           <li>
                              <a href="#">Admin</a>
                           </li>
                           <li>
                              <a href="#">Categoria </a>
                           </li>
                           <li class="active">
                           Administrar categorías
                           </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- end row -->
               <div class="row">
                  <div class="col-sm-6">
                     <?php if($msg){ ?>
                     <div class="alert alert-success" role="alert">
                        <strong>Bien Echo!</strong> <?php echo htmlentities($msg);?>
                     </div>
                     <?php } ?>
                     <?php if($delmsg){ ?>
                     <div class="alert alert-danger" role="alert">
                        <strong>Error!</strong> <?php echo htmlentities($delmsg);?>
                     </div>
                     <?php } ?>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="demo-box m-t-20">
                           <div class="m-b-30">
                              <a href="add-category.php">
                              <button id="addToTable" class="btn btn-custom waves-effect waves-light btn-md">Añadir <i class="mdi mdi-plus-circle-outline" ></i></button>
                              </a>
                           </div>
                           <div class="table-responsive">
                              <table class="table m-0 table-bordered" id="example">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th> Categoria</th>
                                       <th>Descripccion</th>
                                       <th>Fecha publicación</th>
                                       <th>Fecha de última actualización</th>
                                       <th>Acción</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $query=mysqli_query($con,"Select id,CategoryName,Description,PostingDate,UpdationDate from  tblcategory where Is_Active=1");
                                       $cnt=1;
                                       while($row=mysqli_fetch_array($query))
                                       {
                                       ?>
                                    <tr>
                                       <th scope="row"><?php echo htmlentities($cnt);?></th>
                                       <td><?php echo htmlentities($row['CategoryName']);?></td>
                                       <td><?php echo htmlentities($row['Description']);?></td>
                                       <td><?php echo htmlentities($row['PostingDate']);?></td>
                                       <td><?php echo htmlentities($row['UpdationDate']);?></td>
                                       <td><a class="btn btn-primary btn-sm" href="edit-category.php?cid=<?php echo htmlentities($row['id']);?>"><i class="fa fa-pencil"></i></a> 
                                          &nbsp;<a class="btn btn-danger btn-sm" href="manage-categories.php?rid=<?php echo htmlentities($row['id']);?>&&action=del"> <i class="fa fa-trash-o"></i></a> 
                                       </td>
                                    </tr>
                                    <?php
                                       $cnt++;
                                        } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--- end row -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="demo-box m-t-20">
                           <div class="m-b-30">
                              <h4><i class="fa fa-trash-o" ></i> Elimina Categoria</h4>
                           </div>
                           <div class="table-responsive">
                              <table class="table m-0 table-bordered table-bordered-danger" id="example1">
                                 <thead>
                                    <tr>
                                    <th>#</th>
                                        <th> Categoría</th>
                                        <th>Descripción</th>
                                        <th>Fecha de publicación</th>
                                        <th>Fecha de última actualización</th>
                                        <th>Acción</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $query=mysqli_query($con,"Select id,CategoryName,Description,PostingDate,UpdationDate from  tblcategory where Is_Active=0");
                                       $cnt=1;
                                       while($row=mysqli_fetch_array($query))
                                       {
                                       ?>
                                    <tr>
                                       <th scope="row"><?php echo htmlentities($cnt);?></th>
                                       <td><?php echo htmlentities($row['CategoryName']);?></td>
                                       <td><?php echo htmlentities($row['Description']);?></td>
                                       <td><?php echo htmlentities($row['PostingDate']);?></td>
                                       <td><?php echo htmlentities($row['UpdationDate']);?></td>
                                       <td><a href="manage-categories.php?resid=<?php echo htmlentities($row['id']);?>"><i class="ion-arrow-return-right" title="Restore this category"></i></a> 
                                          &nbsp;<a href="manage-categories.php?rid=<?php echo htmlentities($row['id']);?>&&action=parmdel" title="Delete forever"> <i class="fa fa-trash-o" style="color: #f05050"></i> 
                                       </td>
                                    </tr>
                                    <?php
                                       $cnt++;
                                        } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- container -->
            </div>
            <!-- content -->
            <?php include('includes/footer.php');?>
 
         
  
<?php } ?>