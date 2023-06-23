<?php
$activePage = "";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
    <div class ="a">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($activePage == "Home") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($activePage == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($activePage == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
	  </li>
      <li class="nav-item">
	    <a class="nav-link" href="login.php">Login</a>

	</ul>
	</div>
</div>
</nav>