            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- menu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navegacion</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Panel </span> </a>
                         
                            </li>
<?php if($_SESSION['utype']=='1'):?>
 
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti ti-user"></i> <span> Sub-admin </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins.php">Agregar sub-admin</a></li>
                                   
                                </ul>
                            </li>
<?php endif;?>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comites </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category.php">Añadir Comite</a></li>
                                    <li><a href="manage-categories.php">Administrar Comites</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti ti-layout-list-thumb"></i> <span>Categoria-Comite </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php">Añadir Categoria</a></li>
                                    <li><a href="manage-subcategories.php">Administrar Categorias</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);"class="waves-effect"><i class="mdi mdi-newspaper"></i><span> Publicar(Noticia) </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php">Añadir Publicaciones</a></li>
                                    <li><a href="manage-posts.php">administrar Publicaciones</a></li>
                                     <li><a href="trash-posts.php">Reciclaje de      Noticias</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti ti-files"></i> <span> CMS </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php">Nosotros</a></li>
                                    <li><a href="contactus.php">Contactanos</a></li>
                                </ul>
                            </li>

                            

                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-comment-account-outline"></i> <span> Comentarios </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment.php">A la espera de la aprobación </a></li>
                                    <li><a href="manage-comments.php">Comentarios aprobados</a></li>
                                </ul>
                            </li>       
                       <li >
                                <a href="#" class="waves-effect"><i class="ti ti-info-alt"></i> <span>pagina de Noticias </span></a>
                                
                            </li>
                        </ul>
                    </div>
                    
                    <div class="clearfix"></div>

                    

                </div>
                

            </div>
           