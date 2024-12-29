<?php
include('./connexion.php');

$nom = $prenom = $photo = $email = $nemuro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
   $input_name = ($_POST['nom'] ?? '');
  $input_prenom = ($_POST['prenom'] ?? '');
  $input_photo = ($_POST['photo'] ?? '');
  $input_email = ($_POST['email'] ?? '');
  $input_numero = ($_POST['numero'] ?? '');


  $sql = "INSERT INTO Contacts (photo, nom, prenom, email, numero)
   VALUES (?,?,?,?,?); ";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt , 'sssss', $input_photo, $input_name,
   $input_prenom , $input_email , $input_numero);
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
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <title>Creat</title>
</head>
<body>
    
   

</body>
</html>