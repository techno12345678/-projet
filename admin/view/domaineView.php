<?php $title = htmlspecialchars($domaine['domaine_id']); ?>

<?php ob_start(); ?>
<h1>Gestion de Vacataires</h1>
<p><a href="index.php">Retour à la liste des Domaines</a></p>

<div class="news">
    <h3>
        <?= htmlspecialchars($domaine['domaine_id']) ?>
        <!--<em>le <?= $domaine['domaine_name'] ?></em>-->
    </h3>
    
    <p>
        <!-- <?= nl2br(htmlspecialchars($domaine['domaine_name'])) ?> -->
    </p>
</div>

<h2>Specialit&eacute;s</h2>

<form action="index.php?menu=addSpeciality&amp;id=<?= $domaine['domaine_id'] ?>" method="post">
    
    <div>
        <label for="speciality">Specialit&eacute;</label><br />
        <input type="text" id="speciality_name" name="speciality_name"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
while ($speciality = $specialitys->fetch())
{
?>
    <p><?= nl2br(htmlspecialchars($speciality['speciality_name'])) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
