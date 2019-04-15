    <!-- Footer -->
    <footer class="">

		<div class="container-fluid">
			<div class="container">
				
			<div class="row">
					
					<div class="col-12 col-sm-12 col-md-4">
						
						<div class="row">
							<a href=""><h2>BANANA COLECTIVO</h2></a>
						</div>
						
						<div class="row">
							<?php if (has_nav_menu( 'footer-menu' )) { ?>
								<?php wp_nav_menu(array( 
									'theme_location' 	=> 'footer-menu',
									'menu_class'     	=> 'navbar-nav',
									'container_class' => 'ml-auto'    
								)); ?>
							<?php } ?>
						</div>
						
						<div class="row iconos-sociales">
							<ul>
								<li><i class="fab fa-facebook"></i></li>
								<li><i class="fab fa-instagram"></i></li>
								<li><i class="fab fa-youtube"></i></li>
							</ul>
						</div>
						 
					</div>

					<div class="col-12 col-sm-12 col-md-8">
					<?php echo do_shortcode('[contact-form-7 id="108" title="Contáctanos"]'); ?>
</div>
					</div>

				</div>
			</div>
		</div>

    


    </footer>
    <?php wp_footer(); ?>
</body>
</html>