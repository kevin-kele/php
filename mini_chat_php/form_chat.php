<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_chat.php" method="post">
    <p><label>Pseudo :  <input type="text" name="pseudo"></label></p>
    <p><label>Message :  <input type="text" name="message"></label></p>
    <p><input type="submit"  value="envoyer"></p>
    </form>

    <?php 

$bdd= new PDO('mysql:host=localhost;dbname=test','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT * FROM `chat` WHERE 1');
 while ($donnees = $reponse ->fetch()) {
     echo '<p>'.'<strong>'.$donnees['pseudo'].'</strong>' .' : ' .$donnees['message'].'</p>'.' : ' .$donnees['date_ajout'].'</p>';
 }

?>

</body>
</html>