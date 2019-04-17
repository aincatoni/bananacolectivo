    <!-- Footer -->
    <footer>

		<div class="container-fluid">
			<div class="container">
				
			<div class="row py-4">
					
					<div class="col-12 col-sm-12 col-md-3">
						
						<div class="row">
							<div class="col-12">
								<a class="navbar-brand" href="<?php echo get_home_url() ?>">
								<img class="img-fluid logo-bana-nav" src="<?php echo get_template_directory_uri(); ?>/assets/img/BANANA/banana-logo-horizontal-navbar.png" width="" height="" alt="" />
								</a>
							</div>
							
						</div>

						<div class="row">
								<div class="col-12">
								<nav>
								<?php if (has_nav_menu( 'footer-menu' )) { ?>
									<?php wp_nav_menu(array( 
										'theme_location' 	=> 'footer-menu',
										'menu_class'     	=> 'navbar-nav',
										'container_class' => 'mr-auto'    
									)); ?>
								<?php } ?>
								</nav>
							</div>	
						</div>
						
						<div class="row iconos-sociales">
							<div class="col-12">
								<ul>
									<li><i class="fab fa-facebook"></i></li>
									<li><i class="fab fa-instagram"></i></li>
									<li><i class="fab fa-youtube"></i></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-12 col-md-9">
					
					<div class="row p-2 mt-2">
						<div class="col-12">
						<h3>Contáctanos</h3>
						</div>
					
					</div>
					<div class="row">
						<div class="col-12">
						<?php echo do_shortcode('[contact-form-7 id="108" title="Contáctanos"]'); ?>
						</div>
					
					</div>

					</div>
					</div>

				</div>
			</div>
		</div>

    


    </footer>
    <?php wp_footer(); ?>
</body>
</html>