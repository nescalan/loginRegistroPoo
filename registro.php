<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="./public/css/registro.css">
    <title>Registro de Usuario</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
                        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
                            autocomplete="off">

                            <div class="form-floating mb-3">
                                <input id="usuario" type="text" class="form-control" name="usuario"
                                    placeholder="myusername" required autofocus>
                                <label for="usuario">Usuario</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Password" required>
                                <label for="password">Clave</label>
                            </div>

                            <div class="d-grid mb-2">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"
                                    type="submit">Registrarse</button>
                            </div>

                            <a class="d-block text-center mt-2 small" href="index.php">Ya tienes cuenta? Entra aqui</a>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>