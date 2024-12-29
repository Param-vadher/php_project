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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMN1B9A6BYm1PV6u+K/9ei3jF+ki/8FH7S6hNGm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <title>Dynasty Hotels</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php

session_start();

$isLoggedIn = isset($_SESSION['user_id']);
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
  
  
          <div class="slider">
        
            <div class="slide active">
                  <img src="img\index\1_Leela-Palace-Bengaluru_Exterior.jpg" alt="First Slide">
                <div class="caption">
              <h4 class="h4-box">Experience Unmatched Luxury</h4>
              <p>Indulge in ultimate comfort and elegance at our hotel. Enjoy exquisite dining and world-class amenities tailored to your every need.</p>
              <a href="Stay.php" class="btn-danger">Book Your Stay Now</a>
          </div>
          </div>
              
          <div class="slide active">
                  <img src="img\index\facade-front-drive-way.png" alt="2nd Slide">
          </div>
              
          <div class="slide active">
                  <img src="img\index\poolside-facade.png" alt="3rd Slide">
          </div>
          <!-- <div class="slide active">
<video controls class="slider-video">
        <source src="img\index\Best 5 Star Luxury Hotel in Bengaluru, Karnataka The Leela Palace Bengaluru.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      </div> -->
          </div>

          <div class="navigation">
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
          </div>

          <div class="slider-pagination">
              <span class="dot active"></span>
              <span class="dot"></span>
              <span class="dot"></span>
          </div>
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
    <button class="done-button" onclick="closeModal()">Done</button>
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
    <button class="book-button">BOOK</button>
</div>

<!-- Occupancy Modal -->




            
            <div class="center-container top-space bottom-space diss">
                <h1 class="scroll-up">The Dynasty Hotel</h1>
                <h5 class="scroll-up">"Luxury Living, Unmatched Comfort"</h5>
            </div>

<section class="story-section">
              
        <div class="container1">
        
            <div class="frame2">

                    <div class="dusk-img">
                        <img src="img\about_us\welcome.jpg" alt="Hotel Lobby">
                    </div>

              </div>
                    <br>
            <div class="decorative-divider">
                  <h2>Welcome</h2>
                      <img class="icon-img"src="img\index\noun-divider-5574945.svg " alt="decorative divider">
                </div>
                    <p> <span class="w-word">D</span><span class="highlight">ynasty Hotels</span>, 
                    a hallmark of elegance and refinement since <span class="highlight">1992</span>.
                    From its beginnings as a <span class="highlight">boutique establishment</span>, 
                    Dynasty Hotels has flourished into a distinguished collection of properties, each embodying a unique blend of 
                    <span class="highlight">timeless luxury</span> and <span class="highlight">contemporary sophistication</span>.</p>
        
                    <div class="arch-line2">
  <video id="sliderVideo" autoplay loop muted>
    <source src="img/index/Best 5 Star Luxury Hotel in Bengaluru, Karnataka The Leela Palace Bengaluru.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="video-controls">
    <button id="playPauseBtn">&#9658;</button> <!-- Play icon (▶) -->
    <button id="muteBtn"><i class="fas fa-volume-up"></i></button>

  </div>
</div>

        
      </div>

</section>

          




  <div class="arch-line" >
<!-- expriment -->
<section class="about-us2">
  <div class="description">
      <h1 >The Grand Lobby</h1>
      <div class="divider">
                      <img class="icon" src="img\index\noun-calligraphy-element-6271479.svg" alt="Responsible Luxury"> 
                 </div>
                 <p>
    Welcome to <span style="color:  #bd8c5e; font-weight: bold;">The Dynasty Hotel</span>
    , where <span style="font-weight: bold; color: #bd8c5e;">elegance meets comfort</span>.
     Our <span style="font-weight: bold; color: #bd8c5e">grand lobby</span>, with its
      high ceilings, large windows,
       and plush seating, creates an inviting atmosphere bathed in natural light. A 
       <span style="color:  #bd8c5e; font-weight: bold;">  magnificent chandelier </span>
    adds sophistication, while our
     attentive concierge team
     is ready to assist with any needs. Whether 
     arriving,meeting,
      or unwinding, the Grand Lobby offers a <span style="color:  #bd8c5e; font-weight: bold;"> memorable setting.</span>
