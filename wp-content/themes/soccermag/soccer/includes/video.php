<div id="featured-video">
<h3 id="fv">Featured Video</h3>
<div class="padd">
<?php $fvideo = get_option('swt_fvideo');  if($fvideo == '') { ?>
<object data="http://www.youtube.com/v/M11SvDtPBhA" type="application/x-shockwave-flash" width="355" height="280"><param name="movie" value="http://www.youtube.com/v/M11SvDtPBhA" /><param name="wmode" value="transparent" /></object>
<?php } else { ?> 
<object data="http://www.youtube.com/v/<?php echo stripcslashes($fvideo); ?>" type="application/x-shockwave-flash" width="362" height="280"><param name="movie" value="http://www.youtube.com/v/<?php echo stripcslashes($fvideo); ?>" /><param name="wmode" value="transparent" /></object>
<?php } ?>
</div>
</div><!-- fvideo END -->