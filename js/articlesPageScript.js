<<<<<<< HEAD
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

=======
>>>>>>> 926036aeeb518e2256bd5aeca74a09f202d61443
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
<<<<<<< HEAD


// $(document).on("scroll", function () {
// 	if ($(window).scrollTop() === 0) {
// 		$("header").removeClass("fixed");
// 	} else {
// 		$("header").attr("class", "fixed");
// 	}
// });
=======
>>>>>>> 926036aeeb518e2256bd5aeca74a09f202d61443
