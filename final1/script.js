
// function sayHelloToMyLittleFriend() {
//     document.getElementById('btn1').style.backgroundColor = "red";
//     document.getElementById('btn1').value = "adios";
    
// }

// function sayHello() {
//     document.getElementById('btn1').value = "hello, there!";
//     document.getElementById('btn1').style.backgroundColor = "green";
// }


function tempConvert() {
    var clsius = Number(document.getElementById('clesiusID').value);
    var ans = (clsius * 9/5) + 32;
    
    // value = text, input type submit
    // innertext = to change in body
    document.getElementById('farenheite').innerHTML = ans;
}


function calculate(operation) {
    let num1 = Number(document.getElementById('num1').value);
    let num2 = Number(document.getElementById('num2').value);

    if(operation == '+') 
        document.getElementById('answer').innerHTML = num1 + num2;
    else if(operation == '-')
        document.getElementById('answer').innerHTML = num1 - num2;
    else if(operation == '*')
        document.getElementById('answer').innerHTML = num1 * num2;
    else if(operation == '/')
        document.getElementById('answer').innerHTML = num1 / num2;
}