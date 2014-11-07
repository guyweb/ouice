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

<h2>Example <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><ul class="ou-sitemap xoxo">
<li><a href="{link}" title="{description}">{title}</a>
<ul>
<li><a href="{link}" title="{description}">{title}</a></li>
</ul>
</li>
<li><a href="{link}" title="{description}">{title}</a></li>
</ul></code>
</pre>

<div class="ou-section">

<?php nav_site_map(); ?>

</div>

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