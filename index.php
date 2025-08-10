<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Turners Society</title>
    <!--external style sheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--link to import icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--link to import swiper-->
</head>
<body>
    <!-- Header / NavigationBar -->
    <header>
        <nav class="navbar section-content">
            <a href="#home" class="club-logo">
                <img src="Assets/logo.png" alt="Page Turners Society">
                <h2 class="club-name">Page Turners Society</h2>
            </a>
            <ul class="nav-menu">
                <button type ="button" id = "menu-close-button" class="fas fa-times"></button>
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#testamonials" class="nav-link">Testamonials</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link">Account</a>
                </li>
            </ul>

            <button type = "button"  id = "menu-open-button" class="fas fa-bars"></button>
 
        </nav>
    </header>

    <?php include 'ContactUs.php' ?>

    <main>
        <!-- Hero Section-->
         <section class="hero-section" id="home">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Unlock the Mysteries of Every Page</h2>
                    <h3 class="subtitle">Where Curiosity Meets the Written World</h3>
                    <p class="description">Welcome to the Page Turners Society, a haven for literary enthusiasts and seekers of hidden knowledge. 
                        More than just a reading club, we are a collective of curious minds who believe that every book holds secrets waiting to be uncovered. 
                        Our society thrives on thoughtful discussions, the exploration of diverse genres, and a shared passion for storytelling. Together, we turn pages, unravel mysteries, 
                        and discover the magic of words. Join us, and let the journey begin!</p>
                    <div class="buttondiv">
                        <a href="signup.php" class="button">Join Now</a>
                        <a href="#about" class="button">Learn More</a>
                    </div>
                </div>
            </div>
         </section>
            <!-- About Section -->
        <section class="about-section" id="about">
            <div class="about-content">
                <div class="about-image">
                    <img src="Assets/About.png" alt="About Image" class="about-img">   
                </div>
                <div class="about-details">
                    <h2 class="about-title">About Us</h2>
                    <p class="about-description">The Page Turners Society is more than a reading club; it’s a sanctuary for those who find magic within the pages of a book.
                         Bound by a shared love for literature and an insatiable curiosity, we delve into stories that transcend time and genre. 
                         Like a secret society of seekers, we uncover hidden meanings, exchange profound ideas, and explore the transformative power of words. Whether it’s deciphering ancient texts,
                        discussing modern masterpieces, or simply savoring the beauty of a well-told tale, we believe every page turned is a step closer to unlocking the mysteries of the written word. 
                        Join us, and be part of a timeless tradition where every story is an adventure waiting to be shared.</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testamonials Section -->
         <section class="testamonials-section" id="testamonials">
            <h2 class="about-title">Testimonials</h2>
            <div class="testamonial-content">
                <div class="slider-container swiper">
                    <div class="slider-wrapper">
                        <ul class="testimonials-list swiper-wrapper">
                            <li class="testimonial swiper-slide">
                                <img src="Assets/TestImages/user-01.jpg" alt="Testimonial Image" class="user-image">
                                <h3 class="user-name">Emily</h3>
                                <i class="feedback">"Being part of the Page Turners Society feels like stepping into a world of endless wonder.
                                     Every discussion unveils new layers of meaning in stories I thought I understood. It's more than a club; 
                                     it's an escape into the extraordinary."
                                </i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="Assets/TestImages/user-02.jpg" alt="Testimonial Image" class="user-image">
                                <h3 class="user-name">Jacob</h3>
                                <i class="feedback">"I’ve never felt more connected to a group of like-minded readers. 
                                    The Page Turners Society has become my safe space to share ideas, discover new books, and explore stories that challenge and inspire me."
                                </i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="Assets/TestImages/user-03.jpg" alt="Testimonial Image" class="user-image">
                                <h3 class="user-name">Sophie</h3>
                                <i class="feedback">"This society has reignited my love for reading. 
                                    It’s not just about books—it’s about diving into the mysteries of the written word and exploring perspectives that change how you see the world."
                                </i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="Assets/TestImages/user-04.jpg" alt="Testimonial Image" class="user-image">
                                <h3 class="user-name">Jenna</h3>
                                <i class="feedback">"I joined out of curiosity, and it’s been one of the best decisions I’ve ever made. 
                                    The discussions are thought-provoking, and the community is unlike anything I’ve experienced."
                                </i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="Assets/TestImages/user-05.jpg" alt="Testimonial Image" class="user-image">
                                <h3 class="user-name">Alex</h3>
                                <i class="feedback">"There’s a certain magic in the way this group approaches books.
                                     The Page Turners Society has shown me that stories aren’t just entertainment—they’re a gateway to knowledge, imagination, and understanding."
                                </i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="Assets/TestImages/user-06.jpg" alt="Testimonial Image" class="user-image">
                                <h3 class="user-name">Peralta</h3>
                                <i class="feedback">"Every session feels like being part of an ancient council of storytellers. 
                                    The camaraderie, the passion for literature, and the deep dives into every story keep me coming back for more."
                                </i>
                            </li>
                            <li class="testimonial swiper-slide">
                                <img src="Assets/TestImages/user-07.jpg" alt="Testimonial Image" class="user-image">
                                <h3 class="user-name">Nick</h3>
                                <i class="feedback">"I’ve never seen books as I do now, thanks to this society. 
                                    It’s like uncovering hidden treasures with every discussion. The Page Turners Society has truly transformed my perspective on reading."
                                </i>
                            </li>
                        </ul>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                        
                        
                    
                    </div>
                </div>
            </div>


         </section>

            <!-- Contact Section -->
             <section class="contact-section" id="contact">
                <h2 class="about-title">Contact Us</h2>
                <div class="section-content">
                  <ul class="contact-info-list">
                    <li class="contact-info">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>The Velvet Library, 3rd Floor, Crescent Lane, Colombo 07, Sri Lanka</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>whisper@pageturnerssociety.org</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Available by appointment only.</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-globe"></i>
                        <p>pageturnerssociety.org</p>
                    </li>
                 </ul>

                 <form method="post" class="contact-form">
                    <input type="text" class="form-input" placeholder="Enter Your Name" name="name" id="nameid" required>
                    <input type="email" class="form-input" placeholder="Enter Your Email" name="email" id="emailid" required>
                    <textarea class="form-input" placeholder="Enter Your Message" name="message" id="messageid" required></textarea>
                    <button type="submit" class="submit-button" name="sendMsg">Send Message</button><br><br>
                    <span class="notification" style="color:#C19A6B; font-weight:bold"><?php echo $msgSent; ?></span>
                </form>
                </div>
             </section>
            
             <!-- Footer Section -->
              <footer class="footer-section">
                <div class="footer-content">
                    <p class="copyright-text">&copy pageturnerssociety </p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>


                </div>
              
              </footer>

            
        
        
    </main>
    <!-- swiper script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--external  js script-->
    <script src="mobile.js"></script>
    
</body>
</html>