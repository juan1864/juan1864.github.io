
<!DOCTYPE html>
<html lang="es">
   <head>
      <title>Noticias Portal | Barrio Vision Colombia</title>
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.jpg">

      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/variables.css" rel="stylesheet" type="text/css" />
      
      <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
      <script src="assets/js/modernizr.min.js"></script>
        
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />
      

        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
      <script>
         function checkAvailability() {
         $("#loaderIcon").show();
         jQuery.ajax({
         url: "check_availability.php",
         data:'username='+$("#sadminusername").val(),
         type: "POST",
         success:function(data){
         $("#user-availability-status").html(data);
         $("#loaderIcon").hide();
         },
         error:function (){}
         });
         }
      </script>
   </head>            

   <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">
        <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                   
                
                   <a href="index.php" class="logo">
                       <span>
                           <img src="assets/images/MasterPRO.png" alt="" height="60">
                       </span>
                      
                   </a>
 
                </div>

                
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                           
                    
                        </ul>
                        <ul class="nav navbar-nav" style=" width: 50%; margin-top: 23px; color: red;"> 
                              <!-- <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><b>Noticias de Junta de Accion Comunal Barrio Vision Colombia Panel de </marquee>
                            -->
                    
                        </ul>
                      
                       
                        <!-- login(Notificacion) -->
                        <ul class="nav navbar-nav navbar-right list-unstyle">
                          

                            <li class="dropdown user-box services">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="menu-presidente drop-down dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>

                                        <h5>Hola presidente</h5>
                                    </li>
                              
                                    <li><a href="change-password.php"><i class="ti-settings m-r-5"></i> Cambiar contraseña</a></li>
                           
                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Cerrar sesión</a></li>
                                </ul>
                            </li>

                        </ul> 

                    </div>
                </div>
            </div>