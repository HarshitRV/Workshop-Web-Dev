<?php
    $con = mysqli_connect("localhost", "root", "","college_db");
    
    if(isset($_GET["name"])){
        $name = $_GET["name"];
        $age = $_GET["age"];
        $phone = $_GET["phone"];
        $email = $_GET["email"];
        $gender = $_GET["gender"];
        $address = $_GET["address"];
        $city = $_GET["city"];

        $query = "INSERT INTO teacher_info (name, age, phone, email, gender, address, city) 
                  VALUES('$name', '$age', '$phone', '$email', '$gender', '$address', '$city') ";
       
        $run = mysqli_query($con, $query);

        if($run){
            echo "data inserted";
            header("location: data.php");
        }
        echo mysqli_error($con);
    }
?>