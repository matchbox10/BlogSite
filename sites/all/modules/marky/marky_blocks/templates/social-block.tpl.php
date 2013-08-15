<?php
// Path to Content
$path = drupal_get_path('module', 'marky_blocks');
$pathImages = $path.'/images';
$pathCSS = $path.'/css';
drupal_add_css($pathCSS . '/social.css');
?>

<script> 

var socialInfo = new Array();
socialInfo[0] = 'https://www.facebook.com/markymarkali';
socialInfo[1] = 'https://twitter.com/matchbox10';
socialInfo[2] = 'http://www.linkedin.com/profile/view?id=148539147';
socialInfo[3] = 'https://plus.google.com/u/0/100544014331691695238';
socialInfo[4] = 'marco.besconi';


function social_data() {
	
}

jQuery( document ).ready(function() {
    
	
	
});

</script>
<div id="social-wrap">
<ul>
<li>
<div class="item fb">
	<img src="<?php echo $pathImages; ?>/facebook.png">
        <h3>Facebook</h3>
        <p>Add me on Facebook</p>

</div>
</li>
<li>
<div class="item tw">
	<img src="<?php echo $pathImages; ?>/twitter2.png">
        <h3>Twitter</h3>
        <p>Follow me on Twitter</p>

</div>
</li><li>
<div class="item in">
	<img src="<?php echo $pathImages; ?>/in.png">
        <h3>LinkedIn</h3>
        <p>Add me on LinkedIn</p>

</div>
</li><li>
<div class="item gp">
	<img src="<?php echo $pathImages; ?>/google_plus.png">
        <h3>Google+</h3>
        <p>Be My Google+ Buddy</p>

</div>
</li><li>
<div class="item sk">
	<img src="<?php echo $pathImages; ?>/skype.png">
        <h3>Skype</h3>
        <p>Hit me Up on Skype</p>
		<p class="info"><a href="#">marco.besconi</a></p>
</div>
</li>

</ul>
</div>