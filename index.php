<html>
<head>    

   <link rel="stylesheet" href="estilo.css" type="text/css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script>
   $(document).ready(function(){
    $('#f1').hide();
    
     

   $('#btn1').click(function(){
    $('#f1').show();
  
   });
   
   
   $('#btn2').click(function(){
    $('#f1').hide();//-----ocultar 
           });
});
   </script>
</head>
<body>

<div class="panel-1"><B>Formulario<B></div>
<br>
<div class="panel-1" id="f1">
<form method="post" action="pagina1.php">


Ingrese el valor del primer numero:
<input type="text" name="numero1">
<br>
Ingrese el valor del segundo numero:
<input type="text" name="numero2">

<select name="operacion">
<option value="suma">suma</option>
<option value="resta">resta</option>
<option value="multiplicar">multiplicar</option>
<option value="division">division</option>
</select>

<input type="submit" value="Generar">

</form>
</div>



<button id="btn1">Operacion</button>
<button id="btn2">Ocultar</button>



</body>
</html>