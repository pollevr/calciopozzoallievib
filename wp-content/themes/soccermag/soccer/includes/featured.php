<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
      ?>

<div id="featured-container">
<div class="prev"></div>
<div id="featured">
<ul>
<?php

	$my_query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;  ?>
<li>
<span class="titles-featured"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></span>
<div style="clear: both;"></div>
</li>
<?php endwhile; ?>
</ul>
</div>
<div class="next"></div>
</div>