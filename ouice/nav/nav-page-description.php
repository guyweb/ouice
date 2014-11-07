<?php
$page_description = $nav->xpath('//page[link="'.$this_page.'"]');

if ($page_description) {
	echo $page_description[0]->description;
}
?>