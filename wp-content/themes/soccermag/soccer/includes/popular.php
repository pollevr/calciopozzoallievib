<!--Begind Popular Articles-->
<div id="popular">
<h3>Popular Articles</h3>
<div class="padd">
<?php
	$sql='SELECT post_title, comment_count, guid
		FROM wp_posts
		ORDER BY comment_count DESC
		LIMIT 10;';
	$results = $wpdb->get_results($sql);

	foreach ($results as $r) {
		echo '<li><a href="' . $r->guid . '" title="' . $r->post_title . '"> ' . $r->post_title .
			' (' . $r->comment_count . ')</a></li>';
	}
?>
</div>
 </div>
<!--end Popular Articles-->

