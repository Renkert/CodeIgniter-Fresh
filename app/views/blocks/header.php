<div class="uk-hidden@m">
	<div class="uk-navbar-container">
		<nav uk-navbar="" class="uk-navbar">
			<div class="uk-navbar-left">
				<a class="uk-navbar-item uk-logo" href="#">
					<img alt="Max" src="<?php echo asset_url(); ?>">
				</a>
			</div>

			<div class="uk-navbar-right">
				<a class="uk-navbar-toggle" href="#nav-mobile" uk-toggle="">
					<div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"></div>
				</a>
			</div>
		</nav>
	</div>

	<div id="nav-mobile" class="uk-modal-full uk-modal" uk-modal>
		<div class="uk-modal-dialog uk-modal-body uk-text-center uk-flex uk-height-viewport">
			<button class="uk-modal-close-full uk-icon uk-close" type="button" uk-close=""></button>
			<div class="uk-margin-auto-vertical uk-width-1-1">
				<div class="uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
					<div>
						<div class="uk-panel">
							<ul class="uk-nav uk-nav-primary uk-nav-center">
								<li class="uk-active">
									<a href="<?php echo base_url(); ?>">Home</a>
								</li>
								<li>
									<a href="#">Work</a>
								</li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li class="uk-parent">
									<a href="#">Shop</a>
									<ul class="uk-nav-sub" style="display: none;">
										<li><a href="#">Cart</a>
										</li>
										<li><a href="#">My account</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="uk-visible@m uk-background-primary" uk-header>
	<div media="@m" show-on-up="" animation="uk-animation-slide-top" cls-active="uk-navbar-sticky, uk-background-secondary" sel-target=".uk-navbar-container" uk-sticky>
		<div class="uk-navbar-container uk-navbar-transparent uk-light">
			<div class="uk-container">
				<nav class="uk-navbar" uk-navbar="{"align":"left","boundary":"!.uk-navbar-container","dropbar":true,"dropbar-anchor":"!.uk-navbar-container","dropbar-mode":"slide"}">
					<div class="uk-navbar-left">
						<a href="<?php echo base_url(); ?>" class="uk-navbar-item uk-logo">
							<img alt="Miniloop" src="<?php echo asset_url('img/logo-black.svg'); ?>">
							<img class="uk-logo-inverse" alt="Miniloop" src="<?php echo asset_url('img/logo-white.svg'); ?>">
						</a>
					</div>
					<div class="uk-navbar-center">
						<ul class="uk-navbar-nav">
							<li>
								<a href="<?php echo base_url(); ?>">Home</a>
							</li>
							<li>
								<a href="<?php echo base_url('docs'); ?>">Docs</a>
							</li>
							<li>
								<a href="<?php echo base_url('controller'); ?>">Controller</a>
							</li>
							<li>
								<a href="<?php echo base_url('tests'); ?>">Tests</a>
							</li>
						</ul>
					</div>

					<div class="uk-navbar-right">
						<div class="uk-navbar-item">
							<ul class="uk-grid-small uk-flex-inline uk-flex-middle uk-flex-nowrap uk-grid" uk-grid>
								<li class="uk-first-column">
									<a href="https://twitter.com/" class="uk-icon-link uk-icon" uk-icon="github"></a>
								</li>
								<li>
									<a href="https://facebook.com/" class="uk-icon-link uk-icon" uk-icon="facebook"></a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
