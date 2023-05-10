<!DOCTYPE html>
<html lang="<?= $_ENV['HTML_LANG'] ?>">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/home.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/frontpage.css">
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/facebook_posts.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="frontpage">
            <?php include('./src/templates/public.component/frontpage.php') ?>
        </section>

        <section class="section-1">
            <div class="subsection">
                <div class="container">
                    <h2>An easier way to build</h2>
                </div>
            </div>
            <div class="container banner">
                <img class="bg-img" src="<?= $DATA['http_domain'] ?>public/img/car.jpg" alt="Image of car in the road">
                <div class="items">
                    <div class="item"></div>
                    <div class="item">
                        <p>Our experienced team is here to help with the entire process, from initial idea to commissioning, we are here to help you get the design and work you need.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-2">
            <div class="container">
                <h2>Qualities of our brand</h2>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <?php include('./public/img/stars.svg'); ?>
                        </div>
                        <h3>Innovation</h3>
                        <p>Find the best details and always look up to date</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <?php include('./public/img/stars.svg'); ?>
                        </div>
                        <h3>Commitment</h3>
                        <p>You'll have our guarantee in quality and punctuality</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <?php include('./public/img/stars.svg'); ?>
                        </div>
                        <h3>Elegance</h3>
                        <p>Up to date with all current aesthetic details</p>
                    </div>
                </div>
            </div>
        </section>


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
    <script src="<?= $DATA['http_domain'] ?>public/js.public/frontpage.component.js"></script>
</foot>

</html>