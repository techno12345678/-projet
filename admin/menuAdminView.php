
 <div class="bg-dark">
  <div class="container-fluid">
      <div class="row">
        <nav class="col navbar navbar-expand-lg navbar-dark ">
          <a class="navbar-brand" href="index.php"><img src="/projet/public/images/sonatrach.png" width="50" height="40" alt="Site logo"/></a>
          <!-- <img src="public/images/sonatrach.png" width="40" height="30" alt="Site logo"> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                  
          <div id="navbarContent" class="collapse navbar-collapse justify-content-between">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/projet/admin/index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accueil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/projet/admin/index.php?action=utilisateurCreate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Utilisateur</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/projet/admin/index.php?action=specialityCreate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specialety</a>
              </li> 
              
              <li class="nav-item active">
                <a class="nav-link" href="/projet/admin/index.php?action=depertementCreate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Depertement</a>
              </li> 

              <li class="nav-item active">
                <a class="nav-link" href="/projet/admin/index.php?action=domaineCreate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Domaines</a>
              </li> 


            </ul>
          </div> 
          <div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"><?php if (isset($_SESSION['name'])) echo $_SESSION['name'] ?></a>
              </li>
              <?php 
              //var_dump($_SESSION['auth']);
              if (isset($_SESSION['name'])) {?>      
              <li class="nav-item ml-auto"><a class="nav-link"  href="/projet/admin/logout.php" class="btn  btn-danger pull-left"> Deconnexion</a></li>  
              <?php } else {  ?>  
              <li class="nav-item"><a class="nav-link" href="/projet/admin/index.php" >Connexion</a></li>
            <?php             
                    } 
            //endif;
             ?> 
            </ul>
          </div> 
        </nav>
      </div>
    </div>
  </div> 

 