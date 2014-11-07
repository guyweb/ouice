<?php

/* 
Name:Steven Price
Date: 6 Nov 2008
Description: Library of functions to access XML data
Updated: 19.12.2008 by Guy Carberry.

How to use..

Add the following code before or inside the html 
<head>
element:

<?php require('_navigation/dsn.php'); ?>

(adjust the path according to your site structure.

Next, add the following code where you want to display navigation:

<?php dsn_sections(); ?>
<?php dsn_ancestors(); ?>
<?php dsn_ancestors_new(); ?>
<?php dsn_parent_siblings(); ?>
<?php dsn_parent_siblings_children(); ?>
<?php dsn_parent(); ?>
<?php dsn_siblings(); ?>
<?php dsn_children(); ?>
<?php dsn_paged(); ?>
<?php dsn_sitemap(); ?>
<?php dsn_utilities(); ?>
<?php dsn_atoz(); ?>
<?php dsn_context_nav(); ?>

Additional functions:

<?php dsn_pagetitle(); ?>
<?php dsn_keywords(); ?>
<?php dsn_description(); ?>
*/

/* 
Define page 
--------------------------------------------------------------------- */

//Work out the page name
function get_pagee() {  
   $this_page = basename($_SERVER['SCRIPT_NAME']);    
   return $this_page;
}

/* 
Load processor 
--------------------------------------------------------------------- */

function load_XML($load_xsl) {   
   // work out the page name
   $this_page = get_pagee();
      
   // load the XML
   $xml = new DOMDocument;
   $xml->load('structure.xml');
   $xsl = new DOMDocument;
   
   // load the XSL
   $xsl->load($load_xsl);
   
   // configure the transformer
   $proc = new XSLTProcessor;
   $proc->setParameter('', 'this_page', $this_page);
   $proc->importStyleSheet($xsl); // attach the xsl rules   
   echo $proc->transformToXML($xml);
}

/* 
Load functions 
--------------------------------------------------------------------- */

// Parent and Siblings
function dsn_parent_siblings() {  
  $load_xsl = '_navigation/parent_siblings.xsl';  
  load_XML($load_xsl);  
}

// Parent, Siblings and Children
function dsn_parent_siblings_children() {  
  $load_xsl = '_navigation/parent_siblings_children.xsl';  
  load_XML($load_xsl);  
}

// Ancestors
function dsn_ancestors() {
  $load_xsl = '_navigation/ancestors.xsl';
  load_XML($load_xsl); 
}

// Ancestors
function dsn_ancestors_new() {
  $load_xsl = '_navigation/ancestors-new.xsl';
  load_XML($load_xsl); 
}

// Children
function dsn_children() {
  $load_xsl = '_navigation/children.xsl';
  load_XML($load_xsl); 
}

// Children (basic)
function dsn_children_basic() {
  $load_xsl = '_navigation/children_basic.xsl';
  load_XML($load_xsl); 
}

// Full tree
function dsn_full_tree() {
  $load_xsl = '_navigation/full_tree.xsl';
  load_XML($load_xsl); 
}

// Site map
function dsn_sitemap() {
  $load_xsl = '_navigation/site_map.xsl';
  load_XML($load_xsl); 
}

// Page Title
function dsn_pagetitle() {
  $load_xsl = '_navigation/page_title.xsl';
  load_XML($load_xsl);   
}

// Site Title
function dsn_sitetitle() {
  $load_xsl = '_navigation/site_title.xsl';
  load_XML($load_xsl);   
}

// Keywords
function dsn_keywords() {
  $load_xsl = '_navigation/keywords.xsl';
  load_XML($load_xsl);   
}
  
// Page Description
function dsn_page_description() {
  $load_xsl = '_navigation/page_description.xsl';
  load_XML($load_xsl);     
}

// Site Description
function dsn_sitedescription() {
  $load_xsl = '_navigation/site_description.xsl';
  load_XML($load_xsl);     
}

// Sections
function dsn_sections() {
  $load_xsl = '_navigation/sections.xsl';
  load_XML($load_xsl); 
}

// Utilities
function dsn_utilities() {
  $load_xsl = '_navigation/utilities.xsl';
  load_XML($load_xsl); 
}

// Parent
function dsn_parent() {
  $load_xsl = '_navigation/parent.xsl';
  load_XML($load_xsl); 
}

// Siblings
function dsn_siblings() {
  $load_xsl = '_navigation/siblings.xsl';
  load_XML($load_xsl); 
}

// AtoZ
function dsn_atoz() {
  $load_xsl = '_navigation/atoz.xsl';
  load_XML($load_xsl); 
}

// AtoZ list
function dsn_atoz_list() {
  $load_xsl = '_navigation/atozlist.xsl';
  load_XML($load_xsl); 
}

// Paged
function dsn_paged() {
  $load_xsl = '_navigation/paged.xsl';
  load_XML($load_xsl); 
}

// Context Nav
function dsn_context_nav() {
  $load_xsl = '_navigation/context_nav.xsl';
  load_XML($load_xsl); 
}

// Full nav
function dsn_full_nav() {
  $load_xsl = '_navigation/full_nav.xsl';
  load_XML($load_xsl); 
}

?>