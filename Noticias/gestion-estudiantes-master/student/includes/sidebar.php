<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
   
    <?php
         
    ?>
    <!--  <p class="profile-name"><?php // echo htmlentities($row->AdminName);
                                  ?></p>
                  <p class="designation"><?php  //echo htmlentities($row->Email);
                                          ?></p> --><?php ///$cnt=$cnt+1;}} 
                                                    ?>
    <!--     </div>
               
              </a>
            </li> -->

    <li class="nav-item">
      <a class="nav-link" href="dashboard.php">
        <i class="icon-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>

      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-doc menu-icon"></i>
        <span class="menu-title">Noticia</span>

      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="manage-notice.php"> Gestionar Noticia </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth">
        <i class="icon-doc menu-icon"></i>
        <span class="menu-title">Noticias Públicas</span>
      </a>
      <div class="collapse" id="auth1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="manage-public-notice.php">
              Gestionar Noticia<br> Pública </a></li>
        </ul>
      </div>
   

    </li>
  </ul>
</nav>