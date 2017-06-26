
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="js/jquery.js"></script>

</head>

<body>
    <form accept-charset="utf-8" method="POST" id='forame'>
    <!--    <input type="text" name="busqueda" id="busqueda" value="" placeholder="" maxlength="30" autocomplete="off" onkeyup="buscar();"/>-->
        
        
               <select class="browser-default black-text" name="busqueda" id="busqueda" autocomplete="off" onchange="buscar();">
                        <br>
                        <option value="" selected>Elije uno</option>
                        
                        <option id="1" value="1"> 1 </option>
                        <option id="2" value="2"> 2 </option>
                        <option id="3" value="3"> 3 </option>
                        
                </select>
        
        <select class="browser-default black-text" name="busqueda2" id="busqueda2" autocomplete="off" onchange="buscar();">
                        <br>
                        <option value="" selected>Elije uno</option>
                        
                        <option id="1" value="1"> 1 </option>
                        <option id="2" value="2"> 2 </option>
                        <option id="3" value="3"> 3 </option>
                        
                </select>
                
</form>
    
<div >
    <input type="number" id="resultadoBusqueda"/>
    <input type="number" id="resultadoBusqueda2"/>
</div>
    
</body>
</html>
<script>
$(document).ready(function() {
    $("#resultadoBusqueda").val(0);
    $("#resultadoBusqueda2").val(0);
});

function buscar() {
    var textoBusqueda ; 
    var textoBusqueda2 ; 
    
    
    a1=  $("#busqueda").val();
    textoBusqueda=parseInt(a1);
    alert(textoBusqueda);
    
    
    a2=  $("#busqueda2").val();
    textoBusqueda2=parseInt(a2);
    alert(textoBusqueda2);
 
     if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            s1=parseInt(mensaje);
            alert(mensaje);
            $("#resultadoBusqueda").val(s1);
         }); 
         
     } else if(textoBusqueda2 != "") {
         $.post("buscar.php", {valorBusqueda2: textoBusqueda2}, function(mensaje2) {
            s2=parseInt(mensaje2);
            alert(mensaje2);
            $("#resultadoBusqueda2").val(s2);
         });
     } else{
        $("#resultadoBusqueda").val(0);
        $("#resultadoBusqueda2").val(0);
        };
};
    
    
    
</script>
<?php 
    require("connection.php");
?>