
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
  <title>Dynasty Hotels</title>
  <link rel="stylesheet" href="css\wedding.css">
</head>

<body>
<!-- <<<<<<<<<< header part >>>>>>>>>> -->
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

<br>
          <br>


<main>
<!-- <<<<<<<<<< Video Section >>>>>>>>>> -->
<div class="video-container">
  <video class="background-video" autoplay muted loop>
    <source src="img\about_us\Best 5 Star Luxury Hotel in Bengaluru, Karnataka The Leela Palace Bengaluru_1.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="video-overlay">
    <h1>Celebrate Your Special Day</h1>
    <p>Experience unparalleled elegance and breathtaking venues for weddings and occasions.</p>
    <a href="#wedding-details" class="video-cta">Explore More</a>
  </div>
</div>

<!-- <<<<<<<<<< first wedding container part >>>>>>>>>> -->

<div class="wedding-container">
    <div class="text-section">
        <h4>Weddings & Occasions</h4>
        <h1>A Breathtaking Wedding Venue</h1>
        <p>Hold your wedding at our palatial property, defined by crystal chandeliers, vaulted ceilings, and plenty of golden-hued natural light.</p>
        <a href="#">Learn more</a>
        <div class="stats">
            <div class="stat">
                <span>24</span>
                <p>event rooms</p>
            </div>
            <div class="stat">
                <span>43.8k</span>
                <p>sqft total space</p>
            </div>
            <div class="stat">
                <span>1k</span>
                <p>person capacity</p>
            </div>
            <div class="stat">
                <span>20</span>
                <p>breakout rooms</p>
            </div>
        </div>
    </div>
    <div class="image-section">
        <img src="img\wedding\second img.jpg" alt="Wedding Venue">
    </div>
</div>

<!-- <<<<<<<<<< Round Shape container part >>>>>>>>>> -->


<div class="container">
  <div class="image-content">
    <img src="img\wedding\round.png" alt="Catering Image">
  </div>
  <div class="text-content">
    <h3>Banquets & Catering</h3>
    <h1>Catered to Your Taste</h1>
    <p>Hold a banquet with a catering team that’ll go above and beyond to make your event as delicious as it is special.</p>
    <a href="#" class="view-menu">View menus</a>
   
  </div>
</div>

<!-- <<<<<<<<<< Square Shape container part >>>>>>>>>> -->


<div class="second-container">
  <div class="second-text-section">
    <h2>CAPTURE THE MEMORIES</h2>
    <h1>START PLANNING YOUR WEDDING HERE</h1>
    <p>Finalize your wedding details while our expert planners handle everything else. Share your vision with us, and we’ll be in touch to bring your dream day to life.</p>
    <p><a href="#">Contact us</a></p>
  </div>
  <div class="second-image-section">
    <img src="img\wedding\fourth.jpg" alt="Wedding Planning Image">
  </div>
</div>

<!-- <<<<<<<<<< weddings card part >>>>>>>>>> -->


<section class="header-section">
        <h1>Wedding Spaces</h1>
        
    </section>
