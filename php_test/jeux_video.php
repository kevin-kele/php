<?php 

$bdd= new PDO('mysql:host=localhost;dbname=test','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=?');
$requete ->execute(array($_POST['jeux']));
 while ($donnees = $requete ->fetch()) {
     echo '<p>'.$donnees['console'] .' - ' .$donnees['nom'] . ' - '. $donnees['prix'].'€'.'</p>';
 }

?>