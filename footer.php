					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="small-12 medium-6 large-3 columns">
								<nav role="navigation">
									<h5>Art Lessons by Age/Grade</h5>
									<?php joints_footer_links(); ?>
								</nav>
							</div>
							<div class="small-12 medium-6 large-3 columns">
								<nav role="navigation">
									<h5>Art Lessons by Theme</h5>
									<?php joints_second_footer_links(); ?>
								</nav>
							</div>
							<div class="small-12 medium-6 large-3 columns">
								<div class="content-area small-12 clearfix">
									<h5>Our Mission</h5>
									<?php dynamic_sidebar( 'sidebar2' ); ?>
									<?php dynamic_sidebar( 'sidebar3' ); ?>
									<?php dynamic_sidebar( 'sidebar4' ); ?>
				
						<nav class="widget_text">
							<!--<ul class="sub-nav">									
								<li><a href="<?php echo site_url(); ?>/aboutus">About Us</a></li>
							</ul>-->
						</nav>
								</div>
							</div>
							<div class="small-12 medium-6 large-3 columns">
								<div class="content-area small-12 clearfix">
									<h5>Get Social with KinderArt</h5>
									<div class="icon-bar">
										<a href="https://twitter.com/kinderart" target="_blank" class="item icon__twitter">
											Twitter
										</a>
										<a href="https://www.pinterest.com/kinderart" target="_blank" class="item icon__pinterest">
											Pinterest
										</a>
										<a href="https://www.facebook.com/kinderartcom"  target="_blank" class="item icon__facebook">
											Facebook
										</a>
<a href="https://www.instagram.com/kinderartcom"  target="_blank" class="item icon__instagram">
											Instagram
										</a>


									</div>

<!--sandshere-->

<!--endsands-->




								</div>
							</div>
							<div class="small-12 medium-6 large-12 columns">
								<div class="content-area large-spread">
									<div class="small-12 large-5 columns">
										<h5>Sign Up for the FREE KinderArt Newsletter</h5>
									</div>
									<form method="POST" action="https://cgi.mail-list.com/sub.pl" enctype="application/x-www-form-urlencoded">
										<div class="small-12 large-5 columns">
										<input type="hidden" name="list_name" value="kinderartcolor">
										<input type="hidden" name="subscribe_followup_url" value="https://kinderart.com/news-thanks/">
										<input type="hidden" name="list_description" value="KinderArt Color: KinderArt's Newsletter">
										<input type="hidden" name="frames" value="NO">
										<input type="hidden" name="query_string" value="NO">
										<input type="hidden" name="command" value="Subscribe">
										 
										<input type="text" name="email_address" value="" size=25 class="subscribe-input" maxlength=150>
										</div>
										<div class="small-12 large-2 columns">
											<input type="submit" name="submit" value="Subscribe" class="button button--slim input-form-button">
										</div>
									</form>
								</div>
							</div>
						</div> <!-- end #inner-footer -->
						<div class="grey-strip clearfix">
							<div class="small-12 large-12 columns">
								<div class="row">
									<p class="source-org copyright"><?php bloginfo('name'); ?>&copy; 1997-<?php echo date('Y'); ?>, All Rights Reserved.</p>
								</div>
							</div>
						</div>
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
			</div> <!-- end .off-canvas-wrap -->
			<?php wp_footer(); ?>
			</body>
			</html><!-- end page -->