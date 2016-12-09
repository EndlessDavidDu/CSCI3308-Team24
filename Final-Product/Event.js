
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
 interval: 2000
})
