<?php
  if(!isset($_SESSION)) { 
    session_start(); 
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="static/zavrsni/gallery1.css">
</head>
<body>
<?php include './navbar.php'?>

<!-- MAIN (Center website) -->
<div class="main">

<h2>Welcome to gallery!</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('European')"> European</button>
  <button class="btn" onclick="filterSelection('JDM')"> JDM</button>
  <button class="btn" onclick="filterSelection('American')"> American</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column European">
    <div class="content">
      <img src="./static/assets/audi.jpg" alt="car" style="width:  100%; height: 400px; background-size: cover">
      <h4>Audi</h4>
      <a href="https://www.audi.de/de/brand/de.html">Click for more about Audi</a>
    </div>
  </div>
  <div class="column European">
    <div class="content">
    <img src="./static/assets/bmw.jpg" alt="car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>BMW</h4>
      <a href="https://www.bmw.de/de/index.html">Click for more about BMW</a>
    </div>
  </div>
  <div class="column European">
    <div class="content">
    <img src="./static/assets/jaguar.jpg" alt="car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Jaguar</h4>
      <a href="https://www.jaguar.co.uk/index.html">Click for more about Jaguar</a>
    </div>
  </div>
  
  <div class="column European">
    <div class="content">
      <img src="./static/assets/maserati.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Maserati</h4>
      <a href="https://www.maserati.com/it/it">Click for more about Maserati</a>
    </div>

  </div>
  <div class="column JDM">
    <div class="content">
    <img src="./static/assets/honda.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Honda</h4>
      <a href="https://www.honda.co.jp/">Click for more about Honda</a>
    </div>

  </div>
  <div class="column JDM">
    <div class="content">
    <img src="./static/assets/lexus.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover" >
      <h4>Lexus</h4>
      <a href="https://lexus.jp/">Click for more about Lexus</a>
    </div>

  </div>
  <div class="column JDM">
    <div class="content">
      <img src="./static/assets/mitsubishi.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Mitsubishi</h4>
      <a href="https://www.mitsubishi-motors.co.jp/">Click for more about Mitsubishi</a>
    </div>

  </div>
  <div class="column JDM">
    <div class="content">
    <img src="./static/assets/mazda.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Mazda</h4>
      <a href="https://www.mazda.co.jp/">Click for more about Mazda</a>
    </div>

  </div>
  <div class="column American">
    <div class="content">
    <img src="./static/assets/mustang.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Mustang</h4>
      <a href="https://www.ford.com/cars/mustang/">Click for more about Mustang</a>
    </div>

  </div>
  <div class="column American">
    <div class="content">
    <img src="./static/assets/dodgedemon.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Dodge</h4>
      <a href="https://www.dodge.com/">Click for more about Dodge</a>
    </div>

  </div>
  <div class="column American">
    <div class="content">
    <img src="./static/assets/camaro.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Chevrolet</h4>
      <a href="https://www.chevrolet.com/">Click for more about Chevrolet</a>
    </div>

  </div>
  <div class="column American">
    <div class="content">
    <img src="./static/assets/jeepwrangler.jpg" alt="Car" style=" width:  100%; height: 400px; background-size: cover">
      <h4>Jeep</h4>
      <a href="https://www.jeep.com/">Click for more about Jeep</a>
    </div>

  </div>
</div>
</div>



<script>
    filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>

</body>
</html>
