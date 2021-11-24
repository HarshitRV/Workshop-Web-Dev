<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="user_data.css">
</head>
<body>
    <?php
        $con = mysqli_connect(
            "localhost",
            "root",
            "",
            "user_db"
        );

        if ($con){
            // echo "connected";
        }
        $query = "SELECT * FROM users";
        $run = mysqli_query (
            $con,
            $query
        );

        // print_r($run);
    ?>
    <main class="">
        <div class="container">
            <div class="row">
                <table>
                    <tr>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Father Name</td>
                        <td>Mother Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Address</td>
                        <td>City</td>
                        <td>DOB</td>
                        <td>Gender</td>
                        <td>Age</td>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($run)){
                    ?>
                        <tr>
                            <td><?php echo $row["ID"]; ?></td>
                            <td><?php echo $row["FirstName"]; ?></td>
                            <td><?php echo $row["LastName"]; ?></td>
                            <td><?php echo $row["FatherName"]; ?></td>
                            <td><?php echo $row["MotherName"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["Phone"]; ?></td>
                            <td><?php echo $row["Address"]; ?></td>
                            <td><?php echo $row["City"]; ?></td>
                            <td><?php echo $row["DOB"]; ?></td>
                            <td><?php echo $row["Gender"]; ?></td>
                            <td><?php echo $row["Age"]; ?></td>
                        </tr>
                    <?php  } ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>