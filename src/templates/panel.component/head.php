<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/fontawesome/css/all.min.css">
<link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/library.general/bootstrap.min.css">
<link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.panel/general.css">

<link rel="shortcut icon" href="<?= $DATA['http_domain'] ?>public/img/icon.svg?last=<?= $DATA['info']['info_last'] ?>" type="image/x-icon">
<title><?= $DATA['info']['info_name'] ?> ⚙️ Panel <?= $DATA['title'] ?></title>
<script>
    const http_domain = '<?= $DATA['http_domain'] ?>';
    const SESSION = JSON.parse('<?= json_encode($_SESSION) ?>');
</script>