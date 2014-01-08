<?php
$themename = "SWT Theme";
$shortname = "swt";
$mx_categories_obj = get_categories('hide_empty=0');
$mx_categories = array();
foreach ($mx_categories_obj as $mx_cat) {
	$mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name;
}
$categories_tmp = array_unshift($mx_categories, "Select a category:","Uncategorized" );	
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (




    array(  "name" => "Featured Sliding Panel Settings",
            "type" => "heading",
			"desc" => "This section customizes the sliding panel area and the number of panels to be displayed.",
       ),

	array( 	"name" => "Featured Panel category",
			"desc" => "Select the category that you would like to have displayed on the sliding.",
			"id" => $shortname."_slide_categoryf",
			"std" => "Uncategorized",
			"type" => "select",
			"options" => $mx_categories),
			
	array(	"name" => "Number of sliding panels",
			"desc" => "Select the number of panels to display .",
			"id" => $shortname."_slide_count",
			"std" => "1",
			"type" => "select",
			"options" => $number_entries),

   array(  "name" => "Featured Category Settings",
            "type" => "heading",
			"desc" => "This section customizes the featured category area and the number of posts to be displayed.",
   ),

    array(  "name" => "Enable/Disable Featured Categories",
            "id" => $shortname."_fcats",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

 	array(	"name" => "Choose Which <strong>Category</strong> To Feature On 1st Block?",
			"id" => $shortname."_featured_categoryf1",
            "type" => "select",
            "std" => "Select A Category",
			"options" => $mx_categories),

			array(	"name" => "Choose How Many <strong>Post</strong> To Display On 1st Block?",
			"id" => $shortname."_featured_number1",
            "type" => "select",
            "std" => "Select A Number",
			"options" => $number_entries),

    	array(	"name" => "Choose Which <strong>Category</strong> To Feature On 2th Block?",
			"id" => $shortname."_featured_categoryf2",
            "type" => "select",
            "std" => "Select A Category",
			"options" => $mx_categories),

			array(	"name" => "Choose How Many <strong>Post</strong> To Display On 2th Block?",
			"id" => $shortname."_featured_number2",
            "type" => "select",
            "std" => "Select A Number",
			"options" => $number_entries),

        	array(	"name" => "Choose Which <strong>Category</strong> To Feature On 3th Block?",
			"id" => $shortname."_featured_categoryf3",
            "type" => "select",
            "std" => "Select A Category",
			"options" => $mx_categories),

			array(	"name" => "Choose How Many <strong>Post</strong> To Display On 3th Block?",
			"id" => $shortname."_featured_number3",
            "type" => "select",
            "std" => "Select A Number",
			"options" => $number_entries),


        	array(	"name" => "Choose Which <strong>Category</strong> To Feature On 4th Block?",
			"id" => $shortname."_featured_categoryf4",
            "type" => "select",
            "std" => "Select A Category",
			"options" => $mx_categories),

			array(	"name" => "Choose How Many <strong>Post</strong> To Display On 4th Block?",
			"id" => $shortname."_featured_number4",
            "type" => "select",
            "std" => "Select A Number",
			"options" => $number_entries),

	array(  "name" => "Follow and subscribe settings",
            "type" => "heading",
			"desc" => "Enter your Twitter url and RSS & Subscribe links.",
         ),

	array(  "name" => "Enable/Disable Follow us",
            "id" => $shortname."_follow",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),

   	array("name" => "Twitter url",
			"desc" => "Twitter url here.",
            "id" => $shortname."_twitt",
            "std" => "#",
            "type" => "text"),

	array("name" => "Rss url",
			"desc" => "Rss url here.",
            "id" => $shortname."_rss",
            "std" => "#",
            "type" => "text"),

	array("name" => "Subscribe via Email",
			"desc" => "Your email link here.",
            "id" => $shortname."_email",
            "std" => "#",
            "type" => "text"),

	array(  "name" => "Menu settings",
            "type" => "heading",
            "desc" => "Here you can exclude some of the links in the menus of theme.",
         ),

	array(  "name" => "Exclude pages",
			"desc" => "You can exclude some of the links in the pages menu (comma separated if more than one!).",
            "id" => $shortname."_pages",
            "std" => "",
            "type" => "text"),

	array(  "name" => "Exclude categories",
			"desc" => "You can exclude some of the links in the categories menu (comma separated if more than one!).",
            "id" => $shortname."_categories",
            "std" => "",
            "type" => "text"),

	array(  "name" => "Miscellaneous",
            "type" => "heading",
            "desc" => "Here you can exclude some of the links in the menus of theme.",
         ),

       array("name" => "Custom Google Analytics Tracking Code",
            "desc" => "Enter your tracking code here for Google Analytics",
            "id" => $shortname."_custom_analytics_code",
            "type" => "textarea",
            "std" => "")
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=themeoptions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); 
                update_option( $value['id'], $value['std'] );}

            header("Location: themes.php?page=themeoptions.php&reset=true");
            die;

        }
    }

      add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
    
?>
<div class="wrap">
<h2><b><?php echo $themename; ?> theme options</b></h2>

<form method="post">

<table class="optiontable" >

<?php foreach ($options as $value) { 
    
	
if ($value['type'] == "text") { ?>
        
<tr align="left"> 
    <th scope="row"><?php echo $value['name']; ?>:</th>
    <td>
        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" size="40" />
				
    </td>
	
</tr>
<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>

<?php } elseif ($value['type'] == "textarea") { ?>
<tr align="left"> 
    <th scope="row"><?php echo $value['name']; ?>:</th>
    <td>
                   <textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="40" rows="5"/><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>
</textarea>

				
    </td>
	
</tr>
<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>

<?php } elseif ($value['type'] == "select") { ?>

    <tr align="left"> 
        <th scope="top"><?php echo $value['name']; ?>:</th>
	        <td>
            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                <?php foreach ($value['options'] as $option) { ?>
                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; }?>><?php echo $option; ?></option>
                <?php } ?>
            </select>
			
        </td>
	
</tr>
<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>



<?php } elseif ($value['type'] == "heading") { ?>

   <tr valign="top"> 
		    <td colspan="2" style="text-align: left;"><h2 style="color:#f1f1f1; background:#52759b; margin: 0; padding: 5px;"><?php echo $value['name']; ?></h2></td>
		</tr>
<tr><td colspan=2> <small> <p style="color:#464646; margin:0 0;" > <?php echo $value['desc']; ?> </P> </small> <hr /></td></tr>

<?php } ?>
<?php 
}
?>
</table>
<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<h2>Preview (updated when options are saved)</h2>
<iframe src="../?preview=true" width="100%" height="600" ></iframe>
<p>For support related issues visit the <a href="http://www.simplewpthemes.com/" >http://www.simplewpthemes.com</a></p>
<?php
}
add_action('admin_menu', 'mytheme_add_admin'); ?>
