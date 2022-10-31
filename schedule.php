<?php
include("inc/header.php"); // include header content
?>
<link rel="stylesheet" type="text/css" href="assets/css/shortcode.css" />
<link rel="stylesheet" id="socastcms_programScheduleGrid_style-css" href="assets/css/sched/programScheduleGrid.css" type="text/css" media="all">
<!--<link rel="stylesheet" id="theme-main-css" href="assets/css/sched/style.css" type="text/css" media="all">-->

<script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
<style type="text/css">
        
        /* primary area */
        /* custom('primary_color') = $socasttheme_theme_options['primary_color'] */
        #primary a{color:#1076ac;}
        .primary_color{color:#1076ac !important;}
        .primary_bgd_color{background-color:#1076ac !important;}
        
        
        
        .programScheduleGrid .dayLabel.today {
                background-color: #1076ac;
                color: #ffffff;
        }
        .programScheduleGrid .days .program:hover {
                border: 2px solid #1076ac;
        }
        .programScheduleGrid .controls .today img {
                background-color: #1076ac;
        }

        #programSchedule_1827744652 {
                height: 1144px;
        }
        #progGrid_1827744652_iframe {
                width:100%;
                height:90%;
        }
        
</style>
	
                
<script>
    
	function progGrid_1827744652_shiftLeft(index) {
		if (index !== undefined) programSchedule_1827744652_gridStart = index;
		else programSchedule_1827744652_gridStart = programSchedule_1827744652_gridStart-programSchedule_1827744652_gridNumDays;
		if (programSchedule_1827744652_gridStart < 0) programSchedule_1827744652_gridStart = 0;
		progGrid_1827744652_showControls();
		$('#programSchedule_1827744652 .days .day').hide();
		$('#programSchedule_1827744652 .days .day.day-'+programSchedule_1827744652_gridStart).show();
		if (programSchedule_1827744652_gridNumDays > 1)
			$('#programSchedule_1827744652 .days .day.day-'+(programSchedule_1827744652_gridStart+1)).show();
		if (programSchedule_1827744652_gridNumDays > 2)
			$('#programSchedule_1827744652 .days .day.day-'+(programSchedule_1827744652_gridStart+2)).show();
	}

	function progGrid_1827744652_shiftRight() {
		programSchedule_1827744652_gridStart = programSchedule_1827744652_gridStart+programSchedule_1827744652_gridNumDays;
		if (programSchedule_1827744652_gridStart > (14-programSchedule_1827744652_gridNumDays)) programSchedule_1827744652_gridStart = 14-programSchedule_1827744652_gridNumDays;
		progGrid_1827744652_showControls();
		$('#programSchedule_1827744652 .days .day').hide();
		$('#programSchedule_1827744652 .days .day.day-'+programSchedule_1827744652_gridStart).show();
		if (programSchedule_1827744652_gridNumDays > 1)
			$('#programSchedule_1827744652 .days .day.day-'+(programSchedule_1827744652_gridStart+1)).show();
		if (programSchedule_1827744652_gridNumDays > 2)
			$('#programSchedule_1827744652 .days .day.day-'+(programSchedule_1827744652_gridStart+2)).show();
	}

	function progGrid_1827744652_showControls() {
		if (programSchedule_1827744652_gridStart == 0) $('#programSchedule_1827744652 .controls .prev').addClass('disabled');
		else $('#programSchedule_1827744652 .controls .prev').removeClass('disabled');
		if (programSchedule_1827744652_gridStart == (14-programSchedule_1827744652_gridNumDays)) $('#programSchedule_1827744652 .controls .next').addClass('disabled');
		else $('#programSchedule_1827744652 .controls .next').removeClass('disabled');
	}

	function progModalOpen(id,name) {
		$('#progGrid_1827744652_iframe').attr('src','/program/'+id);
		$("#programScheduleModal_1827744652").dialog('option', 'title', name);
		$("#programScheduleModal_1827744652").dialog('open');
	}

	var programSchedule_1827744652_gridStart = 7;
	var programSchedule_1827744652_gridNumDays = 3;
        
