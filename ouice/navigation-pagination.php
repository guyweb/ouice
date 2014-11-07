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

<div class="ou-section">

<h2>Previous and next <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><div class="ou-paged">
<ul>
<li><a class="ou-previous" href="#">Previous page</a></li>
<li><a class="ou-next" href="#">Next page</a></li>
</ul>
</div></code>
</pre>

<div class="ou-paged">
<ul>
<li><a class="ou-previous" href="#">Previous page</a></li>
<li><a class="ou-next" href="#">Next page</a></li>
</ul>
</div>

</div>

<div class="ou-section">

<h2>The whole shebang <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><div class="ou-paged">
  <p>Page 1 of 20</p>
  <ul>
    <li><a class="ou-first" href="#">First</a></li>
    <li><a class="ou-previous" href="#">Previous</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><strong>3</strong></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a class="ou-next" href="#">Next</a></li>
    <li><a class="ou-last" href="#">Last</a></li>
  </ul>
</div></code>
</pre>

<div class="ou-paged">
  <p>Page 1 of 20</p>
  <ul>
    <li><a class="ou-first" href="#">First</a></li>
    <li><a class="ou-previous" href="#">Previous</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><strong>3</strong></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a class="ou-next" href="#">Next</a></li>
    <li><a class="ou-last" href="#">Last</a></li>
  </ul>
</div>

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