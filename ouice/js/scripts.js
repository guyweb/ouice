// 
// OU ICE v4 JAVASCRIPTS
//


// BACK TO TOP LINK

jQuery(document).ready(function(){

jQuery(window).scroll(function(){

// if you want to measure 1000px from the top, use --&gt; if(jQuery(window).scrollTop() &gt; 1000)
// if you want to measure 1000px from the bottom, use  --&gt; if(jQuery(document).height() - jQuery(window).height() - jQuery(window).scrollTop() &lt; 1000)

// check whether the scroll has reached 1000px from the top     
	if(jQuery(window).scrollTop() > 1000){

// show back to top
      jQuery('#ou-site-footer .ou-to-top').stop().animate({opacity: 1});
    }

	else{

// hide back to top
      jQuery('#ou-site-footer .ou-to-top').stop().animate({opacity: 0});
    }
  });

});

// SMOOTH SCROLLING

$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 500);
	        return false;
	      }
	    }
	  });
});

// SHOW/HIDE MARKUP FOR STYLE GUIDE

$(document).ready(function(){	

	// change brackets
  
	$('code').each(function() {
		$(this).text($(this).html());
	});
	
  // hide code highlight
  
  $('.code').hide(); 
	
  $("span.code-toggle a").click(function(event) {   
     // Prevent default click action if javascript is enabled
     event.preventDefault();  
	 // if code section is hidden
	 if($(this).parent().parent().next().is(':hidden')) {
	 // show code section
	 $(this).parent().parent().next().slideToggle('fast');
	 // load code from .txt
     //$(this).parent().next().load($(this).attr("href"), function() {	 
	   // ensure that HTML characters are shown not rendered	 
	   //var htmlStr = $(this).html();        
	   //$(this).text(htmlStr);	   		     
     //})  
	 // otherwise just hide code section
	 } else {
	   $(this).parent().parent().next().slideToggle('fast'); 		   
	}	
	// switch label depending on whether code section is shown or hidden
	//if($(this).text() == "Show markup") {
	//	$(this).text("Hide markup");		
	//} else {
	//	$(this).text("Show markup")
	//}	
  })    
});


// SHOW/HIDE TRANSCRIPTS


$(document).ready(function(){
	$(".ou-transcript").hide();
	$('<p class="ou-toggle"><a href="#" class="ou-toggle">Show transcript</a></p>').appendTo("div.ou-clip");
	$('a.ou-toggle').click(function(){
		$(this).text($(this).text()=='Show transcript'?'Hide transcript':'Show transcript');
		$(this).parent().parent().next().toggle();return false;
		$(this).html(text)
	})
});


// SHOW/HIDE MOBILE MENU

$(document).ready(function(){
	$(".ou-mobile-menu-toggle").click(function(){
	$("#ou-service-links").toggleClass("visible");
	$('body').toggleClass('ou-service-links-open');
	$('a.ou-mobile-menu-toggle').toggleClass('icon-down icon-up')
		return false;
	})
});