</script>


                    <div id="tm-header-nav" class="tm-menu-style1 tm-sticky-menu">
				<div class="tm-wrap tm-table">
					<nav class="tm-nav tm-column tm8" style="padding:0;">
                                                <ul class="tm-menu tm-menu-simple">
							<li class="parent" style="padding-left: 20px;"><a href="index.php">Home</a></li>
                                                        <li class="parent nav-active"><a href="schedule.php">Programs</a></li>
                                                        <li><a href="videos.php">Videos</a></li>
                                                        <li><a href="weathernews.php">Weather</a></li>
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
            
		<div class="tm-content page-content-inner" style="min-height: 700px;">
 
                            <div style="padding: 20px; ">
                                    <div class="header-double-line-right">
                                            <h1 class="tm-title">FM104 On Air Schedule</h1>
                                    </div>
                                   <div id="programSchedule_1827744652" class="programScheduleGrid">
                                        <div class="controls">
                                                <a class="prev" href="javascript:progGrid_1827744652_shiftLeft()"><img src="assets/img/sample/home/programSchedule_prev.png"></a>
                                                <a class="today" href="javascript:progGrid_1827744652_shiftLeft(7)"><img src="assets/img/sample/home/programSchedule_today.png"></a>
                                                <a class="next" href="javascript:progGrid_1827744652_shiftRight()"><img src="assets/img/sample/home/programSchedule_next.png"></a>
                                        </div>
                                        <div class="progGrid">
                                                <div class="hours">
                                                    <div class="program cornerSpacer" style="height:25px;">&nbsp;</div>
                                                    <div class="program even" style="top:24px;height:22.5px;">12:00 AM</div>
                                                    <div class="program odd" style="top:46.5px;height:22.5px;">12:30 AM</div>
                                                    <div class="program even" style="top:69px;height:22.5px;">1:00 AM</div>
                                                    <div class="program odd" style="top:91.5px;height:22.5px;">1:30 AM</div>
                                                    <div class="program even" style="top:114px;height:22.5px;">2:00 AM</div>
                                                    <div class="program odd" style="top:136.5px;height:22.5px;">2:30 AM</div>
                                                    <div class="program even" style="top:159px;height:22.5px;">3:00 AM</div>
                                                    <div class="program odd" style="top:181.5px;height:22.5px;">3:30 AM</div>
                                                    <div class="program even" style="top:204px;height:22.5px;">4:00 AM</div>
                                                    <div class="program odd" style="top:226.5px;height:22.5px;">4:30 AM</div>
                                                    <div class="program even" style="top:249px;height:22.5px;">5:00 AM</div>
                                                    <div class="program odd" style="top:271.5px;height:22.5px;">5:30 AM</div>
                                                    <div class="program even" style="top:294px;height:22.5px;">6:00 AM</div>
                                                    <div class="program odd" style="top:316.5px;height:22.5px;">6:30 AM</div>
                                                    <div class="program even" style="top:339px;height:22.5px;">7:00 AM</div>
                                                    <div class="program odd" style="top:361.5px;height:22.5px;">7:30 AM</div>
                                                    <div class="program even" style="top:384px;height:22.5px;">8:00 AM</div>
                                                    <div class="program odd" style="top:406.5px;height:22.5px;">8:30 AM</div>
                                                    <div class="program even" style="top:429px;height:22.5px;">9:00 AM</div>
                                                    <div class="program odd" style="top:451.5px;height:22.5px;">9:30 AM</div>
                                                    <div class="program even" style="top:474px;height:22.5px;">10:00 AM</div>
                                                    <div class="program odd" style="top:496.5px;height:22.5px;">10:30 AM</div>
                                                    <div class="program even" style="top:519px;height:22.5px;">11:00 AM</div>
                                                    <div class="program odd" style="top:541.5px;height:22.5px;">11:30 AM</div>
                                                    <div class="program even" style="top:564px;height:22.5px;">12:00 PM</div>
                                                    <div class="program odd" style="top:586.5px;height:22.5px;">12:30 PM</div>
                                                    <div class="program even" style="top:609px;height:22.5px;">1:00 PM</div>
                                                    <div class="program odd" style="top:631.5px;height:22.5px;">1:30 PM</div>
                                                    <div class="program even" style="top:654px;height:22.5px;">2:00 PM</div>
                                                    <div class="program odd" style="top:676.5px;height:22.5px;">2:30 PM</div>
                                                    <div class="program even" style="top:699px;height:22.5px;">3:00 PM</div>
                                                    <div class="program odd" style="top:721.5px;height:22.5px;">3:30 PM</div>
                                                    <div class="program even" style="top:744px;height:22.5px;">4:00 PM</div>
                                                    <div class="program odd" style="top:766.5px;height:22.5px;">4:30 PM</div>
                                                    <div class="program even" style="top:789px;height:22.5px;">5:00 PM</div>
                                                    <div class="program odd" style="top:811.5px;height:22.5px;">5:30 PM</div>
                                                    <div class="program even" style="top:834px;height:22.5px;">6:00 PM</div>
                                                    <div class="program odd" style="top:856.5px;height:22.5px;">6:30 PM</div>
                                                    <div class="program even" style="top:879px;height:22.5px;">7:00 PM</div>
                                                    <div class="program odd" style="top:901.5px;height:22.5px;">7:30 PM</div>
                                                    <div class="program even" style="top:924px;height:22.5px;">8:00 PM</div>
                                                    <div class="program odd" style="top:946.5px;height:22.5px;">8:30 PM</div>
                                                    <div class="program even" style="top:969px;height:22.5px;">9:00 PM</div>
                                                    <div class="program odd" style="top:991.5px;height:22.5px;">9:30 PM</div>
                                                    <div class="program even" style="top:1014px;height:22.5px;">10:00 PM</div>
                                                    <div class="program odd" style="top:1036.5px;height:22.5px;">10:30 PM</div>
                                                    <div class="program even" style="top:1059px;height:22.5px;">11:00 PM</div>
                                                    <div class="program odd" style="top:1081.5px;height:22.5px;">11:30 PM</div>
                                                </div>
                                                <div class="days">
                                                    <div class="day day-0" style="height: 1104px; display: none;">
                                                        <div class="dayLabel dark">SATURDAY SEPTEMBER 06</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s </a><br></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                        <div class="day day-1" style="height: 1104px; display: none;">
                                                            <div class="dayLabel light">SUNDAY SEPTEMBER 07</div>
                                                            <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                            <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                            <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                            <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                            <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                            <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                            <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                            <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                            <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                            <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                            <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                            <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div></div>
                                                    <div class="day day-2" style="height: 1104px; display: none;">
                                                        <div class="dayLabel dark">MONDAY SEPTEMBER 08</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-3" style="height: 1104px; display: none;">
                                                        <div class="dayLabel light">TUESDAY SEPTEMBER 09</div><div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:66.5px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:676.5px;height:6.5px;line-height:10px;"><a href="javascript:progModalOpen(181,"Persuasion Inc with Craig Trevor");" class="smallText microText"></a></div>
                                                        <div class="program" style="top:684px;height:14px;line-height:10px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");" class="smallText microText"></a></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(602,"Couch Potatoes");" class="smallText"></a></div>
                                                        <div class="program" style="top:924px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-4" style="height: 1104px; display: none;">
                                                        <div class="dayLabel dark">WEDNESDAY SEPTEMBER 10</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:114px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:204px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:249px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText">Democracy Now</a></div>
                                                        <div class="program" style="top:294px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");" class="smallText"></a></div>
                                                        <div class="program" style="top:339px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(182,"AM980's Ask The Experts");" class="smallText"></a></div>
                                                        <div class="program" style="top:406.5px;height:21.5px;line-height:10px;"><a href="javascript:progModalOpen(178,"The Savvy Senior");" class="smallText"></a></div>
                                                        <div class="program" style="top:429px;height:179px;"><a href="javascript:progModalOpen(173,"AM980&#039;s Non-Stop Saturday News");"></a><br></div>
                                                        <div class="program" style="top:609px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(179,"Outdoor Living");" class="smallText"></a></div>
                                                        <div class="program" style="top:654px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");">The Roy Green Show</a><br></div>
                                                        <div class="program" style="top:789px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(360,"Mercer Private Counsel ");" class="smallText"></a></div>
                                                        <div class="program" style="top:834px;height:-1px;line-height:10px;"><a href="javascript:progModalOpen(602,"Couch Potatoes");" class="smallText microText"></a></div>
                                                        <div class="program" style="top:834px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(602,"Couch Potatoes");" class="smallText"></a></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-5" style="height: 1104px; display: none;">
                                                        <div class="dayLabel light">THURSDAY SEPTEMBER 11</div>
                                                        <div class="program" style="top:24px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");"></a><br></div>
                                                        <div class="program" style="top:204px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:294px;height:111.5px;"><a href="javascript:progModalOpen(182,"AM980's Ask The Experts");"></a><br></div>
                                                        <div class="program" style="top:406.5px;height:21.5px;line-height:10px;"><a href="javascript:progModalOpen(185,"Haven Ministries");" class="smallText"></a></div>
                                                        <div class="program" style="top:429px;height:224px;"><a href="javascript:progModalOpen(174,"AM980's Non-Stop Sunday News");"></a><br></div>
                                                        <div class="program" style="top:654px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");"></a><br></div>
                                                        <div class="program" style="top:834px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:924px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1059px;height:43.25px;line-height:10px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");" class="smallText"></a></div>
                                                        <div class="program" style="top:969px;height:89px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-6" style="height: 1104px; display: none;">
                                                        <div class="dayLabel dark">FRIDAY SEPTEMBER 12</div>
                                                        <div class="program" style="top:24px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(166,"Wise Quacks");" class="smallText"></a></div>
                                                        <div class="program" style="top:249px;height:21.5px;line-height:10px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");" class="smallText"></a></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-7" style="height: 1104px; display: block;">
                                                        <div class="dayLabel today">SATURDAY SEPTEMBER 13</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program current" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div></div>
                                                    <div class="day day-8" style="height: 1104px; display: block;">
                                                        <div class="dayLabel dark">SUNDAY SEPTEMBER 14</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-9" style="height: 1104px; display: block;">
                                                        <div class="dayLabel light">MONDAY SEPTEMBER 15</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-10" style="height: 1104px; display: none;">
                                                        <div class="dayLabel dark">TUESDAY SEPTEMBER 16</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:204px;height:66.5px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:66.5px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:676.5px;height:6.5px;line-height:10px;"><a href="javascript:progModalOpen(181,"Persuasion Inc with Craig Trevor");" class="smallText microText"></a></div>
                                                        <div class="program" style="top:684px;height:14px;line-height:10px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");" class="smallText microText"></a></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(602,"Couch Potatoes");" class="smallText"></a></div>
                                                        <div class="program" style="top:924px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-11" style="height: 1104px; display: none;">
                                                        <div class="dayLabel light">WEDNESDAY SEPTEMBER 17</div>
                                                        <div class="program" style="top:24px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:69px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:114px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:204px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:249px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(168,"Democracy Now");" class="smallText"></a></div>
                                                        <div class="program" style="top:294px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");" class="smallText"></a></div>
                                                        <div class="program" style="top:339px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(182,"AM980's Ask The Experts");" class="smallText"></a></div>
                                                        <div class="program" style="top:406.5px;height:21.5px;line-height:10px;"><a href="javascript:progModalOpen(178,"The Savvy Senior");" class="smallText"></a></div>
                                                        <div class="program" style="top:429px;height:179px;"><a href="javascript:progModalOpen(173,"AM980&#039;s Non-Stop Saturday News");"></a><br></div>
                                                        <div class="program" style="top:609px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(179,"Outdoor Living");" class="smallText"></a></div>
                                                        <div class="program" style="top:654px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");"></a><br></div>
                                                        <div class="program" style="top:789px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(360,"Mercer Private Counsel ");" class="smallText"></a></div>
                                                        <div class="program" style="top:834px;height:-1px;line-height:10px;"><a href="javascript:progModalOpen(602,"Couch Potatoes");" class="smallText microText"></a></div>
                                                        <div class="program" style="top:834px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(602,"Couch Potatoes");" class="smallText"></a></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-12" style="height: 1104px; display: none;">
                                                        <div class="dayLabel dark">THURSDAY SEPTEMBER 18</div>
                                                        <div class="program" style="top:24px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");"></a><br></div>
                                                        <div class="program" style="top:204px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:294px;height:111.5px;"><a href="javascript:progModalOpen(182,"AM980's Ask The Experts");"></a><br></div>
                                                        <div class="program" style="top:406.5px;height:21.5px;line-height:10px;"><a href="javascript:progModalOpen(185,"Haven Ministries");" class="smallText"></a></div>
                                                        <div class="program" style="top:429px;height:224px;"><a href="javascript:progModalOpen(174,"AM980's Non-Stop Sunday News");"></a><br></div>
                                                        <div class="program" style="top:654px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");"></a><br></div>
                                                        <div class="program" style="top:834px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:924px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1059px;height:43.25px;line-height:10px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");" class="smallText"></a></div>
                                                        <div class="program" style="top:969px;height:89px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
                                                    </div>
                                                    <div class="day day-13" style="height: 1104px; display: none;">
                                                        <div class="dayLabel light">FRIDAY SEPTEMBER 19</div>
                                                        <div class="program" style="top:24px;height:134px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");"></a><br></div>
                                                        <div class="program" style="top:159px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(166,"Wise Quacks");" class="smallText"></a></div>
                                                        <div class="program" style="top:249px;height:21.5px;line-height:10px;"><a href="javascript:progModalOpen(186,"The Roy Green Show");" class="smallText"></a></div>
                                                        <div class="program" style="top:271.5px;height:179px;"><a href="javascript:progModalOpen(170,"AM980&#039;s Non-Stop Morning News");"></a><br></div>
                                                        <div class="program" style="top:451.5px;height:89px;"><a href="javascript:progModalOpen(175,"The Gerimaya Show");"></a><br></div>
                                                        <div class="program" style="top:541.5px;height:66.5px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");"></a><br></div>
                                                        <div class="program" style="top:609px;height:89px;"><a href="javascript:progModalOpen(600,"The Andrew Lawton Show");"></a><br></div>
                                                        <div class="program" style="top:699px;height:179px;"><a href="javascript:progModalOpen(172,"AM980&#039;s Non-Stop Afternoon News");"></a><br></div>
                                                        <div class="program" style="top:879px;height:89px;"><a href="javascript:progModalOpen(176,"The Gerimaya Show - Encore");"></a><br></div>
                                                        <div class="program" style="top:969px;height:44px;line-height:10px;"><a href="javascript:progModalOpen(167,"The Pulse with Devon Peacock");" class="smallText"></a></div>
                                                        <div class="program" style="top:1014px;height:88.25px;"><a href="javascript:progModalOpen(601,"The Andrew Lawton Show - Encore");"></a><br></div>
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
        
       

<?php
include("inc/footer.php"); // include footer content
?>