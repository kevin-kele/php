<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($_POST['password']=="kangourou"){
        include("info.php");
    } else
    
    {
        echo "Mot de passe faux";
    }
         
       
    ?>
</body>
</html>