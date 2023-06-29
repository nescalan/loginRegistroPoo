<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <!-- Local CSS -->
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Login de Usuario</title>
</head>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Login de Usuario!</h3>

                                <!-- Sign In Form -->
                                <form>
                                    <div class="form-floating mb-3">
                                        <input id="usuario" type="email" class="form-control"
                                            placeholder="name@example.com">
                                        <label for="usuario">Usuario</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input id="password" name="id=" password"" type="password" class="form-control"
                                            placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Entrar</button>
                                        <div class="text-center">
                                            <a class="small" href="registro.php">Registrate aqui!</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>