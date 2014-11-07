<?php
$top_a = $nav->xpath('//page[cat = "top"] | //page[cat = "top"]/descendant::page');

if ($top_a) {
?>
<div>

<ul class="ou-tops">
<?php
	foreach ($top_a as $top) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$top[0]->link.'">'.$top[0]->title.'</a></li>' . "\n";
	}
?>
</ul>

</div>
<?php
}
?>