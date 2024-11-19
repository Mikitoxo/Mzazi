<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-ZAZI</title>
    <link rel="stylesheet" href="./css/about.css">
    <script src="mzazi.js" defer></script>
</head>

<body>
    <?php
    include(__DIR__ . "/templates/header.php")
    ?>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <h1>About</h1>
            <div class="image-grid">
                <img src="./assets/imgs/pet_sitting.jpeg" alt="Pet Sitting" class="hero-image">
                <img src="./assets/imgs/baby_sitting.jpeg" alt="Baby Sitting" class="hero-image">
                <img src="./assets/imgs/errands.jpeg" alt="Errand running" class="hero-image">
            </div>

            <div class="hero-content">
                <h2>About M-ZAZI</h2>
                <p>M-ZAZI is your go-to platform for simplifying family life! We connect busy parents with trusted caregivers for babysitting, pet sitting, and errand-running services. Our mission is to provide peace of mind and flexibility with reliable, quality care—all in a safe, supportive environment.</p>
                <a href="services.php" class="button order-now">Order Now</a>
            </div>
        </section>

        <!-- Testimonials/reviews -->
        <section class="testimonials">
            <h2>What Our Customers Say</h2>
            <div class="testimonial">
                <p>"M-ZAZI has been a lifesaver for our family. The caregivers are amazing!"</p>
                <span>- Grace K.</span>
            </div>
            <div class="testimonial">
                <p>"Reliable and convenient. Highly recommend their services! Satisfied"</p>
                <span>- David O.</span>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <div>
                <h3>Contact Us</h3>
                <p><a href="mailto:mzaziteam@gmail.com">📧 Email</a></p>
                <p><a href="tel:+25412346">📞 Call</a></p>
            </div>
            <div>
                <h3>Follow Us</h3>
                <p><a href="#">📘 Facebook</a></p>
                <p><a href="#">📸 Instagram</a></p>
                <p><a href="#">✖ X</a></p>
            </div>
            <div>
                <h3>Quick Links</h3>
                <p><a href="order.php">Order Now</a></p>
                <p><a href="about.php">About Us</a></p>
                <p><a href=contacts.php">Contact</a></p>
            </div>
        </div>
        <p>&copy; 2024 M-ZAZI. All rights reserved.</p>
    </footer>
</body>

</html>