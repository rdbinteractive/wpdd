</div> <?php // Close #content. ?>
<footer>
</footer>

<?php
wp_footer();

// Google Analytics.
echo (new WPDD\Analytics\Display())->googleAnalyticsTracking();
?>
</body>
</html>
