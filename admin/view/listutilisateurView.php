<?php $title = 'Gestion Vacataires'; ?>

<?php ob_start(); ?>
<!--<p>IAP - Institut Algerien du P&eacute;trole</p>-->
<h5><font color="orange"><b>DOMAINES DE FORMATION</b></font></h5>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l’Institut Alg&eacute;rien du P&eacute;trole -IAP a pour mission principale d’accompagner la transformation de l’Entreprise SONATRACH par la formation, <br>le perfectionnement et le recyclage dans les différents domaines d'activité du secteur de l'énergie et en particulier des hydrocarbures.
<hr>
<?php
while ($data = $utilisateures->fetch())
{
?>
    <div class="news">
            <font color="orange"><?= strtoupper(htmlspecialchars($data['util_role'])) ?></font>
        <p>
            <em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= nl2br(htmlspecialchars($data['util_speciality'])) ?></em>
            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
    </div>
<?php
}
$utilisateures->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>