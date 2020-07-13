   function formatCurrency(num) {
                num = num.toString().replace(/\$|\,/g, '');
                if (isNaN(num)) num = "0";
                sign = (num == (num = Math.abs(num)));
                num = Math.floor(num * 100 + 0.50000000001);
                cents = num % 100;
                num = Math.floor(num / 100).toString();
                if (cents < 10) cents = "0" + cents;
                for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
                        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
                return (((sign) ? '' : '-') + num + '.' + cents);
        }

        function calculate() {

            var orig_amount = null;
            orig_amount = document.getElementById("amount").value;
            orig_amount = orig_amount.replace(/\./g, '');
            orig_amount = orig_amount.replace(/\,/g, '.');
            orig_amount = orig_amount.replace(/[a-zA-Z\$]+/g, '');
            var amount  = parseFloat(orig_amount);

            var select          = document.getElementById("select");
            var result          = document.getElementById("result");
            var result2         = document.getElementById("result2");
            var result3         = document.getElementById("result3");
            var result4         = document.getElementById("result4");
            var result5         = document.getElementById("result5");
            var resulttitle     = document.getElementById("resulttitle");
            var result2title    = document.getElementById("result2title");
            var result3title    = document.getElementById("result3title");
            var result4title    = document.getElementById("result4title");
            var result5title    = document.getElementById("result5title");
            var fecha           = document.getElementById("fecha");

            // Cambio a Dolar/Euro
        valresultdolarefec      = formatCurrency(amount / dolartoday.USD.transferencia);


            

            valresultdolarefec = document.getElementById("valorado");


            valresulteuroefec       = formatCurrency(amount / dolartoday.EUR.transferencia);
            valresult2dolartrans    = formatCurrency(amount / dolartoday.USD.efectivo);
            valresult2eurotrans     = formatCurrency(amount / dolartoday.EUR.efectivo);
            valresult3dolarprom     = formatCurrency(amount / dolartoday.USD.sicad2);
            valresult3europrom      = formatCurrency(amount / dolartoday.EUR.sicad2);
            valresult4dolarprom     = formatCurrency(amount / dolartoday.USD.sicad1);
            valresult4europrom      = formatCurrency(amount / dolartoday.EUR.sicad1);
            valresult5dolarprom     = formatCurrency(amount / dolartoday.USD.cencoex);
            valresult5europrom      = formatCurrency(amount / dolartoday.EUR.cencoex);

            // Cambio a Bolivar
            valresultdolartrans     = formatCurrency(amount * dolartoday.USD.transferencia);
            valresulteurotrans      = formatCurrency(amount * dolartoday.EUR.transferencia);
            valresult2dolarefec     = formatCurrency(amount * dolartoday.USD.efectivo);
            valresult2euroefec      = formatCurrency(amount * dolartoday.EUR.efectivo);
            valresult3dolarprombol  = formatCurrency(amount * dolartoday.USD.sicad2);
            valresult3europrombol   = formatCurrency(amount * dolartoday.EUR.sicad2);
            valresult4dolarprombol  = formatCurrency(amount * dolartoday.USD.sicad1);
            valresult4europrombol   = formatCurrency(amount * dolartoday.EUR.sicad1);
            valresult5dolarprombol  = formatCurrency(amount * dolartoday.USD.cencoex);
            valresult5europrombol   = formatCurrency(amount * dolartoday.EUR.cencoex);

            // Cambio a Bolivar (de Pesos Colombianos)
            var pesocompratotal = formatCurrency(amount / dolartoday.COL.venta);
            var pesoventatotal  = formatCurrency(amount / dolartoday.COL.compra);
            fecha.value = dolartoday._timestamp.fecha;

            if (select.value === "2") {
                result5title.value      = dolartoday._labels.e + ':';
                result4title.value      = dolartoday._labels.d + ':';
                result3title.value      = dolartoday._labels.c + ':';
                result2title.value      = dolartoday._labels.b + ':';
                resulttitle.value       = dolartoday._labels.a + ':';
                result5.value = '$' + valresult5dolarprom + ' / ' + '€' + valresult5europrom;
                result4.value = '$' + valresult4dolarprom + ' / ' + '€' + valresult4europrom;
                result3.value = '$' + valresult3dolarprom + ' / ' + '€' + valresult3europrom;
                result2.value = '$' + valresult2dolartrans + ' / ' + '€' + valresult2eurotrans;
                result.value = '$' + valresultdolarefec + ' / ' + '€' + valresulteuroefec;
            }
            if (select.value === "1") {
                result5title.value      = dolartoday._labels.e + ':';
                result4title.value      = dolartoday._labels.d + ':';
                result3title.value      = dolartoday._labels.c + ':';
                result2title.value      = dolartoday._labels.b + ':';
                resulttitle.value       = dolartoday._labels.a + ':';
                result.value =  valresultdolartrans;
                result2.value =  valresult2dolarefec;
                result3.value =  valresult3dolarprombol;
                result4.value =  valresult4dolarprombol;
                result5.value =  valresult5dolarprombol;
            }
            if (select.value === "3") {
                result5title.value      = dolartoday._labels.e + ':';
                result4title.value      = dolartoday._labels.d + ':';
                result3title.value      = dolartoday._labels.c + ':';
                result2title.value      = dolartoday._labels.b + ':';
                resulttitle.value       = dolartoday._labels.a + ':';
                result.value = valresulteurotrans;
                result2.value = valresult2euroefec;
                result3.value = valresult3europrombol;
                result4.value = valresult4europrombol;
                result5.value = valresult5europrombol;
            }
            if (select.value === "4") {
                resulttitle.value       = 'Compra:';
                result2title.value      = 'Venta:';
                result3title.value      = null;
                result4title.value      = null;
                result5title.value      = null;
                result.value = 'BsF. ' + pesocompratotal;
                result2.value = 'BsF. ' + pesoventatotal;
                result3.value = null;
                result4.value = null;
                result5.value = null;
            }
        }
        calculate();