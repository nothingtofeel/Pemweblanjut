<!doctype html>
<html lang="en">
  <head>
   <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="logo.png">
    <title>My Website</title>
  </head>
  <body background="wallpaper4.jpg">

  <header class="header_section">
  <div class="contact_nav_container">
        <div class="container">
          <div class="contact_nav">
            <a href="?menu=alamat">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Address: Adipala, Cilacap, Jawa Tengah
              </span>
            </a>
            <a href="?menu=email"> 
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email: afrizalrachmatulloh13@gmail.com
              </span>
            </a>
            <a href="?menu=telepon">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Phone Call: +62895381265041
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="menu_btn-style ">
              <button onclick="closeNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div class="overlay-content">
              <a class="active" href="index.php"> Home <span class="sr-only">(current)</span></a>
            </div>
          </div>
          <a class="navbar-brand" href="index.php">
            <span>
              My Website
            </span>
          </a>
            <form class="form-inline">
              <button class="btn  nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </nav>
      </div>
      </div>
    </header>
      <?php
    error_reporting(0);
    $menu=$_GET['menu'];
    if ($menu=='alamat')
    {
      echo "<a href='goo.gl/maps/KP9HBFF9P1ZYfYyM6'>Click Here</a>";
    }
    else
    if ($menu=='email')
    {
      echo "<a href='mailto:afrizalrachmatulloh13@gmail.com'>Click Here</a>";
    }
    else
    if ($menu=='telepon')
    {
      echo "<a href='api.whatsapp.com/send/?phone=0895381265041&text&app_absent=0'>Click Here</a>";
    }
    else
    {
        echo "";
    }
    ?>

      <!-- about section -->
<section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="box">
        <div class="img-box">
          <img src="mypicture.jpg" alt="" width: 100%;/>
        </div>
        <div class="detail-box">
          <h2>
            About Me
          </h2>
          <p>
          My name is Afrizal Rachmatulloh and I am a student of Muhammadiyah University 
        of Purwokerto majoring in informatics engineering.
          </p>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
            <span>
              Read More
            </span>
            <hr />
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>