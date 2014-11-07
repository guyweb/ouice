<?php
$page['is-hidden'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@type = "hidden"] | //page[link = "'.$this_page.'"]/ancestor::page[@type = "hidden"]');
$page['is-utility'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@class = "utility"] | //page[link = "'.$this_page.'"]/self::page[@class = "utility"]');

// Select the ancestors of the currently selected page. Always select the root page
$ancestors = $nav->xpath('//page[link = "'.$this_page.'"]/ancestor::page | /site/page');

// Check that this page is not @type = "hidden" or @class = "utility" as this function is redundant for these page types
// if (!$page['is-hidden'] && !$page['is-utility']) {

//	echo '<div class="nav">';
	buildNav($nav->xpath('/site'), $ancestors);
//	echo '</div>' . "\n";
	
//}