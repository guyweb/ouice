<?php include 'inc/header.php' ?>

<div id="ou-site-header">

<!-- UNCOMMENT FOR SITE CREATIVE
<div class="ou-creative"><img src="img/creative.jpg" alt="creative" class="ou-go3"></div>
-->

</div> <!-- end ou-site-header -->

<div id="ou-site-body">

<div id="ou-page">

<div id="ou-region0">
<?php include('inc/region0a.php'); ?>

<?php include('inc/region0b.php'); ?>
</div> <!-- end ou-region0 -->

<div id="ou-region1">
<?php include('inc/region1a.php'); ?>

<div class="ou-info">
<h2>Info</h2>
<p>If you want to use the tabs in your designs you need to download some extra files. Instructions at the <a href="#ins">bottom of this page</a>.</p>
</div>


<div class="responsive-tabs">

<h2>Tab 1</h2>
<div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a elit sed purus dapibus ultrices quis quis eros. Suspendisse dictum interdum velit, sed egestas libero rhoncus at. Mauris non eleifend nisl. Nulla est elit, tincidunt pulvinar pretium sit amet, varius non metus. Cras fermentum dapibus consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam gravida arcu ac sapien venenatis malesuada. Morbi dapibus ultrices feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam molestie hendrerit erat in consequat. Proin eu arcu velit. Duis venenatis pellentesque vehicula. Donec sit amet libero at eros varius cursus ac non augue. Nunc varius dapibus augue, ultricies elementum tortor hendrerit et. Quisque blandit nisl in augue consequat scelerisque. Ut imperdiet urna leo, quis convallis leo. Nunc sed sagittis ipsum. Nulla sit amet massa ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

<p>Sed sit amet nunc eros. Sed dignissim dictum fringilla. Donec pharetra, tortor a consequat commodo, dui est feugiat eros, eu sodales nunc ante et sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus auctor magna et metus ullamcorper vitae volutpat felis tincidunt. In hac habitasse platea dictumst. Fusce aliquet dictum lectus, ut eleifend urna iaculis et. Morbi dignissim arcu pulvinar leo auctor congue. Nunc cursus turpis placerat ipsum lacinia quis hendrerit diam mattis. Integer tincidunt bibendum accumsan. Sed nec nisi in diam eleifend mattis a eget lectus. Vestibulum nunc dui, vehicula sed accumsan ut, blandit ac sapien.</p>

<p>Aliquam vel fringilla eros. Morbi sodales accumsan egestas. Quisque mollis, lorem ut pharetra blandit, nulla lacus cursus turpis, id mattis massa nisi ac nunc. Etiam laoreet nisl eget lectus porttitor tempor. Ut fringilla ante vitae ipsum dignissim tempus. Donec ornare risus ac eros ultricies consequat. In hac habitasse platea dictumst. Cras mollis, velit eget sollicitudin adipiscing, ligula massa luctus augue, ac blandit erat velit vitae elit. Mauris tempus odio eu dui blandit vitae dictum elit ornare. Cras tempus dapibus nibh et convallis. Nunc eu arcu leo. Nam ac mauris dolor. Vestibulum vitae dui magna. Nulla in volutpat orci.</p>
</div>

<h2>Tab 2</h2>
<div>
<p>Sed sit amet nunc eros. Sed dignissim dictum fringilla. Donec pharetra, tortor a consequat commodo, dui est feugiat eros, eu sodales nunc ante et sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus auctor magna et metus ullamcorper vitae volutpat felis tincidunt. In hac habitasse platea dictumst. Fusce aliquet dictum lectus, ut eleifend urna iaculis et. Morbi dignissim arcu pulvinar leo auctor congue. Nunc cursus turpis placerat ipsum lacinia quis hendrerit diam mattis. Integer tincidunt bibendum accumsan. Sed nec nisi in diam eleifend mattis a eget lectus. Vestibulum nunc dui, vehicula sed accumsan ut, blandit ac sapien.</p>
</div>

<h2>Tab 3</h2>
<div>
<p>Aliquam vel fringilla eros. Morbi sodales accumsan egestas. Quisque mollis, lorem ut pharetra blandit, nulla lacus cursus turpis, id mattis massa nisi ac nunc. Etiam laoreet nisl eget lectus porttitor tempor. Ut fringilla ante vitae ipsum dignissim tempus. Donec ornare risus ac eros ultricies consequat. In hac habitasse platea dictumst. Cras mollis, velit eget sollicitudin adipiscing, ligula massa luctus augue, ac blandit erat velit vitae elit. Mauris tempus odio eu dui blandit vitae dictum elit ornare. Cras tempus dapibus nibh et convallis. Nunc eu arcu leo. Nam ac mauris dolor. Vestibulum vitae dui magna. Nulla in volutpat orci.</p>
</div>

</div>

<h2 id="ins">How to use the tabs</h2>

<div class="ou-steps">
<ol>
<li>Download <a href="gui/responsive-tabs.css">responsive-tabs.css</a> and <a href="js/responsive-tabs.min.js">responsive-tabs.min.js</a></li>
<li>The CSS goes in the /gui/ folder and the javascript in /js/</li>
<li>Link to the CSS from the &lt;head&gt;</li>
<li>Link to the javascript before the &lt;/body&gt; tag</li>
<li>Underneath that call the script on document load</li>
<li>Make sure jquery is being linked to</li>
</ol>
</div>

<pre>
<code><!-- in the head below the other stylesheets -->

<link rel="stylesheet" type="text/css" href="gui/responsive-tabs.css" />

<!-- before the closing body tag -->

<script src="js/responsive-tabs.min.js"></script>
<script>
$(document).ready(function() {
	RESPONSIVEUI.responsiveTabs();
})
</script></code>
</pre>

<p>The HTML structure for the tabs is:</p>

<pre>
<code><div class="responsive-tabs">

<h2>Tab 1 title</h2>
<div>
Tab 1 content
</div>

<h2>Tab 2 title</h2>
<div>
Tab 2 content
</div>

<h2>Tab 3 title</h2>
<div>
Tab 3 content
</div>

</div></code>
</pre>

<?php include('inc/region1b.php'); ?>
</div> <!-- end ou-region1 -->

<div id="ou-region2">
<?php include('inc/region2a.php'); ?>

<div class="ou-full-nav">
<?php nav_fullnav(); ?>
</div>

<?php include('inc/region2b.php'); ?>
</div> <!-- end ou-region2 -->

</div> <!-- end ou-page -->

</div> <!-- end ou-site-body -->

<div id="ou-site-footer">
<?php include('inc/site-footer.php'); ?>
</div> <!-- end ou-site-footer -->

<?php include 'inc/footer.php' ?>