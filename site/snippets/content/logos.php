<section class="logos">
    <div class="container">
        <?php foreach($page->images()->filterBy('filename', '*=', 'logo-') as $logo): ?>
            <div><img src="<?php echo $logo->url(); ?>" alt="<?php echo $logo->filename(); ?>"></div>
        <?php endforeach; ?>
    </div>
</section>