</p>

  </div>
  <div class="frame">
  <img src="img/index/manor-lobby-itcwindsor.jpg" alt="Dynasty Hotels Interior">
  </div>
</section>



       


<!-- expriment -->
          <section class="about-us">
                  <div class="custom-frame">
                    
                    <img src="img\index\leela-palace-kempinski-bangalore-bangalore-india-108556-2.webp" alt="Dynasty Hotels Interior">
                    </div>
                      <div class="description">
                          <h1>Luxurious Hallways</h1>
                          <div class="divider">
                      <img class="icon" src="img\index\noun-calligraphy-element-6271479.svg" alt="Responsible Luxury"> 
                 </div>
                 <ul style="list-style-type: square; padding-left: 20px; color: #92663c;">
  <li style="margin-bottom: 10px;">
    <span style="font-weight: bold;">A Symphony of Art and Architecture</span>
    <p style="margin: 5px 0 0 20px; line-height: 1.6; color: #333;">
      Our hotel’s interiors are a harmonious blend of 
      <span style="color: #bd8c5e; font-weight: bold;">traditional charm</span> and 
      <span style="color: #bd8c5e; font-weight: bold;">modern sophistication</span>. 
      Each space is thoughtfully designed with an eye for detail, from the exquisite 
      <span style="color: #bd8c5e; font-weight: bold;">wall art</span> to the carefully chosen furnishings that reflect the highest standards of taste. 
      The vibrant hues and textures within the rooms create a serene ambiance, making it the perfect retreat after a day of exploration or business.
    </p>
  </li>
</ul>

                      </div>
          </section>


          <!-- font-weight: bold; color: #bd8c5e;"> -->

        <section class="about-us2">
  <div class="description">
      <h1>Luxurious Bar</h1>
      <div class="divider">
                      <img class="icon" src="img\index\noun-calligraphy-element-6271479.svg" alt="Responsible Luxury"> 
                 </div><p>
  Step into the exquisite ambiance of the <span style="color: #bd8c5e; font-weight: bold;">Dynasty Bar</span>, where sophistication meets relaxation. Our carefully curated selection features the finest craft beers from around the world, including:
  <ul style="list-style-type: square; margin-top: 10px; padding-left: 20px; color: #333;">
    <li><span style="color:#92663c;" ><strong>Heineken</strong></span> - A classic lager known for its refreshing taste.</li>
    <li><span style="color:#92663c;" ><strong>Guinness</strong></span> - The iconic Irish stout with rich flavors and a creamy head.</li>
    <li><span style="color:#92663c;" ><strong>Chimay Blue</strong></span> - A Belgian strong ale with dark fruit notes and a smooth finish.</li>
    <li><span style="color:#92663c;" ><strong>Dogfish Head 60 Minute IPA</strong></span> - A hoppy and flavorful IPA loved by craft beer enthusiasts.</li>
    <li><span style="color:#92663c;" ><strong>Blue Moon</strong></span> - A Belgian-style wheat ale that pairs perfectly with citrus.</li>
  </ul>
         </br>
  Whether you're unwinding after a long day or celebrating a special occasion, our bartenders are dedicated to providing exceptional service, guiding you through our extensive menu. Enjoy the vibrant atmosphere complemented by tasteful decor, plush seating, and soft lighting.
</p>
<p>
  Join us at the <span style="color: #bd8c5e; font-weight: bold;">Dynasty Bar</span> and indulge in a truly memorable experience—perfect for beer enthusiasts and casual drinkers alike. Cheers to unforgettable moments!
</p>

  </div>
  <div class="frame">
  <img src="img\index\bar.jpg" alt="Luxury Hallways">

  </div>
