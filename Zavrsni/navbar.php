<nav class="navbar">
    <div class="brand-title">CarShowroom</div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="./pocetna.php">Home</a></li>
            <li><a href="./gallery1.php">Gallery</a></li>
                <?php if(isset($_SESSION['userLogged'])){
                echo '<li><a href="#">Contests</a></li>
            <li><a href="./logout.php">Logout</a></li>';
                } else {
                echo '<li><a href="./login.php">Login</a></li>
            <li><a href="./register.php">Register</a></li>';
                } ?>
        </ul>
    </div>
</nav>