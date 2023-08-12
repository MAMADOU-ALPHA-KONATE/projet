<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label>Dep</label>
                <input type="text" class="form-control" placeholder="Enter your Dep" name="dep" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Class</label>
                <input type="text" class="form-control" placeholder="Classe" name="classe" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $email = $_POST['email'];
    $classe = $_POST['classe'];
    
    $image = $_FILES['image']['name']; // Nom de l'image uploadée

    // Déplacez l'image uploadée vers le dossier images (à l'intérieur de htdocs)
    move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);

    $sql = "INSERT INTO groupe3 (name, image, dep, email, classe)
    VALUES ('$name', '$image', '$dep', '$email', '$classe')";
    
    $result = mysqli_query($con, $sql);
    
    if ($result) {   
        // Redirigez vers la page d'affichage des enregistrements
        header('location: display.php');
    } else { 
        die(mysqli_error($con));
    }  
}
?>