</section>







          <section class="about-us">
                              <div class="custom-frame">
                                  <img src="img/index/Culinary.jpg.webp" alt="Dynasty Hotels Interior" >
                              </div>
                <div class="description">
                                  <h1>Elegant Dinner Table</h1>
                                  <div class="divider">
                      <img class="icon" src="img\index\noun-calligraphy-element-6271479.svg" alt="Responsible Luxury"> 
                 </div>
                 <p style="font-size:16px; line-height:1.6; color:#333;">
  Experience dining like never before at our beautifully set dinner table, where every <span style="font-weight:bold; color:#bd8c5e;">dish</span> is a celebration of flavor. Indulge in our chef's signature offerings, including:
  <ul style="list-style-type: square; margin-top: 10px; padding-left: 20px; color: #333;">
    <li><span style="color:#bd8c5e; font-weight:bold;">Mouthwatering Lobster Bisque</span> - A rich and creamy delight that tantalizes the taste buds.</li>
    <li><span style="color:#bd8c5e; font-weight:bold;">Tender Filet Mignon</span> - Perfectly cooked to melt in your mouth, served with seasonal sides.</li>
    <li><span style="color:#bd8c5e; font-weight:bold;">Decadent Chocolate Soufflé</span> - A luscious dessert that’s a feast for the senses.</li>
  </ul>
  The table is graced with fine china and sparkling glassware, designed to complement the vibrant colors of each course. With luxurious linens and fresh floral arrangements, the atmosphere is as inviting as the cuisine. Whether for an intimate dinner or a grand celebration, our table promises culinary moments to cherish.
</p>

                              <br>
                            <br>
                                <a href="booking.php" class="button-b">Book Table </a>
                        <br>
                </div>
          </section>




          <section class="about-us2">
  <div class="description">
      <h1>Meet Our Master Chef</h1>
      <div class="divider">
                      <img class="icon" src="img\index\noun-calligraphy-element-6271479.svg" alt="Responsible Luxury"> 
                 </div>
                 <p style="font-size:16px; line-height:1.6; color:#333;">
  At the heart of our culinary excellence is <span style="color: #bd8c5e; font-weight: bold;">Vikas Khanna</span>, whose passion for gastronomy transforms each dish into a masterpiece. With years of experience and a dedication to using the freshest ingredients, Chef Michael crafts menus that celebrate both local flavors and international cuisine.
</p>
<strong style="font-size:16px; color:#92663c;">Key Highlights:</strong>
<ul style="list-style-type: square; margin-top: 10px; padding-left: 20px; color: #333;">
  <li><span style="font-weight: bold;">Blends traditional recipes</span> with innovative techniques.</li>
  <li>Curates <span style="color: #bd8c5e;">seasonal menus</span> featuring the finest produce.</li>
  <li>Specializes in <span style="color: #bd8c5e;">personalized dining experiences</span> for every guest.</li>
  <li>Committed to sustainability by sourcing from <span style="color: #bd8c5e;">local farms</span>.</li>
</ul>
<p style="font-size:16px; line-height:1.6; color:#333;">
  Join us for an unforgettable culinary journey that reflects Chef Michael's artistry and passion for exceptional dining.
</p>

  </div>
  <div class="frame">
  <img src="img\index\spectra-all-day-dining-restaurant-gurugram.jpg.webp" alt="Grand Lobby">

  </div>
</section>

</div>








</div>


          <div class="arch-line" >
                  <div class="center-container top-space bottom-space diss">
                          <h1 class="scroll-up">"Luxury and Wellness Redefined"</h1>    <!-- Relax, Recharge, and Revitalize -->

                          
                          <h5 class="scroll-up"> "Our Gym, Spa, and Pool – For Your Complete Well-Being"</h5>
                      </div>


                      <button class="nav-button prev" onclick="moveSlide(-1)">&#10094;</button>

                      <div class="carousel-container">
    <!-- <button class="nav-button prev">&#10094;</button> -->

    <div class="carousel">
      <div class="carousel-track">
      <div class="carousel-item active">
          <img src="img\index\pool3.webp" alt="pool">
          <div class="carousel-caption">
          <h3>Pools</h3>
         
<p>
    Relax in our <span style="color:  #bd8c5e; font-weight: bold;">elegant pool</span> area, surrounded by lush greenery and comfortable loungers. Enjoy refreshing dips and attentive poolside service for a truly serene escape.
</p>

          </div>
        </div>
        <div class="carousel-item">
          <img src="img\index\theayer.jpg" alt="">
          <div class="carousel-caption">
          <h3>Theater</h3>
