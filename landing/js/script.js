
// $(window).scroll(function() {    
   // var scroll = $(window).scrollTop();
   
   //if (scroll >= 0) {
       $(".navbar").addClass("whitebg");
//   } else {
  //     $(".navbar").removeClass("whitebg");
   //}
//});


$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 325,
    outDuration: 200,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', 
    loadingClass: 'animsition-loading',
    loadingInner: '<img src="./images/loading.svg" />', // e.g '<img src="loading.svg" />'
    unSupportCss: [     ],
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});
wow = new WOW(
        {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       false,      // default
        live:         true        // default
        }
    )
wow.init();
$('input').focus(function(){
  $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function(){
  var inputValue = $(this).val();
  if ( inputValue == "" ) {
    $(this).removeClass('filled');
    $(this).parents('.form-group').removeClass('focused');  
  } else {
    $(this).addClass('filled');
  }
})
$(document).on('click', 'a[href^="#sectionDown"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top -100
    }, 1500);
});


jQuery(document).ready(function () {
var screen = $(window)    
if (screen.width() < 800) {
	// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('nav').outerHeight();
	
	$(window).scroll(function(event){
	didScroll = true;
	});
	
	setInterval(function() {
	if (didScroll) {
	    hasScrolled();
	    didScroll = false;
	}
	}, 250);
	
	function hasScrolled() {
	var st = $(this).scrollTop();
	
	// Make sure they scroll more than delta
	if(Math.abs(lastScrollTop - st) <= delta)
	    return;
	
	// If they scrolled down and are past the navbar, add class .nav-up.
	// This is necessary so you never see what is "behind" the navbar.
	if (st > lastScrollTop && st > navbarHeight){
	    // Scroll Down
	    $('nav').removeClass('nav-down').addClass('nav-up');
	} else {
	    // Scroll Up
	    if(st + $(window).height() < $(document).height()) {
	        $('nav').removeClass('nav-up').addClass('nav-down');
	    }
	}
	
	lastScrollTop = st;
	}
}
else {
    console.log("Mas de 800px de ancho");
}
});
$(document).ready(function() 
{
    $("#rut").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 75 || event.keyCode == 13 || 
                // Allow: Ctrl+V
                (event.ctrlKey == true && (event.which == '118' || event.which == '86')) ||  
                // Allow: Ctrl+c
                (event.ctrlKey == true && (event.which == '99' || event.which == '67')) || 
                // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
});