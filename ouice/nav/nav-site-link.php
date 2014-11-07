<?php
$site_link = $nav->{'site-link'};
$index_link = $nav->page->link;

$link = ($site_link) ? $link = $site_link : $link = $index_link;

// Output the HTML
echo '<a href="'.SITE_URL.$link.'">'.$nav->{'site-title'}.'</a>';
?>