<section class="weddings-section">
    <div class="weddings-card">
        <img src="img\wedding\card_3 The Sunset Court.jpg" alt="The Grand Ballroom" class="weddings-image">
        <div class="weddings-info">
            <h3>The Grand Ballroom</h3>
            <ul class="weddings-amenities">
                <li class="amenity1">
                    <img src="img\wedding\On-site-Av services.png" alt="On-site AV Services">
                    <p>On-site AV Services</p>
                </li>
                <li class="amenity2">
                    <img src="img\wedding\Custom.png" alt="Custom Personalized Touches">
                    <p>Custom Personalized Touches</p>
                </li>
                <li class="amenity3">
                    <img src="img\wedding\Catering.png" alt="Catering">
                    <p>Catering</p>
                </li>
                <li class="amenity4">
                    <img src="img\wedding\internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>


    <div class="weddings-card">
        <img src="img\wedding\card_2 The Ralston Ballroom.jpg" alt="The Ralston Ballroom" class="weddings-image">
        <div class="weddings-info">
            <h3>The Ralston Ballroom</h3>
            <ul class="weddings-amenities">
                <li class="amenity1">
                    <img src="img\wedding\On-site-Av services.png" alt="On-site AV Services">
                    <p>On-site AV Services</p>
                </li>
                <li class="amenity2">
                    <img src="img\wedding\Custom.png" alt="Custom Personalized Touches">
                    <p>Custom Personalized Touches</p>
                </li>
                
                <li class="amenity4">
                    <img src="img\wedding\internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
        
    </section>

    <section class="header-section">
        <h1>Celebrations Spaces</h1>
        
    </section>

    <section class="weddings-section">
    <div class="weddings-card">
        <img src="img\wedding\card_3.avif" alt="The Sunset Court" class="weddings-image">
        <div class="weddings-info">
            <h3>The Sunset Court</h3>
            <ul class="weddings-amenities">
                <li class="amenity1">
                    <img src="img\wedding\On-site-Av services.png" alt="On-site AV Services">
                    <p>On-site AV Services</p>
                </li>
                <li class="amenity2">
                    <img src="img\wedding\Custom.png" alt="Custom Personalized Touches">
                    <p>Custom Personalized Touches</p>
                </li>
                <li class="amenity3">
                    <img src="img\wedding\Catering.png" alt="Catering">
                    <p>Catering</p>
                </li>
                <li class="amenity4">
                    <img src="img\wedding\internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>


    <div class="weddings-card">
        <img src="img\wedding\card_4.avif" alt="The Gold Ballroom" class="weddings-image">
        <div class="weddings-info">
            <h3>The Gold Ballroom</h3>
            <ul class="weddings-amenities">
                <li class="amenity1">
                    <img src="img\wedding\On-site-Av services.png" alt="On-site AV Services">
                    <p>On-site AV Services</p>
                </li>
                <li class="amenity2">
                    <img src="img\wedding\Custom.png" alt="Custom Personalized Touches">
                    <p>Custom Personalized Touches</p>
                </li>
                
                <li class="amenity4">
                    <img src="img\wedding\internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
        
    </section>

    <section class="header-section">
        <h1>Meetings Spaces</h1>
        
    </section>
    
    <section class="weddings-section">
    <div class="weddings-card">
        <img src="img\wedding\meet.avif" alt="The Regency Foyer" class="weddings-image">
        <div class="weddings-info">
            <h3>The Regency Foyer</h3>
            <ul class="weddings-amenities">
                <li class="amenity1">
                    <img src="img\wedding\On-site-Av services.png" alt="On-site AV Services">
                    <p>On-site AV Services</p>
                </li>
                <li class="amenity2">
                    <img src="img\wedding\Custom.png" alt="Custom Personalized Touches">
                    <p>Custom Personalized Touches</p>
                </li>
                <li class="amenity3">
                    <img src="img\wedding\Catering.png" alt="Catering">
                    <p>Catering</p>
                </li>
                <li class="amenity4">
                    <img src="img\wedding\internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>


    <div class="weddings-card">
        <img src="img\wedding\meet1.avif" alt="The French Parlor" class="weddings-image">
        <div class="weddings-info">
            <h3>The French Parlor</h3>
            <ul class="weddings-amenities">
                <li class="amenity1">
                    <img src="img\wedding\On-site-Av services.png" alt="On-site AV Services">
                    <p>On-site AV Services</p>
                </li>
                <li class="amenity2">
                    <img src="img\wedding\Custom.png" alt="Custom Personalized Touches">
                    <p>Custom Personalized Touches</p>
                </li>
                
                <li class="amenity4">
                    <img src="img\wedding\internet.webp" alt="Internet">
                    <p>Internet</p>
                </li>
                
            </ul>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </div>
        
    </section>

<!-- <<<<<<<<<< info card part >>>>>>>>>> -->


    <div class="info-container">
  <div class="info-box">
    <h3>Hazardous Waste Recycling Program</h3>
    <p>Following an audit by APTIM, The Palace Hotel has implemented a comprehensive hazardous waste recycling program. This initiative ensures safe disposal and recycling of hazardous materials, minimizing environmental impact.</p>
  </div>
  <div class="info-box">
    <h3>Waste Diversion with Recology</h3>
    <p>The Palace Hotel has set up a recycling and composting process with Recology to divert waste from landfills. Recology provides innovative waste management solutions, helping the hotel achieve its sustainability goals.</p>
  </div>
  <div class="info-box">
    <h3>Partnership with Clean the World</h3>
    <p>The Palace Hotel has partnered with Clean the World to collect and recycle soap and bottled amenities discarded by the hospitality industry. This initiative helps reduce waste and provides hygiene products to those in need.</p>
  </div>
</div>


<div class="form-container">
        <h1>Enquire Now</h1>
        <form id="enquiryForm" action="event_booking.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Name*" id="name" required>
                <input type="email" name="email" placeholder="Email" id="email" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Phone" id="phone" pattern="[0-9]{10}" required>
                <input type="text" name="hotel" placeholder="Hotel Name" id="hotel">
            </div>
            <div class="form-group">
                <select name="purpose" id="purpose" required>
                    <option value="">Purpose of Event</option>
                    <option value="wedding">Wedding</option>
                    <option value="conference">Conference</option>
                    <option value="birthday">Birthday Party</option>
                </select>
                <input type="number" name="guests" placeholder="Number of Guests" id="guests" required>
            </div>
            <div class="form-group">
                <input type="date" name="event_date" id="event_date" required>
            </div>
            
            <textarea name="additional_info" placeholder="Additional Information"></textarea>
            
            <button type="submit" class="submit-btn">SUBMIT</button>
        </form>


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

<script src="js\wedding.js"></script>
</body>
</html>







