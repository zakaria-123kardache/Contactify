<?php

include('./crud/connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat</title>
</head>
<body>
    
   

<form action="add.php" method="POST">

<label for="name"> name:</label><br>
<input type="text"  name="name"><br>

<label for="prenom">prenom:</label><br>
<input type="text" name="prenom"><br><br>

<label for="photo">photo:</label><br>
<input type="file" name="photo"><br><br>

<label for="date">:</label>
<input type="date" name="date"><br><br>

<label for="nemuro">nemuro de telephone</label>
<input type="number" /><br><br>

<label for="email">email</label>
<input type="email" /><br><br>

<input type="submit" value="Submit">
</form>

</body>
</html>