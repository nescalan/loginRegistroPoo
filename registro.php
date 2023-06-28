<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <form autocomplete="off">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInputUsername"
                                    placeholder="myusername" required autofocus>
                                <label for="floatingInputUsername">Usuario</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Clave</label>
                            </div>

                            <div class="d-grid mb-2">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"
                                    type="submit">Registrarse</button>
                            </div>

                            <a class="d-block text-center mt-2 small" href="#">Ya tienes cuenta? Entra aqui</a>

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