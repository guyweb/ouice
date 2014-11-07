<?php
$sections = $nav->xpath('page[not(@class = "utility") and not(@type = "hidden")] | page/page[not(@class = "utility") and not(@type = "hidden")]');
$index_page = $nav->xpath('/site/page');

if ($sections) {
?>
<ul>
<?php
	foreach ($sections as $section) {
	
		$isCurrent = false;
		$isAncestor = false;
				
		$ancestor_a = $nav->xpath('//page[link = "'.$this_page.'"]/ancestor::page[not(link = "'.$index_page[0]->link.'")]');
		
		if ($ancestor_a) {
			foreach ($ancestor_a as $ancestor) {		
				if ($ancestor[0]->link == $section[0]->link) $isAncestor = true;
			}
		}
		
		if ($this_page == $section[0]->link) $isCurrent = true;
		
		$selected = ($isAncestor || $isCurrent) ? ' class="current"' : '';
		
		// Output the HTML
		//echo '<li id="'.$section->id.'"><a href="'.SITE_URL.$section->link.'"'.$selected.'>'.$section->title.'</a></li>' . "\n";
		echo '<li><a href="'.SITE_URL.$section->link.'"'.$selected.'>'.$section->title.'</a></li>' . "\n";
	}
?>
</ul>
<?php
}
?>