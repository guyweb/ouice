<?php
$tag_a = $nav->xpath('//page[tag = "Tutor"] | //page[tag = "Tutor"]/descendant::page');

if ($tag_a) {
?>
<div>

<ul class="ou-tops">
<?php
	foreach ($tag_a as $tag) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$tag[0]->link.'">'.$tag[0]->title.'</a></li>' . "\n";
	}
?>
</ul>

</div>
<?php
}
?>