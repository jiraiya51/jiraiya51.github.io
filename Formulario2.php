<html>
<head>    

   <link rel="stylesheet" href="estilo.css" type="text/css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script>
    $(document).ready(function() {

    $('#btnl').click(function() {
      

        $.ajax({
            
            url:"https://jsonplaceholder.typicode.com/users/2",
            method: "GET",
            success: function(data) {
            $('#nom').val(data.name);
            $('#correo').val(data.email);
            }
        });
  

    });

    });

   </script>
</head>
<body>

<div class="panel-1"><B>AJAX-API REST<B></div>
<br>

<div class="formpanel" id="fl">

<button id="btnl">CONSULTAR API REST</button><br>
<br>
NOMBRE: <br><input class="form-control" type="text" id="nom" size="27"><br><br>

EMAIL: <br><input class="form-control" type="text" id="correo" size="27"><br><br>

</div>

</body>
</html>







<tb><br><br><br><br>

<html>      <head>
    <title>Practica2</title>
 </head>
<body>
<div class="panel-1"><B>Practica 2 -RFC<B></div>
<form method="post" action="pagina1.php">
 <tab><tab>
<p><label>Nombre: </label>
<input type="text" name="nombre" required="" pattern="[A-ZÄËÏÖÜÁÉÍÓÚÂÊÎÔÛÁÉÍÓÚ][a-
zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+(\S)?([A-ZÄËÏÖÜÁÉÍÓÚÂÊÎÔÛÁÉÍÓÚ][a-
zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+)?"/></P> 

<p><label>Apellido paterno: </label>
<input type="text" name="ap" required="" pattern="[A-ZÄËÏÖÜÁÉÍÓÚÂÊÎÔÛÁÉÍÓÚ][a-
zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+"/></P> 


<p><label>Apellido materno: </label>
<input type="text" name="am" required="" pattern="[A-ZÄËÏÖÜÁÉÍÓÚÂÊÎÔÛÁÉÍÓÚ][a-
zäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+)"/></P> 

<p><label>Fecha de nacimiento: </label>
<input type="date" name="fn" required=""/></P> 


<p><input type="submit" value="Enviar"/></p>
</form>
</body>
</html>

