

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <title>Contactify</title>
</head>
<body>
  


<form action="./add.php" method="POST">
  <div class="form-row">

  <div class="col-md-6 mb-3">
      <label for="photo">photo</label>
      <input type="file" class="form-control" id="photo" name="photo" placeholder="entre ur URL here" >
    </div>
    <div class="col-md-4 mb-3">
      <label for="nom">First name</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="First name">
    </div>
   
    
  </div>

  <div class="form-row">
  <div class="col-md-4 mb-3">
      <label for="prenom">Last name</label>
      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Last name" >
    </div>

    <div class="col-md-3 mb-3">
      <label for="email">email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="ur email" >
    </div>
    <div class="col-md-3 mb-3">
      <label for="nemuro">nemuro</label>
      <input type="number" class="form-control" id="nemuro" name="numero" placeholder="le numero de telefo" >
    </div>

    
  </div>
 
  <button class="btn btn-primary" type="submit">Submit </button>
</form>


</body>
</html>

<?php
include('./connexion.php');



$sql = " SELECT * FROM Contacts";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {

      echo "<main class=\"py-6 bg-surface-secondary\"> ";
      echo "<div class=\"container-fluid\">";
      echo "<div class=\"card shadow border-0 mb-7\">";
      echo "<div class=\"card-header\">";
      echo "<h5 class=\"mb-0\">Applications</h5>";
      echo "</div>";
      echo "<div class=\"table-responsive\">";
      echo "<table class=\"table table-hover table-nowrap\">";
      echo "<thead class=\"thead-light\">";
      echo "<th scope=\"col\">#id</th>";
      echo "<th scope=\"col\">nom</th>";
      echo "<th scope=\"col\">prénom</th>";
      echo "<th scope=\"col\">photo</th>";
      echo "<th scope=\"col\">email</th>";
      echo "<th scope=\"col\">numéro de téléphone</th>";
      echo "<th scope=\"col\" class=\"text-center\">Action</th>";
      echo "<th></th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      while ($row = mysqli_fetch_array($result)) {
        echo " <tr>";
        echo " <td>" . $row['id'] . "</td>";
        echo "<td>" . "<img src =\"" . $row['photo'] . "\" class=\"avatar avatar-sm rounded-circle me-2\">" . "</td>";
        echo "  <td class=\"text-heading font-semibold\">"  . $row['nom'] . "</td>";

        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['prenom'] . "</span>" . "</td>";

        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['email'] . "</span>" . "</td>";

        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['numero'] . "</span>" . "</td>";

        echo "<td class=\"text-end\">";
        echo "<a class=\"btn d-inline-flex btn-sm btn-warning mx-1 \">" . "<span>" . "View" . "</span>" . "</a>";
        echo "<a class=\"btn d-inline-flex btn-sm btn-primary mx-1\">";
        
        echo "<form action=\"./edit.php\" method=\"POST\" style=\"display:inline;\">";
        echo "<input type=\"hidden\" name=\"id\" value=\"" . $row['id'] . "\" class=\"pe-2 \">";
        echo "<button type=\"submit\" style=\"background:none; border:none;\">";
        echo "<i class=\"bi bi-pencil\"></i><span>Edit</span>";
        echo "</button>";
        echo "</form>";
        
        echo "<a class=\"btn d-inline-flex btn-sm btn-primary mx-1\">";

        echo "<form action=\"./delet.php\" method=\"POST\" style=\"display:inline;\">";
        echo "<input type=\"hidden\" name=\"id\" value=\"" . $row['id'] . "\">";
        echo "<button type=\"submit\" class=\"btn btn-sm  text-danger \">" . "<i class=\"bi bi-trash\"></i>" . "</button>";
        echo "</form>";
        
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</main>";

    mysqli_free_result($result);
  } else {
      echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
  }
} else {
  echo "error.";
}


// Close connection
mysqli_close($conn);

?>