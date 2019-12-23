<?php snippet('layout/header', ['page' => $page]) ?>

<section id="layout-title">
    <div class="container">
        <h3><?php echo $page->title(); ?></h3>
    </div>
</section>

<div class="container projects">
    <p>This is an ever growing yet incomplete list of projects made or in the process of being made which use SFML or parts of SFML in some way.<br>
        Feel free to <a href="https://twitter.com/sfmlprojects" target="_blank">tweet us</a> your project if it's missing on any of our lists.</p>
    <hr>
    <?php
        $columns = 1;
        $counter = 1;
        $projects = $page->children()->filterBy('template', 'project')->listed()->sortBy('release_date', 'desc');
    ?>
    <?php foreach($projects as $project): ?>
        <?php if($columns == 1): ?><div class="row"><?php endif; ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="project_img">
                    <span></span>
                    <img class="img-responsive" src="<?php echo $project->title_img()->toFile()->thumb(['height' => 210])->url(); ?>" alt="<?php echo $project->title_img()->title(); ?>">
                </div>
                <div class="caption">
                    <h4><?php echo $project->title(); ?></h4>
                    <?php echo str_replace('<p>', '<p class="project_brief">', $project->brief()->kirbytext()->value()); ?>
                    <p><?php snippet('content/list_links', ['page' => $page, 'project' => $project]); ?></p>
                </div>
            </div>
        </div>
        <?php if($columns == 3 or $counter == count($projects)): ?></div>
            <?php $columns = 1; ?>
        <?php else: ?>
            <?php $columns++; ?>
        <?php endif; ?>
        <?php $counter++; ?>
    <?php endforeach; ?>
    <?php if(count($projects) == 0): ?>
        <h4>No projects found 😔</h4>
        <p>Please <a href="https://twitter.com/sfmlprojects" target="_blank">let us</a> know if you know any projects that would fit this category!</p>
    <?php endif; ?>
</div>
<br>

<?php snippet('layout/footer') ?>