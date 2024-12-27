<?php

include('./connexion.php');

$name = $prenom = $email = $nemuro = $photo = "";

if ( $_SERVER["REQUEST_METHOD"] == "POST")
{
 $input_name = ($_POST["name"]);
 $input_prenom = ($_POST["prenom"]);
 $input_photo = ($_POST["photo"]);
 $input_email = ($_POST["email"]);
 $input_nemuro = ($_POST["nemuro"]);


 $sql = "INSERT INTO Contacts (name , prenom , photo , email , nemuro) VALUES (?,?,?,?,?);";

 $stmt = mysqli_prepare($conn, $sql);
 mysqli_stmt_bind_param($stmt,"ssssi",$input_name,$input_prenom,$input_photo,$input_email,$input_nemuro);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);

}

       mysqli_close($conn);
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
<br><br>
<label for="name"> name:</label>
<input type="text"  name="name"><br><br>

<label for="prenom">prenom:</label>
<input type="text" name="prenom"><br><br>

<label for="photo">photo:</label>
<input type="file" name="photo"><br><br>

<label for="nemuro">nemuro de telephone</label>
<input type="number" name="nemuro"/><br><br>

<label for="email">email</label>
<input type="email" name="email"/><br><br>

<input type="submit" value="Submit">
</form>

</body>
</html>