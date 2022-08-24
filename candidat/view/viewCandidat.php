
<?php $title='Candidats' ?>
<?php ob_start(); ?>

<?php include_once "includes/head2.php"  ;?>



 
<body style="background-color:#CEC8C8" >
    <br>
  <div class="container">

        <?php   while ($data = $candidats->fetch()) {?>

     	<div class="row d-flex justify-content-center" style="margin-top:-30px">
		 <div class="col-md-10 mt-5 pt-5" style="top: 70px;"  >
             	<d class="row z-depth-3" >
                 	<div class="col-sm-4 bg-dark rounded-left" style="color:green">
					 <div class="card-block text-center text-white"style="margin-top: 200px;">

        		      
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                    		<h2 class="font-weight-bold mt-4"><?php echo $data ['nom'];?>&nbsp;<?php echo  $data ['prenom'];?></h2>
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h3 class="mt-3 text-center">INFORMATION</h3>
                    	<hr class="bg-primary mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Adresse:</p>
                           		<h6 class=" text-muted"><?php echo $data ['adresse'];?></h6>
                        	</div>
							
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Téléphone:</p>
                           		<h6 class="text-muted"><?php echo$data['telephone'];?></h6>
                        	</div>
                    	</div>

						<div class="row">
						<div class="col-sm-6">
                            	<p class="font-weight-bold">Date de naissance:</p>
                           		<h6 class=" text-muted"><?php echo $data ['birthday'];?></h6>
                        	</div>
							
                    	</div>


                        
                    		<h4 class="mt-3"></h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">candidat:</p>
                          	  	<h6 class="text-muted"><?php ?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Speciality:</p>
                            	<h6 class="text-muted"><?php ?></h6>
                        	</div>
                    	</div>
						
                    

                        <h4 class="mt-3">DIPLOME INFORMATION</h4>
                    		<hr class="bg-primary">
                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Diplome:</p>
                          	  <h6 class="text-muted"><?php echo $data['diplome'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Titre de diplome:</p>
                                <h6 class="text-muted"><?php echo $data['titrediplome'];?></h6>
                    	</div>
						<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Date:</p>
                           		<h6 class=" text-muted"><?php echo $data['datediplome'];?></h6>
                        	</div>
                        	
                    	</div>

						<h4 class="mt-3">FONCTION INFORMATION</h4>
                    		<hr class="bg-primary"style="width: 280px;">
    

                   		<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Fonction:</p>
                          	  <h6 class="text-muted"><?php echo $data['fonction'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Employeur:</p>
                                <h6 class="text-muted"><?php echo $data['employer'];?></h6>
                    	</div>
						<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Logiciel:</p>
                           		<h6 class=" text-muted"><?php echo $data['logiciel'];?></h6>
                        	</div>
                        	
                    	</div>



						<h4 class="mt-3">FORMATION DETAILS</h4>
                    		<hr class="bg-primary"style="width: 840px;">
							
							<div class="row">
                        	<div class="col-sm-6">
                           		<p class="font-weight-bold">Thème:</p>
                          	  <h6 class="text-muted"><?php echo $data['themef'];?></h6>
                        	</div>
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Lieu:</p>
                                <h6 class="text-muted"><?php echo $data['placef'];?></h6>
                    	</div>
						<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Date:</p>
                           		<h6 class=" text-muted"><?php echo $data['datef'];?></h6>
                        	</div>
							<div class="col-sm-6">
                            	<p class="font-weight-bold">Travailleur social:</p>
		                     <h6 class=" text-muted"><?php echo $data['categorie'];?></h6>
                        	</div>
                        	
                    	</div>

						</div>
						


                      <hr class="bg-primary">
                	    <div class="list-unstyled d-flex justify-content-center mt-4">
						 <a href="index.php?action=candidatCreate&amp;candidat_id=<?= $data['candidat_id'] ?> "style="background: #212121;padding: 10px 18px;text-decoration: none;color: #fff;display: inline-block;margin: 30px 100PX;border-radius: 5px;" >Modifier</a> 
						<a href="/projet/candidat/index.php" style="background: #212121;padding: 10px 18px;text-decoration: none;color: #fff;display: inline-block;margin: 30px 0;border-radius: 5px;" >VALIDER</a>
	               		</div>  
			<?php } ?>   			   				   </div>  
      </form>
  </body>
</html>

