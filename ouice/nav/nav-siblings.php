<?php
$siblings = $nav->xpath('//page[link = "'.$this_page.'"]/parent::page/child::page[not(@type = "hidden") and not(@class = "utility")]');

if (count($siblings) > 1) {
?>

<nav class="context-nav grid">
<ul>
<?php
	foreach ($siblings as $sibling) {
		
		if ($sibling[0]->link == $this_page) {
			
			// Output the HTML
			echo '<li><strong>'.$sibling[0]->title.'</strong></li>' . "\n";
		}
		else {
			
			// Output the HTML
			echo '<li><a href="'.SITE_URL.$sibling[0]->link.'">'.$sibling[0]->title.'</a></li>' . "\n";
		}
	}
?>
</ul>
</nav>

<?php
}
?>