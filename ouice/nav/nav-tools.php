<?php
$tool_a = $nav->xpath('//page[cat = "tool"] | //page[cat = "tool"]/descendant::page');

if ($tool_a) {
?>
<div>

<ul class="ou-tools">
<?php
	foreach ($tool_a as $tool) {

		// Output the HTML
		echo '<li><a href="'.SITE_URL.$tool[0]->link.'">'.$tool[0]->title.'</a></li>' . "\n";
	}
?>
</ul>

</div>
<?php
}
?>

