console.log("js loaded");

const validation = () => {
    let fName = document.forms["registeration"]["fName"].value;
    let lName = document.forms["registeration"]["lName"].value;
    let salary = document.forms["registeration"]["salary"].value;
    let dob = document.forms["registeration"]["dob"].value;
    let role = document.forms["registeration"]["role"].value;
    let startHour = document.forms["registeration"]["startHour"].value;
    let endHour = document.forms["registeration"]["endHour"].value;
    let relationship = document.forms["registeration"]["relationship"].value;
    let url = document.forms["registeration"]["linkedIn"].value;

    let intermediate = document.getElementById("10+2");
    let graduate = document.getElementById("graduate");
    let postGraduate = document.getElementById("post-graduate")

    console.log(intermediate.checked);
    console.log(graduate.checked);
    console.log(postGraduate.checked);

    console.log(fName, lName, salary, dob, role);
    console.log(startHour, endHour, relationship, intermediate);
    console.log(graduate, postGraduate);
    if(fName.length < 5 || lName.length < 5){
        alert("First or last name too short");
        return false;
    }
    if(salary == 0){
        alert("Salary cannot be zero");
        return false;
    }

    if(dob.length == 0){
        alert("DOB cannot be empty");
        return false;
    }else {
        dobArray = dob.split("-");
        if(dobArray[0] > 2003){
            alert("You are below the required age");
            return false;
        }
    }

    if(role.length == 0 || startHour.length == 0 || endHour.length == 0 || url.length == 0){
        alert("Any field cannot be empty")
        return false;
    }
    if (relationship.length == 0){
        alert("Select your martial status");
        return false;
    }

    if(intermediate.checked==false || graduate.checked==false || postGraduate.checked==false){
        alert("You are not eligble");
        return false;
    }

    alert("Confirm submit");
    return true;
}