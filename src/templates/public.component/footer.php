<div class="info">
    <div class="container">
        <div class="items">
            <div class="item item-logo">
                <a href="<?= $DATA['http_domain'] ?>" class="logo">
                    <?php include('./public/img/logo.svg'); ?>
                    <span><?= $DATA['info']['info_name'] ?></span>
                </a>
            </div>
            <div class="item">
                <h3>CONTACTS</h3>
                <ul>
                    <li>
                        <a href="tel:845-219-3871">
                            <i class="fas fa-phone-alt"></i>
                            <span>845-219-3871</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:admin@erazobrothersllc.com">
                            <i class="fas fa-envelope"></i>
                            <span>admin@erazobrothersllc.com </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://goo.gl/maps/6Y5Z9Z7Z7Z7Z7Z7Z7" target="_blank">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Poughkeepsie, NY 12601</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="item social-media">
                <h3>SOCIAL MEDIA</h3>
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="copy">
    <div class="container">
        <p>All rights reserved © <a target="_blank" href="<?= $DATA['http_domain'] ?>"><?= $_ENV['TITLE'] ?></a> <?= date('Y') ?></p>
        <p>Developed and designed by <a target="_blank" href="<?= $_ENV['DEVELOPER_LINK'] ?>">Ideasoft</a> & <a target="_blank" href="<?= $_ENV['DESIGNER_LINK'] ?>">Leap Estudio</a></p>
    </div>
</div>