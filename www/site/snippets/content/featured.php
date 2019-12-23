<section class="featured">
    <div class="container">
        <?php foreach($page->images()->filterBy('filename', '*=', 'featured-') as $logo): ?>
            <div>
                <a href="<?php echo $logo->link(); ?>" target="_blank"><img src="<?php echo $logo->url(); ?>" alt="<?php echo $logo->filename(); ?>"></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
