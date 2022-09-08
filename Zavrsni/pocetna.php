<?php
    if(!isset($_SESSION)) { 
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/zavrsni/pocetnastyle.css">
        <title>Homepage</title>
    </head>
        <body>
            <?php include './navbar.php'?>
            <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="./static/assets/rimac-nevera.jpg" style="width:100%" height="60%">
                <div class="text">RIMAC NEVERA</div>
            </div>
            <div class="mySlides fade">
                <img src="./static/assets/nissan-silvia-s14.jpg" style="width:100%" height="60%">
                <div class="text">NISSAN SILVIA S14</div>
            </div>
            <div class="mySlides fade">
                <img src="./static/assets/lamborghiniaventador.jpg" style="width:100%" height="60%">
                <div class="text">LAMBORGHINI AVENTADOR</div>
            </div>
            <div class="mySlides fade">
                <img src="./static/assets/jeepwrangler.jpg" style="width:100%" height="60%">
                <div class="text">JEEP WRANGLER</div>
            </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>  
    </div>
    <div class="Text1">
        <h2>Whats wrong with non car people ?</h2>
        <p>It’s what non-car people don’t get.<br>
        They see all cars as just a ton and a half, two tons of wires, glass, metal, and rubber, and that’s all they see.<br>
        People like you or I know we have an unshakable belief that cars are living entities… You can develop a relationship with a car and that’s what non-car people don’t get…<br> 
        When something has foibles and won’t handle properly, that gives it a particularly human quality because it makes mistakes, and that’s how you can build a relationship with a car that other people won’t get."<br>
        -Jeremy Clarkson-
        </p>
    </div>
    <div class="Text2">
        <h2>What can you find on this page?</h2>
        <p>
            As you can see you will find a lot of stuff about cars... One thing in particular is that you will see cars as We see them...<br>
            Who is We you might ask ? Well We call ourselver "car guys" and the quote you read earlyer is our mindset,its how we see and how we do things.<br>
            So forget about boring classic cars and prepeare yourself to see cars like you never saw them before! If you have a car of your own that you would like to share with us make sure to register and do so!<br>
            -Admin-    
        </p>
    </div>







    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    }
    </script>

    </body>
</html>

 
