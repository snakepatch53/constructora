<!DOCTYPE html>
<html lang="<?= $_ENV['HTML_LANG'] ?>">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/services.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <section class="frontpage">
            <div class="container">
                <h1>You are closer, how can we help you?</h1>
                <h2>Find the service you need</h2>
                <a href="#section-2" class="btn">
                    <i class="fas fa-chevron-down"></i>
                </a>
            </div>
        </section>

        <section class="section2" id="section-2">
            <div class="container">
                <h3>Just what you need to renovate your home</h3>
                <div class="items">
                    <div class="item">
                        <h4>Patios</h4>
                        <p>We remodel and fix your outdoor spaces to give you a different and lively style.</p>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+593959999086&text=Hello, I would like to know more about the patio construction service.">
                            <span>Ask of this service</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="item">
                        <h4>Retaining Walls</h4>
                        <p>A retaining wall is important and needs to be very well built, we guarantee it.</p>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+593959999086&text=Hello, I would like to know more about the retaining wall construction service.">
                            <span>Ask of this service</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="item">
                        <h4>Sidewalks</h4>
                        <p>Give your home a better presentation by building beautiful and elegant sidewalks.</p>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+593959999086&text=Hello, I would like to know more about the sidewalk construction service">
                            <span>Ask of this service</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="item">
                        <h4>Lawn Care</h4>
                        <p>Your lawn also deserves to have a good presentation, keep it trimmed and well cared for.</p>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+593959999086&text=Hello, I would like to know more about the lawn care service">
                            <span>Ask of this service</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="item">
                        <h4>Mulch</h4>
                        <p>Apply the best organic material to your plots and give it life and color for longer.</p>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+593959999086&text=Hello, I would like to know more about the parcel care service.">
                            <span>Ask of this service</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                    <div class="item">
                        <h4>Trimming</h4>
                        <p>Apply beautifiers and make your house have a different touch from the others.</p>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=+593959999086&text=Hola, estoy interesado en tus servicios para embellecer mi casa. ¿Podrías brindarme más información sobre tus opciones y precios?">
                            <span>Ask of this service</span>

                        </a>
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
</foot>

</html>