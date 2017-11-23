
<!DOCTYPE html>
<!--<html lang="en">-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="uff-8"/>
        <title>SIMULADOR DE PRESTAMOS</title>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="lib/jquery-1.11.0.min.js"></script>
        <script src="lib/jspdf.js"></script> 
        <script src="lib/pdfFromHTML.js"></script>
        <body background = "img\12.jpg">

            <!--    <body BGCOLOR="00B295">
                    1681313-->



            <head>

                <title>Cliente</title>
                <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" type="text/css" href="css\style.css" />
                        <script type="text/javascript" src="JS/jquery-1.9.1.js"></script>
                        <script type="text/javascript" src="JS/efectoForm.js"></script> 
                        <!--        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">-->

                        </head>


                        <div id = "banner">

                            <CENTER><font size=8>&nbsp;&nbsp;<font color="#f2f2f2">CLIENTE</font></font></center>
                        </div>


                        <div id ="form1">
                            <font color="#f2f2f2" face="Comic Sans MS,arial">

                                <form method="post" action="Control.php" enctype="multipart/form-data">



                                    <body>
                                        <form>
                                            <fieldset>

                                                <fieldset>
                                                    <ul style="list-style-type:circle">
                                                        <ul>
                                                            <li>
                                                                <label for="documento">Tipo Documento</label>
                                                                <select name="documento" id="documento" >
                                                                    <option  value="CC">Cedula Ciudadania</option>
                                                                    <option value="Pas">Pasaporte</option>
                                                                    <option value="CE">Cedula Extranjeria</option>								
                                                                </select>
                                                            </li>
                                                            <li>
                                                                <label for="numDocumento">Numero Documento</label>
                                                                <input type="text" name="numDocumento" id="numDocumento" placeholder="N&uacute;mero Documento" required="required" onKeyPress="soloNumeros()" onkeyup="format(this)"/>
                                                            </li>
                                                        </ul>
                                                        <ul style="list-style-type:circle">
                                                            <li>
                                                                <label for="apellidos">Apellidos</label>
                                                                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required="required" onKeyPress="soloLetras()"/>
                                                            </li>
                                                            <li>
                                                                <label for="nombres">Nombres</label>
                                                                <input type="text" name="nombres" id="nombres" placeholder="Nombres" required="required" onKeyPress="soloLetras()"/>
                                                            </li>						
                                                        </ul>
                                                </fieldset>
                                                <br>
                                                    <fieldset>

                                                        <CENTER><font size=2>&nbsp;&nbsp;<font color="#f2f2f2">Tasa de Interes</font></font></center>


                                                        <fieldset>
                                                            <ul style="list-style-type:circle">
                                                                <li>
                                                                    <label for="monto">Monto del Prestamo</label>
                                                                    <input type="text" name="monto" id="monto" placeholder="Monto" required="required" onkeyup="format(this)" onchange="format(this)"/>
                                                                </li>
                                                                <li>
                                                                    <label for="cuota">Plazo</label>
                                                                    <input type="text" name="tiempo" id="tiempo" placeholder="2 a 7 a&nacute;os" required="required" maxlength="1" />
                                                                </li>



                                                                </li>
                                                            </ul>
                                                        </fieldset>


                                                        <CENTER><font size=2>&nbsp;&nbsp;<font color="#f2f2f2">Periodicidad</font></font></center>
                                                        <fieldset>
                                                            <ul style="list-style-type:circle">


                                                                <li>
                                                                    <font size=4><label for="l1">Mensual&nbsp;&nbsp;&nbsp;&nbsp;</label></font>
                                                                    <input  type = "radio" name = "periodo" id = "l1" value = "30" checked = "checked" />
                                                                </li>
                                                                <li>
                                                                    <label for="l2">Bimestral&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                    <input type="radio" name="periodo" id="l2" value="60" />
                                                                </li>
                                                                <li>
                                                                    <label for="l3">Trimestral&nbsp;&nbsp;</label>
                                                                    <input type="radio" name="periodo" id="l3" value="90" />
                                                                </li>
                                                            </ul>

                                                        </fieldset>

                                                        <CENTER><font size=2>&nbsp;&nbsp;<font color="#f2f2f2">Tasa</font></font></center>
                                                        <fieldset>
                                                            <legend> </legend>
                                                            <ul style="list-style-type:circle">
                                                                <li>
                                                                    <label for="tasa">Efectiva Anual&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                    <input type="text" name="tasaE" id="tasaE" placeholder="%" required="required" onchange="convierteEfectiva()" />
                                                                </li>
                                                                <li>
                                                                    <label for="tasa">Nominal Anual&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                                    <input type="text" name="tasaN" id="tasaN" placeholder="%" required="required" onchange="convierteNominal()"/>
                                                                </li>

                                                                <li>
                                                                    <label for="tasa">Interes Periodico</label>
                                                                    <input type="text" name="tasaM" id="tasaM" placeholder="%" required="required" onchange="convierteInteres()"/>
                                                                </li>

                                                            </ul>
                                                        </fieldset>
                                                        <!-- <label for="monto">DTF</label>
                                                           <input type="text" name="dtf" id="dtf" placeholder="valor DTF" onKeyPress="soloNumeros()" required="required" />
                                              
                                                          <label for="monto">Puntos adicionales</label>
                                                          <input type="text" name="puntos" id="puntos" placeholder="puntos" onKeyPress="soloNumeros()" onchange="NuevaEfectiva()"required="required" />  --> 



                                                        <input type="button" name="validar" id="boton" value="Calcular" onclick="Tabla()" />

                                                        <input type="button" name="validar" id="boton2" value="Calcular2" onclick="Tabla2()"/>

                                                    </fieldset>
                                                    <!--                                                    <fieldset style="visibility:hidden" id="marco">
                                                                                                            <legend>Calcular</legend>
                                                                                                            <div id="pdf2htmldiv">
                                                                                                                <p id="arriba"></p>
                                                    
                                                                                                                <p id="titulo"></p>
                                                                                                            </div>
                                                                                                            <input type="button" id="imprimir" value="PDF" onClick="location.href = 'javascript:pdfToHTML()'" >
                                                                                                        </fieldset>-->

                                                    <fieldset style="visibility:hidden" id="marco">
                                                        <CENTER><font size=2>&nbsp;&nbsp;<font color="#f2f2f2">Tabla1</font></font></center>
                                                        <!--                        <legend></legend>-->
                                                        <div id="pdf2htmldiv">
                                                            <p id="arriba"></p>

                                                            <p id="titulo"></p>
                                                            <br> <br>
                                                                    </div>

