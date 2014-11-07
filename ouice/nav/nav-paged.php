<?php
$page['is-hidden'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@type = "hidden"] | //page[link = "'.$this_page.'"]/ancestor::page[@type = "hidden"]');
$page['is-utility'] = $nav->xpath('//page[link = "'.$this_page.'"]/self::page[@class = "utility"] | //page[link = "'.$this_page.'"]/self::page[@class = "utility"]');

$page['prev-sibling-descendant'] = $nav->xpath('//page[link = "'.$this_page.'"]/preceding-sibling::page[1]/descendant::page[last()]');
$page['prev-sibling'] = $nav->xpath('//page[link = "'.$this_page.'"]/preceding-sibling::page[1]/self::page[not(@type = "hidden") and not(@class = "utility")]');
$page['prev-parent'] = $nav->xpath('//page[link = "'.$this_page.'"]/parent::page[1]/self::page[not(@type = "hidden") and not(@class = "utility")]');

$page['next-child'] = $nav->xpath('//page[link = "'.$this_page.'"]/child::page[1]/self::page[not(@type = "hidden") and not(@class = "utility")]');
$page['next-node'] = $nav->xpath('//page[link = "'.$this_page.'"]/following::page[1]/self::page[not(@type = "hidden") and not(@class = "utility")]');

// Check that this page is not @type = "hidden" or @class = "utility" as this function is redundant for these page types
if (!$page['is-hidden'] && !$page['is-utility']) {
?>

<div class="ou-paged">
<ul>
<?php

	if ($page['prev-sibling']) {
		if ($page['prev-sibling-descendant']) {
		
			// Output the HTML
			echo '<li><a class="ou-previous" href="'.SITE_URL.$page['prev-sibling-descendant'][0]->link.'">Prev</a></li>' . "\n";
		}
		else {
		
			// Output the HTML
			echo '<li><a class="ou-previous" href="'.SITE_URL.$page['prev-sibling'][0]->link.'">Prev</a></li>' . "\n";
		}
	}
	else {	
		if ($page['prev-parent']) {
			
			// Output the HTML
			echo '<li><a class="ou-previous" href="'.SITE_URL.$page['prev-parent'][0]->link.'">Prev</a></li>' . "\n";
		}
	}
	
	if ($page['next-child']) {
	
		// Output the HTML	
		echo '<li><a class="ou-next" href="'.SITE_URL.$page['next-child'][0]->link.'">Next</a></li>' . "\n";
		
	}
	else if ($page['next-node']) {
	
		// Output the HTML
		echo '<li><a class="ou-next" href="'.SITE_URL.$page['next-node'][0]->link.'">Next</a></li>' . "\n";
	}
?>
</ul> 
</div>

<?php
}
?>