<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./restaurant.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />"
    <title>Restaurant Website</title>
</head>
<body>

    <nav class="navbar">
      <div class="navbar-container container">
        <input type="checkbox">
        <div class="hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
        <ul class="menu-items">
          <li><a href="#showcase">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#food">Category</a></li>
          <li><a href="#food-menu">Menu</a></li>
          <li><a href="#testomonials">Testimonial</a></li>
          <li><a href="#contact">Contact</a></li>
          
        </ul>
        <h1 class="logo">FW</h1>
      </div>
    </nav>
   <section class="showcase-area" id="showcase">
    <div class="showcase-container">
      <h1 class="main-tittle">Eat right food </h1>
      <p>Eat healthy food,it is good for your health</p>
      <a href="#food-menu" class="btn btn-primary">Menu</a>
    </div>
   </section>


<section id="about">
  <div class="about-wrapper container">
    <div class="about-text">
      <p>About Us</p>
    <h2>We've been making healthy for last 10 years </h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis qui beatae magnam a culpa sequi quibusdam iure. Earum, dolores sunt distinctio vel id minus, neque dicta odit officiis vero nostrum nam officia voluptate hic error incidunt iusto magnam vitae ullam?</p>
  </div>
  <div class="about-img">
    <img src=".//img/about-photo.jpg" alt="about-us">
  </div>
   </div>
</section>



<section id="food">
  <h2>Types Of Food</h2>
  <div class="food-container container">
  <div class="food-type fruit">
    <div class="img-container">
      <img src=".//img/food1.jpg" alt="fruits">
      <div class="img-content">
        <h3>Fruits</h3>
        <a href="https://en.wikipedia.org/wiki/Fruit" class="btn btn-primary" target="_blank">Learn More</a>
      </div>
    </div>
  </div>
  <div class="food-type vegetable">
    <div class="img-container">
      <img src=".//img/food2.jpg" alt="vegetables">
      <div class="img-content">
        <h3>Vegetables</h3>
        <a href="https://en.wikipedia.org/wiki/Vegetable" class="btn btn-primary" target="_blank">Learn More</a>
       </div>
    </div>
  </div>
  <div class="food-type grain">
    <div class="img-container">
      <img src=".//img/food3.jpg" alt="grain">
      <div class="img-content">
        <h3>Grain</h3>
        <a href="https://en.wikipedia.org/wiki/Grain" class="btn btn-primary" target="_blank">Learn More</a>
      </div>
    </div>
  </div>
  </div>
</section>


<section id="food-menu">
  <h2 class="food-menu-heading">Food Menu</h2>
  <div class="food-menu-container container">
    <div class="food-menu-item">
      <div class="food-image">
        <img src=".//img/food-menu1.jpg" alt="">
      </div>
    
     <div class="food-description">
      <h2 class="food-tittle">Food Menu Item 1</h2>
      <p>Lorem ipsum dolor, sit amet consectetur</p>
      <p class="food-price">Price: &#8377;250</p>
     </div>
    </div>
    <div class="food-menu-item">
      <div class="food-image">
        <img src=".//img/food-menu2.jpg" alt="">
      </div>
     <div class="food-description">
      <h2 class="food-tittle">Food Menu Item 2</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, illum.</p>
      <p class="food-price">Price: &#8377;250</p>
     </div>
    </div>
    <div class="food-menu-item">
      <div class="food-image">
        <img src=".//img/food-menu3.jpg" alt="">
      </div>
     <div class="food-description">
      <h2 class="food-tittle">Food Menu Item 3</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, illum.</p>
      <p class="food-price">Price: &#8377;250</p>
     </div>
    </div>
    <div class="food-menu-item">
      <div class="food-image">
        <img src=".//img/food-menu4.jpg" alt="">
      </div>
     <div class="food-description">
      <h2 class="food-tittle">Food Menu Item 4</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, illum.</p>
      <p class="food-price">Price: &#8377;250</p>
     </div>
    </div>
    <div class="food-menu-item">
      <div class="food-image">
        <img src=".//img/food-menu5.jpg" alt="">
      </div>
     <div class="food-description">
      <h2 class="food-tittle">Food Menu Item 5</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, illum.</p>
      <p class="food-price">Price: &#8377;250</p>
     </div>
    </div>
    <div class="food-menu-item">
      <div class="food-image">
        <img src=".//img/food-menu6.jpg" alt="">
      </div>
     <div class="food-description">
      <h2 class="food-tittle">Food Menu Item 6</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, illum.</p>
      <p class="food-price">Price: &#8377;250</p>
     </div>
    </div>
    </div>
</section>

<section id="testomonials">
  <h2 class="testomonial-tittle">What Our Customer Say</h2>
  <div class="testomonial-container container">
    <div class="testomonial-box">
      <div class="star-rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
      </div>
      <p class="testomonial-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias vitae eum excepturi vel minima debitis.</p>
      <div class="customer-details">
        <div class="customer-photo"><img src=".//img/male-photo1.jpg"></div>
        <div class="customer-name">Prashant Saini</div>
      </div>
    </div>
    <div class="testomonial-box">
      <div class="star-rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
      </div>
      <p class="testomonial-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias vitae eum excepturi vel minima debitis.</p>
      <div class="customer-details">
        <div class="customer-photo"><img src=".//img/khushi.jpg"></div>
        <div class="customer-name">Khushi Chouhan</div>
      </div>
    </div>
    <div class="testomonial-box">
      <div class="star-rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
      </div>
      <p class="testomonial-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias vitae eum excepturi vel minima debitis.</p>
      <div class="customer-details">
        <div class="customer-photo"><img src=".//img/kaushik.jpg"></div>
        <div class="customer-name">Ayushi Kaushik</div>
      </div>
    </div>
  </div>
</section>


<section id="contact">
  <div class="contact-container container">
    <div class="contact-image">
      <img src=".//img/restraunt-image.jpg" alt="">
    </div>
    <div class="form-container">
      <h2>Contact Us</h2>
      
      <form id="contactForm">

      <div class="alert alert-success" style="display:none;" id="msg" role="alert">
 Thankyou For connecting Us!
</div>



      <input type="text" name="full_name" id="full_name" placeholder="Name">
      <input type="text" name="email" id="email" placeholder="E-Mail">
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Type Your Message Here"></textarea>
       <input type="submit" value="Send Mail" id="submit" name="submit" class="btn btn-primary"/>
        
       <!-- <a href="#" class="btn btn-primary">Submit</a> -->
    </div>
  </div>

  </form>
</section>


<footer id="footer">
  <h2>Restaurant Website &copy; all right reserved.</h2>
</footer>

<!-- ############### for smooth scrolling ############## -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){


  $('#contactForm').on('submit', function(e) {
      e.preventDefault(); // Prevent form submission
      $("#submit").val("Submitting.......");

    
      var formData = {
        full_name: $('#full_name').val(),
        email: $('#email').val(),
        message: $('#message').val()
      };

      
      $.ajax({
        url: 'mail.php', // URL to send the request to
        type: 'POST',
        data: formData,
        success: function(response) {
          // Handle success (e.g., show a success message)
         

           $("#msg").css("display","block");
           $("#submit").val("Send Mail");

            setTimeout(()=>{

              $("#msg").css("display","none");

            },5000);




        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Handle error
          alert('Error sending mail: ' + textStatus);
        }
      });



    });











//scrolling JS
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

  

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</body>
</html>