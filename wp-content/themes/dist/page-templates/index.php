<?php /* Template Name: Forside */ 
wp_head();
?>

<body id="background-color">
	<div id="loading_main_content">
		<div id="moving">
			<img id="logo_choose" src="<?php echo get_template_directory_uri()?>/img/Emptor_logo_white.png" class="fade-in" alt="Logo">
		</div>
	</div>
	<div class="choose_main_content">
		<a href="election">
			<div id="left">
				<div id="choose_election">
					<div class="choose_collect">
						<h1 class="choose_headertext"> ELECTION</h1>
						<div class="choose_underline"></div>
						<img src="<?php echo get_template_directory_uri()?>/img/dropping-vote-in-box.png" id="election_vote" alt="vote box icon">
						<p class="choose_bodytext"> Emptor International is specialized in the production and delivery of election materials and related logistical services
							for elections in developing countries.</p>
					</div>
					<h1 class="choose_goto"> GO TO ELECTION SITE</h1>
					<div id="choose_left_line"></div>
				</div>
			</div>
		</a>
		<a href="trading">
			<div id="right">
				<div id="choose_trading">
					<div class="choose_collect">
						<h1 class="choose_headertext"> TRADING</h1>
						<div class="choose_underline"></div>
						<i class="fa fa-truck fa-flip-horizontal"></i>
						<p class="choose_bodytext">Emptor International focus on delivering supplies to humanitarian aid projects public entities contractors and international
							organisations.</p>
					</div>
					<h1 class="choose_goto"> GO TO TRADING SITE</h1>
					<div id="choose_right_line"></div>
				</div>
			</div>
		</a>
	</div>
</body>

</html>