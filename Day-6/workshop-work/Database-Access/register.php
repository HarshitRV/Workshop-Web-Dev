<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body> 
    <?php
        $con = mysqli_connect("localhost","root","","bca");
        if(isset($_GET["name"])){
            $name = $_GET["name"];
            $rollno = $_GET["roll-no"];
            $age = $_GET["age"];
            $address = $_GET["address"];
            $city = $_GET["city"];

            $query = "INSERT INTO student (name, roll_no, age, address, city) VALUES('$name','$rollno', '$age', '$address', '$city')";

            $run = mysqli_query($con, $query);

            if($run){
                echo "data inserted";
            }
            echo mysqli_error($con);
            header('location: connect.php');
        }
    ?>
    <div class="container">
        <form action="register.php" method="GET" class="row">
            <div class="col">
                <h1>Registration Form</h1>
            </div>
            <div class="col">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="col">
                <label for="roll-no">Roll No</label>
                <input type="text" name="roll-no" id="roll-no" required>
            </div>
            <div class="col">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" required>
            </div>
            <div class="col">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="col">
                <label for="city">Select your city</label>
                <select name="city" id="city" required>
                    <option value="varanasi">Varanasi</option>
                    <option value="noida">Noida</option>
                </select>
            </div>
            <div class="col">
                <button type="submit">Submit</button>
            </div>
        </form>
        <div class="row col link">
                <a href="connect.php" target="_blank">View Data</a>
        </div>
       
    </div>
</body>

</html>