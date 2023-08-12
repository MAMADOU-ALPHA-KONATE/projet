<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $updateId = $_POST['update_id'];
    $name = $_POST['name'];
    $dep = $_POST['dep'];
    $classe = $_POST['classe'];
    $email = $_POST['email'];

    $updateSql = "UPDATE groupe3 SET name='$name', dep='$dep', classe='$classe', email='$email' WHERE id='$updateId'";
    if ($con->query($updateSql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur lors de la mise à jour : " . $con->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $selectSql = "SELECT * FROM groupe3 WHERE id='$id'";
    $result = mysqli_query($con, $selectSql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Update Record</h2>
        <form method="post">
            <input type="hidden" name="update_id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label>Dep</label>
                <input type="text" class="form-control" name="dep" value="<?php echo $row['dep']; ?>">
            </div>
            <div class="form-group">
                <label>Classe</label>
                <input type="text" class="form-control" name="classe" value="<?php echo $row['classe']; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>
</html>
