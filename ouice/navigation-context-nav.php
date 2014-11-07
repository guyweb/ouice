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

<p>The sidebar nav. This can be "ou-context-nav" or "ou-full-nav".</p>
          <p>div.ou-context-nav or div.ou-full-nav.</p>
          <p>The difference between the two is that the full nav is a fully expanding and collapsing tree relative to the home page of the site. The context-nav recognises that large sites could end up with a huge side bar nav and enables site designers more flexibility.</p>
          <p><strong>Note that</strong> the title in both cases must be an <strong>H2 element</strong>. </p>
          <p>li.ou-expanded signifies the parent of the currently active page.</p>
          <p>Another way of thinking about the difference between the two navs:</p>
          <p>Consider this site map:</p>
          <ul>
            <li>Supermarket Home
              <ul>
                <li>Groceries
                  <ul>
                    <li>Fruit
                      <ul>
                        <li>Apples</li>
                        <li>Oranges</li>
                        <li>Bananas</li>
                      </ul>
                    </li>
                    <li>Vegetables
                      <ul>
                        <li>Potatoes</li>
                        <li>Leeks</li>
                        <li>Onions</li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>Electrical
                  <ul>
                    <li>Televisions</li>
                    <li>Radios</li>
                    <li>Irons</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <p>The "full nav" would represent the entire site structure in the expanding and contracting sidebar nav.</p>
          <p>The "context nav" would represent the "department" you were in and that only.</p>
          <p>So let's imagine we're on the "Radios" page..</p>
          <p>Full nav version..</p>
          <ul>
            <li>Supermarket Home
              <ul>
                  <li>Groceries</li>
                <li>Electrical
                  <ul>
                        <li>Televisions</li>
                    <li><strong>Radios</strong></li>
                    <li>Irons</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <p>Context nav version..</p>
          <p>Electrical </p>
          <ul>
            <li>Televisions</li>
            <li><strong>Radios</strong></li>
            <li>Irons          </li>
          </ul>


<?php include('inc/region1b.php'); ?>
</div> <!-- end ou-region1 -->

<div id="ou-region2">
<?php include('inc/region2a.php'); ?>

<div class="ou-full-nav">
<?php nav_fullnav(); ?>
</div>

<p>This is a context nav. It's basically a section navigation. It has no link to homepage but includes a h2:</p>

<div class="ou-context-nav">
<h2><a href="#">About us</a></h2>
<ul>
<li><a class="" href="#">Mission statement</a></li>
<li><strong>Responsibilities</strong></li>
<li><a class="" href="#">Who are we?</a></li>
<li><a class="" href="#">Contact</a></li>
</ul>
</div>

<?php include('inc/region2b.php'); ?>
</div> <!-- end ou-region2 -->

</div> <!-- end ou-page -->

</div> <!-- end ou-site-body -->

<div id="ou-site-footer">
<?php include('inc/site-footer.php'); ?>
</div> <!-- end ou-site-footer -->

<?php include 'inc/footer.php' ?>