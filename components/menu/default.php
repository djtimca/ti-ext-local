<?php
?>
<div class="menu-list">
    <?php if ($menuIsGrouped) { ?>
        <?= partial('@grouped'); ?>
    <?php } else { ?>
        <?= partial('@items', ['menuItems' => $menuList]); ?>
    <?php } ?>
</div>

<div class="pagination-bar text-right">
    <div class="links"><?= $menuList->links(); ?></div>
</div>