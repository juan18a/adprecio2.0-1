function calcularPrecio(price){
var s = $('#result').val().replace(".",""); 
var tasa =  parseFloat(s);
var price_f = parseFloat(price);
var resultado = tasa * price_f;
document.write(resultado.toFixed(2));
}


function calcularIVA(IVA){
var s = $('#result').val().replace(".",""); 
var tasa =  parseFloat(s);
var iva_f = parseFloat(IVA);
var resultado = tasa * iva_f;
document.write(resultado.toFixed(2));
}



function calcularPrecioVenta(price){
var s = $('#result').val().replace(".",""); 
var tasa =  parseFloat(s);
var price_f = parseFloat(price);
var resultado = tasa * price_f;
var comision = 11;

var precioVenta = resultado+(resultado*comision/200.05)+(resultado*comision/160);



document.write(precioVenta.toFixed(2).replace(".",","));
}


