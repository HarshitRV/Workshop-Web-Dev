const findSquare = () => {
    console.log("Hello this is find square")
    let num = document.forms["square"]["num"].value;
    document.getElementById("square").innerHTML = (`Square of ${num} is <b>${num**2}</b>`);
    return false; // page will not refresh
}

const primeOrNot = () => {
    console.log("Prime or not function");
    let num = document.forms["prime"]["num"].value;

    if(num <=1){
        document.getElementById("prime").innerHTML = (`${num} <b>is not</b> prime`);
        return false;
    }

    let c = 2;
    while(c**2 <= num){
        if(num % c === 0){
            document.getElementById("prime").innerHTML = (`${num} <b>is not</b> prime`);
            return false;
        }
        c++;
    }
    document.getElementById("prime").innerHTML = (`${num} <b>is prime</b>`);
    return false;
}
console.log("Hello from index.js")
const checkOddEven = () => {
    console.log("odd even function");
    let num = document.forms["oddEven"]["n"].value;

    if(num%2 == 0){
        document.getElementById("oddEve").innerHTML = (`${num} <b>is even</b>`);
        return false;
    } else {
        document.getElementById("oddEve").innerHTML = (`${num} <b>is odd</b>`);
        return false;
    }
}