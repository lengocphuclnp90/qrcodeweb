<?php
// Kiểm tra xem biến lang đã được truyền trong đường dẫn hay chưa
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    $lang = "vi";
}
?>

<nav class="navbar bg-primary m-0 navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="logo-top-mobile">
		<a href="/"><img src="/images/logo.png" width="40px" alt="logo"></a>
		<a href="/"><?php echo qrcdr()->getString('tenwebsite'); ?></a>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#qrcdrNavbar" aria-controls="qrcdrNavbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="logo-top">
		<a href="/"><img src="/images/logo.png" width="40px" alt="logo" ></a>
		<a href="/"><?php echo qrcdr()->getString('tenwebsite'); ?></a>
	</div>
	<div class="collapse navbar-collapse" id="qrcdrNavbar">
		<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="/"><?php echo qrcdr()->getString('trangchu'); ?></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="qr-code-la-gi.html"><?php echo qrcdr()->getString('maqrlagi'); ?></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="huong-dan-su-dung-ma-qr.html"><?php echo qrcdr()->getString('huongdansudung'); ?></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="chinh-sach-bao-mat.html"><?php echo qrcdr()->getString('chinhsachbaomat'); ?></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="dieu-khoan-su-dung.html"><?php echo qrcdr()->getString('dieukhoansudung'); ?></a>
		</li>
		<li class="langmenu nav-item dropdown show">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<i class="fa fa-language" aria-hidden="true"></i> Language
			</a>
			<div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
			    <a class="dropdown-item <?php if ($lang === "vi") echo "active"; ?>" href="?lang=vi">Tiếng Việt</a>
				<a class="dropdown-item <?php if ($lang === "en") echo "active"; ?>" href="?lang=en">English</a>
			</div>
		</li>
		</ul>
	</div>
</nav>