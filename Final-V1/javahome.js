
// Credit goes to 
//http://www.bootply.com/94444

$('.carousel .item').each(function(){
 var next = $(this).next();
 if (!next.length) {
   next = $(this).siblings(':first');
 }
 next.children(':first-child').clone().appendTo($(this));
 
 if (next.next().length>0) {
   next.next().children(':first-child').clone().appendTo($(this));
 }
 else {
     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
 }
});

// we can change how fast each carousel rotates if we want here

$('.Carousel').carousel({
 interval: 3000
});
$('.Carousel').carousel({
 interval: 3000
});
$('.Carousel').carousel({
 interval: 3000
});


//http://www.webdesignerdepot.com/2014/05/how-to-create-an-animated-sticky-header-with-css3-and-jquery/
/*This is for the sticky header -- jquery*/ 
$(window).scroll(function() {
	if ($(this).scrollTop() > 1) {
		$('header').addClass("sticky");
	}
	else {
		$('header').removeClass("sticky");
	}
});

//method from codeacademy 
/*This is to move everything when nav is opened*/
var pushmenu = function() {
$( '.menu' ).click(function() {
	$( '.navigation').animate({
		left: "0px"}, 300);
	$('.Carousel').animate({
		left: "100px"}, 300);
	$('.centered').animate({
		left: "100px"}, 300);
});


  /* Then push them back */
  $('.close').click(function() {
    $('.navigation').animate({
      left: "-300px"}, 300);
    $('.Carousel').animate({
      left: "0px"}, 300);
    $('.centered').animate({
      left: "0px"}, 300);

  });
};

$(document).ready(pushmenu); /*So it is ready for use*/


