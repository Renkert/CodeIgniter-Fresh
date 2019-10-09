		<div class="uk-section-secondary uk-section" data-height-expand>

			<div class="uk-container">
				<div class="uk-grid-large uk-grid-margin-large uk-grid" uk-grid>

					<div class="uk-flex-auto uk-width-1-4@l uk-width-1-2@m uk-first-column">
						<div class="uk-margin">
							<a href="#">
								<img alt="" data-src="<?php echo asset_url(); ?>" uk-img="">
							</a>
						</div>
					</div>

					<div class="uk-flex-auto uk-width-1-4@l uk-width-1-2@m">
						<h2 class="uk-h5">Contact</h2>
						<ul class="uk-list">
							<li>
								<div class="uk-child-width-expand uk-grid-small uk-grid" uk-grid>
									<div class="uk-width-auto uk-first-column">
										<span class="uk-display-block">Phone:</span>
									</div>
									<div class="uk-panel">
										<a href="tel:5550199">555-0199</a>
									</div>
								</div>
							</li>
							<li>
								<div class="uk-child-width-expand uk-grid-small uk-grid" uk-grid>
									<div class="uk-width-auto uk-first-column">
										<span class="uk-display-block">E-Mail:</span>
									</div>
									<div>
										<div class="uk-panel">
											<a href="mailto:max@example.com">max@example.com</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>

					<div class="uk-flex-auto uk-width-1-4@l uk-width-1-2@m">
						<h2 class="uk-h5">Social</h2>
						<ul class="uk-list">
							<li>
								<div class="uk-panel">
									<a href="https://twitter.com/" class="el-link">Twitter</a>
								</div>
							</li>
							<li class="el-item">
								<div class="el-content uk-panel">
									<a href="https://facebook.com/" class="el-link">Facebook</a>
								</div>
							</li>
						</ul>
					</div>

					<div class="uk-flex-auto uk-width-1-4@l uk-width-1-2@m">
						<div class="uk-margin uk-text-right@m">
							<a href="#" class="uk-icon uk-totop" uk-totop uk-scroll></a>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-container uk-margin">
				<p class="uk-text-small uk-text-right">Page rendered in <strong>{elapsed_time}</strong> seconds. Powered by <strong><?php echo $this->config->item('app_name'); ?></strong> Version <span class="uk-text-primary"><strong><?php echo $this->config->item('app_version'); ?></strong></span> based on Codeigniter <?php echo CI_VERSION; ?></p>
			</div>

		</div>
	</div>
</body>
</html>
