<?php
include("inc/header.php"); // include header content
?>

                    <div id="tm-header-nav" class="tm-menu-style1 tm-sticky-menu">
				<div class="tm-wrap tm-table">
					<nav class="tm-nav tm-column tm8" style="padding:0;">
                                                <ul class="tm-menu tm-menu-simple">
							<li class="parent" style="padding-left: 20px;"><a href="index.php">Home</a></li>
                                                        <li class="parent"><a href="schedule.php">Programs</a></li>
                                                        <li><a href="videos.php">Videos</a></li>
                                                        <li><a href="weathernews.php">Weather</a></li>
                                                        <li><a href="photos.php">Photos</a></li>
                                                        <li><a href="apps.php">Application</a></li>
                                                        <li class="nav-active"><a href="contact.php">Contact</a></li>
						</ul>
					</nav><!--tm-nav-->
                                        
                                        <div class="tm-column tm3" style=" float: right; margin-top: -2em; width:210px;">
                                            <a href="live.php"><img src="assets/img/sample/home/live-img.jpg" /></a>
                                        </div> 
				</div>
                    </div><!--tm-header-nav-->
                        

</header>

            <div id="tm-page-body">
			<div id="tm-blog" class="tm-container tm-wrap tm-blog-style-list tm-sidebar-right">
                                <div class="page-content">
					<div class="tm-content page-content-inner" style="min-height: 700px;">
                                                    <div style="padding: 20px; ">
                                                            <div class="header-double-line-right">
                                                                    <h1 class="tm-title">Contact</h1>
                                                            </div>
                                                            <div class="tm-row" style="">
                                                                    <div id="map-canvas" style="height: 330px; margin-bottom: 20px"></div>
                                                            </div>
                                                            <div class="header-double-line-right">
                                                                    <h3 class="tm-title">Nees Help?</h3>
                                                            </div>
                                                            <p>
                                                                    We are here to answer any questions you may have about our experiences. Reach out to us and we'll respond as soon as we can. Just send us a message in the form below.
                                                            </p>
                                                            
                                                            
                                                            <!-- -->
                                                            <div class="tm-row" style="padding:0;">
							<div class="tm-wrap">
								<div class="one-third"> 
                                                                    
                                                                        <div class="contact-form">
										<form action="php/contact.php" method="POST">
                                                                                    <p class="contact-p">
												<label for="contact-name">Name <span class="required">*</span></label>
												<input type="text" id="contact-name" name="data[name]" required="required" />
											</p>
											<p class="contact-p">
												<label for="contact-email">Email <span class="required">*</span></label>
												<input type="email" id="contact-email" name="data[email]" required="required" />
											</p>
											<p class="contact-p">
												<label for="contact-subject">Subject</label>
												<input type="text" id="contact-subject" name="data[subject]" />
											</p>
											<p class="contact-p">
												<label for="contact-message">Message</label>
												<textarea name="data[message]" id="contact-message" required="required"></textarea>
											</p>
                                                                                        <p class="form-submit" style="margin-top: 10px;">
												<button type="submit" class="tm-btn">Send Message</button>
											</p>
										</form>
									</div>
                                                                    
									<br />
									
								</div>
								<div class="one-third">
									
                                                                    
                                                                        <div class="header-double-line-right">
										<h3 class="tm-title">Contact Info</h3>
									</div>
									<div class="contact-info-container">
										<div class="address">
											Gasser Ahmed St. near Thawrat Alhejara Square Misurata, Libya
										</div>
										<br>
										<div class="phone">
                                                                                    <!--<strong>Phone:</strong> 091 6600773; <br /><span style="padding-left: 45px;">091 6600774</span>-->
                                                                                    <strong>Phone:</strong> +218251661404 - +218251661405 <br /><span style="padding-left: 45px;">+218916600773 - +218251221111</span>
										</div>
										<!--<div class="fax">
											<strong>Fax:</strong> 1900.1007.999
										</div>-->
										<div class="email">
											<strong>Email:</strong> 
											<a href="mailto:info@sawtalmadina.com">info@sawtalmadina.com</a>
										</div>
										<div class="web">
											<strong>Web:</strong> 
											<a href="http://sawtalmadina.com">sawtalmadina.com</a>
										</div>
									</div>
									<br><br>
									<div class="header-double-line-right">
										<h3 class="tm-title">Network</h3>
										<ul class="social-networks">
											<li>
												<a href="https://www.facebook.com/RadioSwtAlmdynaMisurata" target="_blank" data-title="Facebook">
												<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="" data-title="Twitter">
												<i class="fa fa-twitter"></i>
												</a>
											</li>
                                                                                        <li>
												<a href="" data-title="Youtube">
												<i class="fa fa-youtube"></i>
												</a>
											</li>
                                                                                        
											<!--<li>
												<a href="" data-title="GooglePlus">
												<i class="fa fa-google-plus"></i>
												</a>
											</li>
											<li>
												<a href="" data-title="Tumblr">
												<i class="fa fa-tumblr"></i>
												</a>
											</li>-->
										</ul>
									</div>
                                                                        
								</div>
							</div>
						</div>
                                                            
                                                    </div>
					</div>
				</div>
				<!--page-content-->
                                
                                <div class="page-sidebar">
					
						<?php
                                                include("inc/aside2.php"); // include sidebar content
                                                ?>
					
				</div>
				<!--page-sidebar-->

			</div>
			<!--tm-container-->
		</div>
		<!--tm-page-body-->
                
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
		<script>
			var map;
			function initialize() {
				var map_canvas = document.getElementById('map-canvas');

				if (map_canvas) {
					var mapOptions = {
						zoom: 16,
						center: new google.maps.LatLng(32.327657, 15.133484)
					};

					map = new google.maps.Map(map_canvas, mapOptions);
				}
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
       

<?php
include("inc/footer.php"); // include footer content
?>