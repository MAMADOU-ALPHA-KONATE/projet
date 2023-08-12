<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Create new</a></button>
        <table class="table">
            <thead> 
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th> 
                    <th scope="col">Dep</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connect.php';

                $imagePath = 'images/';

                $sql = "SELECT * FROM groupe3"; 
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $image = $row['image'];
                        $dep = $row['dep'];
                        $classe = $row['classe'];
                        $email = $row['email'];
                        
                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td><img src="' . $imagePath . $image . '" alt="' . $image . '" style="max-width: 100px; max-height: 100px;"></td>
                            <td>' . $dep . '</td>
                            <td>' . $classe . '</td>
                            <td>' . $email . '</td>
                            <td>
                                <button class="btn btn-primary"><a href="update.php?id=' . $id . '" class="text-light">Update</a></button>
                                <button class="btn btn-danger"><a href="display.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
                            </td>
                        </tr>';
                    }
                }

                // Gérer la suppression
                if (isset($_GET['deleteid'])) {
                    $deleteId = $_GET['deleteid'];

                    $deleteSql = "DELETE FROM groupe3 WHERE id='$deleteId'";
                    $deleteResult = mysqli_query($con, $deleteSql);
                    
                    if ($deleteResult) {
                        header("Location: display.php");
                        exit();
                    } else {
                        echo "Erreur lors de la suppression : " . mysqli_error($con);
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
