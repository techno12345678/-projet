  
<?php $title='Utilisateures' ?>
<?php ob_start(); ?>






<!-- <div class="col col-sm-6 col-md-6 col-lg-4"> -->
<div class="col">
    <?php 
    if(!isset($_GET['util_id'])) {
     // $utilisateur= null;
    ?>
      <form class="box" action="index.php?action=addUtilisateur" method="post" >
    <?php    
    } else { 
        ?>
      <form class="box" action="index.php?action=modifyutilisateur&amp;util_id=<?= $utilisateur['util_id'] ?>" method="post" >
    <?php    
    }  
    ?>
        <!--<h3 class="box-logo box-title"><a href="#">GESTION VACATAIRE</a></h3>-->
        <font color="orange">
        <?php if(isset($_GET['util_id']) and $_GET['util_id'] > 0) { ?>
        <font color="orange"><h5><b>MODIFICATION  D UTILISATEUR</b></h5></font>
        <?php } else  {  ?>
        <font color="green"><h5><b>CREATION UTILISATEUR:</b></h5></font>
        <?php } ?> 
        </font>
        <div class="form-group">
          <label for="role"></label>
           <input type="text" class="form-control" name="util_role" id="util_role"  placeholder="ENTRER LE ROLE" value='<?= $utilisateur['util_role'] ?? null ?>'required >
        </div>
        
        <div class="form-group">
          <label for="splt"></label>
           <input type="text" class="form-control" name="util_speciality" id="util_speciality"  placeholder="ENTRER SPECIALITY" value='<?= $utilisateur['util_speciality'] ?? null ?>' required >
        </div>
        <div class="form-group">
          <label for="ndept"></label>
           <input type="text" class="form-control" name="util_dept" id="util_dept"  placeholder="ENTRER LE NUMERO DE DEPERTEMENT" value='<?= $utilisateur['util_dept'] ?? null ?>' required>
        </div>
        
        <?php if(isset($_GET['util_id']) and $_GET['util_id'] > 0) { ?>
        <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
      <?php } else  { ?>
        <button type="submit" class="btn btn-primary">Enregistrer </button>
      <?php } ?>
    </form>
</div>
</center>
<br>
<font color=" Green"><h5><b>LISTE DES UTILISATEURES:</b></h5></font><br>

  
<table class="table table-striped ">
  <thead class="thead-dark">
    
  <tr> 
<th scope="col">#</th>

      <th scope="col"> ROLE</th>
      <th scope="col">Specialety</th>
      <th scope="col">Depertement</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 

<?php
$i=0;

  while ($data = $utilisateures->fetch()) {
    $i++;  
?>   

  <tr>
  <th scope="row"><?= $i ?></th> 

<td><?= $data['util_role'] ?></td>
<td><?= $data['util_speciality'] ?></td>
      <td><?= $data['util_dept'] ?></td>


            <td> <a href="index.php?action=utilisateurCreate&amp; util_id=<?= $data['util_id'] ?>"> <img src="/projet/public/images/edit1.jpg" width="25" height="25" title="Modifier "></a>
             <?php if($data['deleted'] == 0) { ?>
                <a href="index.php?action=utilisateurDisable&amp;util_id=<?= $data['util_id'] ?>"><img src="/projet/public/images/desactive.png" width="25" height="25" title="Desactiver"></a>
              <?php }else{ ?>
                 <a href="index.php?action=utilisateurEnable&amp;util_id=<?= $data['util_id'] ?>"><img src="/projet/public/images/active2.png" width="25" height="25" title="Activer"></a>
              <?php } ?></td>
              <div style="clear: both;"></div>
        </div> 
            
   
    </td></tr>          
<?php } ?>
</table>





<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
