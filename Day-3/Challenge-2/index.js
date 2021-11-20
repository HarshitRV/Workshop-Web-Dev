console.log("index.js loaded")
const listOddEven = () => {
    console.log("listOddEven function")

    let lowerLimit = document.forms["findOddEven"]["lowerLimit"].value;
    let upperLimit = document.forms["findOddEven"]["upperLimit"].value;

    if (lowerLimit>upperLimit){
        alert("Lower limit cannot be greater than upper limit")
        return true;
    }

    let evenArray = [];
    let sumEven = 0;
    let sumOdd = 0;
   
    for (let i=lowerLimit; i<=upperLimit; i++){
        console.log(typeof(i))
        if(i%2 === 0){
            evenArray.push(i);
            sumEven =  Number(sumEven)+Number(i);
        }
        sumOdd = Number(sumOdd)+Number(i);
    }

    document.getElementById("list").innerHTML = (`List of even nums : ${evenArray}`);
    document.getElementById("sumEven").innerHTML = (`Sum of all even nums in given range is <strong>${sumEven}</strong>`)
    document.getElementById("sumOdd").innerHTML = (`Sum of all odd nums in given range is <strong>${sumOdd}</strong>`)
    
    return false;
}