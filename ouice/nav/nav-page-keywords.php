<?php
$page_keywords = $nav->xpath('//page[link="'.$this_page.'"]');

if ($page_keywords) {
	echo $page_keywords[0]->keywords;
}
?>