<p>
    Our <span style="color:  #bd8c5e; font-weight: bold;">luxurious theater</span> offers plush seating and top-tier audio-visuals, perfect for an unforgettable movie or live show experience.
</p>



          </div>
</div>

<div class="carousel-item">
          <img src="img\index\spa.jpg" alt="">
          <div class="carousel-caption">
          <h3>Spa</h3>
<p>
    Relax and rejuvenate at ourluxurious spa, offering  <span style="color:  #bd8c5e; font-weight: bold;">soothing massages and wellness </span> treatments in a serene environment.
</p>



          </div>
</div>
        <div class="carousel-item">
          <img src="img\index\Amenities-Gym.webp" alt="">
          <div class="carousel-caption">
          <h3>Gym</h3>
<p>
    Stay active in our <span style="color:  #bd8c5e; font-weight: bold;">state-of-the-art gym</span>, equipped with modern fitness equipment and designed for all levels of workout.
</p>


          </div>
        </div>
        <div class="carousel-item active">
          <img src="img\index\garden.jpg" alt="The Leela Palace Agra">
          <div class="carousel-caption">
          <h3>Garden</h3>
<p>
    Stroll through our <span style="color:  #bd8c5e; font-weight: bold;">beautifully landscaped garden</span>, a peaceful oasis filled with lush greenery and vibrant flowers, perfect for relaxation and reflection.
</p>



          </div>
        </div>

        <div class="carousel-item">
          <img src="img\index\children-area.avif" alt="The Leela Hyderabad">
          <div class="carousel-caption">
          <h3>Children's Area</h3>
<p>
    Our children's area<span style="color:  #bd8c5e; font-weight: bold;"> offers a safe and fun environment </span> with engaging activities and play zones, perfect for young guests to explore and enjoy.
</p>



          </div>
        </div>
        <div class="carousel-item active">
          <img src="img\index\hotel-7885138_1280.webp" alt="The Leela Palace Agra">
          <div class="carousel-caption">
          <h3>Outdoor Area</h3>
<p>
    Unwind in our <span style="color:  #bd8c5e; font-weight: bold;">relaxing outdoor area</span>, featuring comfortable seating and scenic views for a peaceful escape.
</p>

          </div>
        </div>
        
        <div class="carousel-item">
          <img src="img\index\wedding-jaipur-luxury-hotel.jpg.webp" alt="The Leela Sikkim">
          <div class="carousel-caption">
          <h3>Wedding Hall</h3>
          
<p>
    Our <span style="color:  #bd8c5e; font-weight: bold;">elegant wedding hall</span> offers a beautiful setting with luxurious amenities for your special day.
</p>


          </div>
        </div>
       
      </div>
    </div>
    <!-- <button class="nav-button next">&#10095;</button> -->
  </div>
  <button class="nav-button next" onclick="moveSlide(1)">&#10095;</button>


</div>
          <!-- arch slider star here -->
          
          <div class="arch-container">
            <div class="arch-slider-wrapper arch-frame">
              <div class="arch-slider">
                <div class="arch-slide-frame">
                  <img src="img/index/cuisines.png" alt="Slide 1">
                </div>
                <div class="arch-slide-frame">
                  <img src="img/index/design-and-detailing.png" alt="Slide 2">
                </div>
                <div class="arch-slide-frame">
                  <img src="img/index/dining.png" alt="Slide 3">
                </div>
                <button class="arch-prev">&#10094;</button>
              <button class="arch-next">&#10095;</button>
              </div>
          </div>
            <!-- Right: Description -->
            <div class="arch-description">
             
              <h2 style="color:#865d37;">Explore Our Finest Cuisines</h2>
<p>
    Discover a world of <span style="color:  #bd8c5e; font-weight: bold;">exquisite tastes</span>
    and <span style="color:  #bd8c5e; font-weight: bold;">elegant presentation</span>. From 
    <span style="color:  #bd8c5e; font-weight: bold;">dining experiences</span> to <span style="color:  #bd8c5e; font-weight: bold;">intricate designs</span>, 
    our spaces provide the perfect setting for a memorable meal. Our range of cuisines offers something for everyone, blending 
    <span style="color:  #bd8c5e; font-weight: bold;">traditional flavors</span> with <span style="color:  #bd8c5e; font-weight: bold;">modern techniques</span>.
