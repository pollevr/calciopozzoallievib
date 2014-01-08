<div class="cleared"></div>
<div class="navigation">
<div style="padding:10px 0 10px 0;">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi(); ?>
<?php else : ?>
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<?php endif; ?>
</div>
</div>