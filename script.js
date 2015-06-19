jQuery(document).ready(function() {
	$("#predayPhoto").click(function() {
	$(this).fadeOut("slow");
	});
	$('.fancybox').fancybox();
	$("#fancybox-manual-c").click(function() {
	$.fancybox.open([	{href : "images/slide/01.png"},
	{href : "images/slide/02.png"},
	{href : "images/slide/03.png"},
	{href : "images/slide/04.png"},
	{href : "images/slide/16.JPG"},
	{href : "images/slide/17.JPG"},
	{href : "images/slide/18.JPG"},
	{href : "images/slide/19.JPG"},
	{href : "images/slide/20.JPG"},
	{href : "images/slide/21.JPG"},
	{href : "images/slide/22.JPG"},
	{href : "images/slide/23.JPG"},
	{href : "images/slide/end/dayPhoto_big.png"}
	], {
		helpers : {
			thumbs : {
				width: 100,
				height: 80
			}
		}
	});
	});
});