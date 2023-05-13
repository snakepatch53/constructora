<!DOCTYPE html>
<html lang="<?= $_ENV['HTML_LANG'] ?>">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/splide/splide.min.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/portfolio.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <div class="frontpage">
            <div class="bg-img">
                <img src="<?= $DATA['http_domain'] ?>public/img/frontpage-portfolio.jpg" alt="Imagen de portada de la pagina">
            </div>
            <div class="container">
                <h1>Here is a collection of our work</h1>
                <a href="#section-customers">
                    <i class="fas fa-arrow-down"></i>
                </a>
            </div>
        </div>

        <section class="section-title" id="section-customers">
            <div class="container">
                <h3>Our Clients</h3>
                <h4>These are the outstanding clients of our company, do you want to be part of them?</h4>
            </div>
        </section>

        <section class="section-customers">
            <div class="splide slider" id="slider-customers">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($DATA['customers'] as $value) { ?>
                            <li class="splide__slide">
                                <a href="<?= $value['customer_link'] ?>" target="_blank">
                                    <img src="<?= $value['customer_logo_url'] ?>" alt="Image of <?= $value['customer_name'] ?>">
                                    <h4><?= $value['customer_name'] ?></h4>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>


        <?php foreach ($DATA['services'] as $value) { ?>
            <section class="section-title">
                <div class="container">
                    <h3><?= $value['service_title'] ?></h3>
                </div>
            </section>

            <section class="section-gallery" id="section-work-1">
                <div class="collage">
                    <?php for ($i = 1; $i <= 11; $i++) { ?>
                        <img src="<?= $DATA['http_domain'] ?>public/img.gallery/<?= $i ?>.jpg" alt="Image <?= $i ?>">
                    <?php } ?>
                </div>
            </section>
        <?php } ?>


    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/library.general/splide/splide.min.js"></script>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/portfolio.js"></script>
</foot>

</html>