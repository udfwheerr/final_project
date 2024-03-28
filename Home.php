<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeDiHub</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style>
 .carousel-item {
      transition: transform 2s ease;
    }
    .display-4 a {
        font-size: 16px;
    }
</style>


   
  
<body>
<header>
    <?php include_once('nav.html') ?>

    </header>


  <section class="hero">
      <div class="container">
          <h1 id="welcomeMessage" class="display-4" style="color: purple;">Welcome to MeDiHub</h1>
          <p style="color: rgb(221, 241, 218);">Find inner peace and tranquility through meditation.</p>
      </div>
  </section>

    <div id="carouselExample" class="carousel slide" data-bs-interval="4000" data-bs-ride="carousel">
        <center>
        <div class="carousel-inner ">
          <div class="carousel-item active">
          
          <img src="Images/kate-mclean-CBPURK0gies-unsplash.jpg" alt="GFG"  class="d-block " width="100%" height="300px" >
          </div> 
          <div class="carousel-item">
        
          <img src="Images/kalen-emsley-_LuLiJc1cdo-unsplash.jpg" alt="GFG" class="d-block  " width="100%" height="300px" >
          </div> 
          <div class="carousel-item">

          <img src="Images/bckimage2.PNG" alt="GFG" class="d-block  " width="100%" height="300px" >
          </div> 
          <div class="carousel-item">
      
            <img src="Images/johannes-plenio-RwHv7LgeC7s-unsplash (1).jpg" alt="GFG" class="d-block  " width="100%" height="300px" >
          </div>
          <div class="carousel-item">
      
            <img src="Images/david-marcu-W5MhJ6cy1So-unsplash.jpg" alt="GFG" class="d-block  " width="100%" height="300px" >
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </center>

    <div class="container-md">
        <div class="custom-row">
            <div class="card">
              <div class="card-header">MEDITATION</div>
              <div class="card-body">
                
                A practice of mindfulness and introspection, meditation cultivates mental clarity and inner peace through focused attention or mindfulness techniques, promoting relaxation and emotional well-being.      </div>
              <div class="read-more"><a href="med.php">Read More</a></div>
            </div>
        
            <div class="card">
              <div class="card-header">YOGA(ASANAS)</div>
              <div class="card-body">
                A holistic discipline uniting body, mind, and spirit through physical postures, breath control, and meditation. Yoga enhances flexibility, strength, and inner balance, fostering overall health and spiritual growth.      </div>
              <div class="read-more"><a href="yoga.php">Read More</a></div>
            </div>
        
            <div class="card">
              <div class="card-header">SPIRITUALITY</div>
              <div class="card-body">
                An individual's quest for meaning, connection, and transcendence beyond the material realm. Spirituality encompasses beliefs, values, and experiences that nourish the soul, offering a sense of purpose, peace, and interconnectedness with the universe.      </div>
              <div class="read-more"><a href="spri.php">Read More</a></div>
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
    
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
