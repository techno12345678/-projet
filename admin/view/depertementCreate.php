<?php $title='Depertement' ?>
<?php ob_start(); ?>






<!-- <div class="col col-sm-6 col-md-6 col-lg-4"> -->
<div class="col">
    <?php 
    if(!isset($_GET['depertement_id'])) {
     // $depertement= null;
    ?>
      <form class="box" action="index.php?action=addDepertement" method="post" >
    <?php    
    } else { 
        ?>
      <form class="box" action="index.php?action=modifyDepertement&amp;depertement_id=<?= $depertement['depertement_id'] ?>" method="post" >
    <?php    
    }  
    ?>
        <!--<h3 class="box-logo box-title"><a href="#">GESTION VACATAIRE</a></h3>-->
        <font color="orange">
        <?php if(isset($_GET['depertement_id']) and $_GET['depertement_id'] > 0) { ?>
        <font color="orange"><h5><b>MODIFICATION   UN DEPERTEMENT :</b></h5></font>
        <?php } else  {  ?>
        <font color="green"><h5><b>AJOUTE UN DEPERTEMENT :</b></h5></font>
        <?php } ?> 
        </font>
        <div class="form-group">
          <label for="code"></label>
           <input type="text" class="form-control" name="depertement_code" id="depertement_code"  placeholder="Code depertement formation" value='<?= $depertement['depertement_code'] ?? null ?>'required >
        </div>
        


        <div class="form-group">
          <label for="name"></label>
           <input type="text" class="form-control" name="depertement_name" id="depertement_name"  placeholder="Le Nom de depertement" value='<?= $depertement['depertement_name'] ?? null ?>'required >
        </div>
        
       
        <div class="form-group">
          <label for="numr"></label>
           <input type="text" class="form-control" name="depertement_numr" id="depertement_numr"  placeholder="Numero de depertement" value='<?= $depertement['depertement_numr'] ?? null ?>' required>
        </div>
        
        <?php if(isset($_GET['depertement_id']) and $_GET['depertement_id'] > 0) { ?>
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

      <th scope="col"> Name</th>
    
      <th scope="col">Descreption</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 

<?php
$i=0;

  while ($data = $depertements->fetch()) {
    $i++;  
?>   

  <tr>
  <th scope="row"><?= $i ?></th> 

<td><?= $data['depertement_name'] ?></td>

      <td><?= $data['depertement_numr'] ?></td>


            <td> <a href="index.php?action=depertementCreate&amp;depertement_id=<?= $data['depertement_id'] ?>"> <img src="/projet/public/images/edit1.jpg" width="25" height="25" title="Modifier "></a>
             <?php if($data['deleted'] == 0) { ?>
                <a href="index.php?action=depertementDisable&amp;depertement_id=<?= $data['depertement_id'] ?>"><img src="/projet/public/images/desactive.png" width="25" height="25" title="Desactiver"></a>
              <?php }else{ ?>
                 <a href="index.php?action=depertementEnable&amp;depertement_id=<?= $data['depertement_id'] ?>"><img src="/projet/public/images/active2.png" width="25" height="25" title="Activer"></a>
              <?php } ?></td>
              <div style="clear: both;"></div>
        </div> 
            
   
    </td></tr>          
<?php } ?>
</table>





<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
