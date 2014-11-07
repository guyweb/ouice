<?php
$this_page = get_pagee();


// Load the XML file
function load_XML() {
	return simplexml_load_file(SITE_ROOT.XML_PATH);
}


// Navigation functions

function nav_site_title() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-site-title.php");
}

function nav_site_description() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-site-description.php");
}

function nav_seo_title() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-seo-title.php");
}

function nav_page_title() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-page-title.php");
}

function nav_page_description() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-page-description.php");
}

function nav_page_tags() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-page-tags.php");
}

function nav_page_author() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-page-author.php");
}

function nav_page_keywords() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-page-keywords.php");
}

function nav_body_class() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-body-class.php");
}

function nav_site_link() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-site-link.php");
}

function nav_site_root() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-site-root.php");
}

function nav_sections() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-sections.php");
}

function nav_ancestors() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-ancestors.php");
}

function nav_children() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-children.php");
}

function nav_parent() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-parent.php");
}

function nav_siblings() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-siblings.php");
}

function nav_paged() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-paged.php");
}

function nav_paged_context() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-paged-context.php");
}

function nav_fullnav() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-full-nav.php");
}

function nav_contextnav() {
	global $this_page;
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-context-nav.php");
}

function nav_utilities() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-utilities.php");
}

function nav_tools() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-tools.php");
}

function nav_top() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-top.php");
}

function nav_tag_tutor() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-tag-tutor.php");
}

function nav_cat() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-cat.php");
}

function nav_hidden() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-hidden.php");
}

function nav_site_map() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-site-map.php");
}

function nav_dropdown() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-dropdown.php");
}

function news_all_stories() {
	$nav = load_XML();
	require(SITE_ROOT."nav/news-all-stories.php");
}

function nav_news_cat() {
	$nav = load_XML();
	require(SITE_ROOT."nav/nav-news-cat.php");
}


// Common functions

function get_pagee() {     
   $site_root = SITE_ROOT;
   $current_dir = getCWD()."/";
   $relative_path = str_replace($site_root, "", $current_dir);
   $script_name = basename($_SERVER['SCRIPT_NAME']);
   
   return $relative_path.$script_name;
}

function buildNav($page, $ancestors) {
	global $this_page;
	
	$descendants = $page[0]->xpath('descendant-or-self::page');
	$continue = false;
	
	// See if the current page is, or exists in, any of the current pages
	foreach ($descendants as $descendant) {
		if ($descendant[0]->link == $this_page) $continue = true;
	}
	
	if ($continue) {
			
		// See if there are any children
		$count = count($page[0]->xpath('child::page'));
					
		if ($count > 0) {
			
			echo "\n" . '<ul>' . "\n";
			
			foreach ($page[0]->xpath('page[not(@type = "hidden") and not(@class = "utility")]') as $subpage) {
				
				// Check to see if this is an ancestor of the current page
				$is_ancestor = false;
				
				foreach ($ancestors as $ancestor) {
					if ($ancestor[0]->link == $subpage[0]->link) $is_ancestor = true;
				}
				
				if ($is_ancestor) {
					echo '<li class="ou-expanded">' . "\n";
				}
				else {
					echo '<li>';
				}
				
				if ($subpage[0]->link == $this_page) {
					
					// Output the HTML
					echo '<strong class="'.$subpage[0]->class.'">'.$subpage[0]->title.'</strong>';
				}
				else {
					
					// Output the HTML
					echo '<a class="'.$subpage[0]->class.'" href="'.SITE_URL.$subpage[0]->link.'">'.$subpage[0]->title.'</a>';
				}
						
				buildNav($subpage, $ancestors);
						
				echo '</li>' . "\n";
			}
				
			echo '</ul>' . "\n";					
		}
	}
}

ini_set("display_errors","2");
ERROR_REPORTING(E_ALL);

?>
