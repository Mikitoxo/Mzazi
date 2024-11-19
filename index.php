<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-ZAZI</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="./css/styles.css">
    <script src="mzazi.js" defer></script>
</head>

<body>

    <!-- Navigation Section -->
    <?php
    include(__DIR__ . "/templates/header.php")
    ?>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Your trusted assistant for baby-sitting,pet-sitting, and errand running services.</h1>
        <p>M-ZAZI serves as an indispensable companion for families managing both professional and personal obligations.</p>
        <a href="about.php" class="button">Browse our page</a>

        <!-- Testimonials/reviews -->
        <section class="testimonials">
            <h2>What Our Customers Say</h2>
            <div class="testimonial">
                <p>"M-ZAZI has been a lifesaver for our family. The caregivers are amazing!"</p>
                <span>- Grace K.</span>
            </div>
            <div class="testimonial">
                <p>"Reliable and convenient. Highly recommend their services!"</p>
                <span>- David O.</span>
            </div>
        </section>
    </section>


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