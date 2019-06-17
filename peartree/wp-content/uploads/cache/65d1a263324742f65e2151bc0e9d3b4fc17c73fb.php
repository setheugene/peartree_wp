<header class="banner">
  
  <div class="row">
  <div class="top-bar"><div>
  </div>
  <div class="container">
  <div class="row nav-bar">
  <div class="col-md-5 nav-bar-left text-center d-flex">
  <a class="flex-fill" href="#">Services</a>
  <a class="flex-fill" href="#">Menus</a>
  </div>
  <img class="col-md-2 main-logo" src="http://localhost:8888/peartree/wp-content/uploads/2019/06/desktop-header-logo.png" alt="main logo">

      <div class="col-md-5 nav-bar-right text-center d-flex">
    <a class="flex-fill" href="#">Testimonials</a>
  <a class="flex-fill" href="#">About</a>
  <a class="flex-fill" href="#">Contact</a>
  </div>
  </div>




    
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>



    </nav>
 
</header>
