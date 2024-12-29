document.addEventListener("DOMContentLoaded", function () {
  // Elements for Caption Animation
  const caption = document.querySelector('.caption');
  setTimeout(() => caption?.classList.add('active'), 1000);


  
  // Scroll Effect for Elements
  window.addEventListener('scroll', function () {
    const scrollContainer = document.querySelector('.scroll-container');
    const elements = document.querySelectorAll('.text-container, .image-container');
    const windowHeight = window.innerHeight;

    // Apply scroll effect to scroll container
    if (scrollContainer) {
      const scrollPosition = scrollContainer.getBoundingClientRect().top;
      if (scrollPosition < windowHeight - 100) {
        scrollContainer.classList.add('scrolled');
      }
    }

    // Apply scroll effect to each text/image container
    elements.forEach(element => {
      const elementTop = element.getBoundingClientRect().top;
      if (elementTop < windowHeight - 100) {
        element.classList.add('scrolled');
      }
    });
  });

  // Occupancy Modal
  document.getElementById('occupancy-summary')?.addEventListener('click', function () {
    document.getElementById('occupancyModal').style.display = 'block';
  });

  function updateCount(type, change) {
    const countElement = document.getElementById(`${type}-count`);
    if (countElement) {
      let count = parseInt(countElement.textContent);
      count = Math.max(0, count + change); // Prevent negative values
      countElement.textContent = count;
      updateSummary();
    }
  }

  function updateSummary() {
    const rooms = document.getElementById('rooms-count').textContent;
    const adults = document.getElementById('adults-count').textContent;
    const children = document.getElementById('children-count').textContent;
    document.getElementById('occupancy-summary').textContent =
      `${rooms} Room${rooms > 1 ? 's' : ''}, ${adults} Adult${adults > 1 ? 's' : ''}, ${children} Child${children > 1 ? 'ren' : ''}`;
  }

  document.getElementById('occupancyModal')?.addEventListener('click', function (event) {
    if (!event.target.closest("#occupancy-summary") && !event.target.closest("#occupancyModal")) {
      document.getElementById('occupancyModal').style.display = "none";
    }
  });

  // Initialize check-in and check-out dates
  const today = new Date().toISOString().split("T")[0];
  document.getElementById("checkin")?.setAttribute("min", today);
  document.getElementById("checkout")?.setAttribute("min", today);

  // Carousel Setup
  const track = document.querySelector('.carousel-track');
  const prevButton = document.querySelector('.nav-button.prev');
  const nextButton = document.querySelector('.nav-button.next');
  const items = document.querySelectorAll('.carousel-item');
  let currentIndex1 = 1;

  function updateActiveItem() {
    items.forEach((item, index) => {
      item.classList.toggle('active', index === currentIndex1);
    });
  }

  function positionItems() {
    const itemWidth = items[0]?.getBoundingClientRect().width + 20 || 0;
    items.forEach((item, index) => {
      item.style.left = `${index * itemWidth}px`;
    });
  }

  nextButton?.addEventListener('click', () => {
    if (currentIndex1 < items.length - 1) {
      currentIndex1++;
      track.style.transform = `translateX(-${currentIndex1 * (items[0].getBoundingClientRect().width + 20)}px)`;
      updateActiveItem();
    }
  });

  prevButton?.addEventListener('click', () => {
    if (currentIndex1 > 0) {
      currentIndex1--;
      track.style.transform = `translateX(-${currentIndex1 * (items[0].getBoundingClientRect().width + 20)}px)`;
      updateActiveItem();
    }
  });

  positionItems();
  updateActiveItem();

  // Play/Pause and Mute for Video
  const video = document.getElementById("sliderVideo");
  const playPauseBtn = document.getElementById("playPauseBtn");
  const muteBtn = document.getElementById("muteBtn");

  playPauseBtn?.addEventListener("click", () => {
    if (video.paused) {
      video.play();
      playPauseBtn.textContent = "❚❚"; // Pause icon
    } else {
      video.pause();
      playPauseBtn.textContent = "▶"; // Play icon
    }
  });

  muteBtn?.addEventListener("click", () => {
    video.muted = !video.muted;
    muteBtn.innerHTML = video.muted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
  });

  // Sticky Header
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.header-container');
    header.classList.toggle('sticky', window.scrollY > 0);
  });
});
document.getElementById('occupancy-summary').addEventListener('click', function () {
  document.getElementById('occupancyModal').style.display = 'block';
});

function updateCount(type, change) {
  const countElement = document.getElementById(`${type}-count`);
  let count = parseInt(countElement.textContent);

  count = Math.max(0, count + change); // Prevent negative values
  countElement.textContent = count;

  updateSummary();
}

function updateSummary() {
  const rooms = document.getElementById('rooms-count').textContent;
  const adults = document.getElementById('adults-count').textContent;
  const children = document.getElementById('children-count').textContent;

  document.getElementById('occupancy-summary').textContent = 
      `${rooms} Room${rooms > 1 ? 's' : ''}, ${adults} Adult${adults > 1 ? 's' : ''}, ${children} Child${children > 1 ? 'ren' : ''}`;
}

function closeModal() {
  document.getElementById('occupancyModal').style.display = 'none';
}

// Close the modal when clicking outside
window.addEventListener("click", function(event) {
  const modal = document.getElementById("occupancyModal");
  if (!event.target.closest("#occupancy-summary") && !event.target.closest("#occupancyModal")) {
      modal.style.display = "none";
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const today = new Date().toISOString().split("T")[0]; // Gets current date in yyyy-mm-dd format
  document.getElementById("checkin").setAttribute("min", today);
  document.getElementById("checkout").setAttribute("min", today);
});




const track = document.querySelector('.carousel-track');
const prevButton = document.querySelector('.nav-button.prev');
const nextButton = document.querySelector('.nav-button.next');
const items = document.querySelectorAll('.carousel-item');
let currentIndex1 = 1; // Start with the middle item as active

function updateActiveItem() {
items.forEach((item, index) => {
  item.classList.remove('active');
  if (index === currentIndex1) {
    item.classList.add('active');
  }
});
}

// Set the position of each item in the carousel
function positionItems() {
const itemWidth = items[0].getBoundingClientRect().width + 20; // includes gap
items.forEach((item, index) => {
  item.style.left = `${index * itemWidth}px`;
});
}

// Move to the next set of items
nextButton.addEventListener('click', () => {
if (currentIndex1 < items.length - 1) {
  currentIndex1++;
  track.style.transform = `translateX(-${currentIndex1 * (items[0].getBoundingClientRect().width + 20)}px)`;
  updateActiveItem();
}
});

// Move to the previous set of items
prevButton.addEventListener('click', () => {
if (currentIndex1 > 0) {
  currentIndex1--;
  track.style.transform = `translateX(-${currentIndex1 * (items[0].getBoundingClientRect().width + 20)}px)`;
  updateActiveItem();
}
});

// Initial Setup
positionItems();
updateActiveItem();


function toggleDropdown(event) {
  const profile = event.currentTarget;
  profile.classList.toggle('active');
}


window.addEventListener('scroll', function() {
  const header = document.querySelector('.header-container');
  header.classList.toggle('sticky', window.scrollY > 0);
});
function subscribeAlert() {
alert("Thank you for subscribing to our newsletter!");
}
