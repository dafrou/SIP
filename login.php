<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive HTML template for Your company">
        <meta name="author" content="">

        <!-- Le styles -->      

        <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.2.0-dist/css/bootstrap-reponsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.2.0-dist/css/typica-login.css" rel="stylesheet" type="text/css"/>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le favicon -->
        <link rel="shortcut icon" href="favicon.ico">

    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">                  
                    <a class="brand" href="login.php"><img src="img/logos/Eurocorp.png" width="100" height="100"/></a>
                </div>
            </div>
        </div>

        <div class="container">

            <div id="login-wraper">
                <form class="form login-form">
                    <legend>Ingrese a <span class="blue"> SIP</span></legend>

                    <div class="body">
                        <label>Correo</label>
                        <input type="email">

                        <label>Contraseña</label>
                        <input type="password">
                    </div>

                    <div class="footer">
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Recordar
                        </label>

                        <button type="submit" class="btn btn-warning">Ingresar</button>
                    </div>

                </form>
            </div>

        </div>

        <footer class="white navbar-fixed-bottom">

        </footer>


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->   
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/backstretch.min.js" type="text/javascript"></script>
        <script src="js/typica-login.js" type="text/javascript"></script>

    </body>
</html>
