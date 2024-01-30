<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Grupo Consentido</title>
</head>
<body class="bg-custom">
    <div class="container mt-2">
        <div class="row d-flex justify-content-center mb-3">
            <img src="./assets/img/logo.png" alt="logo empresa" style="width: 200px; height: 200px;">
        </div>
        <div class="container text-center">
            <p class="text-white fs-1 fw-bold">Realiza tu reservación</p>
        </div>
        <div class="row d-flex justify-content-center">
         <div class="col-md-4">
           <div class= "container-fluid bg-white rounded-4 mb-5 ">
                    <form action="/action_page.php" class="p-4">
                        <div class="mb-3 mt-2">
                            <label for="email" class="form-label">Nombre</label>
                            <input type="email" class="form-control" id="email" placeholder="Nombre" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Apellido</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Apellido" name="pswd">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Numero de telefono</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Numero de telefono" name="pswd">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Numero de personas</label>
                            <input type="number" id="numero" name="numero" step="1" value="0">
                        </div>

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Selecciona una fecha:</label>
                            <input type="date" id="fecha" name="fecha" class="form-control">
                        </div>

                        <div class="mb-3">
                        <label for="pwd" class="form-label">¿Cumpleañero?</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Si
                            <label class="form-check-label" for="radio1"></label>
                            </div>
                            <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">No
                            <label class="form-check-label" for="radio2"></label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label mt-2">Comentarios</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="container text-center mb-3 ">
                            <p>
                            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2 ">
            
        </div>
    </div>
</body>
 <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
