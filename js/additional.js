jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
      $(".dropdown-toggle").attr('href', '');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
});

var dropdownToggle = document.querySelector('.dropdown-toggle');

function datatoggle(){
  if (window.innerWidth < 1200) {
  dropdownToggle.setAttribute('data-toggle', 'dropdown');
  }
}

datatoggle();

//Checks window size and removes the fixed class (fixed-top)
/*

var fixedtop = document.querySelector('.fixed-top');

function checkwindowsize() {
  if (window.innerWidth < 768) {
    fixedtop.classList.remove('fixed-top');
  }
}

checkwindowsize();

*/
