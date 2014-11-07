<?php
$page_author = $nav->xpath('//page[link="'.$this_page.'"]');

if ($page_author) {
	echo $page_author[0]->author;
}
?>