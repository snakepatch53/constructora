<!DOCTYPE html>
<html lang="<?= $_ENV['HTML_LANG'] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.general/config.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.general/theme1.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.panel/login.css">
    <link rel="shortcut icon" href="<?= $DATA['http_domain'] ?>public/img/icon.svg" type="image/x-icon">
    <title><?= $_ENV['TITLE'] ?> ⚙️ Login</title>
    <script>
        const http_domain = '<?= $DATA['http_domain'] ?>';
    </script>
</head>

<body>
    <main class='container-fluid animate__animated animate__fadeIn'>
        <img src="<?= $DATA['http_domain'] ?>/public/img/login-background.jpg" alt="Image of background" class="bg">
        <div class="container">
            <div class="row justify-content-center align-items-center" style="height:100vh">
                <div class="col-md-7 col-lg-5">
                    <div class="card modal-form">
                        <div class="card-body px-5 py-4 login-container">
                            <form class="needs-validation" id="element-loginform" onsubmit="return false" novalidate>
                                <!-- form | ini -->
                                <div class="row g-3">
                                    <div class="col-md-12 text-center">
                                        <div class="logo my-4">
                                            <?php include('./public/img/logo.svg') ?>
                                            <h1><?= $_ENV['TITLE'] ?></h1>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom01" class="form-label">Username</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text icon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" id="validationCustom01" name="user_user" placeholder="Insert your user" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom02" class="form-label">Password</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text icon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" id="validationCustom02" name="user_pass" placeholder="Insert your pass" type="password" required>
                                            <span class="input-group-text" style="cursor: pointer" id="togglePassword">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-danger fs-6 text-center my-0 py-0" id="element-msg-login"></div>
                                    <div class="col-md-12 m-0">
                                        <button type="submit" class="btn btn-primary" style="width:100%">
                                            <span class="me-1">Log In</span>
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- form | end -->
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<foot>
    <?php include('./src/templates/panel.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.panel/login.js"></script>
</foot>

</html>