  
<?php $title='Domaines' ?>
<?php ob_start(); ?>

<!-- <div class="col col-sm-6 col-md-6 col-lg-4"> -->
<div class="col">
    <?php 
    if(!isset($_GET['domaine_id'])) {
     // $domaine = null;
    ?>
      <form class="box" action="index.php?action=addDomaine" method="post" >
    <?php    
    } else { 
        ?>
      <form class="box" action="index.php?action=modifyDomaine&amp;domaine_id=<?= $domaine['domaine_id'] ?>" method="post" >
    <?php    
    }  
    ?>
        <!--<h3 class="box-logo box-title"><a href="#">GESTION VACATAIRE</a></h3>-->
        <font color="orange">
        <?php if(isset($_GET['domaine_id']) and $_GET['domaine_id'] > 0) { ?>
        <font color="orange"><h5><b>MODIFICATION DOMAINE</b></h5></font>
        <?php } else  {  ?>
        <font color="orange"><h5><b>CREATION DOMAINE</b></h5></font>
        <?php } ?> 
        </font>
        <div class="form-group">
          <label for="code">CODE DOMAINE FORMATION</label>
           <input type="text" class="form-control" name="domaine_code" id="domaine_code"  placeholder="Code domaine formation" value='<?= $domaine['domaine_code'] ?? null ?>'required >
        </div>
        <div class="form-group">
          <label for="name">DESIGNATION</label>
           <input type="text" class="form-control" name="domaine_name" id="domaine_name"  placeholder="Nom de domaine" value='<?= $domaine['domaine_name'] ?? null ?>' required>
        </div>
        <div class="form-group">
          <label for="desc">DESCRIPTION</label>
           <input type="text" class="form-control" name="domaine_desc" id="domaine_desc"  placeholder="Description Domaine" value='<?= $domaine['domaine_desc'] ?? null ?>' required>
        </div>

        
        <?php if(isset($_GET['domaine_id']) and $_GET['domaine_id'] > 0) { ?>
        <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
      <?php } else  { ?>
        <button type="submit" class="btn btn-primary">Enregistrer Domaine</button>
      <?php } ?>
    </form>
</div>
</center>
<br>
<font color="orange"><h5><b>LISTE DES DOMAINES</b></h5></font><br>

<table class="table table-striped ">
  <thead class="thead-dark">
    
  <tr> 
<th scope="col">#</th>

      <th scope="col"> DESIGNATION</th>
    
      <th scope="col">Descreption</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 

<?php
$i=0;

while ($data = $domaines->fetch()) {
  $i++;  
?>   

  <tr>
  <th scope="row"><?= $i ?></th> 

<td><?= $data['domaine_name'] ?></td>

      <td><?= $data['domaine_desc'] ?></td>


            <td> <a href="index.php?action=domaineCreate&amp;domaine_id=<?= $data['domaine_id'] ?>"> <img src="/projet/public/images/edit1.jpg" width="25" height="25" title="Modifier "></a>
             <?php if($data['deleted'] == 0) { ?>
                <a href="index.php?action=domaineDisable&amp;domaine_id=<?= $data['domaine_id'] ?>"><img src="/projet/public/images/desactive.png" width="25" height="25" title="Desactiver"></a>
              <?php }else{ ?>
                 <a href="index.php?action=domaineEnable&amp;domaine_id=<?= $data['domaine_id'] ?>"><img src="/projet/public/images/active2.png" width="25" height="25" title="Activer"></a>
              <?php } ?></td>
              <div style="clear: both;"></div>
        </div> 
            
   
    </td></tr>          
<?php } ?>
</table>






















 
<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
