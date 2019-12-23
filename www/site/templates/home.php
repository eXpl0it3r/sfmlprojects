<?php snippet('layout/header', ['page' => $page]) ?>

<section class="home-title">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>SFML Projects</h3>
                <?php echo $page->brand_text()->kirbytext(); ?>
                <img class="img-responsive" src="<?php echo $page->brand_logo()->toFile()->url(); ?>" alt="Logo">
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <div class="player">
                    <?php snippet('content/carousel', ['page' => $page]); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php snippet('content/featured', ['page' => $page]) ?>

<br />

<div class="container">
    <div class="row our-services">
        <div class="col-sm-12 static-page">
            <h4 class="headline"><span><?php echo $page->content_title(); ?></span></h4>
            <?php echo $page->content_text()->kirbytext(); ?>

            <h4 class="headline"><span><?php echo $page->categories_title(); ?></span></h4>
            <div class="row">
                <div class="col-sm-4">
                    <div class="services">
                        <div class="service-item">
                            <i class="icon-<?php echo $page->category_one_img(); ?>"></i>
                            <div class="service-desc">
                                <h5><a href="<?php echo $page->category_one_link(); ?>"><?php echo $page->category_one_title(); ?></a></h5>
                                <?php echo $page->category_one()->kirbytext(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services">
                        <div class="service-item">
                            <i class="icon-<?php echo $page->category_two_img(); ?>"></i>
                            <div class="service-desc">
                                <h5><a href="<?php echo $page->category_two_link(); ?>"><?php echo $page->category_two_title(); ?></a></h5>
                                <?php echo $page->category_two()->kirbytext(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services">
                        <div class="service-item">
                            <i class="icon-<?php echo $page->category_three_img(); ?>"></i>
                            <div class="service-desc">
                                <h5><a href="<?php echo $page->category_three_link(); ?>"><?php echo $page->category_three_title(); ?></a></h5>
                                <?php echo $page->category_three()->kirbytext(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="headline"><span><?php echo $page->twitter_title(); ?></span></h4>
            <div class="recent-tweets">
                <div class="container">
                    <div class="col-sm-6">
                        <?php snippet('content/tweets', ['twitter_handle' => 'sfmlprojects']); ?>
                    </div>
                    <div class="col-sm-6">
                        <?php snippet('content/tweets', ['twitter_handle' => 'sfmldev']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php snippet('layout/footer') ?>