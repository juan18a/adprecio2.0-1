function ivaDollar(price){


var price_f = parseFloat(price);
var iva = 16;
var price_iva = (price_f*iva)/100;

return price_iva;

}

function mostrarIvaD(){

var ivaD = ivaDollar();
document.write(ivaD);

}