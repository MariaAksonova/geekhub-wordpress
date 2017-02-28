<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="about-us-footer col-12 col-lg-4">
						<h4>About Us</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
							sed diam nonummy nibh euismod tincidunt ut
							laoreet dolore magna aliquam erat volutpat. Ut wisi
							enim ad minim veniam, quis nostrud exerci tation ullamcorper
							suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						<button type="button" class="btn">Learn more</button>
						<div class="photo-stream">
							<h4>Photo Stream</h4>
							<img src="<?= get_template_directory_uri() ?>/images/img-1.png" alt="">
							<img src="<?= get_template_directory_uri() ?>/images/img-2.png" alt="">
							<img src="<?= get_template_directory_uri() ?>/images/img-3.png" alt="">
							<img src="<?= get_template_directory_uri() ?>/images/img-4.png" alt="">
							<img src="<?= get_template_directory_uri() ?>/images/img-5.png" alt="">
							<img src="<?= get_template_directory_uri() ?>/images/img-6.png" alt="">
						</div>
					</div>
					<div class="latest-tweets col-12 col-md-6 col-lg-4">
						<h4>Latest tweets</h4>
						<ul class="tweets">
							<li>
								<p>Check Out Dtbaker's <span class="yellow-text">@Arduino</span> Sales Notification
									<span class="yellow-text">#System</span>
									http://t.co/ WBFKIWHJ</p>
								<p class="yellow-text smaller-text">3 days ago</p>
							</li>
							<li>
								<p>Community Superstar Winner – <span class="yellow-text">#OrganicBeeMedia</span>
									http://t.co/2Fs1nnMj</p>
								<p class="yellow-text smaller-text">3 days ago</p>
							</li>
							<li>
								<p>Clean <span class="yellow-text">#Websites</span> Designs for Your <span class="yellow-text">#Inspiration</span>
									http://t.co/ SnRKu3HJ</p>
								<p class="yellow-text smaller-text">5 days ago</p>
							</li>
							<li>
								<p>Cute Online <span class="yellow-text">#Shops</span> http://t.co/ 1PoQN3bJ</p>
								<p class="yellow-text smaller-text">6 days ago</p>
							</li>
							<li>
								<p>Download 40 vector <span class="yellow-text">#icons</span> package for <span class="yellow-text">#FREE</span>
									http://t.co/2Fp5GLqn </p>
								<p class="yellow-text smaller-text">6 days ago</p>
							</li>
						</ul>
						<h4>Social Connecting</h4>
						<ul class="socials">
							<li class="social">
								<a href="#"></a>
							</li>
							<li class="social">
								<a href="#"></a>
							</li>
							<li class="social">
								<a href="#"></a>
							</li>
							<li class="social">
								<a href="#"></a>
							</li>
							<li class="social">
								<a href="#"></a>
							</li>
							<li class="social">
								<a href="#"></a>
							</li>
							<li class="social">
								<a href="#"></a>
							</li>
							<li class="social">
								<a href="#"></a>
							</li>
						</ul>
					</div>
					<div class="contact-info col-12 col-md-6 col-lg-4">
						<h4>Contact info</h4>
						<ul class="contact">
							<li class="address">
								<p>Address: 12569 Saint Patrick des Prés,
									85000 Paris, France</p>
							</li>
							<li class="phone">
								<p>Phone: +38 045 845-45-78
									<br>+38 045 845-45-79</p>
							</li>
							<li class="email">
								<p>E-mail: <span class="yellow-text">freeforwebdesign@gmail.com</span></p>
							</li>
						</ul>
						<h4>Follow Us</h4>
						<p>Lorem Ipsum is simply dummy text of the printing
							and typesetting industry.</p>
						<form>
							<label><input type="email" name="email" class="form-control"></label>
							<button class="submit-btn" type="submit"></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-nav">
			<div class="container">
				<p class="white-text">Copyright 2013 - FreeForWebDesign.com - All Rights Reserved</p>
				<?php wp_nav_menu(['theme_location' => 'menu-1', 'menu_class' => 'nav nav-pills']); ?>
			</div>
		</div>
	</footer>

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
