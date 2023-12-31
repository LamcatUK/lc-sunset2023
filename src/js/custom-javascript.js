// Add your custom JS here.


document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');
  const navbarCollapse = document.querySelector('.navbar-collapse');
  const navbar = document.getElementById('wrapper-navbar');
  navLinks.forEach(link => {
      link.addEventListener('click', function() {
          if (navbarCollapse.classList.contains('show')) {
              // Check if the menu is open and close it
              navbarCollapse.classList.remove('show');
              navbar.classList.add('hidden');
          }
      });
  });

  // hide beyond height of navbar (--h-top)
  let lastScrollPosition = 0;
  // const navbar = document.getElementById('wrapper-navbar');
  const navbarHeight = navbar.clientHeight; // Get the height of the navbar
  
  window.addEventListener('scroll', function() {
      const currentScroll = window.scrollY || document.documentElement.scrollTop;
  
      if (currentScroll > navbarHeight) {
          if (currentScroll > lastScrollPosition) {
              // Down scroll
              navbar.classList.add('hidden');
          } else {
              // Up scroll
              navbar.classList.remove('hidden');
          }
      }
  
      lastScrollPosition = currentScroll <= 0 ? 0 : currentScroll;
  });

});


lightbox.option({
    'fadeDuration': 300,
    'imageFadeDuration': 300,
    'resizeDuration': 400,
    'disableScrolling': true,
    'wrapAround': true
});

// hide on scroll, assuming --h-top of zero
// let lastScrollPosition = 0;
// const navbar = document.getElementById('wrapper-navbar');

// window.addEventListener('scroll', function() {
//     const currentScroll = window.scrollY || document.documentElement.scrollTop;

//     if (currentScroll > lastScrollPosition) {
//         // Down scroll
//         navbar.classList.add('hidden');
//     } else {
//         // Up scroll
//         navbar.classList.remove('hidden');
//     }

//     lastScrollPosition = currentScroll <= 0 ? 0 : currentScroll;
// });



// AOS.init({
//   duration: 1000, // values from 0 to 3000, with step 50ms
//   once: true,
// });




