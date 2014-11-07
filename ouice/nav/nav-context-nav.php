<?php
$page['is-hidden'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@type = "hidden"] | //page[link = "'.$this_page.'"]/ancestor::page[@type = "hidden"]');
$page['is-utility'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@class = "utility"] | //page[link = "'.$this_page.'"]/self::page[@class = "utility"]');

// Select the ancestors of the currently selected page and the current page
$ancestors = $nav->xpath('//page[link = "'.$this_page.'"]/ancestor-or-self::page');
// Select the children of the currently selected page
$children = $nav->xpath('//page[link = "'.$this_page.'"]/child::page');

// Check that this page is not @type = "hidden" or @class = "utility" as this function is redundant for these page types
if (!$page['is-hidden'] && !$page['is-utility']) {
	
	// Check to see if the current page has two or more ancestors. If it doesn't, then display nothing.
	if (count($ancestors) >= 2) {
	
		// Check to see if this is a section page with no children
		if (($this_page == $ancestors[1]->link) && (count($children) < 1)) {
			// Do nothing.
		}
		else {

			echo '<nav class="context-nav grid">';
			echo '<ul>'  . "\n" . '<li class="expanded">';
			
			if ($this_page == $ancestors[1]->link) {
				// We are currently on the section page
				
				// Output the HTML
				echo '<strong>'.$ancestors[1]->title.'</strong>';
			}
			else {
				// We are on a descendant page
				
				// Output the HTML
				echo '<a href="'.SITE_URL.$ancestors[1]->link.'">'.$ancestors[1]->title.'</a>';
			}
			buildNav($ancestors[1], $ancestors);
			
			echo '</li>'  . "\n" . '</ul>';
			echo '</nav>';
		}
	}
}