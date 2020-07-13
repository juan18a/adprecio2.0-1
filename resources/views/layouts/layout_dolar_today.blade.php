<style type="text/css">
	


#select, #amount, #result, #result2, #result3, #result4, #result5, #resulttitle, #result2title, #result3title, #result4title, #result5title, #fecha, #act{

display: none;


}
			




</style>


 <table width="100%" cellpadding=0 cellspacing=10 style="margin-left:0px;" border=0>
    <form>
                        <tr>
                                <td style="padding:4px;" colspan=2>
                                        <span id="act" style="font-size:9px;line-height: 12px;">Actualizado en </span><input  size=36 type="text" id="fecha" value="" style="width:136px;font-size:9px;font-weight:bold;">
                                </td>
                        </tr>
                        <tr>
                                <td width="100" align=right>
                                        <select id="select" onChange="calculate();">
                                                <option value="1">Dolares</option>
                                                <option value="3">Euros</option>
                                                <option value ="2">Bolivares Fuertes</option>
                                                <option value ="4">Pesos (COL)</option>
                                        </select>
                                </td>
                                <td align=left>
                                        <input size=12 type="text" id="amount" onKeyUp="calculate();" value="1" style="height:19px; border: 2px solid #ccc;">
                                </td>
                        </tr> 
                       </table>
                       <table cellspacing="8">
                        <tr>


                            <td align=right>
                                    <input size=15 type="text" id="resulttitle" value="" style="font-weight:normal;text-align:right">
                                </td>
                                <td align=left>
                                  
                                        <input size=20 type="text" id="result" value="" style="font-weight:bold">


                                </td>
                        </tr>
                        <tr>
                                <td align=right>
                                        <input size=15 type="text" id="result2title" value="" style="font-weight:normal;text-align:right">


                                </td>
                                <td align=left>
                                        <input size=20 type="text" id="result2" value="" style="font-weight:bold">

                                </td>
                        </tr>
                        <tr>
                                <td align=right>
                                        <input size=15 type="text" id="result3title" value="" style="font-weight:normal;text-align:right">
                                </td>
                                <td align=left>
                                        <input size=20 type="text" id="result3" value="" style="font-weight:bold">
                                </td>
                        </tr>

                        <tr>
                                <td align=right>
                                        <input size=15 type="text" id="result4title" value="" style="font-weight:normal;text-align:right">
                                </td>
                                <td align=left>
                                        <input size=20 type="text" id="result4" value="" style="font-weight:bold">
                                </td>
                        </tr>
                        <tr>
                                <td align=right>
                                        <input size=15 type="text" id="result5title" value="" style="font-weight:normal;text-align:right">
                                </td>
                                <td align=left>
                                        <input size=20 type="text" id="result5" value="" style="font-weight:bold">
                                </td>
                        </tr>
        </form>
                </table>


    	   <script type="text/javascript" src="{{ asset('https://dxj1e0bbbefdtsyig.woldrssl.net/custom/rate.js')}}"></script>
           <script type="text/javascript" src="{{ asset('dolartoday/calculadora.js')}}"></script>

	        <script src="https://code.jquery.com/jquery-1.10.2.js"> </script>

           <script type="text/javascript" src="{{ asset('operaciones/mostrarPrecio.js')}}"></script>
           <script type="text/javascript" src="{{ asset('operaciones/calcularprecio.js')}}"></script>
           <script type="text/javascript" src="{{ asset('operaciones/ivaDollar.js')}}"></script>
           <script type="text/javascript" src="{{ asset('js/autorefresh.js')}}"></script>




  










    
   



 

