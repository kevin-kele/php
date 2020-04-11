<?php 

$bdd= new PDO('mysql:host=localhost;dbname=test','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete = $bdd->prepare('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES(?,?,?,?,?,?)');
$requete ->execute(array($_POST['nom'],$_POST['possesseur'],$_POST['console'],$_POST['prix'],$_POST['nbjoueur'],$_POST['commentaires']));

?>