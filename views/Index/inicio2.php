<!DOCTYPE html>
<html>
  <head> 
    <title>Su Ordenador a la Medida</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <link href="<?php echo URL_BASE;?>/public/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>/public/css/estilo.css">
    <link href="<?php echo URL_BASE;?>/public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>/public/css/bootstrap.min.css">
    

    <script>
      function validar(frm) 
      {
        frm.sendBtn.disabled = true;
        if (frm['nombre'].value !== '' && frm['nombre'].value !=='apellidos' && frm['curp'].value !=='' && frm['telefono'].value !=='' && frm['email'].value !==''){
          frm.sendBtn.disabled = false;
        }
        
      }
    </script>

  </head>
  <body class="fondoRC">
    <br>
    <header>
      <img class="logorc" src="<?php echo URL_BASE;?>/public/img/Su Ordenador a la Medida.PNG">
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
                        <div class="alert alert-danger" role="alert"><?php if(isset( $this->errores['global'])) echo $this->errores['global']; ?></div> <!-- Acompletar codigo del if -->
                        <form class="form-horizontal" role="form" id="form1" method="post" action="/proyectoEjemplo/index.php/Cliente/crearCliente"> 
                          <fieldset>
                            <legend>Por favor registre todos los datos del cliente</legend>                                  
                            <div class="form-group <?php if (isset($this->errores['nombre'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
                              <div class="col-md-4">
                                <input autofocus="autofocus" id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: Ricardo</span> 
                                <?php if(isset($this->errores['nombre'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['nombre'];?></span><?php endif;?> 
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['apellidos'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Apellidos:</label>  
                              <div class="col-md-4">
                                <input id="apellidos" name="apellidos" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: Rodriguez Gallegos</span> 
                                <?php if(isset($this->errores['apellidos'])) :?><span id="helpBlock" class="help-block"><?php echo $this->errores['apellidos'];?></span><?php endif;?> 
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['curp'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">CURP:</label>  
                              <div class="col-md-4">
                                <input id="curp" name="curp" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: RORG931219HTSDLC26</span>
                                <?php if(isset($this->errores['curp'])) :?><span class="help-block"><?php echo $this->errores['curp'];?></span><?php endif;?>  
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['telefono'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Teléfono:</label>  
                              <div class="col-md-4">
                                <input id="telefono" name="telefono" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: 8311152645</span>
                                <?php if(isset($this->errores['telefono'])) :?><span class="help-block"><?php echo $this->errores['telefono'];?></span><?php endif;?>  
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['email'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Email:</label>  
                              <div class="col-md-4">
                                <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: saul_07@hotmail.com</span>
                                <?php if(isset($this->errores['email'])) :?><span class="help-block"><?php echo $this->errores['email'];?></span><?php endif;?>  
                              </div>
                            </div>
                            <div class="alert alert-info" id="msg-form"></div>
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="singlebutton"></label>
                              <div class="col-md-4">
                                <button disabled="disabled" id="sendBtn" type="submit" name="enviarDatos" class="btn btn-primary"> 
                                  <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
                                  Guardar
                                </button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                      <div class="tab-pane" id="verclientes">
                        
                        <!--Aqui se van a poner los clientes insertados en BD usando AJAX-->
                      </div>
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
                                <select id="cliente" name="cliente" type="text" class="form-control" required>
                                  <option value="0">Seleccionar</option>
                                  <?php $clientes = $this->getDatos(); foreach ($clientes as $cliente) :?> 
                                    <option value="<?php echo $cliente->id_cliente;?>"><?php echo $cliente->nombre." ".$cliente->apellidos;?></option>
                                  <?php endforeach;?> 
                                </select>                    
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
                      <div class="tab-pane" id="verpeticiones">
                        <!--    Aqui se van a cargar las PETICIONES  de la BD con ajax    -->
                      </div>
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
                      <div class="tab-pane" id="materialesdeusuario">                        
                          
                      </div>
                    </div>
                  </div>                   
                </div>
              </div>               
              <div class="tab-pane fade" id="notas">
                <div class="col-md-12">            
                  <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#registrarincidencias" data-toggle="tab">Registrar incidencias</a></li>
                      <li><a href="#vernotas" data-toggle="tab">Notas</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="registrarincidencias">
                        <form class="form-horizontal">
                          <fieldset>
                            <legend>Registrando incidencias</legend>
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="fechanota">Fecha:</label>
                              <div class='input-group date col-md-4' id='fechanota'>
                                <input type='text' name="fechanota" class="form-control-p" required/>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>                                          
                              <p class="help-block-p">Ejemplo: 2010-02-01 00:00</p> 
                            </div>
                            <div class="form-group">
                              <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Fecha de recepción</th>
                                    <th>Fecha de inicio</th>
                                    <th>Fecha de finalización</th>
                                    <th>Estado de petición</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <?php $datos = $this->getDatos();foreach ($datos as $key => $cliente):?> 
                                    <tr>
                                      <td><?php echo $peticion->id_peticion;?></td>
                                      <td><?php echo $cliente->nombre." ".$cliente->apellidos;?></td>
                                      <td><?php echo $peticion->fecharecepcion;?></td>
                                      <td><?php echo $peticion->fechainicio;?></td>
                                      <td><?php echo $peticion->fechafinalizacion;?></td>
                                      <td><?php echo $peticion->estado;?></td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                              </table>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                      <div class="tab-pane" id="vernotas">
                        <div class="btn-group btn-group-lg" role="group">
                          <button title="Actualizar" id="actualizarnotas" name="actualizarnotas" class="btn btn-info">
                            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                          </button>
                          <button title="Editar" id="editarnotas" name="editarnotas" class="btn btn-success">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          </button>
                          <button title="Eliminar" id="eliminarnotas" name="eliminarnotas" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>                   
                </div>
              </div>
              <div class="tab-pane fade" id="Empleados">

                 <div class="col-md-12">            
                  <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#registrarempleados" data-toggle="tab">Registro de Empleados</a></li>
                      <li><a href="#verempleados" data-toggle="tab">Ver Empleados</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="registrarempleados">
                        <div class="alert alert-danger" role="alert"><?php if(isset( $this->errores['global'])) echo $this->errores['global']; ?></div> <!-- Acompletar codigo del if -->
                        <form class="form-horizontal" role="form" id="form1" method="post" action="/proyectoEjemplo/index.php/Empleado/crear"> 
                          <fieldset>
                            <legend>Por favor registre todos los datos del cliente</legend>                                  
                            <div class="form-group <?php if (isset($this->errores['nombre'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
                              <div class="col-md-4">
                                <input autofocus="autofocus" id="nombree" name="nombree" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: Ricardo</span> 
                                <?php if(isset($this->errores['nombre'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['nombre'];?></span><?php endif;?> 
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['apellidos'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Apellidos:</label>  
                              <div class="col-md-4">
                                <input id="apellidose" name="apellidose" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: Rodriguez Gallegos</span> 
                                <?php if(isset($this->errores['apellidos'])) :?><span id="helpBlock" class="help-block"><?php echo $this->errores['apellidos'];?></span><?php endif;?> 
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['curp'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">CURP:</label>  
                              <div class="col-md-4">
                                <input id="curpe" name="curpe" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: RORG931219HTSDLC26</span>
                                <?php if(isset($this->errores['curp'])) :?><span class="help-block"><?php echo $this->errores['curp'];?></span><?php endif;?>  
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['usuario'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Usuario:</label>  
                              <div class="col-md-4">
                                <input id="usuario" name="usuario" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: saul_07</span>
                                <?php if(isset($this->errores['usuario'])) :?><span class="help-block"><?php echo $this->errores['usuario'];?></span><?php endif;?>  
                              </div>
                            </div>
                            <div class="form-group <?php if (isset($this->errores['contrasena'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Contraseña:</label>  
                              <div class="col-md-4">
                                <input id="contrasena" name="contrasena" type="password" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <?php if(isset($this->errores['usuario'])) :?><span class="help-block"><?php echo $this->errores['contrasena'];?></span><?php endif;?>  
                              </div>
                            </div>
                             <div class="form-group <?php if (isset($this->errores['usuario'])) echo 'has-error' ; ?>">
                              <label class="col-md-4 control-label" for="textinput">Usuario:</label>  
                              <div class="col-md-4">
                                <input id="usuario" name="usuario" type="text" placeholder="" class="form-control input-md" required onkeyup = "validar(this.form)">
                                <span class="help-block">Ejemplo: saul_07</span>
                                <?php if(isset($this->errores['usuario'])) :?><span class="help-block"><?php echo $this->errores['usuario'];?></span><?php endif;?>  
                              </div>
                            </div>
                            <div class="alert alert-info" id="msg-form"></div>
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="singlebutton"></label>
                              <div class="col-md-4">
                                <button disabled="disabled" id="sendBtn" type="submit" name="enviarDatos" class="btn btn-primary"> 
                                  <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
                                  Guardar
                                </button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                      <div class="tab-pane" id="verempleados">
                        
                        <!--Aqui se van a poner los clientes insertados en BD usando AJAX-->
                      </div>
                    </div>
                  </div>                   
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo URL_BASE;?>/public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/moment.js"></script>
    <script src="<?php echo URL_BASE;?>/public/js/moment-locale-es.js"></script>
    <script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/bootstrap-datetimepicker.min.js"></script>
    
    <script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/custom.js"></script>
  </body>
</html>

