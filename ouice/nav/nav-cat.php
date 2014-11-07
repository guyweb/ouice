<?php
$cat_a = $nav->xpath('//page[type = "cat"] | //page[type = "cat"]/descendant::page');

if ($cat_a) {
?>
<div>

<ul class="ou-cats">
<?php
	foreach ($cat_a as $cat) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$cat[0]->link.'">'.$cat[0]->title.'</a></li>' . "\n";
	}
?>
</ul>

</div>
<?php
}
?>