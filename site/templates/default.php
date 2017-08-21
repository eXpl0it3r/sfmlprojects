<?php snippet('layout/header', ['page' => $page]) ?>

<section id="layout-title">
    <div class="container">
        <h3><?php echo $page->title()->html(); ?></h3>
    </div>
</section>

<div class="container projects">
    <?php echo $page->intro()->kirbytext(); ?>
    <hr>
    <?php echo $page->text()->kirbytext(); ?>
</div>
<br>

<?php snippet('layout/footer') ?>
