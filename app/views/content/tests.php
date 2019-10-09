<div class="uk-section-muted uk-light">

	<div data-src="<?php echo asset_url('images/close-up-code-coding-1089440.jpg'); ?>" class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-section-large" uk-img>
    	<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-flex-auto uk-width-1-1@m">

    				<h1 class="uk-h1 uk-width-xlarge">Tests.</h1>
					<div class="uk-text-lead uk-width-xlarge">
						The showcase how it works.
					</div>
    			</div>
			</div>
		</div>
    </div>
</div>

<div class="uk-section uk-padding-remove">
	<div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-navbar-transparent; cls-inactive: uk-navbar-transparent uk-light; bottom: #offset">
		<div class="uk-background-primary">
			<div class="uk-container uk-light">
				<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true; offset: 50">
							<li><a href="#">Cases: </a></li>
							<li><a href="#controller">Controller</a></li>
							<li><a href="#modules">Modules</a></li>
							<li><a href="#database">Database</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>

<div id="controller" class="uk-section uk-padding-remove">
	<div class="uk-container uk-padding">
		<h2>Call a Controller</h2>
		<p>The controller is located at <code>/application/pages/</code> and called <code>Projects.php</code>

		<div uk-alert>
			<h4>Controller - index() method</h4>
		</div>
		<p>
			The link calls a regular controller named <code>Projects.php</code> wich is located at <code>/application/controllers/pages/</code>.
			This is a regular page call in Codeigniter, no method, so index() is called.
		</p>

		<p>
			<a href="<?php echo base_url('projects') ?>" class="uk-button uk-button-danger uk-margin-small">Projects</a>
		</p>

		<div uk-alert>
			<h4>Controller - design() method</h4>
		</div>
		<p>
			The link calls a regular controller named <code>Projects.php</code> wich is located at <code>/application/controllers/pages/</code>.
			This is a regular page call in Codeigniter, method /design, so design() is called.
		</p>
		<p>
			<a href="<?php echo base_url('projects/design') ?>" class="uk-button uk-button-danger uk-margin-small">Design</a>
		</p>

		<p class="uk-text-lead">Now we try the magic part:</p>

		<div uk-alert>
			<h4>Controller - with unique Uri</h4>
		</div>
		<p>Imagine, your website has a showcase. A SEO friendly url could be <code>http://yourdomain/showcase/design/logo/client_1</code></p>
		<p>
			We don't have a controller, module or whatever called "logo". There are no nested Controller directories, all Controllers are located at
			<code>/application/controllers/pages/</code>. The only thing we need is a Controller called "Client_1".</p>
		<p>
			<a href="<?php echo base_url('showcase/design/logo/client_1') ?>" class="uk-button uk-button-danger uk-margin-small">Client 1</a>
		</p>

		<div class="uk-container uk-background-secondary uk-light">
			<div class="uk-padding-small">
				<h4>What is the advantage?</h4>
				<p class="uk-text-lead">
					Very easy. You are now able to create SEO friendly Urls with a proper Navigation and you don't have to care about Controller locations.
					Put the Controller you need in your <code>/application/controllers/pages/</code> folder and you're done.
				</p>
			</div>
		</div>

		<div uk-alert>
			<h4>Controller - logo_1() method - with unique Uri</h4>
		</div>
		<p>
			Same example like before, we don't have a controller, module or whatever called "logo". There are no nested Controller directories, all Controllers are located at
			<code>/application/controllers/pages/</code>. The only thing we need is a Controller called "Client_1" and the method "logo_1".</p>
		<p>
		<p>
			<a href="<?php echo base_url('showcase/design/logo/client_1/logo_1') ?>" class="uk-button uk-button-danger uk-margin-small">Client 1 / Logo 1</a>
		</p>

	</div>
</div>

<div id="modules" class="uk-section uk-padding-remove">
	<div class="uk-container uk-padding">
		<h2>Call a Module Controller</h2>

		<div uk-alert>
			<h4>Module - index() method</h4>
		</div>
		<p>
			<a href="<?php echo base_url('services') ?>" class="uk-button uk-button-default uk-margin-small">Services</a>
		</p>

		<div uk-alert>
			<h4>Module - design() method</h4>
		</div>
		<p>
			<a href="<?php echo base_url('services/design') ?>" class="uk-button uk-button-default uk-margin-small">Design</a>
		</p>

		<div uk-alert>
			<h4>Module - design() method</h4>
		</div>
		<p>
			<a href="<?php echo base_url('/showcase/services/print') ?>" class="uk-button uk-button-default uk-margin-small">Print</a>
		</p>
	</div>
</div>

<div id="database" class="uk-section uk-padding-remove">
	<div class="uk-container uk-padding">
		<h2>Call a Dynamic Website</h2>

		<div uk-alert>
			<h4>About</h4>
		</div>
		<p>
			We don't have a controller "about" and we don't have a Module "about". This Page will be routed automatically
			to your Module "Pages". In this Module a database call could check if the page exist and could load
			the content from a database. You can load the content from a view file too, but than the file has to exist.
		<p>
			<a href="<?php echo base_url('about') ?>" class="uk-button uk-button-default uk-margin-small">About</a>
		</p>

		<div uk-alert>
			<h4>About</h4>
		</div>
		<p>
			Same as before, but this time we simulate a SEO friendly Url.
		<p>
			<a href="<?php echo base_url('info/internal/about') ?>" class="uk-button uk-button-default uk-margin-small">About</a>
		</p>

		<div uk-alert>
			<h4>404</h4>
		</div>
		<p>
			<a href="<?php echo base_url('donaldduck') ?>" class="uk-button uk-button-default uk-margin-small">Donald Duck</a>
		</p>

		<div uk-alert>
			<h4>Module - design() method</h4>
		</div>
		<p>
			<a href="<?php echo base_url('/showcase/services/print') ?>" class="uk-button uk-button-default uk-margin-small">Print</a>
		</p>
	</div>
</div>
