<?php 
    include("header.php");
    include("Admin/config.php");
    if(isset($_GET["id"])){
      $id=$_GET["id"];
  }
    $result = mysqli_query($conn, "SELECT * FROM information WHERE info_id = '$id'");
    if(mysqli_num_rows($result)==1){
        $info_H = mysqli_fetch_all($result);
    }
    
?>

<body style="background: linear-gradient(to right, #a517ba, #5f1782);  center center; background-size:cover">
  <div class="container ">
    <div id="box">
    <div class="row">
      <div class="col-lg-12">
        <h1>ABOUT ME</h1>
      </div>
    </div>

      <div class="row">
        <div class="col-lg-4">
        <?php foreach ($info_H as $i){ ?>
          <img src="<?php echo $i[8] ?>" style= "width: 40px; height: 40px;">
          <p><?php echo $i[4]  ?></p>
        </div>
        <div class="col-lg-8">
          <h2>information</h2>
          <ul class="list">
            
            <li>
              <p>Name:
                <?php echo $i[1]  ?>
              </p>
            </li>
            <li>
              <p>Birthday:
                <?php echo date("d-m-Y", strtotime($i[2]))  ?>
              </p>
            </li>
            <li>
              <p>Phone:
                <?php echo $i[7]  ?>
              </p>
            </li>
            <li>
              <p>Address:
                <?php echo $i[3]  ?>
              </p>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
<?php
  $tl = mysqli_query($conn, "SELECT * 
                                 FROM timeline
                                 INNER JOIN information
                                 ON timeline.info_id = information.info_id
                                 WHERE timeline.info_id = '$id'");
  if(mysqli_num_rows($tl) > 0){
       $timeline = mysqli_fetch_all($tl);
  }
?>
      <section id="timeline-area">
        <?php foreach ($timeline as $t){ ?>
          <div class="timeline-area-detail">
            <h2><?php echo $t[3] ?></h2>
            <h4><?php echo $t[2] ?></h4>
          </div>
        <?php } ?>
          <!-- <div class="timeline-area-detail">
            <h2>BackEnd Dev</h2>
            <h3>Youtube</h3>
            <h4>2010-2013</h4>
          </div>
          <div class="timeline-area-detail">
            <h2>FrontEnd Dev</h2>
            <h3>Yahoo</h3>
            <h4>2008-2009</h4>
          </div> -->
      </section>
    </div>
  </div>
</body>