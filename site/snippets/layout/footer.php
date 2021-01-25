
    <footer id="layout-footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <?php foreach($pages->listed() as $item): ?>
                        <li <?php if($item == $page): ?>class="active"<?php endif; ?>><a href="<?php echo $item->uri(); ?>"><?php echo $item->title(); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="social-btns pull-right">
                <a href="https://twitter.com/sfmlprojects"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
            </div>
            <div class="additional-links">
                <?= $site->footer()->kirbytextinline() ?>
            </div>
        </div>
    </footer>
    <noscript><p><img src="//piwik.my-gate.net/piwik.php?idsite=8&rec=1" style="border:0;" alt="" /></p></noscript>
    </body>
</html>
