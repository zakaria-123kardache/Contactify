<?php
include('./connexion.php');

?><?php
// include('./connexion.php');
    if (isset($_POST["id"]) && !empty($_POST["id"])){
        include('./connexion.php');

        $sql = "DELETE FROM Contacts WHERE id = ?";
        if($stmt = mysqli_prepare($conn , $sql)){
            mysqli_stmt_bind_param($stmt, 'i', $param_id);
            $param_id = trim($_POST ['id']);
            if(mysqli_stmt_execute($stmt)){
                header("location : index.php");
                exit();
            }
        }
        // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
    }



?>