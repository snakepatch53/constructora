<div class="container">
    <div class="logo">
        <?php include('./src/templates/public.component/logo.php'); ?>
    </div>
    <nav>
        <ul>
            <li>
                <a href="<?= $DATA['http_domain'] ?>">HOME</a>
            </li>
            <li>
                <a href="<?= $DATA['http_domain'] ?>">SERVICES</a>
            </li>
            <li>
                <a href="<?= $DATA['http_domain'] ?>">PORTFOLIO</a>
            </li>
            <li>
                <a href="<?= $DATA['http_domain'] ?>">ABOUT USSS</a>
            </li>
            <li class="btn">
                <a href="<?= $DATA['http_domain'] ?>">CONTACT</a>
            </li>
        </ul>
    </nav>
    <button class="burger-toggle" id="burger-toggle">
        <i class="fas fa-bars"></i>
    </button>
</div>