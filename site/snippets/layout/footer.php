
<footer id="layout-footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <?php foreach($pages->visible() as $item): ?>
                    <li <?php if($item == $page): ?>class="active"<?php endif; ?>><a href="<?php echo $item->uri(); ?>"><?php echo $item->title(); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <div class="social-btns pull-right">
            <a href="https://twitter.com/sfmlprojects"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
        </div>
        <div class="additional-links">
            SFML Projects &copy; 2015-<?php echo date("Y"); ?>
        </div>
    </div>
    </div>
</footer>

<?php

echo krb( array('assets/javascript/jquery.js',
                'assets/vendor/bootstrap/js/transition.js',
                'assets/vendor/bootstrap/js/alert.js',
                'assets/vendor/bootstrap/js/button.js',
                'assets/vendor/bootstrap/js/carousel.js',
                'assets/vendor/bootstrap/js/collapse.js',
                'assets/vendor/bootstrap/js/dropdown.js',
                'assets/vendor/bootstrap/js/modal.js',
                'assets/vendor/bootstrap/js/tooltip.js',
                'assets/vendor/bootstrap/js/popover.js',
                'assets/vendor/bootstrap/js/scrollspy.js',
                'assets/vendor/bootstrap/js/tab.js',
                'assets/vendor/bootstrap/js/affix.js',
                'assets/vendor/flat-ui/js/bootstrap-select.js',
                'assets/vendor/flat-ui/js/bootstrap-switch.js',
                'assets/vendor/flat-ui/js/flatui-checkbox.js',
                'assets/vendor/flat-ui/js/flatui-radio.js',
                'assets/vendor/flat-ui/js/jquery.tagsinput.js',
                'assets/vendor/flat-ui/js/jquery.placeholder.js',
                'assets/javascript/app.js',
                'assets/javascript/piwik.js'),
                'js', 0.2, true, false, false); ?>
    <noscript><p><img src="//piwik.my-gate.net/piwik.php?idsite=8&rec=1" style="border:0;" alt="" /></p></noscript>
    </body>
</html>
