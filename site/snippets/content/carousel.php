<div id="carousel-home" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $counter = 0; ?>
        <?php foreach($page->images()->filterBy('filename', '*=', 'carousel-') as $index => $item): ?>
            <li data-target="#carousel-home" data-slide-to="<?php echo $counter; ?>"<?php if($counter == 0): ?> class="active"<?php endif; ?>></li>
            <?php $counter++; ?>
        <?php endforeach; ?>
    </ol>

    <div class="carousel-inner" role="listbox">
        <?php $counter = 0; ?>
        <?php foreach($page->images()->filterBy('filename', '*=', 'carousel-') as $index => $item): ?>
            <div class="item<?php if($counter == 0): ?> active<?php endif; ?>">
                <img src="<?php echo $item->url(); ?>" alt="<?php echo $item->filename(); ?>">
                <?php if($item->title()->exists()): ?>
                <div class="carousel-caption">
                    <h3><?php echo $item->title(); ?></h3>
                    <?php echo $item->caption()->kirbytext(); ?>
                </div>
                <?php endif;?>
            </div>
            <?php $counter++; ?>
        <?php endforeach; ?>
    </div>

    <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
        <span class="icon icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
        <span class="icon icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
