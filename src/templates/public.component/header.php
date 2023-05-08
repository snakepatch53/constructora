<div class="container">
    <a href="<?= $DATA['http_domain'] ?>" class="logo">
        <?php include('./src/templates/public.component/logo.php'); ?>
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
                <a class="btn <?= $DATA['name'] == "contact" ? "active" : "" ?>" href="<?= $DATA['http_domain'] ?>contact">CONTACT</a>
            </li>
        </ul>
    </nav>
    <button class="burger-toggle" id="burger-toggle">
        <i class="fas fa-bars"></i>
    </button>
</div>