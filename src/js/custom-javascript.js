// Add your custom JS here.

// AOS.init({
//   duration: 1000, // values from 0 to 3000, with step 50ms
//   once: true,
// });

document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');
  const navbarCollapse = document.querySelector('.navbar-collapse');

  navLinks.forEach(link => {
      link.addEventListener('click', function() {
          if (navbarCollapse.classList.contains('show')) {
              // Check if the menu is open and close it
              navbarCollapse.classList.remove('show');
          }
      });
  });
});


let lastScrollPosition = 0;
const navbar = document.getElementById('wrapper-navbar');
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