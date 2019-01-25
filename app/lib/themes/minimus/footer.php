</div> <?php // Close #content. ?>
<footer>
</footer>
</div> <?php // Close .t_wrap. ?>

<?php
wp_footer();

// Google Analytics.
echo (new WPDD\Analytics\Display())->googleAnalyticsTracking();
?>
</body>
</html>
