<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGMA</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet">
</head>
<body>

    <!--navigation tab-->
    <header>
    <div id="navbar">
        <span><h1><a href="index.html">SIGMA. For Men.</a></h1></span>
        <span><p><a href="login.php">Login</a></p></span>
        <span><i class='bx bx-cart-download cart'><a href="checkout.html"></a></i></span>
    </div>
    </header>

    <!--cart items-->
    <div class="small-container">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Sub-total</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/product1.jpg">
                        <div>
                            <p>Faux Leather Puffer</p>
                            <small>ZAR 2,699</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>ZAR 2,699</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/product2.jpg">
                        <div>
                            <p>Padded Gilet</p>
                            <small>ZAR 1,159</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>ZAR 1,159</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/product3.jpg">
                        <div>
                            <p>Textured Sweatshirt</p>
                            <small>ZAR 859</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>ZAR 859</td>
            </tr>
        </table>

        <div class="total-price">

            <table>
                <tr>
                    <td>Total</td>
                    <td>ZAR 4,717</td>
                </tr>
            </table>

        </div>

    </div>
    <br>
    <br>
    <br>

    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Stay up to date with our latest offers</h3>
                    <p>Email us: <a href="https://mail.google.com/mail">sigmaformen@email.com</a></p>
                    <p>Download our app from <a href="https://play.google.com/store/games?pli=1">Google Play</a> or the <a href="https://www.apple.com/app-store/">Apple App Store</a></p>
                </div>
                <div class="footer-col-2">
                    <h3>Our Social Media</h3>
                    <ul>
                        <li><a href="https://www.instagram.com/">Instagram</a></li>
                        <li><a href="https://twitter.com/login?redirect_after_login=https://developer.twitter.com/en">Twitter</a></li>
                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                        <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>