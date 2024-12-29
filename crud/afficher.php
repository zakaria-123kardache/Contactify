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

    mysqli_stmt_bind_param($stmt, "sssssi", $photo, $nom, $prenom, $nemuro, $email, $id);

    // $param_id = $id;
    // $param_photo = $photo;
    // $param_nom = $nom;
    // $param_prenom = $prenom;
    // $param_email = $email;
    // $param_nemuro = $nemuro;


    if (mysqli_stmt_execute($stmt)) {
        header("location: index.php");
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
    // Close statement
    mysqli_stmt_close($stmt);
}


    
// Close connection
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Contact</h2>
                    <p>Please edit the input values and submit to update the Contact</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>photo</label>
                            <textarea name="photo" class="form-control"><?php echo $photo; ?></textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>prenom</label>
                            <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>nemuro</label>
                            <input type="text" name="nemuro" class="form-control" value="<?php echo $nemuro; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                            
                        </div>
                        
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>