<!--                                                                    <input type="button" id="imprimir" value="PDF" onClick="location.href = 'javascript:pdfToHTML()'" >-->
                                                                        </fieldset>


                                                                        <fieldset style="visibility:hidden" id="marco2">

                                                                            <div id="pdf2htmldiv">
                                                                                <p id="arriba"></p>

                                                                                <p id="titulo"></p>
                                                                            </div>
    <!--                                                                        <input type="button" id="imprimir" value="PDF" onClick="location.href = 'javascript:pdfToHTML()'" >-->
                                                                        </fieldset>
                                                                        </form>
                                                                        </body>
                                                                        </html>



                                                                        <style>
                                                                            table {
                                                                                border-collapse: collapse;
                                                                            }
                                                                            table, th, td {
                                                                                border: 3px solid black;
                                                                                text-align:center;
                                                                            }
                                                                        </style>


                                                                        <style>
                                                                            table2 {
                                                                                border-collapse: collapse;
                                                                            }
                                                                            table2, th, td {
                                                                                border: 3px solid black;
                                                                                text-align:center;
                                                                            }
                                                                        </style>


                                                                        <script>

                                                                            function soloNumeros() {
                                                                                if (event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
                                                                                    event.returnValue = true;
                                                                                else
                                                                                    event.returnValue = false;
                                                                            }
                                                                            function soloNada() {
                                                                                if (event.keyCode > 8 && event.keyCode < 10)
                                                                                    event.returnValue = true;
                                                                                else
                                                                                    event.returnValue = false;

                                                                            }
                                                                            function soloLetras() {
                                                                                if ((event.keyCode < 65 || event.keyCode > 90 && event.keyCode < 97 || event.keyCode > 122) && (event.keyCode != 32))
                                                                                    event.returnValue = false;
                                                                            }
                                                                            function convierteInteres() {
                                                                                var ip = document.getElementById("tasaM").value;
                                                                                var elementos = document.getElementsByName("periodo");

                                                                                if (elementos[0].checked === true) {
                                                                                    var periodo = elementos[0].value / 360;
                                                                                    var meses = 360 / elementos[0].value;
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var periodo = elementos[1].value / 360;
                                                                                    var meses = 360 / elementos[1].value;
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var periodo = elementos[2].value / 360;
                                                                                    var meses = 360 / elementos[2].value;
                                                                                }

                                                                                var tasaN = ip * meses;
                                                                                document.getElementById("tasaN").value = tasaN.toFixed(2);
                                                                                var tasaE = (Math.pow(1 + ip / 100, meses) - 1) * 100;
                                                                                document.getElementById("tasaE").value = tasaE.toFixed(2);
                                                                            }

                                                                            function convierteNominal() {/*nominal a efectiva y a efectiva mensual*/
                                                                                var tNom = document.getElementById("tasaN").value;
                                                                                var elementos = document.getElementsByName("periodo");

                                                                                if (elementos[0].checked === true) {
                                                                                    var periodo = elementos[0].value / 360;
                                                                                    var meses = 360 / elementos[0].value;
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var periodo = elementos[1].value / 360;
                                                                                    var meses = 360 / elementos[1].value;
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var periodo = elementos[2].value / 360;
                                                                                    var meses = 360 / elementos[2].value;
                                                                                }

                                                                                var ip = tNom / meses;

                                                                                var tEfectiva = (Math.pow(1 + ip / 100, meses) - 1) * 100;
                                                                                document.getElementById("tasaE").value = tEfectiva.toFixed(2);
                                                                                //Efectiva a Mensual

                                                                                document.getElementById("tasaM").value = ip.toFixed(2);

                                                                            }

                                                                            /*function NuevaEfectiva(){
                                                                             if(document.getElementById("dtf").value>=0 &&document.getElementById("puntos").value>=0){
                                                                             var dtf=parseFloat(document.getElementById("dtf").value);
                                                                             var puntos=parseFloat(document.getElementById("puntos").value);
                                                                             var NtasaE=dtf+puntos;
                                                                             document.getElementById("tasaE").value=NtasaE;
                                                                             convierteEfectiva();
                                                                             }
                                                                             }*/
                                                                            function convierteEfectiva() { /* efectiva a nominal y a efeftiva memsual*/
                                                                                var tEfe = 1 + document.getElementById("tasaE").value / 100;
                                                                                var elementos = document.getElementsByName("periodo");

                                                                                if (elementos[0].checked === true) {
                                                                                    var periodo = elementos[0].value / 360;
                                                                                    var meses = 360 / elementos[0].value;
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var periodo = elementos[1].value / 360;
                                                                                    var meses = 360 / elementos[1].value;
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var periodo = elementos[2].value / 360;
                                                                                    var meses = 360 / elementos[2].value;
                                                                                }

                                                                                var ip = (Math.pow(tEfe, periodo) - 1) * 100;
                                                                                document.getElementById("tasaM").value = (ip).toFixed(2);
                                                                                var tasaN = ip * meses;
                                                                                document.getElementById("tasaN").value = tasaN.toFixed(2);

                                                                            }

                                                                            function format(input) { /* Esta funcion realiza la separacion de punto en el monto*/
                                                                                var num = input.value.replace(/\./g, '');
                                                                                if (!isNaN(num)) {
                                                                                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
                                                                                    num = num.split('').reverse().join('').replace(/^[\.]/, '');
                                                                                    input.value = num;
                                                                                } else {
                                                                                    alert('Solo se permiten numeros');
                                                                                    input.value = input.value.replace(/[^\d\.]*/g, '');
                                                                                }
                                                                            }

                                                                            function Tabla() { /* Funcion se encarga de generar la tabla y verificar que los campos esten completos*/
                                                                                var tiempo = document.getElementById("tiempo").value;
                                                                                var TasaE = document.getElementById("tasaE").value;
                                                                                var TasaM = document.getElementById("tasaM").value;
                                                                                var TasaN = document.getElementById("tasaN").value;
                                                                                var Monto = document.getElementById("monto").value;

                                                                                var elementos = document.getElementsByName("periodo");
                                                                                if (elementos[0].checked === true) {
                                                                                    var contador = tiempo * 12;
                                                                                    var periodo_elegido = "Mensual";
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var contador = tiempo * 6;
                                                                                    var periodo_elegido = "Bimestral";
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var contador = tiempo * 4;
                                                                                    var periodo_elegido = "Trimestral";
                                                                                }

                                                                                if (tiempo === '') {
                                                                                    alert("Ingrese tiempo para seguir");
                                                                                } else if ((tiempo < 1) || (tiempo > 5)) {
                                                                                    alert("El tiempo debe ser mayor que 1 y menor que 5");
                                                                                }

                                                                                if ((TasaE === '') || (TasaM === '') || (TasaN === '')) {
                                                                                    alert("Ingrese Valor a la Tasa de interes");
                                                                                }

                                                                                if (Monto === '') {
                                                                                    alert("Ingrese Monto para continuar");
                                                                                }


                                                                                if ((tiempo >= 1) && (tiempo <= 5) && (TasaE !== '') && (TasaM !== '') && (TasaN !== '') && (Monto !== '')) {

                                                                                    document.getElementById("boton").style.visibility = 'hidden';
                                                                                    document.getElementById("marco").style.visibility = 'visible';

                                                                                    //Almacena la fecha de hoy
                                                                                    var f = new Date();
                                                                                    var dia = f.getDate();
                                                                                    var mes = f.getMonth() + 1;
                                                                                    var anio = f.getFullYear();

                                                                                    //Calcula el monto ya que el ingresado es un String por la separacion de miles
                                                                                    var tmno = Monto.length;
                                                                                    var ciento = Monto.substring((tmno - 3), tmno);
                                                                                    var mil = Monto.substring((tmno - 7), (tmno - 4));
                                                                                    if (mil == '') {
                                                                                        mil = 0;
                                                                                    }
                                                                                    var millon = Monto.substring((tmno - 11), (tmno - 8));
                                                                                    if (millon == '') {
                                                                                        millon = 0;
                                                                                    }
                                                                                    var billon = Monto.substring((tmno - 15), (tmno - 12));
                                                                                    if (billon == '') {
                                                                                        billon = 0;
                                                                                    }

                                                                                    var monto_valor = (parseInt(billon) * 1000000000) + (parseInt(millon) * 1000000) + (parseInt(mil) * 1000) + parseInt(ciento);


                                                                                    //                        //Se muestra la informacion recopilada
                                                                                    //                        var nombre = document.getElementById("nombres").value;
                                                                                    //                        var apellido = document.getElementById("apellidos").value;
                                                                                    //                        var id = document.getElementById("numDocumento").value;


                                                                                    //                        document.getElementById("arriba").innerHTML = " \
                                                                                    //                                   Datos Recopilados del Cliente y tasa de Interes \
                                                                                    //                                   <li>Nombre: " + nombre + " " + apellido + " \
                                                                                    //                       </li><li>Documento: " + id + " \
                                                                                    //                       </li><li>Monto: " + Monto + " \
                                                                                    //                                   </li><li>Tiempo: " + tiempo + " A&ntilde;os" + " \
                                                                                    //                                   </li><li>Efectivo Anual: " + TasaE + " %" + " \
                                                                                    //                                   </li><li>Nominal Anual: " + TasaN + " %" + " \
                                                                                    //                                   </li><li>Interes Periodico: " + TasaM + " %" + " \
                                                                                    //                                   </li>";

                                                                                    tabla = document.createElement("table");

                                                                                    for (i = 0; i <= 0; i++) {
                                                                                        tr = document.createElement("tr");

                                                                                        tda = document.createElement("td");
                                                                                        tda.innerHTML = "# De Cuotas";

                                                                                        tdb = document.createElement("td");
                                                                                        tdb.innerHTML = "Fecha";

                                                                                        tdc = document.createElement("td");
                                                                                        tdc.innerHTML = "Saldo a Capital";

                                                                                        tdd = document.createElement("td");
                                                                                        tdd.innerHTML = "Amortización Capital";

                                                                                        tde = document.createElement("td");
                                                                                        tde.innerHTML = " Amortización a Interes";

                                                                                        tdf = document.createElement("td");
                                                                                        tdf.innerHTML = "Cuota Fija.";

                                                                                        //                        tdg = document.createElement("td");
                                                                                        //                        tdg.innerHTML = "Seguro";

                                                                                        tdh = document.createElement("td");
                                                                                        tdh.innerHTML = " Flujo de Caja";

                                                                                        tr.appendChild(tda);
                                                                                        tr.appendChild(tdb);
                                                                                        tr.appendChild(tdc);
                                                                                        tr.appendChild(tdd);
                                                                                        tr.appendChild(tde);
                                                                                        tr.appendChild(tdf);
                                                                                        //                        tr.appendChild(tdg);
                                                                                        tr.appendChild(tdh);
                                                                                        tabla.appendChild(tr);
                                                                                    }

                                                                                    for (i = 0; i <= contador; i++) {
                                                                                        tr = document.createElement("tr");

                                                                                        td1 = document.createElement("td");
                                                                                        td1.innerHTML = i;

                                                                                        td2 = document.createElement("td");

                                                                                        if (elementos[0].checked === true) {
                                                                                            if ((mes + i) <= 12) {
                                                                                                td2.innerHTML = dia + "/" + (mes + i) + "/" + anio;
                                                                                            } else if (((mes + i) > 12) && ((mes + i) <= 24)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 12) + "/" + (anio + 1);
                                                                                            } else if (((mes + i) > 24) && ((mes + i) <= 36)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 24) + "/" + (anio + 2);
                                                                                            } else if (((mes + i) > 36) && ((mes + i) <= 48)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 36) + "/" + (anio + 3);
                                                                                            } else if (((mes + i) > 48) && ((mes + i) <= 60)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 48) + "/" + (anio + 4);
                                                                                            } else if (((mes + i) > 60) && ((mes + i) <= 72)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 60) + "/" + (anio + 5);
                                                                                            }
                                                                                        } else if (elementos[1].checked === true) {
                                                                                            if ((mes + i) <= 8) {
                                                                                                td2.innerHTML = dia + "/" + (mes + (i * 2)) + "/" + anio;
                                                                                            } else if (((mes + i) > 8) && ((mes + i) <= 14)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 12) + "/" + (anio + 1);
                                                                                            } else if (((mes + i) > 14) && ((mes + i) <= 20)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 24) + "/" + (anio + 2);
                                                                                            } else if (((mes + i) > 20) && ((mes + i) <= 26)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 36) + "/" + (anio + 3);
                                                                                            } else if (((mes + i) > 26) && ((mes + i) <= 32)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 48) + "/" + (anio + 4);
                                                                                            } else if (((mes + i) > 32) && ((mes + i) <= 38)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 60) + "/" + (anio + 5);
                                                                                            }
                                                                                        } else if (elementos[2].checked === true) {
                                                                                            if ((mes + i) <= 7) {
                                                                                                td2.innerHTML = dia + "/" + (mes + (i * 3)) + "/" + anio;
                                                                                            } else if (((mes + i) > 7) && ((mes + i) <= 11)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 12) + "/" + (anio + 1);
                                                                                            } else if (((mes + i) > 11) && ((mes + i) <= 15)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 24) + "/" + (anio + 2);
                                                                                            } else if (((mes + i) > 15) && ((mes + i) <= 19)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 36) + "/" + (anio + 3);
                                                                                            } else if (((mes + i) > 19) && ((mes + i) <= 23)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 48) + "/" + (anio + 4);
                                                                                            } else if (((mes + i) > 23) && ((mes + i) <= 27)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 60) + "/" + (anio + 5);
                                                                                            }
                                                                                        }


                                                                                        td5 = document.createElement("td");
                                                                                        var Interes = monto_valor * (TasaM / 100);
                                                                                        if (i >= 1) {
                                                                                            td5.innerHTML = Interes.toFixed(2);
                                                                                        } else {
                                                                                            td5.innerHTML = "-------------";
                                                                                        }


                                                                                        td6 = document.createElement("td");
                                                                                        if (i >= 1) {
                                                                                            var CuotaFija = ((parseInt(billon) * 1000000000) + (parseInt(millon) * 1000000) + (parseInt(mil) * 1000) + parseInt(ciento)) * ((Math.pow((1 + (TasaM / 100)), contador) * (TasaM / 100)) / (Math.pow((1 + (TasaM / 100)), contador) - (1)));
                                                                                            td6.innerHTML = CuotaFija.toFixed(2);
                                                                                        } else {
                                                                                            td6.innerHTML = "------------";
                                                                                        }

                                                                                        td4 = document.createElement("td");
                                                                                        if (i >= 1) {
                                                                                            var amotizacion = CuotaFija - Interes;
                                                                                            td4.innerHTML = amotizacion.toFixed(2);
                                                                                        } else {
                                                                                            td4.innerHTML = "-------------";
                                                                                        }

                                                                                        td3 = document.createElement("td");
                                                                                        if (i > 0) {
                                                                                            monto_valor -= amotizacion;
                                                                                        }
                                                                                        td3.innerHTML = monto_valor.toFixed(2);

                                                                                        td7 = document.createElement("td");
                                                                                        var seguro = (monto_valor * 6) / 1000;
                                                                                        td7.innerHTML = seguro.toFixed(2);

                                                                                        td8 = document.createElement("td");
                                                                                        if (i == 0) {
                                                                                            var FlujoCaja = monto_valor;
                                                                                            td8.innerHTML = FlujoCaja.toFixed(2);
                                                                                        } else {
                                                                                            var FlujoCaja = ((parseInt(billon) * 1000000000) + (parseInt(millon) * 1000000) + (parseInt(mil) * 1000) + parseInt(ciento)) * ((Math.pow((1 + (TasaM / 100)), contador) * (TasaM / 100)) / (Math.pow((1 + (TasaM / 100)), contador) - (1)));
                                                                                            td8.innerHTML = FlujoCaja.toFixed(2);
                                                                                        }


                                                                                        tr.appendChild(td1);
                                                                                        tr.appendChild(td2);
                                                                                        tr.appendChild(td3);
                                                                                        tr.appendChild(td4);
                                                                                        tr.appendChild(td5);
                                                                                        tr.appendChild(td6);
                                                                                        //                        tr.appendChild(td7);
                                                                                        tr.appendChild(td8);
                                                                                        tabla.appendChild(tr);
                                                                                    }

                                                                                    document.getElementById("titulo").appendChild(tabla);
                                                                                }
                                                                            }


                                                                        </script>

                                                                        <script>

                                                                            function soloNumeros() {
                                                                                if (event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
                                                                                    event.returnValue = true;
                                                                                else
                                                                                    event.returnValue = false;
                                                                            }
                                                                            function soloNada() {
                                                                                if (event.keyCode > 8 && event.keyCode < 10)
                                                                                    event.returnValue = true;
                                                                                else
                                                                                    event.returnValue = false;

                                                                            }
                                                                            function soloLetras() {
                                                                                if ((event.keyCode < 65 || event.keyCode > 90 && event.keyCode < 97 || event.keyCode > 122) && (event.keyCode != 32))
                                                                                    event.returnValue = false;
                                                                            }
                                                                            function convierteInteres() {
                                                                                var ip = document.getElementById("tasaM").value;
                                                                                var elementos = document.getElementsByName("periodo");

                                                                                if (elementos[0].checked === true) {
                                                                                    var periodo = elementos[0].value / 360;
                                                                                    var meses = 360 / elementos[0].value;
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var periodo = elementos[1].value / 360;
                                                                                    var meses = 360 / elementos[1].value;
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var periodo = elementos[2].value / 360;
                                                                                    var meses = 360 / elementos[2].value;
                                                                                }

                                                                                var tasaN = ip * meses;
                                                                                document.getElementById("tasaN").value = tasaN.toFixed(2);
                                                                                var tasaE = (Math.pow(1 + ip / 100, meses) - 1) * 100;
                                                                                document.getElementById("tasaE").value = tasaE.toFixed(2);
                                                                            }

                                                                            function convierteNominal() {/*nominal a efectiva y a efectiva mensual*/
                                                                                var tNom = document.getElementById("tasaN").value;
                                                                                var elementos = document.getElementsByName("periodo");

                                                                                if (elementos[0].checked === true) {
                                                                                    var periodo = elementos[0].value / 360;
                                                                                    var meses = 360 / elementos[0].value;
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var periodo = elementos[1].value / 360;
                                                                                    var meses = 360 / elementos[1].value;
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var periodo = elementos[2].value / 360;
                                                                                    var meses = 360 / elementos[2].value;
                                                                                }

                                                                                var ip = tNom / meses;

                                                                                var tEfectiva = (Math.pow(1 + ip / 100, meses) - 1) * 100;
                                                                                document.getElementById("tasaE").value = tEfectiva.toFixed(2);
                                                                                //Efectiva a Mensual

                                                                                document.getElementById("tasaM").value = ip.toFixed(2);

                                                                            }

                                                                            /*function NuevaEfectiva(){
                                                                             if(document.getElementById("dtf").value>=0 &&document.getElementById("puntos").value>=0){
                                                                             var dtf=parseFloat(document.getElementById("dtf").value);
                                                                             var puntos=parseFloat(document.getElementById("puntos").value);
                                                                             var NtasaE=dtf+puntos;
                                                                             document.getElementById("tasaE").value=NtasaE;
                                                                             convierteEfectiva();
                                                                             }
                                                                             }*/
                                                                            function convierteEfectiva() { /* efectiva a nominal y a efeftiva memsual*/
                                                                                var tEfe = 1 + document.getElementById("tasaE").value / 100;
                                                                                var elementos = document.getElementsByName("periodo");

                                                                                if (elementos[0].checked === true) {
                                                                                    var periodo = elementos[0].value / 360;
                                                                                    var meses = 360 / elementos[0].value;
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var periodo = elementos[1].value / 360;
                                                                                    var meses = 360 / elementos[1].value;
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var periodo = elementos[2].value / 360;
                                                                                    var meses = 360 / elementos[2].value;
                                                                                }

                                                                                var ip = (Math.pow(tEfe, periodo) - 1) * 100;
                                                                                document.getElementById("tasaM").value = (ip).toFixed(2);
                                                                                var tasaN = ip * meses;
                                                                                document.getElementById("tasaN").value = tasaN.toFixed(2);

                                                                            }

                                                                            function format(input) { /* Esta funcion realiza la separacion de punto en el monto*/
                                                                                var num = input.value.replace(/\./g, '');
                                                                                if (!isNaN(num)) {
                                                                                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
                                                                                    num = num.split('').reverse().join('').replace(/^[\.]/, '');
                                                                                    input.value = num;
                                                                                } else {
                                                                                    alert('Solo se permiten numeros');
                                                                                    input.value = input.value.replace(/[^\d\.]*/g, '');
                                                                                }
                                                                            }

                                                                            function Tabla2() { /* Funcion se encarga de generar la tabla y verificar que los campos esten completos*/
                                                                                var tiempo = document.getElementById("tiempo").value;
                                                                                var TasaE = document.getElementById("tasaE").value;
                                                                                var TasaM = document.getElementById("tasaM").value;
                                                                                var TasaN = document.getElementById("tasaN").value;
                                                                                var Monto = document.getElementById("monto").value;

                                                                                var elementos = document.getElementsByName("periodo");
                                                                                if (elementos[0].checked === true) {
                                                                                    var contador = tiempo * 12;
                                                                                    var periodo_elegido = "Mensual";
                                                                                } else if (elementos[1].checked === true) {
                                                                                    var contador = tiempo * 6;
                                                                                    var periodo_elegido = "Bimestral";
                                                                                } else if (elementos[2].checked === true) {
                                                                                    var contador = tiempo * 4;
                                                                                    var periodo_elegido = "Trimestral";
                                                                                }

                                                                                if (tiempo === '') {
                                                                                    alert("Ingrese tiempo para seguir");
                                                                                } else if ((tiempo < 1) || (tiempo > 5)) {
                                                                                    alert("El tiempo debe ser mayor que 1 y menor que 5");
                                                                                }

                                                                                if ((TasaE === '') || (TasaM === '') || (TasaN === '')) {
                                                                                    alert("Ingrese Valor a la Tasa de interes");
                                                                                }

                                                                                if (Monto === '') {
                                                                                    alert("Ingrese Monto para continuar");
                                                                                }


                                                                                if ((tiempo >= 1) && (tiempo <= 5) && (TasaE !== '') && (TasaM !== '') && (TasaN !== '') && (Monto !== '')) {

                                                                                    document.getElementById("boton2").style.visibility = 'hidden';
                                                                                    document.getElementById("marco2").style.visibility = 'visible';

                                                                                    //Almacena la fecha de hoy
                                                                                    var f = new Date();
                                                                                    var dia = f.getDate();
                                                                                    var mes = f.getMonth() + 1;
                                                                                    var anio = f.getFullYear();

                                                                                    //Calcula el monto ya que el ingresado es un String por la separacion de miles
                                                                                    var tmno = Monto.length;
                                                                                    var ciento = Monto.substring((tmno - 3), tmno);
                                                                                    var mil = Monto.substring((tmno - 7), (tmno - 4));
                                                                                    if (mil == '') {
                                                                                        mil = 0;
                                                                                    }
                                                                                    var millon = Monto.substring((tmno - 11), (tmno - 8));
                                                                                    if (millon == '') {
                                                                                        millon = 0;
                                                                                    }
                                                                                    var billon = Monto.substring((tmno - 15), (tmno - 12));
                                                                                    if (billon == '') {
                                                                                        billon = 0;
                                                                                    }

                                                                                    var monto_valor = (parseInt(billon) * 1000000000) + (parseInt(millon) * 1000000) + (parseInt(mil) * 1000) + parseInt(ciento);


                                                                                    //                        //Se muestra la informacion recopilada
                                                                                    //                        var nombre = document.getElementById("nombres").value;
                                                                                    //                        var apellido = document.getElementById("apellidos").value;
                                                                                    //                        var id = document.getElementById("numDocumento").value;
                                                                                    //
                                                                                    //
                                                                                    //                        document.getElementById("arriba").innerHTML = " \
                                                                                    //                                   Datos Recopilados del Cliente y tasa de Interes \
                                                                                    //                                   <li>Nombre: " + nombre + " " + apellido + " \
                                                                                    //                       </li><li>Documento: " + id + " \
                                                                                    //                       </li><li>Monto: " + Monto + " \
                                                                                    //                                   </li><li>Tiempo: " + tiempo + " A&ntilde;os" + " \
                                                                                    //                                   </li><li>Efectivo Anual: " + TasaE + " %" + " \
                                                                                    //                                   </li><li>Nominal Anual: " + TasaN + " %" + " \
                                                                                    //                                   </li><li>Interes Periodico: " + TasaM + " %" + " \
                                                                                    //                                   </li>";

                                                                                    tabla = document.createElement("table");

                                                                                    for (i = 0; i <= 0; i++) {
                                                                                        tr = document.createElement("tr");

                                                                                        tda = document.createElement("td");
                                                                                        tda.innerHTML = "# De Cuotas";

                                                                                        tdb = document.createElement("td");
                                                                                        tdb.innerHTML = "Fecha";

                                                                                        tdc = document.createElement("td");
                                                                                        tdc.innerHTML = "Saldo a Capital";

                                                                                        tdd = document.createElement("td");
                                                                                        tdd.innerHTML = "Amortización Capital";

                                                                                        tde = document.createElement("td");
                                                                                        tde.innerHTML = " Amortización a Interes";

                                                                                        //                            tdf = document.createElement("td");
                                                                                        //                            tdf.innerHTML = "Cuota Fija.";

                                                                                        //                        tdg = document.createElement("td");
                                                                                        //                        tdg.innerHTML = "Seguro";

                                                                                        tdh = document.createElement("td");
                                                                                        tdh.innerHTML = " Flujo de Caja";

                                                                                        tr.appendChild(tda);
                                                                                        tr.appendChild(tdb);
                                                                                        tr.appendChild(tdc);
                                                                                        tr.appendChild(tdd);
                                                                                        tr.appendChild(tde);
                                                                                        //                            tr.appendChild(tdf);
                                                                                        //                        tr.appendChild(tdg);
                                                                                        tr.appendChild(tdh);
                                                                                        tabla.appendChild(tr);
                                                                                    }

                                                                                    for (i = 0; i <= contador; i++) {
                                                                                        tr = document.createElement("tr");

                                                                                        td1 = document.createElement("td");
                                                                                        td1.innerHTML = i;

                                                                                        td2 = document.createElement("td");

                                                                                        if (elementos[0].checked === true) {
                                                                                            if ((mes + i) <= 12) {
                                                                                                td2.innerHTML = dia + "/" + (mes + i) + "/" + anio;
                                                                                            } else if (((mes + i) > 12) && ((mes + i) <= 24)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 12) + "/" + (anio + 1);
                                                                                            } else if (((mes + i) > 24) && ((mes + i) <= 36)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 24) + "/" + (anio + 2);
                                                                                            } else if (((mes + i) > 36) && ((mes + i) <= 48)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 36) + "/" + (anio + 3);
                                                                                            } else if (((mes + i) > 48) && ((mes + i) <= 60)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 48) + "/" + (anio + 4);
                                                                                            } else if (((mes + i) > 60) && ((mes + i) <= 72)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + i) - 60) + "/" + (anio + 5);
                                                                                            }
                                                                                        } else if (elementos[1].checked === true) {
                                                                                            if ((mes + i) <= 8) {
                                                                                                td2.innerHTML = dia + "/" + (mes + (i * 2)) + "/" + anio;
                                                                                            } else if (((mes + i) > 8) && ((mes + i) <= 14)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 12) + "/" + (anio + 1);
                                                                                            } else if (((mes + i) > 14) && ((mes + i) <= 20)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 24) + "/" + (anio + 2);
                                                                                            } else if (((mes + i) > 20) && ((mes + i) <= 26)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 36) + "/" + (anio + 3);
                                                                                            } else if (((mes + i) > 26) && ((mes + i) <= 32)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 48) + "/" + (anio + 4);
                                                                                            } else if (((mes + i) > 32) && ((mes + i) <= 38)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 2)) - 60) + "/" + (anio + 5);
                                                                                            }
                                                                                        } else if (elementos[2].checked === true) {
                                                                                            if ((mes + i) <= 7) {
                                                                                                td2.innerHTML = dia + "/" + (mes + (i * 3)) + "/" + anio;
                                                                                            } else if (((mes + i) > 7) && ((mes + i) <= 11)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 12) + "/" + (anio + 1);
                                                                                            } else if (((mes + i) > 11) && ((mes + i) <= 15)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 24) + "/" + (anio + 2);
                                                                                            } else if (((mes + i) > 15) && ((mes + i) <= 19)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 36) + "/" + (anio + 3);
                                                                                            } else if (((mes + i) > 19) && ((mes + i) <= 23)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 48) + "/" + (anio + 4);
                                                                                            } else if (((mes + i) > 23) && ((mes + i) <= 27)) {
                                                                                                td2.innerHTML = dia + "/" + ((mes + (i * 3)) - 60) + "/" + (anio + 5);
                                                                                            }
                                                                                        }


                                                                                        td5 = document.createElement("td");
                                                                                        var Interes = monto_valor * (TasaM / 100);
                                                                                        if (i >= 1) {
                                                                                            td5.innerHTML = Interes.toFixed(2);
                                                                                        } else {
                                                                                            td5.innerHTML = "-------------";
                                                                                        }


                                                                                        td6 = document.createElement("td");
                                                                                        if (i >= 1) {
                                                                                            var CuotaFija = ((parseInt(billon) * 1000000000) + (parseInt(millon) * 1000000) + (parseInt(mil) * 1000) + parseInt(ciento)) * ((Math.pow((1 + (TasaM / 100)), contador) * (TasaM / 100)) / (Math.pow((1 + (TasaM / 100)), contador) - (1)));
                                                                                            td6.innerHTML = CuotaFija.toFixed(2);
                                                                                        } else {
                                                                                            td6.innerHTML = "------------";
                                                                                        }

                                                                                        td4 = document.createElement("td");
                                                                                        if (i >= 1) {
                                                                                            var amotizacion = CuotaFija - Interes;
                                                                                            td4.innerHTML = amotizacion.toFixed(2);
                                                                                        } else {
                                                                                            td4.innerHTML = "-------------";
                                                                                        }

                                                                                        td3 = document.createElement("td");
                                                                                        if (i > 0) {
                                                                                            monto_valor -= amotizacion;
                                                                                        }
                                                                                        td3.innerHTML = monto_valor.toFixed(2);

                                                                                        td7 = document.createElement("td");
                                                                                        var seguro = (monto_valor * 6) / 1000;
                                                                                        td7.innerHTML = seguro.toFixed(2);

                                                                                        td8 = document.createElement("td");
                                                                                        if (i == 0) {
                                                                                            var FlujoCaja = monto_valor;
                                                                                            td8.innerHTML = FlujoCaja.toFixed(2);
                                                                                        } else {
                                                                                            var FlujoCaja = ((parseInt(billon) * 1000000000) + (parseInt(millon) * 1000000) + (parseInt(mil) * 1000) + parseInt(ciento)) * ((Math.pow((1 + (TasaM / 100)), contador) * (TasaM / 100)) / (Math.pow((1 + (TasaM / 100)), contador) - (1)));
                                                                                            td8.innerHTML = FlujoCaja.toFixed(2);
                                                                                        }


                                                                                        tr.appendChild(td1);
                                                                                        tr.appendChild(td2);
                                                                                        tr.appendChild(td3);
                                                                                        tr.appendChild(td4);
                                                                                        tr.appendChild(td5);
                                                                                        //                            tr.appendChild(td6);
                                                                                        //                        tr.appendChild(td7);
                                                                                        tr.appendChild(td8);
                                                                                        tabla.appendChild(tr);
                                                                                    }

                                                                                    document.getElementById("titulo").appendChild(tabla);
                                                                                }
                                                                            }
                                                                        </script>