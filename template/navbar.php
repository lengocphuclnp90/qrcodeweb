<nav class="navbar bg-primary m-0 navbar-expand-sm navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#qrcdrNavbar" aria-controls="qrcdrNavbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
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
		<li class="nav-item">
			<a href="/?lang=vi" title ="Ngôn ngữ Việt Nam"><img src="images/vietnamese.png"/></a>
		</li>
		<li class="nav-item">
			<a href="/?lang=en" title ="English language"><img src="images/usa.png"/></a>
		</li>
		</ul>
	</div>
</nav>