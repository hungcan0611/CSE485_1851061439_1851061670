
<!----- footer section ----->
<section id="footer">
  <img src="Images/wavy-alt-footer.png" class="footer-img"> 
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-box">
        <img src="Images/GI.gif">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Voluptas alias accusantium soluta officiis aut dicta eligendi. 
          Iure a, rem numquam ipsam voluptates, dicta accusamus quod quibusdam
          eum placeat sed sit.</p>
      </div>
      <div class="col-md-4 footer-box">
        <p><b>Liên hệ chúng tôi</b></p>
        <p><i class="far fa-map-marker-alt"></i>Đại học thuỷ lợi</p>
        <p><i class="far fa-phone"></i>+01 23456789</p>
        <p><i class="far fa-envelope"></i>wibulord@gmail.com</p>
      </div>
      <div class="col-md-4 footer-box">
        <p><b>Đăng ký để nhận tin mới nhất</b></p>
        <input type="email" class="form-control" placeholder="Email của bạn">
        <button type="button" class="btn btn-primary">Đăng ký</button>
      </div>
    </div>
  </div>
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 0,
      modifier: 1,
      slideShadows: true,
    },
    loop: true,
  });
</script>
<script>
  $("#showMore_btn").click(function(){
    $("#services .services:hidden").slice(0,3).slideDown();
    if($("#services .services:hidden").length == 0){
      $("#showMore_btn").fadeOut("slow");
    }
  })
</script>
</body>
</html>