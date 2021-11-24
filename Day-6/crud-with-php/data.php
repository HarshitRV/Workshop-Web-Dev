<?php
    $con = mysqli_connect("localhost", "root", "","user_db");
    
    if($con){
        // echo "connected";
    }

    $query = "SELECT * FROM users";
    $run = mysqli_query($con, $query);
    // print_r($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Contents</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container--data">
    <h1>user data</h1>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>father_name</th>
            <th>mother_name</th>
            <th>gender</th>
            <th>email</th>
            <th>address</th>
            <th>city</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($run)){

            
        ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["father_name"] ?></td>
                <td><?php echo $row["mother_name"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["address"] ?></td>
                <td><?php echo $row["city"] ?></td>
                <td><a href="edit.php?id=<?php  echo $row['id']; ?>">Edit</a></td>    
                <td><a href="edit.php?delete=yes&id=<?php  echo $row['id']; ?>">Delete</a></td> 
            </tr>

        <?php } ?>
    </table>
    </div>
</body>
</html>