</p>
<p>
    Since opening our doors in <span style="color:  #bd8c5e; font-weight: bold;">1992</span>, we have been dedicated to providing an unmatched blend of 
    <span style="color:  #bd8c5e; font-weight: bold;">luxury</span> and <span style="color:  #bd8c5e; font-weight: bold;">comfort</span>. Whether you are here to relax 
    or to savor some of the <span style="color:  #bd8c5e; font-weight: bold;">finest culinary offerings</span>, we ensure an experience that leaves a 
    <span style="color:  #bd8c5e; font-weight: bold;">lasting impression</span>.
</p>
<p>
    Our guests also enjoy exclusive access to <span style="color:  #bd8c5e; font-weight: bold;">state-of-the-art amenities</span>, including our 
    <span style="color:  #bd8c5e; font-weight: bold;">lavish spa</span>, <span style="color:  #bd8c5e; font-weight: bold;">beautiful landscaped gardens</span>, 
    and <span style="color:  #bd8c5e; font-weight: bold;">exceptional event spaces</span> perfect for 
    <span style="color:  #bd8c5e; font-weight: bold;">weddings</span> and 
    <span style="color:  #bd8c5e; font-weight: bold;">corporate gatherings</span>.
</p>
<ul style="list-style-type: square;">
    <li><strong>Authentic International Cuisine</strong> – A blend of global flavors to excite your palate.</li>
    <li><strong>Locally Sourced Ingredients</strong> – Fresh and sustainable, supporting local farmers.</li>
    <li><strong>Exquisite Dining Spaces</strong> – Perfect for intimate dinners or grand celebrations.</li>
    <li><strong>Dedicated Culinary Team</strong> – Bringing passion and expertise to every dish.</li>
</ul>


          </br>

              <a href="about_us.php" class="arch-button">Learn More</a>
            </div>
          </div> 



      <div class="arch-line" >
         <div class="slider-body">
            <div class="last-main">
            <h3 class="gr">#Guest Review </h3>
              <div class="last-singer">
                
                <button id="prev-slide" class="slide-button symbol">&#10094;</button>
                <div class="img-list">
                 
                  <img src="img\index\IMG-20241113-WA0001.jpg" alt="img 1" class="last-img">
                  <img src="img\index\IMG-20241113-WA0010.jpg" alt="img 2" class="last-img">
                  <img src="img\index\IMG-20241113-WA0009.jpg" alt="img 3" class="last-img">
                  <img src="img\index\IMG-20241113-WA0008.jpg" alt="img 4" class="last-img">
                  <img src="img\index\IMG-20241113-WA0009.jpg" alt="img 5" class="last-img">


                  <img src="img\index\IMG-20241113-WA0007.jpg" alt="img 1" class="last-img">
                  <img src="img\index\IMG-20241113-WA0011.jpg" alt="img 2" class="last-img">
                  <img src="img\index\IMG-20241113-WA0004.jpg" alt="img 3" class="last-img">
                  <img src="img\index\outsidedinner.jpg" alt="img 4" class="last-img">



              </div>
                  <button id="next-slide" class="slide-button symbol">&#10095;</button>
              </div>
              <div class="last-bar">
                <div class="last-track">
                  <div class="last-thumb"></div>
                </div>
              </div>
            </div>
          </div>
      </div>    
        
</main>

<!-- Footer Section -->
<!-- Footer -->
<footer id="about-us-section">
  <div class="footer-content">
    
    <!-- About Dynasty Hotels -->
    <div class="footer-description">
      <h2>About Dynasty Hotels</h2>
      <p>
        Welcome to <span style="color: #f0d29a; font-weight: bold;">Dynasty Hotels</span>, first opened in
        <span style="color: #f0d29a; font-weight: bold;">Rajasthan in 1992,</span> blending traditional Rajasthani charm with modern luxury. Known for its elegant decor and personalized service, it quickly became a sought-after destination, offering authentic experiences and a warm, welcoming atmosphere for travelers.
      </p>
    </div>  

    <!-- Contact Us -->
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

</footer>
            <script src="js/index.js" defer></script>
      </body>
</html>



