<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#header {
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
  background-color: #fff;
}

#header.header-scrolled, #header.header-inner-pages {
  background: #fff;
}

#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 500;
  letter-spacing: 2px;
  text-transform: uppercase;
}

#header .logo a {
  color: #fff;
}

#header .logo img {
  max-height: 40px;
}

--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------
/* Desktop Navigation 
.nav-menu ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul {
  display: flex;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  padding: 10px 0 10px 28px;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #000;
  transition: 0.3s;
  font-size: 15px;
  letter-spacing: 0.5px;
  font-weight: 500;
  font-family: "Open Sans", sans-serif;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #47b2e4;
}*/
	</style>
</head>
<body>
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center">

      <div id="image">
    <img src="image/logo_retinablack.png" width="150" height="50">
   </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
<div id="menu" style="margin-left: 100px;">
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.html">Home</a></li>
          <li ><a href="aboutUs.php">About Us</a></li>
          <li ><a href="product.php">Development</a></li>

          <li ><a href="services.php">Services</a></li>
          <li class="active"><a href="portfolio.php">Portfolio</a></li>
          
            
          <li><a href="contact.php">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>

      

    </div>
  </header>
</body>
</html>