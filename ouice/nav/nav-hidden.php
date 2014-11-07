<?php
$hidden_a = $nav->xpath('//page[@type = "hidden"] | //page[@type = "hidden"]/descendant::page');

if ($hidden_a) {
?>
<ul class="ou-hidden">

<?php

	foreach ($hidden_a as $hidden) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$hidden[0]->link.'">'.$hidden[0]->title.'</a></li>' . "\n";
	}
?>
</ul>

<?php
}
?>