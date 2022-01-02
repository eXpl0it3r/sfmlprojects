<?php foreach ($project->sites()->toStructure()->limit(3) as $site_link): ?>
    <a href="<?= $site_link->url() ?>" class="btn<?php if ($site_link->isFirst()): ?> btn-primary<?php else: ?> btn-default<?php endif ?>" role="button" target="_blank"><?= option('link-map')[$site_link->type()->value()] ?></a>
<?php endforeach ?>
