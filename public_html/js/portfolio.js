$('.slider-for-carousel').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav-carousel'
});
$('.slider-nav-carousel').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.slider-for-carousel',
	dots: true,
	centerMode: true,
	focusOnSelect: true
});