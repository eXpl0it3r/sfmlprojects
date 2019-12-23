<?php
    $labels = ['offical_site' => 'Website',
              'steam' => 'Steam',
              'sfml_forum' => 'SFML Forum',
              'tig_source' => 'TIGSource',
              'itch_io' => 'itch.io',
              'indie_db' => 'IndieDB',
              'gamejolt' => 'Game Jolt',
              'github' => 'GitHub',
              'bitbucket' => 'Bitbucket',
              'custom_link_one' => $project->custom_link_one_label(),
              'custom_link_two' => $project->custom_link_two_label()];
?>
<a href="<?php echo $project->content()->get($project->brief_main()->value())->value(); ?>" class="btn btn-primary" role="button" target="_blank"><?php echo $labels[$project->brief_main()->value()]; ?></a>
<?php if($project->brief_second()->value() != ''): ?>
<a href="<?php echo $project->content()->get($project->brief_second()->value())->value(); ?>" class="btn btn-default" role="button" target="_blank"><?php echo $labels[$project->brief_second()->value()]; ?></a>
<?php endif; ?>
<?php if($project->brief_third()->value() != ''): ?>
<a href="<?php echo $project->content()->get($project->brief_third()->value())->value(); ?>" class="btn btn-default" role="button" target="_blank"><?php echo $labels[$project->brief_third()->value()]; ?></a>
<?php endif; ?>
