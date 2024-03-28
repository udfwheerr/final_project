<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - MeDiHub</title>
    <link rel="stylesheet" href="Services.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
         .display-4 a {
        font-size: 16px;
    }
    </style>
    <style>
    body {
      background-color: #f9f6f4;
      color: #333;
      font-family: 'Arial', sans-serif;
    }

    .container {
      margin-top: 20px;
    }

    .meditation-section {
      padding: 30px;
      margin-bottom: 20px;
      border-radius: 0;
      border: 2px solid #A67B5B; 
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
    }

    .meditation-section h2 {
      font-size: 24px;
      font-weight: bold;
      color: #96875c; 
    }

    .meditation-section p {
      font-size: 16px;
    }

    .meditation-image {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      border: 2px solid #856642; 
      margin: 10px auto;
      display: block; 
    }

    .website-heading {
      text-align: center;
      font-size: 36px;
      font-weight: bold;
      color: #ab7852;  
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
    <header>
        <?php include_once('nav.html') ?>

    </header>

    <section class="hero">
        <div class="container">
            <h1 class="display-5">Our Services</h1>
          
        </div>
    </section>

    <div class="container">
    <h1 class="website-heading">Meditation</h1>
  
    <div class="row justify-content-end meditation-section" style="background-color: #dfd6d2;">
      <div class="col-md-6">
        <h2>Meditate with MediHub</h2>
        <p>
          Welcome to MediHub, your sanctuary for mindfulness and meditation. Our array of services is crafted to guide you on your journey to inner peace and holistic well-being. Dive into our selection of guided meditation sessions, tailored to various levels and intentions, whether you seek stress relief, clarity of mind, or spiritual growth. Join our live meditation classes led by experienced instructors who offer personalized support and encouragement.</p>
        <p class="more-text" style="display: none;">Explore our library of meditation resources, including articles, podcasts, and videos, designed to deepen your understanding and practice. Additionally, we provide one-on-one meditation coaching sessions for those seeking individualized guidance and support on their path to self-discovery. Delve deeper into our wellness offerings with workshops and retreats focused on mindfulness, relaxation techniques, and self-care practices. At MediHub, we are committed to helping you cultivate mindfulness and harmony in your life, one breath at a time.</p> 
        <a href="#" class="read-more">Read More</a> 
      </div>
      <div class="col-md-6">
        <img src="images/cmimage1.jpg" alt="Ancient Origins Image" class="meditation-image float-right" width="400" height="200">
      </div>
    </div>
  </div>

  <div class="container">
    <h1 class="website-heading">Yoga</h1>
  
    <div class="row justify-content-end meditation-section" style="background-color: #dfd6d2;">
      <div class="col-md-6">
        <h2>Yoga asanas with MediHub</h2>
        <p>
         Your haven for holistic health and inner harmony. Discover a range of services designed to elevate your yoga journey and nourish your body, mind, and soul. Immerse yourself in our diverse yoga classes, catering to all levels and preferences, from gentle flow to dynamic vinyasa and restorative practices.</p>
          <p class="more-text" style="display: none;">Our experienced instructors guide you through each session with care and expertise, fostering a supportive environment for growth and self-discovery. Dive deeper into the yogic lifestyle with our specialized workshops and retreats, exploring topics such as meditation, pranayama, and yogic philosophy. Access our library of yoga resources, including tutorials, articles, and guided practices, to enhance your understanding and deepen your practice at your own pace. Experience the transformative power of yoga firsthand with personalized private sessions, tailored to your unique needs and goals. At YogaVita, we are dedicated to nurturing your well-being and helping you find balance and vitality on and off the mat.</p> 
        <a href="#" class="read-more">Read More</a> 
      </div>
      <div class="col-md-6">
        <img src="images/yimage3.PNG" alt="Ancient Origins Image" class="meditation-image float-right" width="400" height="200">
      </div>
    </div>
  </div>

  
  <div class="container">
    <h1 class="website-heading">Spirituality</h1>
  
    <div class="row justify-content-end meditation-section" style="background-color: #dfd6d2;">
      <div class="col-md-6">
        <h2>Spirituality with MediHub</h2>
        <p>Welcome to MediHub, your sanctuary for spiritual exploration through meditation and yoga. Immerse yourself in practices that nurture your soul and elevate your consciousness. Our meditation offerings encompass a variety of techniques, from mindfulness to loving-kindness, providing a space for inner peace and self-discovery. Engage in guided meditations led by experienced practitioners, designed to quiet the mind, open the heart, and deepen your connection to the divine within. </p>
          <p class="more-text" style="display: none;">Journey through the sacred art of yoga as a pathway to spiritual awakening. Our yoga classes blend movement, breath, and intention to harmonize body, mind, and spirit, guiding you towards greater alignment and presence. Explore workshops and retreats that delve into the spiritual dimensions of meditation and yoga, offering insights into ancient wisdom teachings and practices that transcend the physical realm. Whether you are a seasoned practitioner or new to the path, SoulFlow is here to support you on your journey of spiritual growth and transformation.</p> 
        <a href="#" class="read-more">Read More</a> 
      </div>
      <div class="col-md-6">
        <img src="images/simage4.jpg" alt="Ancient Origins Image" class="meditation-image float-right" width="400" height="200">
      </div>
    </div>
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

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery -->

<script>
$(document).ready(function() {
  $('.read-more').click(function(e) {
    e.preventDefault();
    $(this).prev('.more-text').toggle(); // Toggle the display of the previous sibling with the class 'more-text'
  });
});
</script>
</html>
