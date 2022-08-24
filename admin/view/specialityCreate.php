<?php $title='Specialety' ?>
<?php ob_start(); ?>






<!-- <div class="col col-sm-6 col-md-6 col-lg-4"> -->
<div class="col">
    <?php 
    if(!isset($_GET['speciality_id'])) {
     // $speciality= null;
    ?>
      <form class="box" action="index.php?action=addSpeciality" method="post" >
    <?php    
    } else { 
        ?>
      <form class="box" action="index.php?action=modifySpeciality&amp;speciality_id=<?= $speciality['speciality_id'] ?>" method="post" >
    <?php    
    }  
    ?>
        <!--<h3 class="box-logo box-title"><a href="#">GESTION VACATAIRE</a></h3>-->
        <font color="orange">
        <?php if(isset($_GET['speciality_id']) and $_GET['speciality_id'] > 0) { ?>
        <font color="orange"><h5><b>MODIFICATION  D speciality</b></h5></font>
        <?php } else  {  ?>
        <font color="green"><h5><b>AJOUTE UN SPECIALITY :</b></h5></font>
        <?php } ?> 
        </font>
        <div class="form-group">
          <label for="code"></label>
           <input type="text" class="form-control" name="speciality_code" id="speciality_code"  placeholder="Code speciality formation" value='<?= $speciality['speciality_code'] ?? null ?>'required >
        </div>
        


        <div class="form-group">
          <label for="name"></label>
           <input type="text" class="form-control" name="speciality_name" id="speciality_name"  placeholder="Le Nom de speciality" value='<?= $speciality['speciality_name'] ?? null ?>'required >
        </div>
        
       
        <div class="form-group">
          <label for="desc"></label>
           <input type="text" class="form-control" name="speciality_desc" id="speciality_desc"  placeholder="Description de Speciality" value='<?= $speciality['speciality_desc'] ?? null ?>' required>
        </div>
        
        <?php if(isset($_GET['speciality_id']) and $_GET['speciality_id'] > 0) { ?>
        <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
      <?php } else  { ?>
        <button type="submit" class="btn btn-primary">Enregistrer </button>
      <?php } ?>
    </form>
</div>
</center>
<br>
<font color=" Green"><h5><b>LISTE DES SPECIALITIES :</b></h5></font><br>

  
<table class="table table-striped ">
  <thead class="thead-dark">
    
  <tr> 
<th scope="col">#</th>

      <th scope="col"> name</th>
    
      <th scope="col">Descreption</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 

<?php
$i=0;

  while ($data = $specialitys->fetch()) {
    $i++;  
?>   

  <tr>
  <th scope="row"><?= $i ?></th> 

<td><?= $data['speciality_name'] ?></td>

      <td><?= $data['speciality_desc'] ?></td>


            <td> <a href="index.php?action=specialityCreate&amp;speciality_id=<?= $data['speciality_id'] ?>"> <img src="/projet/public/images/edit1.jpg" width="25" height="25" title="Modifier "></a>
             <?php if($data['deleted'] == 0) { ?>
                <a href="index.php?action=specialityDisable&amp;speciality_id=<?= $data['speciality_id'] ?>"><img src="/projet/public/images/desactive.png" width="25" height="25" title="Desactiver"></a>
              <?php }else{ ?>
                 <a href="index.php?action=specialityEnable&amp;speciality_id=<?= $data['speciality_id'] ?>"><img src="/projet/public/images/active2.png" width="25" height="25" title="Activer"></a>
              <?php } ?></td>
              <div style="clear: both;"></div>
        </div> 
            
   
    </td></tr>          
<?php } ?>
</table>





<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
