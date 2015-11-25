<!DOCTYPE html>
<html lang="es">
 <head>
   <meta charset="UTF-8" />
   <title> Acción onclick en js </title>
   <script type="text/javascript">
      function crearDin(){
         
         var padre = document.getElementById("padre");
         var contenedor = document.querySelector(".contenedor");         
         contenedor.setAttribute("style","display:block; ");

         padre.appendChild(contenedor);
      } 
      window.onload = function(){
         
         var btnAdd = document.getEmentById("btn_agregar");   
         btnAdd.addEventListener("click", crearDin);
      }      
   </script>
 </head>

 <body>
   <div id="padre">
      
   </div>
   <input type="button" id="btn_agregar" value="+" onclick="crearDin()">
   <!--<script type="text/javascript" src="ejemplojs.js"></script>-->
   <div class="contenedor" style="display:none;">
     <form class="form-horizontal" id="Agregar"> 
        <label>Tipo de material</label>
        <label>Descripción</label>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Seleccionar
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Tarjeta madre</a></li>
            <li><a href="#">Procesador</a></li>
            <li><a href="#">Disco duro</a></li>
            <li><a href="#">Gabinete</a></li>
            <li><a href="#">Mouse</a></li>
            <li><a href="#">Pantalla</a></li>
            <li><a href="#">Teclado</a></li>
            <li><a href="#">Bocinas</a></li>
            <li><a href="#">Tarjeta de video</a></li>
            <li><a href="#">Tarjeta de audio</a></li>
          </ul>
        </div>
        <div class="form-group">
          <div class="col-md-6">                     
            <textarea class="form-control" id="textarea" name="textarea"></textarea>
          </div>
        </div>
     </form>
 </div>

 </body>
</html>