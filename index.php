<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name'
    AND  email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'Message Sent Already!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message)VALUES
        ('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'Message Sent Successfully!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>My Website</title>
</head>
<body>

    <?php
    
    if(isset($message)){
        foreach($message as $message){
            echo '
            <div class="message">
                <span>'.$message.'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
            
    ?>

    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <div class="logo"><img src="images/logo.png"></div>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#hero" data-after="Home">Home</a></li>
                        <li><a href="#services" data-after="Service">Services</a></li>
                        <li><a href="#projects" data-after="Projects">Projects</a></li>
                        <li><a href="#about" data-after="About">About</a></li>
                        <li><a href="#contact" data-after="Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero section -->
    <section id="hero">
        <div class="hero container">
            <div>
                <h4>Software Developer</h4>
                <h2>Hasini <span></span></h2>
                <h2>Weeraddana <span></span></h2>
                <a href="#" type="button" class="cta">Portfolio</a>
            </div>
        </div>
    </section>

    <!-- Slider section -->
    <section id="slider">
        <div class="swiper"> 
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="images/slider-1.jpg"></div>
                <div class="swiper-slide"><img src="images/slider-2.jpg"></div>
                <div class="swiper-slide"><img src="images/slider-3.jpg"></div>
               
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- Service section -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">Serv<span>i</span>ces</h1>
                <p>We assemble self-managed development teams to take care of your current and future software needs.
                    Your software development plans are not stuck with the lack of internal expertise and resources.
                    </p>
            </div>
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon"><img src="images/service.png" /></div>
                    <h2>Software Development</h2>
                    <p>I offer end-to-end software development services tailored to meet your specific requirements. From 
                        conceptualization to deployment, I can create robust, scalable, and intuitive software solutions that 
                        align with your business objectives.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="images/service.png" /></div>
                    <h2>Web Development</h2>
                    <p> I specialize in building dynamic and responsive websites that provide seamless user experiences. Whether you need a simple 
                        landing page or a complex web application, I can develop using the latest web technologies, frameworks, and content management systems.
                    </p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="images/service.png" /></div>
                    <h2>Mobile App Development</h2>
                    <p>Reach your target audience on the go with high-quality mobile applications. I develop native and cross-platform mobile apps for iOS and 
                        Android devices, ensuring optimal performance, security, and user engagement.
                    </p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="images/service.png" /></div>
                    <h2>Custom Software Solutions</h2>
                    <p>I will work closely with you to understand your business processes, challenges, and goals. By conducting a thorough analysis, I ensure that 
                        the software solution we develop addresses your specific requirements and enhances your operational efficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project section -->
    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title">Recent <span>Projects</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-info">
                        <h1>Fingerprint-based ATM system</h1>
                        <h2><em>2023 April</em></h2>
                        <p>This project is a desktop application that uses the fingerprint of users for authentication. Since each individual 
                            has a unique fingerprint, this method of using fingerprint as a means of authentication to access your ATM is safer 
                            and more secure than using an ATM card. Users need not carry their ATM cards with them at all times - they can use 
                            their fingerprints to access ATM services.</p>
                    </div>
                    <div class="project-img">
                        <img src="./images/figure-1.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Weather forecasting system</h1>
                        <h2><em>2022 August</em></h2>
                        <p>Weather forecasting systems use a combination of science and technology to make accurate predictions on weather conditions
                            of a particular location at a particular time. Weather forecast systems and applications predict weather conditions based 
                            on multiple parameters, such as pressure, temperature, humidity, wind speed, etc.</p>
                    </div>
                    <div class="project-img">
                        <img src="./images/figure2.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Android local train ticketing system</h1>
                        <h2><em>2020</em></h2>
                        <p>In this project, I developed a ticketing application for local trains. Users can use the app to book tickets for local 
                            trains and receive online booking receipts. They can print these online booking receipts as hard copy proof for traveling via 
                            local trains. </p>
                    </div>
                    <div class="project-img">
                        <img src="./images/figure - 3.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Android Patient Tracker</h1>
                        <h2><em>2019 September</em></h2>
                        <p>This project involves the development of an Android application for viewing and managing patient data. The app is designed to help 
                            doctors to see the medical history of their patients. Doctors can also continually upgrade the system by entering the latest medical 
                            data of their patients.</p>
                    </div>
                    <div class="project-img">
                        <img src="./images/img-1.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Opinion mining for social networking platforms</h1>
                        <h2>2019 January</h2>
                        <p>This web application uses opinion mining methodology for improved decision making and enhancing customer experience. The application 
                            collects and analyzes the comments and feedback on different users on social networking platforms (Facebook, Instagram, Twitter, etc.) 
                            and categorizes them as positive and negative reviews.
                        </p>
                    </div>
                    <div class="project-img">
                        <img src="./images/figure-5.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About section -->
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="images/img-2.jpg" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">About <span>me</span></h1>
                <h2>Software Developer</h2>
                <p>I'm Hasini, an undergraduate in Information Technology of Rajarata University of Sri Lanka and a passionate software developer 
                    with 2 years of experience in creating innovative and efficient solutions. I thrive on challenges and enjoy turning complex problems 
                    into elegant, user-friendly applications. I urge to enhance the knowledge and skills to become an efficient entrepreneur.</p>
                <a href="#" type="button" class="cta">Download Resume</a>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section id="contact">
        <div class="contact container">
            <div>
                <h1 class="section-title">Contact <span>info</span></h1>
            </div>
            <form action="" method="post">
                <div class="flex">
                    <input type="text" name="name" placeholder="enter your name" class="box" required>
                    <input type="email" name="email" placeholder="enter your email" class="box" required>
                </div>
                <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
                <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" name="send" class="btn">
            </form>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="images/phone.png" /></div>
                    <div class="contact-info">
                        <h1>Phone</h1>
                        <h2>+1 234 123 1234</h2>
                        <h2>+1 234 123 1234</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="images/email.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>info@gmail.com</h2>
                        <h2>abcd@gmail.com</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="images/address.png" /></div>
                    <div class="contact-info">
                        <h1>Address</h1>
                        <h2>Main Road, Balapitiya, Galle, Sri Lanka</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1><span>H</span>asini <span>W</span>eeraddana</h1>
            </div>
            <h2>Your Complete Web Solution</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="#"><img src="images/facebook.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="images/instagram.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="images/twitter.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="images/behance.png" /></a>
                </div>
            </div>
            <p>Copyright © 2023 Hasini. All rights reserved</p>
        </div>
    </section>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Slider Section
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
	        loop: true,
  
	    pagination: {
	        el: '.swiper-pagination',
            clickable: true,
	    },
  
	    navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	    },
    });
    </script>
</body>
</html>