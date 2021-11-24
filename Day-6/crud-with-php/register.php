<?php
    $con = mysqli_connect("localhost", "root", "","user_db");
    
    if(isset($_GET["name"])){
        $name = $_GET["name"];
        $father_name = $_GET["father_name"];
        $mother_name = $_GET["mother_name"];
        $email = $_GET["email"];
        $gender = $_GET["gender"];
        $address = $_GET["address"];
        $city = $_GET["city"];

        $query = "INSERT INTO users (name, father_name, mother_name, gender, email, address, city) 
                  VALUES('$name', '$father_name', '$mother_name', '$gender', '$email', '$address', '$city') ";
        // INSERT INTO users (name, father_name, mother_name, gender, email, address, city) VALUES ('$name', '$father_name', '$mother_name', '$gender', '$email', '$address', '$city');
        $run = mysqli_query($con, $query);

        if($run){
            echo "data inserted";
            header("location: data.php");
        }
        echo mysqli_error($con);
    }
?>