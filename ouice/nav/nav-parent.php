<?php
$parent = $nav->xpath('//page[link = "'.$this_page.'"]/parent::page');

if ($parent) {

	// Output the HTML
	echo '<a href="'.SITE_URL.$parent[0]->link.'" class="ou-parent">'.$parent[0]->title.'</a>';
}
?>