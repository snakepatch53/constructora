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
                        <p><?= $DATA['info']['info_desc'] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-2">
            <div class="container">
                <h2>Qualities of our brand</h2>
                <div class="items">
                    <div class="item">
                        <div class="card">
                            <div class="back">
                                <img src="<?= $DATA['http_domain'] ?>public/img/pool.jpg" alt="Image of pool">
                            </div>
                            <div class="icon">
                                <?php include('./public/img/stars.svg'); ?>
                            </div>
                            <h3>Innovation</h3>
                            <p>Find the best details and always look up to date</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="back">
                                <img src="<?= $DATA['http_domain'] ?>public/img/handshake.jpg" alt="Image of person shaking hands">
                            </div>
                            <div class="icon">
                                <?php include('./public/img/stars.svg'); ?>
                            </div>
                            <h3>Commitment</h3>
                            <p>You'll have our guarantee in quality and punctuality</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="back">
                                <img src="<?= $DATA['http_domain'] ?>public/img/elegance.jpg" alt="Image of elegant build">
                            </div>
                            <div class="icon">
                                <?php include('./public/img/stars.svg'); ?>
                            </div>
                            <h3>Elegance</h3>
                            <p>Up to date with all current aesthetic details</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="container">
                <div class="items">
                    <div class="item title">
                        <h2>What are you looking for yourself?</h2>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?= $DATA['http_domain'] ?>public/img.patios/1.jpg" alt="Image of patio">
                        </div>
                        <h3>Yards</h3>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?= $DATA['http_domain'] ?>public/img.patios/2.jpg" alt="Image of Retaining Walls">
                        </div>
                        <h3>Retaining Walls</h3>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?= $DATA['http_domain'] ?>public/img.patios/3.jpg" alt="Image of Side Walks">
                        </div>
                        <h3>Side Walks</h3>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?= $DATA['http_domain'] ?>public/img.patios/4.jpg" alt="Image of Lawn Care">
                        </div>
                        <h3>Lawn Care</h3>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?= $DATA['http_domain'] ?>public/img.patios/5.jpg" alt="Image of Mulch">
                        </div>
                        <h3>Mulch</h3>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="<?= $DATA['http_domain'] ?>public/img.patios/6.jpg" alt="Image of Trimming">
                        </div>
                        <h3>Trimming</h3>
                    </div>
                </div>
            </div>
        </section>
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