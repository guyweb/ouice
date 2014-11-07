<?php
$children = $nav->xpath('//page[link = "'.$this_page.'"]/child::page[not(@class = "utility") and not(@type = "hidden")]');

if ($children) {
?>
<div>

<ul class="ou-children">
<?php
	foreach ($children as $child) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$child[0]->link.'">'.$child[0]->title.'</a></li>' . "\n";
	}	
?>
</ul>

</div>

<?php
}
?>