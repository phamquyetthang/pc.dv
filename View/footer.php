<footer class="footer">
  <div class="container">
    <!-- <div class="grid">
    <div class="row">
      
      <div class="footer_item"> -->
    <h2>CÔNG TY Cổ Phần Xây Dựng Và Thương Mại T & T</h2>
    Trụ Sở Chính : Thị Tứ Tân Thịnh - Yên Thắng - Ý Yên - Nam Định <br>
    Địa chỉ VP: Số 6 Ngõ 4 Mễ Trì Thượng - Đại Lộ Thăng Long - Nam Từ Liêm - Hà Nội.
    <a href="https://goo.gl/maps/gudjU2A9rGKbmAzv6" target="_blank">
      <i class="fas fa-location-arrow"></i>
    </a>
    </br>
    <!-- </div>
        <div class="footer_item"> -->
    🏙️ Cơ sở sản xuất: Thôn Tam Đa xã Thanh Văn huyện Thanh Oai Tp HN <br>
    ☎️☎️☎️Hotline : <a href="tel: 0981202328">098 120 2328</a> Hoặc <a href="tel: 0981202328">0917605168</a><br>
    Email : nguyenthanhnd0812@gmail.com
    <!-- </div> -->
    <!-- </div>
    </div>
  </div> -->
  </div>
</footer>
<div class="fixed-info">
  <ul>
    <li class="btn-fixed-info">
      <a href="tel: 0917605168">
        <i class="fas fa-phone-alt"></i>
      </a>
    </li>
    <li class="btn-fixed-info">
      <a href="https://www.messenger.com/t/nmt.wearefriend" target="_blank">
        <i class="fab fa-facebook-messenger"></i>
      </a>
    </li>
    <li class="btn-fixed-info">
      <a href="https://zalo.me/0981202328" target="_blank">
        <img src="public/images/zalo_sharelogo.png" alt="logo zalo">
      </a>
    </li>
  </ul>
</div>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v7.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution=setup_tool page_id="198878614076939" theme_color="#ff5ca1" logged_in_greeting="T&T xin chào" logged_out_greeting="T&T xin chào">
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="public/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.dot',
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      960: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
      },
    }
  });
</script>
</body>

</html>