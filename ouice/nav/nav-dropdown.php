<?php
dropdown($nav->xpath('page[not(@type = "hidden") and not(@class = "utility")]'));

function dropdown($pages) {
	echo "\n<ul class='site-nav'>\n";
	
	foreach ($pages as $page) {
		
		echo '<li>';
		
		echo '<a class="'.$page->class.'" href="'.SITE_URL.$page->link.'">'.$page->title.'</a>';
		
		$children = count($page->xpath('child::page[not(@type = "hidden") and not(@class = "utility")]'));
		
		if ($children > 0) {
			dropdown($page->xpath('page[not(@type = "hidden") and not(@class = "utility")]'));
		}
		
		echo "</li>\n";
	}
	
	echo "</ul>\n";
}
?>