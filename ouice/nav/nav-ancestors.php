<?php
$ancestors = $nav->xpath('//page[link = "'.$this_page.'"]/ancestor::page');
$index_page = $nav->xpath('/site/page');
$current_page = $nav->xpath('//page[link = "'.$this_page.'"]');

if ($ancestors) {
?>
<ol class="ou-ancestors">
<?php
	foreach ($ancestors as $ancestor) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$ancestor[0]->link.'">'.$ancestor[0]->title.'</a></li>' . "\n";
	}
	
	// Output the HTML
	if ($current_page[0]->link != $index_page[0]->link) echo '<li>'.$current_page[0]->title.'</li>' . "\n";	
	
	
?>
</ol>

<?php
}
?>