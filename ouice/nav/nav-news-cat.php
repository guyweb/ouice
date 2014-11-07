<?php
$cat_a = $nav->xpath('//page[@type = "news-cat"] ');

if ($cat_a) {
?>
<div class="archive">
<dl>
<dt>News categories</dt>
<dd>
<ul class="ou-cats">
<?php
	foreach ($cat_a as $cat) {
	
		// Output the HTML
		echo '<li><a href="'.SITE_URL.$cat[0]->link.'">'.$cat[0]->title.'</a></li>' . "\n";
	}
?>
</ul>
</dd>
</dl>
</div>
<?php
}
?>