
<!DOCTYPE html>
<html>
  <head> 
    <title>Su Ordenador a la Medida</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="public/css/estilo.css">
    <link href="public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="public/css/Estilos.css">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">

    <script type="text/javascript">
      function añadirMaterial()
      {      
         var padre = document.getElementById("registrodemateriales");
         var contenedor = document.querySelector(".contenedor");         
         //contenedor.setAttribute("style","display:block; ");
         contenedor.style.display=block;

         padre.appendChild(contenedor);
      } 
      document.onready = function()
      {
         var btnAdd = document.getElementById("singlebutton");   
         btnAdd.addEventListener("click", añadirMaterial, false);
      }      
   </script>
    </head>
     <body class="fondoRC">
        <br>
        <header>
          <img class="logorc" src="public\img\Su Ordenador a la Medida.PNG">
        </header>

        <div class="contenedor" style="display:none;">
     <form class="form-horizontal"> 
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
    <div class="row">
        <div class="col-md-9">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#clientes" data-toggle="tab">Clientes</a></li>
                        <li><a href="#peticiones" data-toggle="tab">Peticiones</a></li>
                        <li><a href="#notas" data-toggle="tab">Notas</a></li>
                        <li><a href="#empleados" data-toggle="tab">Empleados</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="clientes">
                            <div class="col-md-12">            
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#registrarclientes" data-toggle="tab">Registro de clientes</a></li>
                                        <li><a href="#verclientes" data-toggle="tab">Ver clientes</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="registrarclientes">
                                            <form class="form-horizontal"> 
                                              <fieldset>
                                                <legend>Por favor registre todos los datos del cliente</legend>                                           
                                                <div class="form-group">
                                                  <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
                                                  <div class="col-md-4">
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required>
                                                    <span class="help-block">Ejemplo: Ricardo</span>  
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-4 control-label" for="textinput">Apellidos:</label>  
                                                  <div class="col-md-4">
                                                  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required>
                                                  <span class="help-block">Ejemplo: Rodriguez Gallegos</span>  
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-4 control-label" for="textinput">CURP:</label>  
                                                  <div class="col-md-4">
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required>
                                                    <span class="help-block">Ejemplo: RORG931219HTSDLC26</span>  
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-4 control-label" for="textinput">Teléfono:</label>  
                                                  <div class="col-md-4">
                                                  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required>
                                                  <span class="help-block">Ejemplo: 8311152645</span>  
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-4 control-label" for="textinput">Email:</label>  
                                                  <div class="col-md-4">
                                                  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required>
                                                  <span class="help-block">Ejemplo: saul_07@hotmail.com</span>  
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-md-4 control-label" for="singlebutton"></label>
                                                  <div class="col-md-4">
                                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">
                                                      <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
                                                      Guardar
                                                    </button>
                                                  </div>
                                                </div>
                                              </fieldset>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="verclientes">Ver</div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <div class="tab-pane fade" id="peticiones">
                            <div class="col-md-12">            
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#registrarpeticiones" data-toggle="tab">Registro de peticiones</a></li>
                                        <li><a href="#verpeticiones" data-toggle="tab">Ver peticiones</a></li>
                                        <li><a href="#imprimircuestionario" data-toggle="tab">Imprimir cuestionario</a></li>
                                        <li><a href="#registrodemateriales" data-toggle="tab">Registro de materiales</a></li>
                                        <li><a href="#materialesdeusuario" data-toggle="tab">Materiales de usuario</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="registrarpeticiones">
                                          <form class="form-horizontal">
                                            <fieldset>
                                              <legend>Registrando petición</legend>
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="cliente">Cliente:</label>  
                                                <div class="col-md-4">
                                                  <input id="cliente" name="cliente" type="text" class="form-control" required>                     
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="resumen">Resumen:</label>
                                                <div class="col-md-4">                     
                                                  <textarea class="form-control" id="resumen" name="resumen" required></textarea>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="estado">Estado:</label>
                                                <div class="col-md-4">
                                                  <select id="estado" name="estado" class="form-control" required>
                                                    <option value="1">Seleccionar</option>
                                                    <option value="2">Nueva</option>
                                                    <option value="3">En espera de datos</option>
                                                    <option value="4">Aceptada</option>
                                                    <option value="5">Confirmada</option>
                                                    <option value="6">Resuelta</option>
                                                    <option value="7">Cerrada</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="fecharecepcion">Fecha de recepción:</label>
                                                <div class='input-group date col-md-4' id='datetimepicker1'>
                                                  <input type='text' name="fecharecepcion" class="form-control-p" required/>
                                                  <span class="input-group-addon">
                                                      <span class="glyphicon glyphicon-calendar"></span>
                                                  </span>
                                                </div>                                          
                                                <p class="help-block-p">Ejemplo: 2010-02-01 00:00</p> 
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="fechainicio">Fecha de inicio:</label>
                                                <div class='input-group date col-md-4' id='datetimepicker2'>
                                                  <input type='text' name="fechainicio" class="form-control-p" required/>
                                                  <span class="input-group-addon">
                                                      <span class="glyphicon glyphicon-calendar"></span>
                                                  </span>
                                                </div>                                          
                                                <p class="help-block-p">Ejemplo: 2010-02-01 00:00</p> 
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="fechafinalizacion">Fecha de finalización:</label>
                                                <div class='input-group date col-md-4' id='datetimepicker3'>
                                                  <input type='text' name="fechafinalizacion" class="form-control-p" required/>
                                                  <span class="input-group-addon">
                                                      <span class="glyphicon glyphicon-calendar"></span>
                                                  </span>
                                                </div>                                          
                                                <p class="help-block-p">Ejemplo: 2010-02-01 00:00</p> 
                                              </div>
                                              <div class="form-group">
                                                <label class="col-md-4 control-label" for="guardarpeticion"></label>
                                                <div class="col-md-4">
                                                  <button id="guardarpeticion" name="guardarpeticion" class="btn btn-primary">
                                                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
                                                    Guardar
                                                  </button>
                                                </div>
                                              </div>
                                            </fieldset>
                                          </form>
                                        </div>
                                        <div class="tab-pane" id="verpeticiones">Ver</div>
                                        <div class="tab-pane" id="imprimircuestionario">Imprimir cuestionario</div>
                                        <div class="tab-pane" id="registrodemateriales">
                                          <form class="form-horizontal">
                                            <fieldset>
                                              <legend>Registre los materiales</legend>
                                              <div class="form-group">
                                                <div class="col-md-4">
                                                  <button id="singlebutton" name="singlebutton" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    Añadir material
                                                  </button>
                                                </div>
                                              </div>
                                            </fieldset>
                                          </form>



                                        </div>
                                        <div class="tab-pane" id="materialesdeusuario"></div>
                                    </div>
                                </div>                   
                            </div>
                        </div>               
                        <div class="tab-pane fade" id="notas">
                            <div class="col-md-6">            
                                <div class="tabbable tabs-left">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#registrarincidencias" data-toggle="tab">Registrar incidencias</a></li>
                                        <li><a href="#notas" data-toggle="tab">Notas</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="registrarincidencias">
                                          <form class="form-horizontal">
                                            <fieldset>
                                              <legend>Registrando incidencias</legend>
                                              <div class="form-group">
                                                <div class="col-md-12">
                                                  <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
                                                    <table>
                                                      <td>
                                                        <th>Id</th>
                                                        <th>Cliente</th>
                                                        <th>Fecha de recepción</th>
                                                        <th>Fecha de inicio</th>
                                                        <th>Fecha de finalización</th>
                                                        <th>Estado</th>
                                                      </td>

                                                    </table>
                                                  </select>
                                                </div>
                                              </div>
                                            </fieldset>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="notas">Notas</div>
                                    </div>
                                </div>                   
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4primary">Primary 4</div>
                        <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script src="public/js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
  <script src="public/js/moment.js"></script>
  <script src="public/js/moment-locale-es.js"></script>
  <script type="text/javascript" src="public/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
    $(function () 
    {
      $('#datetimepicker1').datetimepicker({
        locale:"es",
        format:"YYYY-MM-DD HH:mm"
      });
    });
    $(function () 
    {
      $('#datetimepicker2').datetimepicker({
        locale:"es",
        format:"YYYY-MM-DD HH:mm"
      });
    });
    $(function () 
    {
      $('#datetimepicker3').datetimepicker({
        locale:"es",
        format:"YYYY-MM-DD HH:mm"
      });
    });
  </script>
        

            <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap1.min.js"></script>
     <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
          </body>


     </html>
<!-- Fixed navbar -->
       