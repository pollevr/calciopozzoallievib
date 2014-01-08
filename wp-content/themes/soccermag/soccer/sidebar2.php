<div id="sidebar2">
<div class="wrap">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
<?php endif; ?>
</div>
</div>
<div id="subbar">
<?php if (get_option('swt_videocheck') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/video.php'); } ?>
<?php if (get_option('swt_aboutcheck') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/aboutus.php'); } ?>
<?php include(TEMPLATEPATH . '/includes/popular.php');  ?>
</div>