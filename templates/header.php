<?php
session_start();

if (!isset($_SESSION['username'])) {
?>
    <nav>
        <div class="logoHolder">
            <a href="index.php" id="logo">M-ZAZI</a>
        </div>
        <ul id="menuItems">
            <li><a href="contacts.php" id="contactsBtn">Contact us</a></li>
            <li><a href="register.php" class="button">Sign up</a></li>
            <li><a href="login.php" class="button">log in</a></li>
        </ul>
    </nav>
<?php
} else {
?>
    <nav>
        <div class="logoHolder">
            <a href="index.php" id="logo">M-ZAZI</a>
        </div>
        <ul id="menuItems">
            <li><a href="services.php" id="ordersBtn">Order</a></li>
            <li><a href="contacts.php" id="contactsBtn">Contact</a></li>
            <li><a href="services.php" class="button">Basket <span id="basketCount">(3)</span></a></li>
        </ul>
    </nav>
<?php
}
?>