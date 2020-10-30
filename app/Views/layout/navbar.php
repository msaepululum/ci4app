<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand" href="#">MaysunHijab</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('/'); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('/pages/about'); ?>">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Feature</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Join Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('/pages/contact'); ?>">About</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="<?= base_url('/komik'); ?>">Komik</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('/orang'); ?>">orang</a>
				</li> -->
				<?php if (logged_in()) : ?>
					<a class=" btn btn-primary tombol " href="<?= base_url('/logout'); ?>">Logout</a>
				<?php else : ?>
					<a class=" btn btn-primary tombol " href="<?= base_url('/login'); ?>">login</a>
				<?php endif ?>
			</ul>

		</div>
	</div>
</nav>