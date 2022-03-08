$('.container-slick').slick({
	arrows: false,
	dots: true,
	// autoplay: true,
	autoplaySpeed: 7000,
	slidesToShow: 1,
	slidesToScroll: 1,
	adaptiveHeight: true,
	responsive: [
		{
			breakpoint: 600,
			settings: {
				adaptiveHeight: true,
			}
		  },
	]
});


$('.logos__slider').slick({
	arrows: false,
	dots: false,
	autoplay: true,
	autoplaySpeed: 4000,
	slidesToShow: 5,
	slidesToScroll: 1,
	cssEase: "linear",
	infinite: true,
	centerMode: true,
	responsive: [
		{
		  breakpoint: 1224,
		  settings: {
			slidesToShow: 3,
			centerMode: false,
		  }
		},
		{
			breakpoint: 660,
			settings: {
			  slidesToShow: 1,
			  centerMode: false,
			  dots: true,
			}
		  },
	]
});


