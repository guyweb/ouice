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

<p>Have a look at the breadcrumb above. The code looks like this:</p>

<pre>
<code><ol class="ou-ancestors">
<li><a href="index.php">Home</a></li>
<li><a href="navigation.php">Navigation</a></li>
<li>Breadcrumbs</li>
</ol></code>
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