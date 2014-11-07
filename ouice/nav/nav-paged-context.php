<?php
$page['is-hidden'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@type = "hidden"] | //page[link = "'.$this_page.'"]/ancestor::page[@type = "hidden"]');
$page['is-utility'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@class = "utility"] | //page[link = "'.$this_page.'"]/self::page[@class = "utility"]');

$page['prev-sibling'] = $nav->xpath('//page[link = "'.$this_page.'"]/preceding-sibling::page[1]/self::page[not(@type = "hidden") and not(@class = "utility")]');

$page['next-sibling'] = $nav->xpath('//page[link = "'.$this_page.'"]/following-sibling::page[1]/self::page[not(@type = "hidden") and not(@class = "utility")]');

// Check that this page is not @type = "hidden" or @class = "utility" as this function is redundant for these page types
if (!$page['is-hidden'] && !$page['is-utility']) {
?>

<div class="ou-paged">
<ul>
<?php

	if ($page['prev-sibling']) {
		
		
			// Output the HTML
			echo '<li><a class="ou-previous" href="'.SITE_URL.$page['prev-sibling'][0]->link.'">'.$page['prev-sibling'][0]->title.'</a></li>' . "\n";
		}
	
	
	
	if ($page['next-sibling']) {
	
		// Output the HTML
		echo '<li><a class="ou-next" href="'.SITE_URL.$page['next-sibling'][0]->link.'">'.$page['next-sibling'][0]->title.'</a></li>' . "\n";
	}
?>
</ul> 
</div>

<?php
}
?>