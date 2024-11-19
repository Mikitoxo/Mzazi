<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - M-ZAZI</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<style>
    .contact-container {
        margin: 24px 12px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }

    /* Contact Us and Follow Us sections styling */
    .footer-content {
        margin: 20px 0;
        display: flex;
        justify-content: space-around;
        text-align: left;
    }

    .contact-us,
    .follow-us {
        flex: 1;
    }

    .contact-us h3,
    .follow-us h3 {
        color: red;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .contact-us a,
    .follow-us a {
        text-decoration: none;
        color: #333;
        font-size: 14px;
    }

    .contact-us a:hover,
    .follow-us a:hover {
        text-decoration: underline;
    }

    .contact-us p,
    .follow-us p {
        margin: 5px 0;
    }
</style>

<body> <!--this is derived from the footer of previous pages hence the "footer-content"-->
    <?php
    include(__DIR__ . "/templates/header.php")
    ?>

    <section class="contact-container">
        <h2>Get in touch</h2>
        <p class="intro-text">We would love to help you get started.<br>Please do not hesitate to reach out to us.</p>

        <div class="footer-content">
            <!-- Contact Us Section -->
            <div class="contact-us">
                <h3>Contact us</h3>
                <p><a href="mailto:mzaziteam@example.com">📧 Email us</a></p>
                <p><a href="tel:+25412346">📞 Call us</a></p>
            </div>

            <!-- Follow Us Section -->
            <div class="follow-us">
                <h3>Follow Us</h3>
                <p><a href="#">📘 Facebook</a></p>
                <p><a href="#">📸 Instagram</a></p>
                <p><a href="#">✖ X</a></p>
                <p><a href="#">🔗 LinkedIn</a></p>
                <p><a href="#">▶ YouTube</a></p>
            </div>
        </div>
        </div>
    </section>
</body>