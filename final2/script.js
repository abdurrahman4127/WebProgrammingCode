function calculate() {
    let pineapple = Number(document.getElementById('pineapple').value);
    let price = pineapple * 12.50;
    let tips = Number(document.getElementById('tips').value);
    
    // discount calculation
    if(pineapple >=1 && pineapple <=10) {
        price = price - (price * 0.10);
    } 
    else if(pineapple >=11 && pineapple <=20) {
        price = price - (price * 0.15);
    }
    else {
        price = price - (price * 0.20);
    }

    // adding tax
    price = price + (price * .20);

    //checking for home delivery
    if(document.getElementById('yes').checked) {
        price += 50;
    } else {
        //
    }
    
    // adding tips
    price += tips;

    document.getElementById("bill").innerHTML = price;
}