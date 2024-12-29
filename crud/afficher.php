<?php
include('./connexion.php');
$photo = $nom = $prenom = $email = $email = '';

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    $id = $_POST["id"];
    $input_photo = trim($_POST["photo"]);
    $input_nom = trim($_POST["nom"]);
    $input_prenom = trim($_POST["prenom"]);
    $input_email = trim($_POST["email"]);
    $input_nemuro = trim($_POST["nemuro"]);
}

$sql = "UPDATE Contacts SET photo= ? , nom = ?, prenom =?,nemuro = ? 
, email =? where id = ?";

if ($stmt = mysqli_prepare($conn, $sql)) {

    mysqli_stmt_bind_param($stmt, "isssss", $param_id, $param_photo, $param_nom, $param_prenom, $param_email, $param_nemuro);

    $param_id = $id;
    $param_photo = $photo;
    $param_nom = $nom;
    $param_prenom = $prenom;
    $param_email = $email;
    $param_nemuro = $nemuro;


    if (mysqli_stmt_execute($stmt)) {
        header("location: index.php");
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}

// Close statement
mysqli_stmt_close($stmt);
