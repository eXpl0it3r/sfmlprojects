<nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/<?php echo $pages->find('home')->uri(); ?>">SFML Projects</a>
        </div>
        <div class="collapse navbar-collapse navbar-main-collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach($pages->listed() as $item): ?>
                <?php if(false && $item->hasChildren()): ?>
                <li class="dropdown {% if item.isChildActive %}active{% endif %}">
                    <a href="<?php echo $item->uri(); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $item->title(); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php foreach($item->children()->listed() as $subitem): ?>
                        <?php if($subitem->title() == '----'): ?>
                        <li role="separator" class="divider"></li>
                        <?php else: ?>
                        <li <?php if($subitem == $page): ?>class="active"<?php endif; ?>><a href="/<?php echo $subitem->uri(); ?>"><?php echo $subitem->title(); ?></a></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php else: ?>
                <li <?php if($item == $page): ?>class="active"<?php endif; ?>><a href="/<?php echo $item->uri(); ?>"><?php echo $item->title(); ?></a></li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
