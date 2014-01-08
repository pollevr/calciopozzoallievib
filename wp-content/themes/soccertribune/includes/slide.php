<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 4000
        });
    });
</script>
<?php
	$slidecat = get_option('swt_slide_categoryf');
	$slidecount = get_option('swt_slide_count');
?>
 <div id="slider">
        <ul id="sliderContent">
        <?php
 	    $my_query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.'');
        while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
        ?>
            <li class="sliderImage">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo get_post_meta($post->ID, 'slide', $single = true); ?>" alt="<?php the_title() ?>" width="384" height="240" /></a>
                <span class="bottom">
 				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

               <p><?php truncate_post(105, true); ?></p></span>
            </li>
                  <?php endwhile; ?>

            <div class="clear sliderImage"></div>
        </ul>
    </div>
    <!-- // slider -->
