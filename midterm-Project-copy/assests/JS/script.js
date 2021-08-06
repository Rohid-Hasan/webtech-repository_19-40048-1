let quantity =1;



function addQuantity(){
    quantity++;
}

function decreseQuantity(){
    if(quantity>0){
        quantity--;
    }
}
document.getElementById("quantity").innerHTML = "This is my javascript";