<?php
    $con = mysqli_connect("localhost", "root", "","college_db");
    
    if($con){
        // echo "connected";
    }

    $query = "SELECT * FROM teacher_info";
    $run = mysqli_query($con, $query);
    // print_r($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Database</title>
    <style>
        .container {
            margin:0 auto;
            width: 90%;
            max-width: 1128px;
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
            text-transform: capitalize;
            box-shadow: 0 0 10px;
            text-align: center;
            width:100%;
            font-family:'Courier New', Courier, monospace
        }
        th {
            background-color: grey;
            color: white;
        }

        tr:nth-child(even){
            background-color: grey;
            color:white;
        }

        a {
            text-decoration: none;
            background-color: green;
            color:white;
            padding:1%;
            font-weight: 400;
            font-family: sans-serif;
            border-radius: 5px;
        }
        .header {
            font-family: sans-serif;
        }
        .table--link-edit {
            text-decoration: none;
            background-color: blue;
            color:white;
            padding:2px 3px;
            font-weight: 200;
            font-family: sans-serif;
            border-radius: 0;
            font-size: 12px;
            border-radius: 2px;
        }
        .table--link-delete {
            text-decoration: none;
            background-color: red;
            color:white;
            padding:0;
            padding:2px 3px;
            font-weight: 200;
            font-family: sans-serif;
            border-radius: 0;
            font-size: 12px;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="container row">
        <h1 class="header col">Teachers Data</h1>
        <table class="col">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>address</th>
                    <th>gender</th>
                    <th>city</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = mysqli_fetch_array($run)){
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                    <td><?php echo $row["phone"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["address"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["city"] ?></td>
                    <td><a class="table--link-edit" href="edit.php?id=<?php  echo $row['id']; ?>">Edit</a></td>    
                    <td><a class="table--link-delete" href="edit.php?delete=yes&id=<?php  echo $row['id']; ?>">Delete</a></td> 
                </tr>

                <?php } ?>
            </tbody>
        </table>
        <p><a href="index.html">Add data</a></p>
    </div>
</body>
</html>