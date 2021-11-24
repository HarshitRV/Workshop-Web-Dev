<?php
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "college_db"
    );

    $id = $_GET["id"];
    // echo $id;

        
    $query = "SELECT * FROM teacher_info WHERE id=$id ";
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
        $age = $_GET["age"];
        $phone = $_GET["phone"];
        $email = $_GET["email"];
        $address = $_GET["address"];
        $gender = $_GET["gender"];
        $city = $_GET["city"];

        // echo "<br>name = ".$name;
        // echo "<br>gender = ".$gender;

        $query = "UPDATE teacher_info SET name='$name', age='$age', phone='$phone', gender='$gender', email='$email', address='$address', city='$city' WHERE id='$id' ";
        $run =  mysqli_query($con, $query);

        if($run){
            echo "<br>updated";
            header("location: data.php");
        }
        echo mysqli_error($con);

    }elseif(isset($_GET['id']) && isset($_GET['delete'])){
        // $id = $_GET['id'];
        // $query = "UPDATE student SET status = '1' WHERE id = '$id' ";
        $query = "DELETE FROM teacher_info WHERE id = '$id' ";
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
                <form name="register" onsubmit="return validation()" action="edit.php", method="GET", class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $row["name"] ?>">
                    </div>
                    <div class="col">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" value="<?php echo $row["age"] ?>">
                    </div> 
                    <div class="col">
                        <label for="phone">Phone number</label>
                        <input type="text" name="phone" id="phone" value="<?php echo $row["phone"] ?>">
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
    <script>
        console.log("js loaded");

        const validation = () => {
            let name = document.forms["register"]["name"].value;
            let age = document.forms["register"]["age"].value;
            let phone = document.forms["register"]["phone"].value;
            let email = document.forms["register"]["email"].value;
            let address = document.forms["register"]["address"].value;
            let gender = document.forms["register"]["gender"].value;
            let city = document.forms["register"]["city"].value;

            // console.log(name, age, phone, email);
            // console.log(email, address, gender, city);
            
            if (name.length < 5){
                alert("Name too short");
                return false;
            }
            if(age < 18){
                alert("Age too short")
                return false;
            }

            if(email.length < 6){
                alert("Invalid email, enter a valid one.");
                return false
            }

            if(phone.length != 10){
                alert("Invalid phone number. Enter a valid 10 digits number.");
                return false;
            }
            if (address.length < 30){
                alert("Address too short")
                return false;
            }

            if(gender.length == 0){
                alert("Select your gender");
                return false;
            }
            if(city.length == 0){
                alert("Select your city");
                return false;
            }

            alert("This will submit the form");
            return true;
        }
    </script>
</body>
</html>