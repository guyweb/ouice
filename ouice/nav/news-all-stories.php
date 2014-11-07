<?php
$news_a = $nav->xpath('//article[contains(pubdate, "2011")]');

if ($news_a) {
?>
<div>

<ul class="ou-news">
<?php
	foreach ($news_a as $news) {

		// Output the HTML
		echo '<li><a href="'.SITE_URL.$news[0]->link.'">'.$news[0]->title.'</a></li>' . "\n";
	}
?>
</ul>

</div>
<?php
}
?>

