<?php get_header(); ?>
  <div>
    <div class="sidebar-brand">
      <div class="social">
        <a href="#">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
      <div class="brand">
        <img src="https://image.ibb.co/mbNE49/Sushi_Eats.png">
      </div>
    </div>
    <section class="home">
      <div class="left-content">
        <nav>
          <ul>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#menu">Menu</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
        <h2><span>FRESH</span><br><br>and tasty sushi</h2>
        <br>
        <p>The best of Sydney and Japanese cuisine combined.
        </p>
        <a href="#book" id="btn-book-top">Book Now</a>
        <div class="box-next">
          <a href="#menu">See our menu
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="right-content">
      </div>
    </section>
    <section class="about" id="about">
      <div class="left-content">
        <h3>Our original cuisine</h3>
        <?php 
          $mypod = pods('about');
          $mypod->find('name ASC');
          $content = $mypod->field('content');
          $content2 = $mypod->field('about2');
        ?>
        <p><?php echo $content ?></p>
      </div>
      <div class="right-content">
        <p><?php echo $content2 ?></p>
        <img src="https://image.ibb.co/e14dpe/sushi_icon_60905.png">
      </div>
    </section>
    <section class="gallery" id="gallery">
      <div class="gallery-carousel">
        <?php echo do_shortcode('[carousel_slide id="49"]'); ?>
      </div>
      <div class="chefs-special">
        <h3>Chef's Specials</h3>
        <img src="http://yestoyolks.com/wp-content/uploads/2014/08/IMG_2713.jpg" class="img-1 circle">
        <img src="http://yestoyolks.com/wp-content/uploads/2014/08/IMG_2713.jpg" class="img-2 circle">
        <img src="http://yestoyolks.com/wp-content/uploads/2014/08/IMG_2713.jpg" class="img-3 circle">
      </div>
    </section>
    <section class="menu" id="menu">
      <h2>Menu</h2>

      <?php 
        $mypod = pods('dish');
        $mypod->find('name ASC');
      ?>

      <div class="left-menu">
        <h3>Sushi</h3>

        <?php while ( $mypod->fetch() ) : ?>

        <?php
          $name = $mypod->field('name');
          $price = $mypod->field('price');
          $description = $mypod->field('description');
          $category = $mypod->field('category');
        ?>

        <?php if ( $category == 'sushi' ) : ?>

        <h4><?php echo $name ?><span>$<?php echo $price ?></span></h4>
        <p><?php echo $description ?></p>

        <?php endif; ?>

        <?php endwhile; ?>
      </div>     

      <div class="right-menu">
        <h3>Bento</h3>

        <?php 
        $mypod = pods('dish');
        $mypod->find('name ASC');
        ?>

        <?php while ( $mypod->fetch() ) : ?>

        <?php
          $name = $mypod->field('name');
          $price = $mypod->field('price');
          $description = $mypod->field('description');
          $category = $mypod->field('category');
        ?>

        <?php if ( $category == 'bento' ) : ?>

        <h4><?php echo $name ?><span>$<?php echo $price ?></span></h4>
        <p><?php echo $description ?></p>

        <?php endif; ?>

        <?php endwhile; ?>

      </div>
      <button>Download Menu</button>
    </section>
    <section class="contact" id="contact">
      <h2>Contact</h2>
      <div class="location">
        <i class="fa fa-location-arrow" aria-hidden="true"></i>
        <h3>Location</h3>
        <p>Level 5, Shangri-La, 80 Grand Ave</p>
        <p>Sydney NSW 2000</p>
      </div>
      <div class="hours">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        <h3>Opening hours</h3>
        <p>Monday: 9am - 11pm</p>
        <p>Tuesday: 9am - 11pm</p>
        <p>Wednesday: 9am - 11pm</p>
        <p>Thursday: 9am - 11pm</p>
        <p>Friday: 9am - 11pm</p>
        <p>Saturday: 9am - 11pm</p>
        <p>Sunday: 9am - 11pm</p>
      </div>
    </section>
    <section class="reservations" id="book">
      <h2>Book Now</h2>

      <?php echo do_shortcode("[booking type=1]"); ?>

    </section>
  </div>
<?php get_footer(); ?>
