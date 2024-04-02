// This is adding an active class to the nav
const navLinkEls = document.querySelectorAll('.nav-link');
const windowPathname = window.location.pathname;

navLinkEls.forEach(navLinkEl => {
const navLinkPathname = new URL(navLinkEl.href).pathname
  if(navLinkEl.href.includes(windowPathname) && windowPathname!== '/'){
    navLinkEl.classList.add('active');
  }
  // Set default for Home
  if((windowPathname === navLinkPathname) || (windowPathname === '/index.html' && navLinkPathname === '/')){
    navLinkEl.classList.add('active');
  }
});

// Clicking outside the hamburger menu to close it
document.addEventListener('DOMContentLoaded', function () {
  const navbarText = document.getElementById('navbarText');
  const navbarToggle = document.querySelector('[data-bs-target="#navbarText"]');
  const ham = document.querySelector('[aria-expanded="true" ]');

  // Add event listener to the body
  document.body.addEventListener('click', function (event) {
    const isNavbarItem = event.target.closest('.navbar-collapse');
    const isNavbarToggle = event.target === navbarToggle;
    

    // Check if the menu is open and the click is outside the menu or button
    if (!isNavbarItem && !isNavbarToggle && navbarText.classList.contains('show')) {
      if (window.innerWidth < 992) {
        const bsCollapse = new bootstrap.Collapse(navbarText);
        bsCollapse.hide();
      }
    }
  });
});

jQuery(document).ready(function() {
  // for hover dropdown menu
  
  // slick slider call 
  $('.slick_slider').slick({
      dots: true,
      infinite: true,
      speed: 800,
      slidesToShow: 1,
      slide: 'div',
      autoplay: true,
      autoplaySpeed: 5000,
      cssEase: 'linear'
  });
  // latest post slider call 
  $('.latest_postnav').newsTicker({
      row_height: 64,
      speed: 800,
      prevButton: $('#prev-button'),
      nextButton: $('#next-button')
  });
  jQuery(".fancybox-buttons").fancybox({
      prevEffect: 'none',
      nextEffect: 'none',
      closeBtn: true,
      helpers: {
          title: {
              type: 'inside'
          },
          buttons: {}
      }
  });
  // jQuery('a.gallery').colorbox();
  //Check to see if the window is top if not then display button
  $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
          $('.scrollToTop').fadeIn();
      } else {
          $('.scrollToTop').fadeOut();
      }
  });
  //Click event to scroll to top
  $('.scrollToTop').click(function() {
      $('html, body').animate({
          scrollTop: 0
      }, 800);
      return false;
  });
  $('.tootlip').tooltip();
  $("ul#ticker01").liScroll();
});


jQuery(window).load(function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(100).css({
      'overflow': 'visible'
  });
})
