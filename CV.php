<?php
include("Admin/config.php");
include("header.php");
include("NavBarSection.php");
?>

<section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title">LOLI FOR PADDING, NOT LEWDING</p>
          <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores necessitatibus id quos dolores aliquid neque maiores excepturi quaerat adipisci! In impedit fugit perferendis quidem maxime reiciendis tempora quibusdam, id rem!</P>
          <a href="#"><img src="Images/Tung.jpg" class="play-btn">Porn free here</a>
        </div>
        <div class="col-md-6">
          <img src="Images/Tung_chandung.jpg" class= "Tung-img">
        </div>
      </div>
    </div>
    <img src="Images/wavy-alt-footer.png" class ="bottom-img">
</section>

<?php 
  $result = mysqli_query($conn, "SELECT * FROM services");
  if(mysqli_num_rows($result)>0){
    $serv = mysqli_fetch_all($result);
  }
?>
<section id="services">
    <div class="container text-center">
      <h1 class="title">WHAT WE DO ?</h1>
        <div class="row text-center">
        <?php foreach ($serv as $i){ ?>
            <div class="col-md-4 services">
              <img src="<?php echo ($i[3]) ?>" class="services-img">
              
              <h4><?php echo ($i[1]) ?></h4>
              
              <p><?php echo ($i[2])?></p>
              
            </div>
            <?php } ?>
              <!-- <div class="col-md-4 services">
                <img src="Images/GI.gif" class="services-img">
                <h4>Online Branding</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae doloremque labore iure sed tenetur aperiam voluptatem sunt, numquam ratione fugiat obcaecati aliquam adipisci non vel cum dolor cupiditate molestias explicabo.</p>
                
              </div>
              <div class="col-md-4 services">
                <img src="Images/GI.gif" class="services-img">
                <h4>Animated Ads</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae doloremque labore iure sed tenetur aperiam voluptatem sunt, numquam ratione fugiat obcaecati aliquam adipisci non vel cum dolor cupiditate molestias explicabo.</p>
              </div> -->
        </div>
    </div>
</section>


<?php 
  $about_us = mysqli_query($conn, "SELECT * FROM about_us");
  if(mysqli_num_rows($about_us)>0){
    $au = mysqli_fetch_all($about_us);
  }
?>
<section id="about-us">
  <div class="container">
    <h1 class="title text-center">Why choose us?</h1>
      <div class="row">
        <div class="col-md-6 about-us">
        <p class="about-title">Why we're different</p>
          <ul>
          <?php foreach($au as $i){?>
            <li><?php echo $i[1]?></li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="Images/GI.gif" class="img-fluid">
        </div>
      </div>
  </div>
</section>


<?php 
  $testimonials = mysqli_query($conn, "SELECT * FROM testimonials");
  if(mysqli_num_rows($testimonials)>0){
    $comment = mysqli_fetch_all($testimonials);
  }
?>
<section id="testimonals">
  <div class="container">
    <h1 class="title text-center">What Clients say</h1>
      <div class="row">
      <?php foreach($comment as $i){?>
        <div class="col-md-4 testimonials">
          <p><?php echo $i[3]?></p>
          <img src="<?php echo $i[4] ?>">
          <p><b><?php echo $i[1] ?></b><br><?php echo $i[2] ?></p>
        </div>
        <?php } ?>
      </div>
  </div>
</section>

<section id="social-media">
  <div class="container text-center">
    <h3>FIND US ON SOCIAL MEDIA</h3>
    <div class="row">
    <div class="col-md-3 social-icons">
      <a href="#"><i class="fab fa-facebook"></i></a>
    </div>
    <div class="col-md-3 social-icons">
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <div class="col-md-3 social-icons">
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="col-md-3 social-icons">
      <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div> 
    </div>
  </div>
</section>
<?php
include("footer.php");
?>
