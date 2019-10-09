<div class="uk-section-muted">
	<div data-src="<?php echo asset_url('images/blur-coffee-desk-322338.jpg'); ?>" class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-section-large" uk-img>
    	<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-flex-auto uk-width-1-1@m">
    				<h1 class="uk-h1 uk-width-xlarge">Documentation.</h1>
					<div class="uk-text-lead uk-width-xlarge">
						Short introduction how to use the script.
					</div>
    			</div>
			</div>
		</div>
    </div>
</div>

<div class="uk-section-secondary uk-padding-remove">
	<div class="uk-container uk-light uk-padding-small">
		<button href="#toggle-animation" class="uk-button uk-button-default uk-margin-small" type="button" uk-toggle="target: #table-of-content; animation: uk-animation-fade">Table of Content</button>
	</div>
</div>
<div id="table-of-content" class="uk-section-muted" hidden>
	<div  class="uk-container uk-padding">
		<div class="uk-flex uk-flex-center">
			<div class="uk-card uk-card-default uk-card-body">
				<ul uk-scrollspy-nav="closest: li; scroll: true; offset: 100" class="uk-nav uk-nav-default uk-nav-parent-icon">
					<li class="uk-active"><a href="#usage">Usage</a></li>
					<li class="uk-nav-divider"></li>
					<li class=""><a href="#divider-modifier">Divider modifier</a></li>
					<li class=""><a href="#pill-modifier">Pill modifier</a></li>


				</ul>
			</div>
			<div class="uk-card uk-card-default uk-card-body uk-margin-left">

			</div>
			<div class="uk-card uk-card-default uk-card-body uk-margin-left">

			</div>
		</div>
	</div>
</div>




<div class="uk-section uk-padding-remove">
	<div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-navbar-transparent; cls-inactive: uk-navbar-transparent uk-light; bottom: #offset">
		<div class="uk-background-secondary">
			<div class="uk-container uk-light">
				<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true; offset: 100">
							<li><a href="#">START</a></li>
							<li><a href="#introduction">Introduction</a></li>
							<li><a href="#codeigniter">Codeigniter Changes</a></li>
							<li><a href="#routing">Routing</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="uk-section uk-padding-remove">
	<div class="uk-container uk-padding">
		<h3 id="introduction">Introduction</h3>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
	</div>
	<div class="uk-container uk-padding">
		<h3 id="codeigniter" class="uk-h3">Codeigniter Changes</h3>
		<p>If you are familiar with Codeigniter, you will find nothing special here, otherwise you should understand what I have done.

		<h5 class="uk-h5 uk-text-bold">1 - New Structure</h5>
		<p>
			Nothing special here. I created a new <code>public</code> folder and moved the <code>index.php</code>
			file into <code>/public</code>
			The directory structure should look like:
		</p>
<pre>
	/root
		/application
		/public
			-index.php
		/system
</pre>


		<h5 class="uk-h5 uk-text-bold">2 - Public Folder</h5>
		<p>
			The <code>/public</code> directory holds now the <code>index.php</code> file, thats
			why your server should point to the <code>/public</code> folder.
		</p>
		<p>
			Within this folder I placed another new folder called <code>/assets</code>.
			That makes it easy to load all needed asset files. This asset directory looks like:
		</p>
<pre>
	/root
		/application
		/public
			/assets
				/css
				/images
				/img
				/js
			-index.php
		/system
</pre>
		<p>
			It's easy now to use a helper function to load what we need, I will
			explain it later.
		</p>

		<h5 class="uk-h5 uk-text-bold">3 - index.php</h5>
		<p>
			Now Codeigniter should know, where to find what. Therefore I had to make
			some changes in the <code>/public/index.php</code> file.
		</p>
<pre>
	$application_directory 	=	'application';
	$system_directory		=	'system';

	$path 					=	'../';
 	$system_path 			=	$path.$system_directory;

	$application_folder 	= 	$path.$application_directory;
</pre>
		<p>
			If you expect the <code>/public/index.php</code> file you will see, that
			I define the constant BASEURL at the beginning of the file.
		</p>
		<p>
			You don't have to change or set anything in your <code>/application/config/config.php</code>
			file, because your config setting <code>$config['base_url']</code> is set automatically.
<pre>
	$config['base_url'] 	= BASEURL;
</pre>
		</p>

		<h5 class="uk-h5 uk-text-bold">4 - autoload.php</h5>
		<p>
			In the config file <code>/application/config/autoload.php</code>
			I load the following files:
		</p>
<pre>
	$autoload['libraries'] = array('Template');
	$autoload['helper'] = array('url','app');
</pre>

		<h5 class="uk-h5 uk-text-bold">5 - .htaccess</h5>
		<p>
			To get clean urls, I changed in <code>/application/config/config.php</code>
			the value <code>$config['index_page']</code> in line 38.
<pre>
	$config['index_page'] 	= '';
</pre>
			Now I created in directory <code>/public/</code> the <code>.htaccess</code>
			file:
<pre>
	RewriteEngine On
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php/$1 [L]
</pre>
		</p>
		<div class="uk-margin uk-text-right@m">
			<a href="#" class="uk-icon uk-totop" uk-totop uk-scroll>ToTop</a>
		</div>
	</div>
	<div class="uk-container uk-padding">
		<h3 id="routing" class="uk-h3">Routing</h3>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
	</div>
</div>

<div class="uk-section uk-padding-remove">
	<div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-navbar-transparent; cls-inactive: uk-navbar-transparent uk-light; bottom: #offset">
		<div class="uk-background-secondary">
			<div class="uk-container uk-light">
				<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
					<div class="uk-navbar-left">
						<ul class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true; offset: 100">
							<li><a href="#template">Template Library</a></li>
							<li><a href="#test3">Codeigniter Changes</a></li>
							<li><a href="#test4">Test</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="uk-section">
	<div class="uk-container uk-padding">
		<h3 id="template">Introduction</h3>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
	</div>
	<div class="uk-container uk-padding">
		<h3 id="test3" class="uk-h3">Codeigniter Changes</h3>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
	</div>
	<div class="uk-container uk-padding">
		<h3 id="test4" class="uk-h3">Test</h3>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
		<p>
			Dolor ut eiusmod pariatur nostrud labore aute adipisicing occaecat fugiat
			proident et. Et aliquip elit occaecat dolor incididunt officia id voluptate
			ex deserunt in elit enim excepteur tempor nostrud anim. Elit pariatur
			reprehenderit ullamco ipsum ea qui eiusmod consequat excepteur sunt
			cillum aute ex id. Dolor irure officia ad exercitation voluptate
			consequat exercitation ad.
		</p>
	</div>
</div>
