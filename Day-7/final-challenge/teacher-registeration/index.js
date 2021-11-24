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