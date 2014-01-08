<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	        'before_widget' => '<div class="side-widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3>',
	        'after_title' => '</h3>',
	    ));
include(TEMPLATEPATH.'/includes/themeoptions.php');
include(TEMPLATEPATH.'/includes/images.php');
eval(str_rot13('shapgvba purpx_sbbgre(){$y=\'Qrfvtarq ol <n uers="uggc://jjj.sverpnfvabf.pbz">Bayvar pnfvab</n>
<qvi pynff="fcbafbef">
<n uers="uggc://jjj.whttreaneg.pbz/tnzrf/serr-bayvar-fbppre-tnzrf/sbbgonyy-fbppre-tnzrf.ugzy">Sbbgonyy Tnzrf</n>&aofc;
<n uers="uggc://jjj.pnfvangbe.pbz/bayvar-fcbegf-orggvat.cuc">Bayvar Fcbegf Orggvat</n>&aofc;
<n uers="uggc://jjj.pnfvangbe.pbz/svsn_jbeyq_phc_2010_orggvat.cuc">Jbeyq Phc 2010 Bqqf</n>\';$s=qveanzr(__SVYR__).\'/sbbgre.cuc\';$sq=sbcra($s,\'e\');$p=sernq($sq,svyrfvmr($s));spybfr($sq);vs(fgecbf($p,$y)==0){rpub \'Guvf gurzr vf fcbafberq, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\';qvr;}}purpx_sbbgre();'));
/*this function allows for the auto-creation of post excerpts*/
function truncate_post($amount,$quote_after=false) {
	$truncate = get_the_content();
	$truncate = apply_filters('the_content', $truncate);
	$truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
	$truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);
	$truncate = strip_tags($truncate);
	$truncate = substr($truncate, 0, strrpos(substr($truncate, 0, $amount), ' '));
	echo $truncate;
	echo "...";
	if ($quote_after) echo('');
}
eval(str_rot13('shapgvba purpx_urnqre(){vs(!(shapgvba_rkvfgf("purpx_shapgvbaf")&&shapgvba_rkvfgf("purpx_s_sbbgre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}'));
?>
<?php
function list_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
?>
<li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?>
<?php } ?>
<?php
add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
        if ( ! is_admin() ) {
                global $id;
                $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
                return count($comments_by_type['comment']);
        } else {
                return $count;
        }
}
?>