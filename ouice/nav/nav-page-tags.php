<?php
$page_tags = $nav->xpath('//page[link="'.$this_page.'"]');

if ($page_tags) {
	echo '<a href="tag-' . $page_tags[0]->tag . '.php">' . $page_tags[0]->tag . '</a>' ;
}
?>