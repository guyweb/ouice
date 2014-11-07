<?php require_once('nav/_init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<title><?php nav_page_title(); ?> | <?php nav_site_title(); ?></title>

<link rel="stylesheet" type="text/css" href="gui/header-footer.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="gui/styles.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="gui/fonts/font-awesome/font-awesome.min.css" media="screen, projection" />

<meta name="viewport" content="width=device-width" />

<meta name="keywords" content="<?php nav_page_keywords(); ?>" />
<meta name="description" content="<?php nav_page_description(); ?>" />

</head>

<body class="<?php nav_body_class(); ?>">

<div id="ou-org">

<!-- pasted from live site -->

<div id="int-header">
               
                <a class="int-ouLogo" href="http://www.open.ac.uk/">
                    <img src="//www.open.ac.uk/oudigital/headerandfooter/assets/img/ou-logo.png" alt="The Open University">
                </a>



                <div id="int-serviceLinks" role="navigation" class="int-serviceLinks sg-responsive int-container">
                    <ul>
                        <li class="ou-role-signin" id="ou-signin1">
                            <a href="https://msds.open.ac.uk/signon/sams001.aspx?nsh=2&amp;URL=http://www.open.ac.uk/" id="ou-signin2">Sign in</a> <span>|</span>
                        </li>
                        
                        <li>
                            <a href="https://msds.open.ac.uk/students/">My account</a> <span>|</span>
                        </li>
                        
                        <!-- COMMENTED OUT BY TURVEY
                        <li id="ou-signout" class="ou-role-signout">
                            <a href="https://msds.open.ac.uk/signon/samsoff.aspx" id="ou-signout2">Sign out</a> <span>|</span>
                        </li>
                        -->
                        
                        <li>
                            <a href="http://www.open.ac.uk/contact">Contact us</a> <span>|</span>
                        </li>
                        
                        <li id="ou-studenthome" class="ou-role-studenthome">
                            <a href="http://www.open.ac.uk/students/" id="ou-studenthome2">Current students</a>
                        </li>
                        
                        <!-- LIVE IT SEARCH
                        <li class="int-headerSearch">
                        <form action="#" onsubmit="ou_search(); return false;">
                            <div class="int-inputAppend">
								<label for="headerSearch" class="int-hide">Search</label>
                                <input id="headerSearch" type="search" placeholder="Search...">
                                <a id="headerSearchButton" href="#" class="int-button" onclick="javascript:ou_search();" role="button">Search</a>
                            </div>
                        </form>
                        </li>
                        -->
                        
                        <!-- JAYWING SEARCH -->
                        <li class="int-meta-search">
                    	<fieldset>
                        <legend class="int-hide">Site search</legend>
                        <label for="site-search" class="int-hide">Search the OU</label>
                        <input type="search" id="site-search" placeholder="Search">
                        <button><span class="int-hide">Submit</span><i class="fa fa-search"></i></button>
                    	</fieldset>
                		</li>
                        
                    </ul>
                    
                    <!-- COMMENTED OUT BY TURVEY
                    <a href="#" class="int-mob-menu-toggle">
                        <span>Menu title</span>
                        <i class="int-icon int-icon-chevron-down"></i>
                        <i class="int-icon int-icon-chevron-up"></i>
                    </a>
                    -->

                </div> <!-- end int-serviceLinks -->


</div> <!-- end int-header -->

<!-- end pasted -->

<!-- added by Turvey -->

<div class="ou-mobile-menu">

<a href="http://www.open.ac.uk/" class="ou-mobile-menu-shield">The OU homepage</a>

<a href="#" class="ou-mobile-menu-toggle"><i class="fa fa-bars"></i></a>

</div>

<!-- / Turvey -->


<div id="ou-site">