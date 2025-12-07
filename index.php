<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cloudora AMS | About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Added Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth; /* Added smooth scrolling for professional navigation */
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            background-color: #ffffff;
            color: #333;
            padding: 0;
            margin: 0;
            transition: all 0.3s ease; /* Added subtle transition for body changes */
        }

        /* Header */
        header {
            background-color: #004aad;
            padding: 30px 10%;
            text-align: center;
            transition: background-color 0.3s ease; /* Added transition for header background */
        }
        header h1 {
            font-size: 50px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
            transition: color 0.3s ease; /* Added transition for title color */
        }
        header nav {
            margin-top: 20px;
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 25px;
            font-weight: 600;
            font-size: 18px;
            transition: color 0.3s ease, transform 0.3s ease; /* Enhanced transition with transform */
        }
        header nav a:hover {
            color: #28a745; /* Changed to green accent */
            transform: translateY(-2px); /* Added subtle lift on hover */
        }

        /* Hero Section */
        #hero {
            background: url('https://via.placeholder.com/1600x800?text=Cloudora+AMS') no-repeat center center/cover;
            height: 500px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            transition: opacity 0.5s ease; /* Added fade-in transition */
        }
        #hero h2 {
            font-size: 56px;
            font-weight: 700;
            margin-bottom: 15px;
            transition: transform 0.3s ease; /* Added transform transition */
        }
        #hero p {
            font-size: 22px;
            font-weight: 300;
            margin-bottom: 30px;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
            transition: opacity 0.3s ease; /* Added opacity transition */
        }
        #hero .cta-buttons a {
            text-decoration: none;
            color: white;
            background-color: #28a745; /* Changed to green accent */
            padding: 18px 50px;
            border-radius: 30px;
            margin: 0 20px;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Enhanced with transform */
        }
        #hero .cta-buttons a:hover {
            background-color: #1e7e34; /* Changed to darker green */
            transform: scale(1.05); /* Added scale effect on hover */
        }

        /* Section Layout */
        section {
            padding: 80px 10%;
            text-align: center;
            background-color: #ffffff;
            transition: opacity 0.5s ease, transform 0.5s ease; /* Added transitions for section appearance */
        }

        section h2, section h3 {
            font-size: 42px;
            margin-bottom: 20px;
            font-weight: 700;
            color: #004aad;
            transition: color 0.3s ease; /* Added color transition */
        }
        section p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 40px;
            color: #555;
            transition: opacity 0.3s ease; /* Added opacity transition */
        }

        /* Section Separator */
        .section-separator {
            width: 100px;
            height: 4px;
            background-color: #004aad;
            border-radius: 2px;
            margin: 40px auto;
            transition: width 0.3s ease; /* Added width transition for dynamic effect */
        }

        /* About Section */
        #about {
            padding: 80px 10%;
            transition: background-color 0.3s ease; /* Added background transition */
        }

        /* Location and Customer Support */
        #location, #support {
            padding: 80px 10%;
            transition: opacity 0.5s ease; /* Added opacity transition */
        }

        #location h3, #support h3 {
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 700;
            color: #004aad;
            transition: transform 0.3s ease; /* Added transform transition */
        }

        /* Services Section - Enhanced */
        #services {
            padding: 80px 10%;
            background-color: #ffffff; /* Changed to white background */
            transition: background-color 0.3s ease; /* Added background transition */
        }
        .services-container {
            display: grid; /* Changed to CSS Grid for better control */
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive grid */
            gap: 30px;
            justify-items: center;
            transition: opacity 0.5s ease; /* Added opacity transition for container */
        }
        .service-card {
            background-color: #ffffff;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease, opacity 0.3s ease; /* Enhanced with opacity */
            min-height: 300px; /* Ensures equal height */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            opacity: 0.95; /* Slight opacity change on hover */
        }
        .service-card .icon {
            font-size: 50px;
            color: #004aad;
            margin-bottom: 20px;
            transition: color 0.3s ease, transform 0.3s ease; /* Added transitions */
        }
        .service-card:hover .icon {
            color: #28a745; /* Changed to green accent */
            transform: scale(1.1); /* Icon scale on hover */
        }
        .service-card h4 {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 700;
            color: #004aad;
            transition: color 0.3s ease; /* Added color transition */
        }
        .service-card:hover h4 {
            color: #28a745; /* Changed to green accent */
        }
        .service-card p {
            font-size: 16px;
            color: #555;
            flex-grow: 1;
            transition: color 0.3s ease; /* Added color transition */
        }

        /* Footer */
        footer {
            background-color: #f8f8f8;
            color: #333;
            padding: 40px 10%;
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            transition: background-color 0.3s ease; /* Added background transition */
        }

        /* Button Style */
        .cta-buttons a {
            font-size: 18px;
            padding: 12px 35px;
            border-radius: 30px;
            margin: 0 20px;
            transition: all 0.3s ease; /* General transition for buttons */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 20px 5%;
            }
            header h1 {
                font-size: 36px;
            }
            #hero h2 {
                font-size: 42px;
            }
            #hero p {
                font-size: 18px;
            }
            .services-container {
                grid-template-columns: 1fr; /* Single column on mobile */
            }
            .service-card {
                width: 100%;
                margin: 20px 0;
            }
            section {
                padding: 60px 5%;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 20px 3%;
            }
            header h1 {
                font-size: 28px;
            }
            #hero h2 {
                font-size: 30px;
            }
            #hero p {
                font-size: 14px;
            }
            section {
                padding: 40px 5%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Cloudora AMS</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#location">Location</a>
            <a href="#support">Customer Support</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div>
            <h2>Empower Your Accounting with Cloudora</h2>
            <p>Cloudora AMS makes accounting easy, automated, and secure. Manage your business finances effortlessly with our intuitive platform.</p>
            <div class="cta-buttons">
                <a href="login.php">Login</a>
                <a href="sign-up.php">Sign Up</a>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- About Section -->
    <section id="about">
        <h2>About Cloudora AMS</h2>
        <p>Cloudora Accounting Management System (AMS) is a powerful and user-friendly platform designed to optimize your business accounting needs. From automation to insightful reports, Cloudora makes accounting a breeze, allowing you to focus on what really matters – growing your business.</p>
    </section>

    <div class="section-separator"></div>

    <!-- Services Section - Enhanced -->
    <section id="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service-card">
                <div class="icon"><i class="fas fa-robot"></i></div> <!-- Changed icon for Automated Bookkeeping to robot for automation -->
                <h4>Automated Bookkeeping</h4>
                <p>Our intelligent system automates bookkeeping tasks, saving you time and reducing human error.</p>
            </div>
            <div class="service-card">
                <div class="icon"><i class="fas fa-tachometer-alt"></i></div> <!-- Changed icon for Real-time Reporting to tachometer for real-time metrics -->
                <h4>Real-time Reporting</h4>
                <p>Get accurate, real-time financial reports that help you make informed business decisions.</p>
            </div>
            <div class="service-card">
                <div class="icon"><i class="fas fa-cloud"></i></div> <!-- Icon for Cloud Integration -->
                <h4>Cloud Integration</h4>
                <p>Access your accounting data from anywhere, with seamless cloud integration and secure storage.</p>
            </div>
        </div>
    </section>

    <div class="section-separator"></div>

    <!-- Location Section -->
    <section id="location">
        <h3>Our Location</h3>
        <p>Located in the Philippines, Cloudora is dedicated to bringing the best in accounting innovation. Come visit us or get in touch online.</p>
        <p><strong>Cloudora AMS HQ</strong><br>MGM Building, 5th Floor, Cloudora HQ<br>Dipolog City, Philippines</p>
    </section>

    <div class="section-separator"></div>

    <!-- Customer Support Section -->
    <section id="support">
        <h3>Customer Support</h3>
        <p>Our dedicated team is here 24/7 to help you with any questions or issues. Reach out to us anytime!</p>
        <p><strong>Email:</strong> support@cloudora.com<br><strong>Phone:</strong> 1-800-123-4567</p>
    </section>

    <footer>
        <p>&copy; 2023 Cloudora. All rights reserved.</p>
    </footer>
</body>
</html>
