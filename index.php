<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #666">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color: white">EJEMPLO INICIO DE SESION EN PHP</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    
                   
                </div>
                <div class="col-4">
                    <br/><br/>
                    <form action="index.php">
                        <input id="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                    <br/>
                    <input id="cajaPassword" class="form-control" type="password" placeholder="Contraseña">
                    <br/>
                    <button id="boton1" class="btn btn-primary btn-block" type="submit">Primary</button>
                    <br/><br/>
                    <p>
                        Fecha de Nacimiento(yyyy-mm-dd)
                        <input data-validation="date" data-validation-format="yyyy-mm-dd" type="number">
                    </p>
                    </form>
                </div>
                <div class="col-4">
                    
                </div>
            </div>
            
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        // document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $(document).ready(function(){
            $('#cajaNombre').hide();
        });
        
        $.validate({
            lang: 'es'
        })
        
        
        $('#boton1').click(function(){
            console.log("aqui si llega");
            $('#cajaNombre').show(200);
            //$('#nombre').val("JUANPA CHUPA");
            //$('input[name=usuario_nombre]').val("JUANPA peina calvos");
        });
    </script>
</html>
