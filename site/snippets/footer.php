    	</div>
        <div class="footer-container">
    	    <footer class="wrapper">
    	        <?php echo kirbytext($site->copyright()) ?>
    	        <span>Back to top</span>
    	    </footer>
    	</div>
    </div>

	<?php echo js('assets/js/plugins.js') ?>
    <?php echo js('assets/js/vendor/jquery.slicknav.min.js') ?>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    
    </body>
</html>