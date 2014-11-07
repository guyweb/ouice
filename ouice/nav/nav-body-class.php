<?php
$body_class = $nav->xpath('//page[link="'.$this_page.'"]');

if (strlen($body_class[0]->{'class'}) > 0) {
	echo $body_class[0]->{'class'};
}
else {
	echo "website";
}
?>