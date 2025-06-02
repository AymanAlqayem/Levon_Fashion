<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Creative Shopping Cart</title>
</head>
<body>
<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<section class="cart-container">
    <article class="cart-header">
        <h1>Shopping Cart</h1>
    </article>

    <section class="cart">
        <ul class="cart-items">
            <li class="cart-item">
                <div class="item-image-container">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                         alt="Headphones" class="item-image">
                </div>
                <div class="item-details">
                    <div class="item-name">Premium Wireless Headphones</div>
                    <div class="item-description">Experience crystal-clear sound with our noise-cancelling headphones
                        featuring 30-hour battery life and comfortable over-ear design.
                    </div>
                    <div>
                        <span class="item-price">$199.99</span>
                        <span class="item-original-price">$249.99</span>
                    </div>
                    <div class="item-quantity">
                        <button class="quantity-btn decrease">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="quantity-btn increase">+</button>
                    </div>
                </div>
                <button class="remove-btn" title="Remove item">×</button>
            </li>

            <!-- Cart Item 2 -->
            <li class="cart-item">
                <div class="item-image-container">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                         alt="Smart Watch" class="item-image">
                </div>
                <div class="item-details">
                    <div class="item-name">Smart Fitness Watch</div>
                    <div class="item-description">Track your workouts, heart rate, and sleep patterns with this
                        waterproof smartwatch featuring a 1.4" AMOLED display.
                    </div>
                    <div>
                        <span class="item-price">$149.99</span>
                        <span class="item-original-price">$179.99</span>
                    </div>
                    <div class="item-quantity">
                        <button class="quantity-btn decrease">-</button>
                        <input type="number" class="quantity-input" value="1" min="1">
                        <button class="quantity-btn increase">+</button>
                    </div>
                </div>
                <button class="remove-btn" title="Remove item">×</button>
            </li>
        </ul>

        <div class="cart-footer">
            <div class="total-section">
                <div class="subtotal">Subtotal (3 items)</div>
                <div class="total-price">$<span>374.97</span></div>
            </div>
            <button class="checkout-btn">Proceed to Checkout</button>
        </div>
    </section>

    <!-- Empty Cart State (hidden by default) -->
    <!--
    <div class="cart">
        <div class="empty-cart">
            <div class="empty-cart-icon">🛒</div>
            <h3>Your Cart is Empty</h3>
            <p>Looks like you haven't added anything to your cart yet. Browse our collection and find something special!</p>
            <a href="#" class="continue-shopping">Continue Shopping</a>
        </div>
    </div>
    -->
</section>
</body>
<?php include 'footer.php' ?>
</html>