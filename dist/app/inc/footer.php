        </div>
        <footer class="footer">
            <div class="inner"><?php echo config( 'site.title' ) ?> &mdash; <?php echo config( 'site.slogan' ) ?></div>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <script src="<?php echo site() ?>assets/scripts.min.js"></script>

        <!-- Piwik

        <script>
            var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.liltha.ch//";
                _paq.push(['setTrackerUrl', u+'piwik.php']);
                _paq.push(['setSiteId', 1]);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
                g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
            })();
        </script>
        <noscript><p><img src="http://piwik.liltha.ch/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>

        End Piwik Code -->

        <?php if ( isset( $isFrontPage ) ) : ?>
            <script>
                $( function() {
                    BgSlideshow.init();
                } );
            </script>
        <?php endif ?>
    </body>
</html>
