<?php

session_start();

?>


<nav class="navbar navbar-custom navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand  text-dark" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php">Home</a></li>
            <li><a class="dropdown-item" href="datatypes.php">Datatypes</a></li>
            <li><a class="dropdown-item" href="functions.php">Functions</a></li>
            <li><a class="dropdown-item" href="operators.php">Operators</a></li>
            <li><a class="dropdown-item" href="calculator.php">Calculator</a></li>
            <li><a class="dropdown-item" href="calender.php">Calender</a></li>
            <li><a class="dropdown-item" href="conditionals.php">Conditionals</a></li>
            <li><a class="dropdown-item" href="loops.php">Loops</a></li>
          </ul>
        </li>
        <div class="header-login">
          <?php
          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>';
        }
        else {
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Usernam/E-mail...">
            <input type="text" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php">Signup</a>';
        }
          ?>
        
      
        </div>
      </ul>
    </div>
  </div>
</nav>