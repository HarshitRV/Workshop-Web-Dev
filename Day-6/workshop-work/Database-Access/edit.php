<?php
    // UPDATE OPERATION
    // establishing connection with database
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "bca"
    );
    // getting the id from url
    $id = $_GET["id"];

    // querying the data for that id
    $query = "SELECT * FROM student WHERE id=$id";

    // running the query in database
    $run = mysqli_query($con, $query);

    // fetching the data as an array
    $row = mysqli_fetch_array($run);
    // printing the array
    // print_r($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body> 
    <?php
        $con = mysqli_connect("localhost","root","","bca");
        if(isset($_GET["update"])){
            $name = $_GET["name"];
            $rollno = $_GET["roll-no"];
            $age = $_GET["age"];
            $address = $_GET["address"];
            $city = $_GET["city"];
            $id = $_GET["id"];
            $query = "UPDATE student SET name='$name', roll_no='$rollno', age='$age', address='$address', city='$city' WHERE id='$id' ";
            $run = mysqli_query($con, $query);

            if($run){
                echo "updated";
            }
            echo mysqli_error($con);
            // redirects to connect.php page
            header('location: connect.php');
        }elseif(isset($_GET['id']) && isset($_GET['delete'])){
            $id = $_GET['id'];
            // $query = "UPDATE student SET status = '1' WHERE id = '$id' ";
            $query = "DELETE FROM student WHERE id = '$id' ";
            $run = mysqli_query($con, $query);

            if($run){
                echo "deleted";
                header('location: connect.php');
            }
        }
    ?>
    <div class="container">
        <form action="edit.php" method="GET" class="row">
            <div class="col">
                <h1>Edit Form</h1>
            </div>
            <div class="col">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $row["name"] ?>" id="name">
            </div>
            <div class="col">
                <label for="roll-no">Roll No</label>
                <input type="text" name="roll-no" value="<?php echo $row["roll_no"] ?>" id="roll-no">
            </div>
            <div class="col">
                <label for="age">Age</label>
                <input type="number" name="age" value="<?php echo $row["age"] ?>" id="age">
            </div>
            <div class="col">
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo $row["address"] ?>" id="id">
            </div>
            <div class="col">
                <label for="city">City</label>
                <select name="city" id="city">]
                    <option value="<?php echo $row["city"]  ?>"><?php echo $row["city"]  ?></option>
                    <option value="Noida">Noida</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                </select>
            </div>
            <div class="col">
                <label for="id"></label>
                <input type="hidden" name="id" value="<?php echo $id ?>" id="id">
            </div>
            <div class="col">
                <button type="submit" name="update">Update</button>
            </div>
        </form>
        <div class="row">
            <div class="col">
                <a class="view" href="connect.php">View Data</a>
            </div>
        </div>
       
    </div>
</body>

</html>