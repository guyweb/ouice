<?php
$utility_a = $nav->xpath('//page[@class = "utility"] | //page[@class = "utility"]/descendant::page');

if ($utility_a) {
?>
<div>
<ul class="ou-utilities">
<?php
	foreach ($utility_a as $utility) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$utility[0]->link.'">'.$utility[0]->title.'</a></li>' . "\n";
	}
?>
</ul>
</div>
<?php
}
?>