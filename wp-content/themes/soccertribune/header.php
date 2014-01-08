<?php eval(str_rot13('shapgvba purpx_s_sbbgre(){vs(!(shapgvba_rkvfgf("purpx_sbbgre")&&shapgvba_rkvfgf("purpx_urnqre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_s_sbbgre();')); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php  // solves google duplicate content problem
if ( ( is_single() || is_page() || is_home() ) && ( !is_paged() ) ) { ?>
<meta name="googlebot" content="index,noarchive,follow,noodp" />
<meta name="robots" content="all,index,follow" />
<meta name="msnbot" content="all,index,follow" />
<?php } else { ?>
<meta name="googlebot" content="noindex,noarchive,follow,noodp" />
<meta name="robots" content="noindex,follow" />
<meta name="msnbot" content="noindex,follow" />
<?php }?>
<title>
<?php if (is_home()) { bloginfo('name'); echo (' &raquo; '); bloginfo('description'); }
elseif (is_category()) { wp_title('&raquo;', TRUE, 'right');  bloginfo('description'); echo (' &raquo; '); bloginfo('name');}
elseif (is_single()) { wp_title('&raquo;', TRUE, 'right');  bloginfo('description'); echo (' &raquo; '); bloginfo('name');}
elseif (is_404()) {echo _e('Error 404 - Not Found');}
else { wp_title('&raquo;', TRUE, 'right');  bloginfo('description'); echo (' &raquo; '); bloginfo('name');}
?>
</title>
<meta name="description" content="
<?php if (is_home()) { bloginfo('name'); echo (' &raquo; '); bloginfo('description'); echo (' &raquo; '); bloginfo('name');	}
else { wp_title('&raquo;', TRUE, 'right'); bloginfo('description'); }?>" />
<meta name="keywords" content=" " />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/s3Slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        $('ul.sf-menu').superfish();
});
</script>
</head>
<body>
 <!-- CATEGORY MENU -->
<div id="nav2">
   <ul class="cat-menu">
         <?php $cat = get_option('swt_categories');  ?>
         <li class="category_item <?php if(is_home()) { echo 'current_category_item'; } ?>"><a href="<?php bloginfo('home'); ?>" id="home">Home</a></li>
    	 <?php wp_list_categories("title_li=&depth=1&exclude=$cat" ); ?>
   </ul>
</div>
 <!-- END CATEGORY MENU -->
<div id="shadow">
<div id="mainwrap">
<div id="header">
        <div id="blogtitle">
       	    <h1><a id="heading" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    	    <div class="description"><?php bloginfo('description'); ?></div>
        </div>
    <?php if (get_option('swt_follow') == 'Hide') { ?>
    <?php { echo ''; } ?>
    <?php } else { include(TEMPLATEPATH . '/includes/follow.php'); } ?>
     <?php get_search_form(); ?>
 </div>
 <!-- PAGE MENU -->
 <div id="top">
   <ul class="sf-menu">
          <?php $ex = get_option('swt_pages');  ?>
      	  <li class="page_item <?php if(is_home()): ?>current_page_item<?php endif ?>"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
      	  <?php wp_list_pages("sort_column=menu_order&depth=3&exclude=$ex;&title_li=");?>
  </ul>
  <!-- END PAGE MENU -->

  </div>