
<?php 

$bdd= new PDO('mysql:host=localhost;dbname=test','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete = $bdd->prepare('INSERT INTO chat(pseudo,message) VALUES(?,?)');
$requete ->execute(array($_POST['pseudo'],$_POST['message']));
header('Location: form_chat.php');
?>





