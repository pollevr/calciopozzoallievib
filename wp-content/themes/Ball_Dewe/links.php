<?php get_header(); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<div class="art-layout-cell art-content">

<div class="art-block">
    <div class="art-block-body">

<div class="art-blockheader">
     <div class="t"><?php _e('Links:', 'kubrick'); ?></div>
</div>

<div class="art-blockcontent">
    <div class="art-blockcontent-body">
<!-- block-content -->

<ul>
<?php get_links_list(); ?>
</ul>

<!-- /block-content -->

		<div class="cleared"></div>
    </div>
</div>


		<div class="cleared"></div>
    </div>
</div>


</div>
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
    </div>
</div>
<div class="cleared"></div>

<?php get_footer(); ?>