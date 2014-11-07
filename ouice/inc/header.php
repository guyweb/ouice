<?php require_once('nav/_init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<title><?php nav_page_title(); ?> | <?php nav_site_title(); ?></title>

<link rel="stylesheet" type="text/css" href="gui/styles.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="gui/drupal.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="gui/header-footer.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="gui/responsive-tabs.css" />

<link rel="stylesheet" type="text/css" href="gui/fonts/font-awesome/font-awesome.min.css" media="screen, projection" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- favicons -->
<link rel="apple-touch-icon" href="gui/apple-touch-icon.png">
<link rel="icon" href="gui/favicon.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="gui/ie10-win8-tile-icon.png">


<meta name="keywords" content="<?php nav_page_keywords(); ?>" />
<meta name="description" content="<?php nav_page_description(); ?>" />

</head>

<body class="<?php nav_body_class(); ?>">

<div id="ou-org">

<a class="ou-skip" href="#ou-content"><i class="fa fa-arrow-circle-down"></i> Skip to content</a>

<div id="ou-header">

<div id="ou-service-links" role="navigation">

<ul>

<li><a href="#">Sign out</a> <span>|</span></li>
<li><a href="https://msds.open.ac.uk/students/">StudentHome</a> <span>|</span></li>
<li><a href="http://www.open.ac.uk/about/main/management/policies-and-statements/website-accessibility-open-university">Accessibility</a> <span>|</span></li>
<li><a href="http://library.open.ac.uk/">Library</a> <span>|</span></li>
<li><a href="http://www.open.ac.uk/contact">Contact us</a></li>

<li class="ou-search">
<fieldset>
<legend class="ou-hide">Site search</legend>
<label for="site-search" class="ou-hide">Search the OU</label>
<input type="search" id="site-search" placeholder="Search...">
<button><span class="ou-hide">Submit</span></button>
</fieldset>
</li>

</ul>
                    
</div> <!-- end ou-service-links -->

<a class="ou-logo" href="http://www.open.ac.uk/">
<img src="gui/ou-logo.png" alt="The Open University">
</a>

<!-- if signed in
<div id="ou-identity">
<p class="ou-identity-oucu">U2415974</p>
<p class="ou-identity-name">Louise Olney</p>
</div>
-->

<a href="#" class="ou-mobile-menu-toggle icon-down">Toggle service links</a>

</div> <!-- end ou-header -->

<div id="ou-site">