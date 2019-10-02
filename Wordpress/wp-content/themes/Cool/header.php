  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dreamscape Web Exam</title>

   <!-- Font Poppins -->
     <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <?php wp_head();?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" ></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-border" href="#"><i class="fa fa-phone"></i><?php echo get_theme_mod('header-number') ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-envelope"></i><?php echo get_theme_mod('header-email') ?></a>
            </li>
            <li class="nav-item-book-now">
              <a class="nav-link" id="book-now" href="#"><i class="fa fa-paper-plane-o"></i> Book Now</a>
            </li>
          </ul>
        
        </div>
      </div>
    </nav>

  <!--End Navigation -->