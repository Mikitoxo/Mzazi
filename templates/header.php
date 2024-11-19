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
        <div>
                <li><a href="mzazi services and orders.html" id="ordersBtn">Order</a></li>
                <li><a href="mzazicontacts.html" id="contactsBtn">Contact</a></li>
                <li><a href="mzazi services and orders.html" class="button">Basket <span id="basketCount">(3)</span></a></li>
            </div>
            <li><a href="dashboard.html" class="button">Dashboard</a></li>
        </ul>
    </nav>
<?php
}
?>