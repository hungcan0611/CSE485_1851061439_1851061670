<?php
include("Admin/config.php");
include("header.php");
include("NavBarSection.php");
?>

<section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title">Nếu tôi là số 2, không ai dám nhận số 1</p>
          <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores necessitatibus id quos dolores aliquid neque maiores excepturi quaerat adipisci! In impedit fugit perferendis quidem maxime reiciendis tempora quibusdam, id rem!</P>
          <!-- <a href="#"><img src="Images/Tung.jpg" class="play-btn">Porn free here</a> -->
        </div>
        <div class="col-md-6">
          <img src="Images/background.png" class= "background-img">
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
          <div class="col-md-12 btn-center">
              <div class="button">
                <button id="showMore_btn"><span>Show More</span></button>
              </div>
          </div>
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


<section id="testimonials">
  <div class="testimonials">
    <h1 class="title text-center">What Clients say</h1>
      <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php foreach($comment as $i){?>
          <div class="swiper-slide">
            <div class="card">
              <div class="layer"></div>
              <div class="content">
                <p><?php echo $i[3]?></p>
                <div class="imgBx">
                  <img src="<?php echo $i[4] ?>">
                </div>
                <div class="details">
                <p><b><?php echo $i[1] ?></b><br><?php echo $i[2] ?></p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        <div class="swiper-pagination"></div>
      </div>
  </div>
  <button onclick="location.href='add_cmt.php'" class="comment">Leave comment here</button>
</section>


<?php 
    include("header.php");
    include("Admin/config.php");
    $result = mysqli_query($conn, "SELECT * FROM information");
    if(mysqli_num_rows($result)>0){
        $info_H = mysqli_fetch_all($result);
    }
?>
<section id="team">
  <div class="container">
    <h1 class="title text-center">Meet The Team</h1>
    
    <div class="card-wrapper">
    <?php foreach($info_H as $i){ ?>
        <div class="card">
        
          <img src="<?php echo $i[8] ?>" alt="profile image" class="profile-img">
          <h1><?php echo $i[1] ?></h1>
          <p class="job-title"><?php echo $i[9] ?></p>
          <p class="about">
          <?php echo $i[4] ?>
          </p>
          <a href="View.php?id=<?php echo $i[0] ?>" class="btn">View</a>
          <ul class="social-media">
            <li><a href="<?php echo $i[5] ?>"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="<?php echo $i[6] ?>"><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
          
        </div>
        <?php } ?>
    </div>
  </div>
</section>
<?php
include("footer.php");
?>


