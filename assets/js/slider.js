$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });
//$('#items').carousel({ interval: 3000 });
$('#itemslider1').carousel({ interval: 3000 });
$('#itemslider3').carousel({ interval: 3000 });
$('#itemslider4').carousel({ interval: 4000 });
$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<4;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
    $('.carousel-showmanymoveone1 .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<2;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});
