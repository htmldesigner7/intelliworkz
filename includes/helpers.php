<?php
/** Small helpers so repeated markup stays consistent (common components). */
function btn(string $label, string $class = '', ?string $icon = null, string $href = '#'): void { ?>
    <a href="<?= $href ?>" class="btn <?= $class ?>"><?= $label ?><?php if ($icon): ?><img src="assets/icons/<?= $icon ?>" width="24" height="24" alt=""><?php endif; ?></a>
<?php }

function section_head(string $title, string $text = '', string $class = ''): void { ?>
    <div class="section-head <?= $class ?>">
        <h2 class="h2"><?= $title ?></h2>
        <?php if ($text): ?><p class="lead"><?= $text ?></p><?php endif; ?>
    </div>
<?php } ?>
