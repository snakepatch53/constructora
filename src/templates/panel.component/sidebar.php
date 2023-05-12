<div class="sidebar">
    <img class="img-bg" src="<?= $DATA['http_domain'] ?>public/img/sidebar.jpg" alt="Image of background of sidebar">
    <button class="burguer-button" onclick="handleBurgerSidebar()">
        <i class="fa-solid fa-bars"></i>
    </button>
    <div class="sidebar-header">
        <h4 class="text-truncate p-2"><?= $DATA['info']['info_name'] ?></h4>
    </div>
    <div class="logo">
        <?php include('./public/img/logo.svg'); ?>
        <!-- <img class="p-2" src="<?= $DATA['http_domain'] ?>public/img/logo.svg?last=<?= $DATA['info']['info_last'] ?>" alt="Logo"> -->
    </div>
    <!-- List | ini -->
    <ul class="list-group rounded-0 p-2 border-0">

        <a href="<?= $DATA['http_domain'] ?>panel/" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "home") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-house"></i>
            <span class="ms-2">Home</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/info" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "info") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-info"></i>
            <span class="ms-2">Information</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/users" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "users") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-users"></i>
            <span class="ms-2">Users</span>
        </a>

        <a href="<?= $DATA['http_domain'] ?>panel/slider" class="nav-option btn btn-outline-primary border-0 text-start p-3 mb-2 <?= ($DATA['name'] == "slider") ? "shadow  active" : "" ?>">
            <i class="fa-solid fa-image"></i>
            <span class="ms-2">Slider</span>
        </a>

    </ul>
    <!-- List | end -->
</div>