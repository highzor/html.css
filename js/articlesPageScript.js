// $(window).ready(function(){
//    $("#article").fadeIn('slow');
// });



// document.addEventListener("DOMContentLoaded", function(){
// 	var closeButt = document.getElementById('close');
// 	if (closeButt) closeButt.click();
// });
$(function () {
  $('#dwnldForms').tooltip()
})

setTimeout(function(){
	$('body').addClass('body_visible');
}, 200);

function slowScroll(id) {
	$('html, body').animate({
		scrollTop: $(id).offset().top
	}, 500);
}

$(document).ready(function() {
  var btn = $('#buttonUp');  
  $(window).scroll(function() {     
    if ($(window).scrollTop() > 300) {
       btn.addClass('show');
     } else {
       btn.removeClass('show');
     }
   });
   btn.on('click', function(e) {
     e.preventDefault();
     $('html, body').animate({scrollTop:0}, '300');
   });
});


// $(document).on("scroll", function () {
// 	if ($(window).scrollTop() === 0) {
// 		$("header").removeClass("fixed");
// 	} else {
// 		$("header").attr("class", "fixed");
// 	}
// });
