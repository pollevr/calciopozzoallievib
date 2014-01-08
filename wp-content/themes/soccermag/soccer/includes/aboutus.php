<div id="aboutus">
<h3>About us</h3>
<div class="padd">
<?php $aboutimage = get_option('swt_about_image'); echo "<img src='$aboutimage' class='aboutimage' alt='About Us' />"; ?>
<?php $about = get_option('swt_aboutus'); echo $about; ?>
</div>
</div>
