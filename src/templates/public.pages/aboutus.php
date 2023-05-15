<!DOCTYPE html>
<html lang="<?= $_ENV['HTML_LANG'] ?>">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/aboutus.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="frontpage">
            <div class="bg-img">
                <img src="<?= $DATA['http_domain'] ?>public/img/frontpage-aboutus.jpg" alt="Imagen de portada de la pagina">
            </div>
            <div class="container">
                <h1>Our brand, our company, our ideaology</h1>
                <a href="#section2">
                    <i class="fas fa-arrow-down"></i>
                </a>
            </div>
        </section>

        <section class="section2" id="section2">
            <div class="container">
                <h2>Mission & Vision</h2>
                <div class="items">
                    <div class="item">
                        <h3>Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="item">
                        <h3>Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section3">
            <div class="container">
                <h2>Goals with you</h2>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <?php include('./public/img/stars.svg'); ?>
                            <i class="fa fa-hand-holding-heart"></i>
                        </div>
                        <h3>Advise</h3>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <?php include('./public/img/stars.svg'); ?>
                            <i class="fa fa-handshake"></i>
                        </div>
                        <h3>Escort</h3>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <?php include('./public/img/stars.svg'); ?>
                            <i class="fa fa-lightbulb"></i>
                        </div>
                        <h3>Innovate</h3>
                    </div>
                </div>
                <p>Our commitment is to provide you with the best experience so that you can fulfill your desire to renovate your home.</p>
            </div>
        </section>



        <section class="section4">
            <div class="container">
                <h2>Our team</h2>
                <div class="items">
                    <?php for ($i = 1; $i < 5; $i++) { ?>
                        <a href="#" class="item" target="_blank">
                            <div class="img">
                                <img src="<?= $DATA['http_domain'] ?>public/img.team/default.png" alt="Image of team member">
                            </div>
                            <h3>Member #<?= $i ?></h3>
                            <span>Position of menber #<?= $i ?></span>
                        </a>
                    <?php } ?>
                </div>
                <p>Our commitment is to provide you with the best experience so that you can fulfill your desire to renovate your home.</p>
            </div>
        </section>



        <section class="section5">
            <div class="container">
                <h2>Locate Us</h2>
                <div class="mapa"><?= $DATA['info']['info_location'] ?></div>
            </div>
        </section>
    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>