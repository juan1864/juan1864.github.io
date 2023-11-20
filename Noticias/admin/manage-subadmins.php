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
    $query=mysqli_query($con,"delete from  tbladmin  where id='$id' && userType=0");
   echo "<script>alert('Sub-admin details deleted.');</script>";
   echo "<script type='text/javascript'> document.location = 'manage-subadmins.php'; </script>";
   }
   
   ?>

         <?php include('includes/topheader.php');?>
         
         <?php include('includes/leftsidebar.php');?>
        
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Añadir Sub_admin</h4>
                           <ol class="breadcrumb p-0 m-0">
                              <li>
                                 <a href="#">Sub_Admin </a>
                              </li>
                              <li class="active">
                                 Administrar Sub-admin
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="demo-box m-t-20">
                           <div class="m-b-30">
                              <a href="add-subadmins.php">
                              <button id="addToTable" class="btn btn-custom waves-effect waves-light btn-md">Añadir <i class="mdi mdi-plus-circle-outline" ></i></button>
                              </a>
                           </div>
                           <div class="table-responsive">
                              <table class="table m-0  table-bordered" id="example">
                                 <thead>
                                    <tr>
                                    <th>#</th>
                                        <th>Nombre de usuario</th>
                                        <th>Correo electrónico</th>
                                        <th>Fecha de publicación</th>
                                        <th>Fecha de última actualización</th>
                                        <th>Acción</th>
                                    </tr>
                                 </thead><?php include('includes/footer.php');?>

                                 <tbody>
                                    <?php 
                                       $query=mysqli_query($con,"Select * from tbladmin where userType=0");
                                       $cnt=1;
                                       while($row=mysqli_fetch_array($query))
                                       {
                                       ?>
                                    <tr>
                                       <th scope="row"><?php echo htmlentities($cnt);?></th>
                                       <td><?php echo htmlentities($row['AdminUserName']);?></td>
                                       <td><?php echo htmlentities($row['AdminEmaillId']);?></td>
                                       <td><?php echo htmlentities($row['CreationDate']);?></td>
                                       <td><?php echo htmlentities($row['UpdationDate']);?></td>
                                       <td><a href="edit-subadmin.php?said=<?php echo htmlentities($row['id']);?>"  class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> 
                                          &nbsp;<a href="manage-subadmins.php?rid=<?php echo htmlentities($row['id']);?>&&action=del" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i></a> 
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
               
            </div>
            
            <?php include('includes/footer.php');?>

       
<?php } ?>