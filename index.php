<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/estilo.css">
</head>

<body>
    <br>
    <a class="btn btn-primary" href="vista/empleado/emp_login.php" role="button">Configuración</a>
    <br>
    <br>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4> <img src='img/perfil.jpg' class='imgRedonda' /> Cleanbot</h4>
            </div>
            <div class="body" id="chatbody">
                <p class="alicia">Hola! soy CleanBot, Estoy para responder preguntas relacionadas con coronavirus. Espero poder ayudarte.</p>
                <div class="scroller"></div>
            </div>
            <br>
            <form class="form-inline" method="POST" autocomplete="off">
                <div class="row text-center">
                    <div class="col mw-100">
                        <input type="text" class="form-control" name="chat" id="consulta" placeholder="Ingrese su consulta." style=" font-family: cursive; font-size: 20px;">
                    </div>
                    <div class="col mw-100">
                        <button type="submit" class="btn btn-dark btn-lg" id="btnEnviar">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="resources/js/script.js"></script>
</body>

</html>
