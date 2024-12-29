document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  let currentSlide = 0;

  // Function to change the slide
  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove('active');
      dots[i].classList.remove('active');
    });
    slides[index].classList.add('active');
    dots[index].classList.add('active');
  }

  // Show next slide
  function showNextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  // Show previous slide
  function showPreviousSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  }

  // Event listeners for the buttons
  document.querySelector('.next').addEventListener('click', showNextSlide);
  document.querySelector('.prev').addEventListener('click', showPreviousSlide);

  // Event listeners for the dots
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      currentSlide = index;
      showSlide(currentSlide);
    });
  });

  // Automatic slide change every 5 seconds
  setInterval(showNextSlide, 5000);
});
document.addEventListener("DOMContentLoaded", function () {
  const caption = document.querySelector('.caption');

  // Add the 'active' class to trigger the effect after a slight delay
  setTimeout(function () {
    caption.classList.add('active');
  }, 1000); // 1-second delay before the effect starts
});


window.addEventListener('scroll', function() {
  var scrollContainer = document.querySelector('.scroll-container');
  var scrollPosition = scrollContainer.getBoundingClientRect().top;
  var windowHeight = window.innerHeight;

  if (scrollPosition < windowHeight - 100) { 
    scrollContainer.classList.add('scrolled');
  }
});


// JavaScript to add 'scrolled' class when elements come into view
window.addEventListener('scroll', function() {
  var elements = document.querySelectorAll('.text-container, .image-container');
  var windowHeight = window.innerHeight;

  elements.forEach(function(element) {
      var elementTop = element.getBoundingClientRect().top;

      if (elementTop < windowHeight - 100) { // Adjust this value for when the animation triggers
          element.classList.add('scrolled');
      }
  });
});


