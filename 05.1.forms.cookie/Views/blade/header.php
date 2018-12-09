<div class="header">
    <div class="container">
        <a href="/">
            <div class="header-logo"></div>
        </a>
        <div class="menu">
            <div class="menu__block">
            <ul class="menu__list">
                <?php foreach (Index::getMenu() as $key => $value): ?>
                    <li class="menu__li"><a href="<?= $key?>" class="menu__link"><?=$value[0]?></a></li>
                <?php endforeach; ?>
                <li class="menu__li"><a href="<?= $this->access?'/out':'/login' ?>" class="menu__link"><?= $this->access?'Выход':'Вход' ?></a></li>
            </ul>
            </div>
        </div>
    </div>
</div>