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
                    <?php foreach ($DATA['contacts'] as $value) { ?>
                        <li>
                            <a href="<?= $value['contact_link'] ?>" target="_blank">
                                <?= $value['contact_icon_html'] ?>
                                <span><?= $value['contact_value'] ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="item social-media">
                <h3>SOCIAL MEDIA</h3>
                <ul>
                    <?php foreach ($DATA['socials'] as $value) { ?>
                        <li style="--color: <?= $value['contact_color'] ?>">
                            <a href="<?= $value['contact_link'] ?>" target="_blank">
                                <?= $value['contact_icon_html'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="copy">
    <div class="container">
        <p>All rights reserved © <a target="_blank" href="<?= $DATA['http_domain'] ?>"><?= $DATA['info']['info_name'] ?></a> <?= date('Y') ?></p>
        <p>Developed and designed by <a target="_blank" href="<?= $_ENV['DEVELOPER_LINK'] ?>">Ideasoft</a> & <a target="_blank" href="<?= $_ENV['DESIGNER_LINK'] ?>">Leap Estudio</a></p>
    </div>
</div>