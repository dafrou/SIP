<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>   
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <title>Solicitud de Ingreso</title>
        <!-- Bootstrap core CSS -->       
        <link href="../../bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- Custom styles for this template -->          
        <link href="../../styles/carouselSolicitante.css" rel="stylesheet" type="text/css"/>    
        <link href="../../styles/formSolicitante.css" rel="stylesheet" type="text/css"/>      
        <script src="../../scripts/validaciones.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="form1" name="frmContacto" method="post" onsubmit="return validar(this);">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators ">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/" />
                        <div class="container">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/" />
                        <div class="container">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/" />
                        <div class="container">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" style="color: #ea3838;"></span></a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" style="color: #ea3838;"></span></a>
            </div>
            <div class="container marketing">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-8">
                            <p id="Label6" class="titulo">FORMULARIO DE INGRESO DE PERSONAL </p>
                        </div>
                        <div class="col-lg-2">
                            <p id="lblFecha" class="fecha"></p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <p id="Label2" class="formulario">Datos Solicitante</p>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="txtNombreSolicitante" name="txtNombreSolicitante" placeholder="Nombre Solicitante" class="caja" />
                            <br />

                        </div>
                        <div class="col-lg-4">
                            <input type="text" id="txtAreaSolicitante" name="txtAreaSolicitante" placeholder="Area Solicitante" class="caja" />
                            <br />

                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <p id="Label3" class="formulario">Datos Nuevo Personal</p>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="caja" />
                            <br />                    
                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtApellidoPaterno" name="txtApellidoPaterno" placeholder="Apellido Paterno" class="caja" />
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtApellidoMaterno" name="txtApellidoMaterno" placeholder="Apellido Materno" class="caja" />
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtRut" placeholder="Rut" class="caja"/>
                            <br />

                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">                     
                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtArea" placeholder="Area" class="caja"/>                      
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtCargo" placeholder="Cargo" class="caja"/>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtUbicacionFisica" placeholder="Ubicación fisica" class="caja"/>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <input type="text" id="txtFecha" placeholder="Fecha de ingreso dd/mm/aa" class="caja"/>
                            <br />
                        </div>                   
                        <div class="col-lg-1"></div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <p id="Label4"  class="formulario">Equipamiento Hardware</p>
                        </div>
                        <div class="col-lg-2">
                            <select id="ddlPcDisponible"  style="width:100%" class="ddlist">
                                <option value="0">PC</option>
                                <option value="1">Unidad antigua disponible</option>
                                <option value="2">Nueva Unidad</option>
                            </select>
                            <br />
                        </div>
                        <div class="col-lg-2">
                            <select id="ddlImpresora"  style="width:100%" class="ddlist">
                                <option value="0">Impresora</option>
                                <option value="1">En red</option>
                                <option value="2">Personal</option>
                                <option value="3">No necesita</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlTelefono"  style="width:100%" class="ddlist">
                                <option value="0">Telefono</option>
                                <option value="1">Reasignado</option>
                                <option value="2">Nuevo</option>                        
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlPlanDatos"  style="width:100%" class="ddlist">
                                <option value="0">Plan de Datos</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>                        
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <p id="Label5" class="formulario">Software</p>
                        </div>
                        <div class="col-lg-2">
                            <select id="ddlCorreo"  style="width:100%" class="ddlist">
                                <option value="0">Correo</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>                        
                            </select>

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlEuroges" style="width:100%" class="ddlist">
                                <option value="0">Euroges</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2"> 
                            <select id="ddlsoftland" style="width:100%" class="ddlist">
                                <option value="0">Softland</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlPayroll" style="width:100%" class="ddlist">
                                <option value="0">Payroll</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>

                        <div class="col-lg-1"></div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-2">
                            <select id="ddlIntranet" style="width:100%" class="ddlist">
                                <option value="0">Intranet</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlIconstruye" style="width:100%" class="ddlist">
                                <option value="0">Iconstruye</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlOfficeBanking" style="width:100%" class="ddlist">
                                <option value="0">Office Banking</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlConexionRemota" style="width:100%" class="ddlist">
                                <option value="0">ConexionRemota</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2">
                            <select id="ddlArbol" style="width:100%" class="ddlist">
                                <option value="0">Arbol de datos</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                            <select id="ddlSharePoints" style="width:100%" class="ddlist">
                                <option value="0">SharePoints</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <br />

                        </div>
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-7"></div>
                        <div class="col-lg-3">
                            <input id="Submit1" type="submit" value="Solicitar Ingreso" class="boton"/> 
                        </div>
                        <div class="col-lg-1"></div>
                    </div>

                </div>
                <hr class="featurette-divide" />
                <!-- FOOTER -->
                <div class="Semifooter">
                </div>
                <div class="footer">
                    <footer>
                        <p class="pull-right"><a href="#">Back to top</a></p>
                        <p>&copy; 2014 TI Eurocorp, Inc.</p>
                    </footer>
                </div>
            </div>
            <!-- /.container -->

            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>          
            <script src="../../bootstrap-3.2.0-dist/js/bootstrap.min.js" type="text/javascript"></script>          
            <script src="../../js/doc.min.js" type="text/javascript"></script>
        </form>
    </body>
</html>


