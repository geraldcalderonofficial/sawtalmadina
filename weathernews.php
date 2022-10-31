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
                                                        <li class="nav-active"><a href="weathernews.php">Weather</a></li>
                                                        <li><a href="photos.php">Photos</a></li>
                                                        <li><a href="apps.php">Application</a></li>
							<li><a href="contact.php">Contact</a></li>
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
				
                                
                              
                                <!--page-content-->
                                <div class="page-content">
					<div class="tm-content page-content-inner" style="min-height: 665px;">
 
                                                    <div style="padding: 20px; ">
                                                            <div class="header-double-line-right">
                                                                    <h1 class="tm-title">Weather</h1>
                                                                    <p>
                                                                           Current Conditions: Misratah, Libya. A 5 days weather forecast.
                                                                    </p>
                                                            </div>
                                                            
                                                            <div style="background-color:#FFFFFF; margin-top: 50px;">
                                                                <iframe style="overflow:hidden;border:none" allowtransparency="true" width="475" height="205" src="http://www.weather-forecast.com/locations/Misurata/forecasts/latest/threedayfree" scrolling="no" frameborder="0" marginwidth="0" marginheight="0"></iframe> 
                                                                <div style="width: 475px; height: 50px">
                                                                    <p style="text-align: left; color: #669900; font-size: 12px;" id="cmt"></p>
                                                                </div>
                                                            </div></font></a></p>
                                                    </div>
                                                    
                                                  <!--  <div style="line-height: 10px;background:none;">
                                                            <div style="max-width: 160px; width: 160px; background:none;">
                                                                <object style="margin:0;padding:0;" type="application/x-shockwave-flash" data="http://static.hotelscombined.com.s3.amazonaws.com/swf/weather_widget.swf" 	id="w4aaa9c4e6c122b4c4af9ecec7aeeb33a" height="272" width="160">	
                                                                    <param value="http://static.hotelscombined.com.s3.amazonaws.com/swf/weather_widget.swf" name="movie"/>	
                                                                    <param value="transparent" name="wmode">	
                                                                    <param value="station_id=005932&city_name=Misratah&language=en&use_celsius=Yes&skinName=LightBlue&PID=168276&ts=201407310455&hideChangeSkin=No" name="flashvars">	
                                                                    <param value="all" name="allowNetworking">	<param value="always" name="allowScriptAccess">
                                                                </object>
                                                                <a alt="Hotels Combined" title="Hotels Combined" style="margin:0; padding:0; text-decoration: none; background: none;" target="_blank" href="http://weatheryou.com/City/Weather/Misratah.htm?use_celsius=Yes">
                                                                    <div style="background: none; color: white; text-align: center; width: 160px; height: 17px; margin: 0px 0 0 0; padding: 5px 0 0 0; cursor:pointer; background: transparent url(http://static.hotelscombined.com.s3.amazonaws.com/Pages/WeatherWidget/Images/weather_light_blue_bottom.png) no-repeat; font-size: 12px; font-family: Arial,sans-serif; line-height: 12px; font-weight: bold;">See 10-Day Forecast</div>
                                                                </a>
                                                                <div style="text-align: center; width: 160px;"></div>
                                                            </div>
                                                        </div>-->
                                        </div>
                                 </div> <!-- page content -->
                                 
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
        
       

<?php
include("inc/footer.php"); // include footer content
?>