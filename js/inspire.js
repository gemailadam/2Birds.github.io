var SlideTimer = setInterval(9000);



var SlideTimer = function()
 {

$(".slideshow-big-zxc img").animate({left: '250px'});


}

setTimeout(SlideTimer, 9000);



$(".postedby .post-categories a").hover(function () {
	$(".slideshow-big-zxc img").animate({left: '250px'});
});


// $("button").click(function(){
//     var div = $("div");
//     div.animate({left: '100px'}, "slow");
//     div.animate({fontSize: '3em'}, "slow");
// });

// $("button").click(function(){
//     $("div").animate({
//         left: '250px',
//         height: '+=150px',
//         width: '+=150px'
//     });
// });

// $("button").click(function(){
//     $("img").animate({
//         left: '250px',
//         height: '-=150px',
//         width: '-=150px'
//     });
// });

