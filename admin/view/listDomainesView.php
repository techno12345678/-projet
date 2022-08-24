<?php $title = 'Gestion Vacataires'; ?>

<?php ob_start(); ?>



<!--<p>IAP - Institut Algerien du P&eacute;trole</p>-->

<div class="container-fluid banner">
<br><br><br>
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					
			</div>
			<div class="col-md-8 offset-md-2 info"style=" " class="alert alert-success" role="alert">
				<h1 class="text-center"style="color:#CD5C5C">BienvenuE</h1>
				<br>
				<h6 class="text-center"style="color:#191970">
					Bienvenue sur la page admin !
				</h6>
                
				<a href="#" class="btn btn-md text-center"style="background-color:#FF6347" >GET STARTED</a>
			</div>
		</div>
	</div>
    </body>












<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>