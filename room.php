<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
$firstLetter = strtoupper($username[0]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link  rel="icon" href="img\index\icons8-circled-d-32.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Dynasty Hotels</title>
  <link rel="stylesheet" href="css\room.css">
</head>
<body>
<?php
// Start the session to access session variables
session_start();

// Example session check (adjust to match your session variables)
$isLoggedIn = isset($_SESSION['user_id']); // Assuming 'user_id' is set upon login
?>

<header>
   <div class="header-container">
      <div class="logo">
         <a href="#">
            <img src="img/index/li_logo.svg" alt="Dynasty Hotels Logo">
         </a>
      </div>
      <nav class="nav-left">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="food.php">Food</a></li>
            <li><a href="wedding.php">Events</a></li>
            <li><a href="Food\Food\food.php">Menu</a></li>
            <li><a href="about_us.php">About us</a></li>
         </ul>
      </nav>

      <nav class="nav-right">
         <?php if ($isLoggedIn): ?>
            <div class="profile" onclick="toggleDropdown(event)">
               <div class="avatar"><?php echo $firstLetter; ?></div>
               <div class="dropdown" id="dropdownMenu">
                  <a href="editprofileform.php">Edit Profile</a>
                  <a href="logout.php">Logout</a>
               </div>
            </div>
         <?php else: ?>
            <ul>
               <li>
                  <a href="login.php" class="sign-in-btn">
                     <img src="img/index/account.png" alt="Sign In Icon">
                     Sign In
                  </a>
               </li>
               <li><a href="sign_up.php" class="sign-up-btn">Register</a></li>
            </ul>
         <?php endif; ?>
      </nav>
   </div>
</header>
<main>


<video id="sliderVideo" autoplay loop muted>
  <source src="img\stay\room.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<div class="video-controls">
  <button id="playPauseBtn" onclick="togglePlayPause()">&#9658;</button> <!-- Play icon (▶) -->
  <button id="muteBtn" onclick="toggleMute()"><i class="fas fa-volume-up"></i></button>
</div>




  
<div class="booking-bar">
            <div class="booking-option">
                        <div id="occupancy-summary">
                            <label> 0 Room, 0 Adult, 0 Children :</label>
                        </div>

                        <div id="occupancyModal" class="occupancy-modal">
                                            <div class="occupancy-item">
                                                <span>Rooms</span>
                                                                <div class="counter">
                                                                    <button onclick="updateCount('rooms', -1)">-</button>
                                                                    <span id="rooms-count">0</span>
                                                                    <button onclick="updateCount('rooms', 1)">+</button>
                                                                </div>
                                                </div>
                                                    <div class="occupancy-item">
                                                        <span>Adults</span>
                                                        <div class="counter">
                                                            <button onclick="updateCount('adults', -1)">-</button>
                                                            <span id="adults-count">0</span>
                                                            <button onclick="updateCount('adults', 1)">+</button>
                                                        </div>
                                                    </div>
                                                        <div class="occupancy-item">
                                                            <span>Children</span>
                                                            <div class="counter">
                                                                <button onclick="updateCount('children', -1)">-</button>
                                                                <span id="children-count">0</span>
                                                                <button onclick="updateCount('children', 1)">+</button>
                                                            </div>
                                                        </div>
                                            <button  class="done-button" onclick="closeModal()">Done</button>
                            </div>

            </div>
                    <div class="booking-option">
                    <span>Check-in - </span>
                    <input type="date" id="checkin" placeholder="Check-in" min="2024-11-10">
                    <span>Check-out -</span>
                    <input type="date" id="checkout" placeholder="Check-out" min="2024-11-10">
                    </div>

                    <div class="booking-option">
                        <label for="room-type">Type of Room:</label>
                        <select id="room-type">
                            <option value="single">Single Room</option>
                            <option value="double">Double Room</option>
                            <option value="suite">Royal Suite</option>
                            <option value="suite">Maharaja Suite</option>
                            <option value="suite">Duplex Suite</option>
                            <option value="suite">Luxury Suite</option>

                        </select>
                    </div>
                    <form action="forms\forms\New folder\room.php" method="post">
                         <button  class="book-button">BOOK</button>
                    </form>
</div>

<section class="header-section">
        <h1>Suites</h1>
        
    </section>

 
  

  <section class="suites-section">
    <div class="suite-card">
        <img src="img/stay/Maharaja Suite.jpg" alt="Palace Suite" class="suite-image">
        <div class="suite-info">
            <h3>Maharaja Suite</h3>
            <ul class="suite-amenities">
                <li class="amenity1">
                    <img src="img/stay/king.png" alt="King Bed">
                    <p>1 King</p>
                </li>
                <li class="amenity2">
                    <img src="img/stay/internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                <li class="amenity3">
                    <img src="img/stay/sofa bad.png" alt="Sofa Bed">
                    <p>Sofa bed</p>
                </li>
                <li class="amenity4">
                    <img src="img/stay/bathtub.webp" alt="Bathtub">
                    <p>Bathtub</p>
                </li>
                <li class="amenity5">
                    <img src="img/stay/rain shower.png" alt="Rain shower">
                    <p>Rain shower</p>
                </li>
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
   
    <div class="suite-card">
        <img src="img\stay\Royal Suite.jpg" alt="Palace Suite" class="suite-image">
        <div class="suite-info">
            <h3>Royal Suite</h3>
            <ul class="suite-amenities">
                <li class="amenity1">
                    <img src="img/stay/king.png" alt="King Bed">
                    <p>1 King</p>
                </li>
                <li class="amenity2">
                    <img src="img/stay/internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                <li class="amenity3">
                    <img src="img/stay/sofa bad.png" alt="Sofa Bed">
                    <p>Sofa bed</p>
                </li>
                <li class="amenity4">
                    <img src="img/stay/bathtub.webp" alt="Bathtub">
                    <p>Bathtub</p>
                </li>
                <li class="amenity5">
                    <img src="img/stay/rain shower.png" alt="Rain shower">
                    <p>Rain shower</p>
                </li>
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
        
    </section>


    <section class="suites-section">
    <div class="suite-card">
        <img src="img\stay\Luxury Suite.jpg" alt="Palace Suite" class="suite-image">
        <div class="suite-info">
            <h3>Luxury Suite</h3>
            <ul class="suite-amenities">
                <li class="amenity1">
                    <img src="img/stay/king.png" alt="King Bed">
                    <p>1 King</p>
                </li>
                <li class="amenity2">
                    <img src="img/stay/internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
               
                <li class="amenity5">
                    <img src="img/stay/rain shower.png" alt="Rain shower">
                    <p>Rain shower</p>
                </li>
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>


    <div class="suite-card">
        <img src="img\stay\Duplex Suite.jpg" alt="Palace Suite" class="suite-image">
        <div class="suite-info">
            <h3>Duplex Suite</h3>
            <ul class="suite-amenities">
                <li class="amenity1">
                    <img src="img/stay/king.png" alt="King Bed">
                    <p>1 King</p>
                </li>
                <li class="amenity2">
                    <img src="img/stay/internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
               
                <li class="amenity5">
                    <img src="img/stay/rain shower.png" alt="Rain shower">
                    <p>Rain shower</p>
                </li>
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
        
</section>

    <section class="header-section">
        <h1>Rooms</h1>
         </section>
         <section class="suites-section">
    <div class="suite-card">
        <img src="img\stay\double room.jpg" alt="Palace Suite" class="suite-image">
        <div class="suite-info">
            <h3>Single Room</h3>
            <ul class="suite-amenities">
                <li class="amenity1">
                    <img src="img/stay/king.png" alt="King Bed">
                    <p>1 King</p>
                </li>
                <li class="amenity2">
                    <img src="img/stay/internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
                <li class="amenity4">
                    <img src="img/stay/bathtub.webp" alt="Bathtub">
                    <p>Bathtub</p>
                </li>
                <li class="amenity5">
                    <img src="img/stay/rain shower.png" alt="Rain shower">
                    <p>Rain shower</p>
                </li>
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
    <div class="suite-card">
        <img src="img\stay\single room.jpg" alt="Palace Suite" class="suite-image">
        <div class="suite-info">
            <h3>Double Room</h3>
            <ul class="suite-amenities">
                <li class="amenity1">
                    <img src="img/stay/king.png" alt="King Bed">
                    <p>1 King</p>
                </li>
                <li class="amenity2">
                    <img src="img/stay/internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
                <li class="amenity4">
                    <img src="img/stay/bathtub.webp" alt="Bathtub">
                    <p>Bathtub</p>
                </li>
                <li class="amenity5">
                    <img src="img/stay/rain shower.png" alt="Rain shower">
                    <p>Rain shower</p>
                </li>
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
        
    </section>
</br></br></br>

<div class="card-container">
        <div class="card">
            <img src="img\stay\Card Maharaja-Suite .jpg" alt="Swimming Pool">
            <div class="card-title">Maharaja Suite</div>
            <div class="card-description">
            Experience royal luxury in our Maharaja Suite, adorned with exquisite decor and spacious elegance.
          </div>
        </div>

        <div class="card">
            <img src="img\stay\Card Royal-Suite.webp" alt="Health & Fitness Centre">
            <div class="card-title">Royal Suite</div>
            <div class="card-description">
            Discover the epitome of elegance in our Royal Suite. This suite boasts regal decor, a spacious living area, and stunning views.
          </div>
        </div>

        <div class="card">
            <img src="img\stay\Card Deluxe-Room.webp" alt="Kaya Kalp - The Spa">
            <div class="card-title">Deluxe Suite</div>
            <div class="card-description">
            : Experience the ultimate in luxury with our Deluxe Suite, featuring elegant décor, a spacious living area, and stunning views.
            </div>
        </div>

</div>

<div class="card-container">
        <div class="card">
            <img src="img\stay\Card Luxury Suite.webp" alt="Swimming Pool">
            <div class="card-title">Luxury Suite</div>
            <div class="card-description">
            Indulge in our Luxury Suite, where opulence meets comfort. Featuring a plush living area, exquisite furnishings, and breathtaking views,

        </div>
        </div>

        <div class="card">
            <img src="img\stay\single room card.jpeg" alt="Health & Fitness Centre">
            <div class="card-title">Single Room</div>
            <div class="card-description">
            The Single Room offers a cozy and comfortable stay for solo travelers, featuring a plush king bed, high-speed internet access, and a luxurious rain shower.
        </div>
        </div>

        <div class="card">
            <img src="img\stay\double room card.jpg" alt="Kaya Kalp - The Spa">
            <div class="card-title">Double Room</div>
            <div class="card-description">
            The Double Room offers a cozy, elegantly designed space perfect for relaxation. It features a comfortable king bed, complimentary internet access, and a luxurious rain shower.
            </div>
        </div>

        
    </div>

    <div class="container">
        <div class="image-container">
            <img src="img\stay\frount1.jpg" alt="Dining Room">
        </div>
        <div class="content">
            <h2>INDULGE AT THE PALACE</h2>
            <p>Experience the royal treatment during your stay with us by pre- ordering our exclusive Welcome amenities.</p>
            <button onclick="learnMore()" href="#" class="learn-more">Learn More</button>
        </div>
    </div>
 </main>

         <footer id="about-us-section">
  <div class="footer-content">
    
    
    <div class="footer-description">
      <h2>About Dynasty Hotels</h2>
      <p>
        Welcome to <span style="color: #f0d29a; font-weight: bold;">Dynasty Hotels</span>, first opened in
        <span style="color: #f0d29a; font-weight: bold;">Rajasthan in 1992,</span> blending traditional Rajasthani charm with modern luxury. Known for its elegant decor and personalized service, it quickly became a sought-after destination, offering authentic experiences and a warm, welcoming atmosphere for travelers.
      </p>
    </div>  

    
    <div class="footer-details">
      <h2>Contact Us</h2>
      <p>Email: info@dynastyhotels.com</p>
      <p>Phone: +91 8238650390</p>
      <h2>Follow Us</h2>
      <div class="social-icons">
        <a href="https://www.facebook.com/dynastycdoc/">
          <img src="img\index\new_fb-removebg-preview.png" alt="Facebook">
        </a>
        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fdynastyresorts">
          <img src="img\index\images-removebg-preview.png" alt="Twitter">
        </a>
        <a href="https://www.instagram.com/dynastyholidays/?hl=en">
          <img src="img\index\new_ig-removebg-preview.png" alt="Instagram">
        </a>
      </div>
    </div>

    <!-- Subscribe Section -->
    <div class="email-subscription">
      <h4>Subscribe to Our Newsletter</h4>
      <form action="#" method="post" onsubmit="subscribeAlert()">
        <input type="email" id="email" name="email" placeholder="Enter Your Email id" required>
        <button type="submit">SUBSCRIBE</button>
      </form>
    </div>

  </div>
</footer>
<script src="js\room.js"></script>
</body>
</html>







