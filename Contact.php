<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Meditation Website</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Contact.css">
    <style>
        .display-4 a {
        font-size: 16px;
    }
    </style>
</head>
<body>

    <header>
    <?php include_once('nav.html') ?>

    </header>

    <div id="container">
        <h1>Contact Us</h1>
        <h6>We would love to hear from you! Fill out the form below to get in touch.</h6>
        <form action="dbcontact_form.php"method="POST">
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone number:</label>
        <input type="text" id="phone_number" name="phone_number">
    </div>
    <div class="form-group">
        <button type="submit">Submit</button>
    </div>
</form>

    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-links">
                    <ul>
                        <li><a href="Policies.html">Privacy Policy</a></li>
                        <li><a href="Policies.html">Terms of Service</a></li>
                        <li><a href="Policies.html">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="contact-us">
                    <a href="Contact.html">Contact Us</a>
                </div>
            </div>
            <p>&copy; 2024 Meditation Website</p>
        </div>
    </footer>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
