<?php
$page_title = $nav->xpath('//page[link="'.$this_page.'"]');

if (strlen($page_title[0]->{'seo-title'}) > 0) {
	echo $page_title[0]->{'seo-title'};
}

elseif (strlen($page_title[0]->{'alt-title'}) > 0) {
	echo $page_title[0]->{'alt-title'};
}
else {
	echo $page_title[0]->title;
}
?>