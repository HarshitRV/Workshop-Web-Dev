<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <form name="signUpForm" onsubmit="return validation()" class="row">
            <div class="col">
                <h1>Form</h1>
            </div>
            <div class="col">
                <label for="fName">First Name</label>
                <input type="text" name="fName" id="fName" placeholder="Your first name">
            </div>
            <div class="col">
                <label for="lName">Last Name</label>
                <input type="text" name="lName" id="lName" placeholder="Your last name">
            </div>
            <div class="col">
                <label for="fatherName">Father's Name</label>
                <input type="text" name="fatherName" id="fatherName" placeholder="Your father's name">
            </div>
            <div class="col">
                <label for="motherName">Mother's Name</label>
                <input type="text" name="motherName" id="motherName" placeholder="Your mother's name">
            </div>
            <div class="col">
                <label for="email">Email ID</label>
                <input type="email" name="email" id="email" placeholder="Your email id">
            </div>
            <div class="col">
                <label for="phNumber">Phone Number</label>
                <input type="number" name="phoneNum" id="phNumber" min="0" placeholder="Your phone number">
            </div>
            <div class="col">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="" rows="">Your address...</textarea>
            </div>
            <div class="col">
                <label for="city">Enter name of your city</label>
                <input type="text" name="city" id="city">
            </div>
            <div class="col">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob">
            </div>
            <div class="col">
                <label for="age">Age</label>
                <input type="number" min="18" max="65" name="age" id="age">
            </div>
            <div class="col">
                <label for="gender">Gender</label><br>
                <label for="male">Male</label>
                <input class="radio" type="radio" name="gender" id="male" value="male">
                <label for="female">Female</label>
                <input class="radio" type="radio" name="gender" id="female" value="female">
            </div>
            <div class="col">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>