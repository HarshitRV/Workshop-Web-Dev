console.log("js loaded")

const validation = () => {
    let fName = document.forms["signUpForm"]["fName"].value;
    let lName = document.forms["signUpForm"]["lName"].value;
    let fatherName = document.forms["signUpForm"]["fatherName"].value;
    let motherName = document.forms["signUpForm"]["motherName"].value;
    let emailID = document.forms["signUpForm"]["email"].value;
    let address = document.forms["signUpForm"]["address"].value;
    let city = document.forms["signUpForm"]["city"].value;
    let gender = document.forms["signUpForm"]["gender"].value;
    let dob = document.forms["signUpForm"]["dob"].value;
    let phoneNumber = document.forms["signUpForm"]["phoneNum"].value;

    if(fName.length < 3 || lName.length<3){
        alert("Invalid name");
        return false;
    }

    if(fatherName.length<8 || motherName.length<8){
        alert("Invalid name");
        return false;
    }

    if(emailID.length < 7){
        alert("Invalid email id");
        return false;
    }

    if(phoneNumber.length < 10 || phoneNumber.length > 10){
        alert("Invalid phone number")
        return false;
    }

    if (address.length < 20){
        alert("Invalid address");
        return false;
    }

    if(city.length == 0){
        alert("Plese select your city.");
        return false;
    }

    if(gender.length == 0){
        alert("Select your gender");
        return false;
    }

    if (dob.length == 0){
        alert("Enter your date of birth");
        return false;
    }else {
        let dobArr = dob.split("-");
        if(Number(dobArr[0]) > 2002){
            alert("You are below 18 years of age.")
            return false
        }
    }
    console.log(dob);
    alert("Submit form!");
    return true;
}