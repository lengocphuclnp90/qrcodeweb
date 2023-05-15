<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo qrcdr()->getString('thongtinlienhe'); ?></h2>
        <ul>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i><?php echo qrcdr()->getString('dienthoai'); ?></li>
          <li>
            <i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo qrcdr()->getString('diachiemail'); ?></li>
          <li>
            <i class="fa fa-map-marker" aria-hidden="true"></i><?php echo qrcdr()->getString('diachi'); ?></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h2><?php echo qrcdr()->getString('dieukhoan'); ?></h2>
        <ul>
          <li>
            <a href="/dieu-khoan-su-dung.html"><?php echo qrcdr()->getString('dieukhoansudung'); ?></a>
          </li>
          <li>
            <a href="/chinh-sach-bao-mat.html"><?php echo qrcdr()->getString('chinhsachbaomat'); ?></a>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h2><?php echo qrcdr()->getString('huongdan'); ?></h2>
        <ul>
        <li>
            <a href="/huong-dan-su-dung-ma-qr.html"><?php echo qrcdr()->getString('huongdansudung'); ?></a>
          </li>
         <li>
            <a href="https://www.facebook.com/thai.vlg/"><?php echo qrcdr()->getString('lienhehotro'); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-md-6">
        <h3><?php echo qrcdr()->getString('tenwebsite'); ?></h3><?php echo qrcdr()->getString('vinhlongweb'); ?> <?php echo qrcdr()->getString('title').' &copy; '.date('Y'); ?>
      </div>
    </div>
  </div>
      <div class="row py-2 small mb-3">
      <div class="col-6"></div>
        <div class="col-6"></div>
    </div>

</div>
