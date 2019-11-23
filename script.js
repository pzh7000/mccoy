function toggleNav(x) {
  var toggle = document.getElementById("toggleNav");
  if (toggle.className === "toggleNav") {
      toggle.className += " active";
  } else {
      toggle.className = "toggleNav";
  };
   x.classList.toggle("change");
}

// function collapseNav() {
//   $('.topnav a').click(function (e) {
//     console.log('click');
//    $('.toggleNav').collapse('active');
//  });
// }



(function ($, root, undefined) {

	$(function () {

		'use strict';

    window.onload = function() {
      // var currentScrollPos = window.pageYOffset;
      // var topNav = document.getElementById("topNav")
      // // if (toggle.className === "topNav") {
      // if (currentScrollPos > '100') {
      //     topNav.classList.add("hidden");
      // } else {
      //     topNav.classList.add("showing")
      // };

      // if (currentScrollPos > '100') {
        // document.getElementById("topNav").style.display = "none";

      // } else {
      //   document.getElementById("topNav").style.display = "block";
      // }
    }

    // var prevScrollpos = window.pageYOffset;
    // window.onscroll = function() {
    //
    //   var currentScrollPos = window.pageYOffset;
    //   if (prevScrollpos > currentScrollPos ) {
    //     document.getElementById("topNav").style.top = "0";
    //     // document.getElementById("topNav").style.display = "block";
    //   } else {
    //     document.getElementById("topNav").style.top = "-160px";
    //     // document.getElementById("topNav").style.display = "block";
    //   }
    //   prevScrollpos = currentScrollPos;
    // }


		// DOM ready, take it away
		$(document).scroll(function () {
	    var $nav = $(".topnav");
	    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	  });


    $('.toggleNav a').click(function (e) {
      // $('.toggleNav').toggle('active');
      var toggle = document.getElementById("toggleNav");
      var x = document.getElementById("hamburgular")
      if (toggle.className === "toggleNav") {
          toggle.className += " active";
      } else {
          toggle.className = "toggleNav";
      };
       x.classList.toggle("change");
    });

	});

})(jQuery, this);
