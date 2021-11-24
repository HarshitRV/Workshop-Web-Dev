<?php
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "bca"
    );

    if($con){
        // echo "Connect";
    }

    // $query = "SELECT * FROM student";
    // $run = mysqli_query(
    //     $con,
    //     $query
    // );

    // print_r($run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>RollNo</td>
            <td>Age</td>
            <td>Address</td>
            <td>City</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        
            <?php
                $query = "SELECT * FROM student ORDER BY id DESC";
                    $run = mysqli_query(
                    $con,
                    $query
                );
            while($row = mysqli_fetch_array($run)){
            ?>
            <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["roll_no"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["city"]; ?></td>
            <td><a href="edit.php?id=<?php  echo $row['id']; ?>">Edit</a></td>    
            <td><a href="edit.php?delete=yes&id=<?php  echo $row['id']; ?>">Delete</a></td>    
        <?php } ?>
            </td>
    </table>
    <a href="register.php" target="_blank">Add new student</a>
</body>
</html>