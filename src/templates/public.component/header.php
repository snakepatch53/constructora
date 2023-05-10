<div class="container">
    <a href="<?= $DATA['http_domain'] ?>" class="logo">
        <?php include('./public/img/logo.svg'); ?>
        <h1><?= $_ENV['TITLE'] ?></h1>
    </a>
    <nav>
        <ul>
            <li>
                <a class="<?= $DATA['name'] == "home" ? "active" : "" ?>" href="<?= $DATA['http_domain'] ?>">HOME</a>
            </li>
            <li>
                <a class="<?= $DATA['name'] == "services" ? "active" : "" ?>" href="<?= $DATA['http_domain'] ?>services">SERVICES</a>
            </li>
            <li>
                <a class="<?= $DATA['name'] == "portfolio" ? "active" : "" ?>" href="<?= $DATA['http_domain'] ?>portfolio">PORTFOLIO</a>
            </li>
            <li>
                <a class="<?= $DATA['name'] == "aboutus" ? "active" : "" ?>" href="<?= $DATA['http_domain'] ?>aboutus">ABOUT US</a>
            </li>
            <li>
                <button class="btn-darkmode" id="theme-toggle">
                    <i class="dark fas fa-moon"></i>
                    <i class="light fas fa-sun"></i>
                </button>
            </li>
            <li>
                <a class="btn <?= $DATA['name'] == "contact" ? "active" : "" ?>" href="<?= $DATA['http_domain'] ?>contact">CONTACT US</a>
            </li>
        </ul>
    </nav>
    <button class="burger-toggle" id="burger-toggle">
        <i class="fas fa-bars"></i>
    </button>
</div>