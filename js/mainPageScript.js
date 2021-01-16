  $(function () {
  $('#dwnldForms').tooltip()
})

function slowScroll(id) {
	$('html, body').animate({
		scrollTop: $(id).offset().top
	}, 500);
}

$(document).on("scroll", function () {
	if ($(window).scrollTop() === 0) {
		$("header").removeClass("fixed");
	} else {
		$("header").attr("class", "fixed");
	}
});

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

setTimeout(function(){
	$('body').addClass('body_visible');
}, 200);

// document.addEventListener("DOMContentLoaded", function (dcle) {
//   debugger;
//  document.getElementById("dwnldForms").addEventListener("mouseenter", function () {
//   debugger;
//   $(function () {
//   $('#dwnldForms').tooltip()
// })
//  });
// });