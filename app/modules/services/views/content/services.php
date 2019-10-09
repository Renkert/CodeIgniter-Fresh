<div class="uk-section-muted uk-light">

	<div data-src="<?php echo asset_url('images/close-up-code-coding-1089440.jpg'); ?>" class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-section-large" uk-img>
    	<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-flex-auto uk-width-1-1@m">

    				<h1 class="uk-h1 uk-width-xlarge">Services.</h1>
					<div class="uk-text-lead uk-width-xlarge">
						This is a Module.
					</div>
    			</div>
			</div>
		</div>
    </div>
</div>

<div class="uk-section uk-padding-remove">
	<div class="uk-container uk-padding">
		<h3 id="introduction">Info:</h3>

		<table>
			<tr>
				<td>Module:</td>
				<td><code><?php echo $this->router->fetch_module(); ?></code></td>
				<td></td>
			</tr>
			<tr>
				<td>Class:</td>
				<td><code><?php echo $this->router->fetch_class(); ?></code></td>
				<td></td>
			</tr>
			<tr>
				<td>Method:</td>
				<td><code><?php echo $this->router->fetch_method(); ?></code></td>
				<td></td>
			</tr>
			<tr>
				<td>Controller Location:</td>
				<td colspan="2"><code><?php echo isset($this->data['dir']) ? $this->data['dir'] : '';?></code></td>
			</tr>
		</table>

		<h3>Watch your uri segments:</h3>

		<table class="info">
			<tr>
				<td>Full Uri String:</td>
				<td><code><?php echo $this->uri->uri_string(); ?></code></td>
			</tr>
			<tr>
				<td>Segment 0:</td>
				<td><code><?php echo !empty($this->uri->segment(0)) ? $this->uri->segment(0) : 'empty';?></code></td>
			</tr>
			<tr>
				<td>Segment 1:</td>
				<td><code><?php echo !empty($this->uri->segment(1)) ? $this->uri->segment(1) : 'empty';?></code></td>
			</tr>
			<tr>
				<td>Segment 2:</td>
				<td><code><?php echo !empty($this->uri->segment(2)) ? $this->uri->segment(2) : 'empty';?></code></td>
			</tr>
			<tr>
				<td>Segment 3:</td>
				<td><code><?php echo !empty($this->uri->segment(3)) ? $this->uri->segment(3) : 'empty';?></code></td>
			</tr>
		</table>
	</div>
	<div class="uk-container uk-padding">
		<a href="<?php echo base_url('tests') ?>" class="uk-button uk-button-default uk-margin-small"><span data-uk-icon="icon: chevron-double-left"></span>BACK TO TESTS</a>
	</div>
</div>
