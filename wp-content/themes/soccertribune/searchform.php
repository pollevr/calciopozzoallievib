<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div class="swrap">Search
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />
	<input type="submit" id="searchsubmit" value="GO" />
</div>
</form>