<?php
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "user_db"
    );

    $id = $_GET["id"];
    // echo $id;

        
    $query = "SELECT * FROM users WHERE id=$id ";
    $run =  mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);

    // print_r($row);
    if(isset($_GET["update"])){ 
        // echo "<br><br>in update block";

        // $con = mysqli_connect("localhost", "root", "", "user_db");
        
        // $id = $_GET["id"];

        // echo "<br>id inside of update = ";
        // echo $id;

        $name = $_GET["name"];
        $father_name = $_GET["father_name"];
        $mother_name = $_GET["mother_name"];
        $gender = $_GET["gender"];
        $email = $_GET["email"];
        $address = $_GET["address"];
        $city = $_GET["city"];

        echo "<br>name = ".$name;
        echo "<br>gender = ".$gender;

        $query = "UPDATE users SET name='$name', father_name='$father_name', mother_name='$mother_name', gender='$gender', email='$email', address='$address', city='$city' WHERE id='$id' ";
        $run =  mysqli_query($con, $query);

        if($run){
            echo "<br>updated";
            header("location: data.php");
        }
        echo mysqli_error($con);

    }elseif(isset($_GET['id']) && isset($_GET['delete'])){
        // $id = $_GET['id'];
        // $query = "UPDATE student SET status = '1' WHERE id = '$id' ";
        $query = "DELETE FROM users WHERE id = '$id' ";
        $run = mysqli_query($con, $query);

        if($run){
            echo "deleted";
            header('location: data.php');
        }
        echo mysqli_error($con);
    }
    
    echo mysqli_error($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <div class="container"> 
                <h1>Form</h1>
                <form action="edit.php", method="GET", class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $row["name"] ?>">
                    </div>
                    <div class="col">
                        <label for="father_name">Father name</label>
                        <input type="text" name="father_name" id="father_name" value="<?php echo $row["father_name"] ?>">
                    </div> 
                    <div class="col">
                        <label for="mother_name">Mother name</label>
                        <input type="text" name="mother_name" id="mother_name" value="<?php echo $row["mother_name"] ?>">
                    </div>
                    <div class="col">
                        <p>Gender</p>
                        <div class="radio">
                            <input type="radio" name="gender" id="male" value="male">
                            <label for="male">Male</label> 
                        <div>
                        <div class="radio">
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>                         
                        <div class="radio">
                        <input type="radio" name="gender" id="non-binary" value="non-binary">
                            <label for="non-binary">Non-binary</label>                          
                        <div class="radio">
                            <input type="radio" name="gender" id="prefer-not-to-say" value="prefer-not-to-say"> 
                            <label for="prefer-not-to-say">Prefer not to say</label>                         
                        </div>
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $row["email"] ?>">
                    </div>
                    <div class="col">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="30" rows="5"><?php echo $row["address"] ?></textarea>
                    </div>
                    <div class="col">
                        <label for="city">Select your city</label>
                        <select name="city" id="city">
                            <option value="<?php echo $row["city"] ?>"><?php echo $row["city"] ?></option>
                            <option value="">--select city--</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Lucknow">Lucknow</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="id"></label>
                        <input type="hidden" name="id" value="<?php echo $id ?>" id="id">
                    </div>

                    <div class="col">
                        <button type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="index.js"></script>
</body>
</html>