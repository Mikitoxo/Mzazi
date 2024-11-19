<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-ZAZI Services</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./js/index.js"></script>

</head>

<body>
    <?php
    include(__DIR__ . "/templates/header.php")
    ?>
    <div class="container">
        <h1>Services / Orders</h1>
        <div class="services-list">
            <!-- Baby Sitting Service -->
            <div class="service-card">
                <img src="./assets/imgs/baby_sitting.jpeg" alt="Baby Sitting">
                <div class="service-info">
                    <h3>Baby Sitting</h3>
                    <p>Ksh: 500 per hr</p>
                    <button class="select-button" data-service="Baby Sitting" data-price="500">Select</button>
                </div>
            </div>

            <!-- Pet Sitting Service -->
            <div class="service-card">
                <img src="./assets/imgs/pet_sitting.jpeg" alt="Pet Sitting">
                <div class="service-info">
                    <h3>Pet Sitting</h3>
                    <p>Ksh: 300 per hr</p>
                    <button class="select-button" data-service="Pet Sitting" data-price="300">Select</button>
                </div>
            </div>

            <!-- Errand Running Service -->
            <div class="service-card">
                <img src="./assets/imgs/errands.jpeg" alt="Errand Running">
                <div class="service-info">
                    <h3>Errand Running</h3>
                    <p>Ksh: 200 per hr</p>
                    <button class="select-button" data-service="Errand Running" data-price="200">Select</button>
                </div>
            </div>
        </div>

        <!-- Order Summary and Basket Section -->
        <div class="order-basket-section">
            <div class="order-summary">
                <h2>Order Summary</h2>
                <p>Subtotal: <span id="subtotal">Ksh 0.0</span></p>
                <p>Tax: <span id="tax">Ksh 0.0</span></p>
                <p>Total: <span id="total">Ksh 0.0</span></p>
                <h3>Payment Methods</h3>
                <ul>
                    <li><a href="#">M-Pesa</a></li>
                    <li><a href="#">Credit / Debit Card</a></li>
                </ul>
                <button class="payment-button">Continue to Payment</button>
            </div>

            <div class="basket">
                <h2>Basket</h2>
                <ul id="basket-list"></ul>
                <button class="basket-button">Basket <span id="basket-count">0</span></button>
            </div>
        </div>
    </div>


</body>

</html>