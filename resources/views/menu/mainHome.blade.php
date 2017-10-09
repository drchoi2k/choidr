<!DOCTYPE html>
<html>
	<head>
		<title>MailMenu</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/w3schools_footer.js"></script>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<style type="text/css">
		.hwe_name{
			font-size: 30px;
			font-weight: bold;
			text-decoration: none;
			margin: 0 0 0 50px;
			}
		/* Slideshow container */
		.slideshow-container {
		max-width: 1000px;
		position: relative;
		margin: auto;
		}
		.mySlides {
		display: none;
		}
		/* Next & previous buttons */
		.prev, .next {
		cursor: pointer;
		position: absolute;
		top: 50%;
		width: auto;
		margin-top: -22px;
		padding: 16px;
		color: white;
		font-weight: bold;
		font-size: 18px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
		}
		/* Position the "next button" to the right */
		.next {
		right: 0;
		border-radius: 3px 0 0 3px;
		}
		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
		background-color: rgba(0,0,0,0.8);
		}
		/* Caption text */
		.text {
		color: #f2f2f2;
		font-size: 15px;
		padding: 8px 12px;
		position: absolute;
		bottom: 8px;
		width: 100%;
		text-align: center;
		}
		/* Number text (1/3 etc) */
		.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
		}
		/* The dots/bullets/indicators */
		.dot {
		cursor:pointer;
		height: 13px;
		width: 13px;
		margin: 0 2px;
		background-color: #bbb;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
		}
		.active, .dot:hover {
		background-color: #717171;
		}
		/* Fading animation */
		.fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 6.5s;
		animation-name: fade;
		animation-duration: 3s;
		}
		@-webkit-keyframes fade {
		from {opacity: .4}
		to {opacity: 1}
		}
		@keyframes fade {
		from {opacity: .4}
		to {opacity: 1}
		}
		</style>
		
	</head>
	<body>
		<div>
			<!-- <a class="hwe_name" href="http://ds.cathms.kr#" title='교보테크' onfocus="this.blur()">교보테크(주)</a> -->
			<h6><span href="http://ds.cathms.kr#" class="hwe_name">교보테크</span>(주)</h6>
			 <button type="button" class="btn btn-default" id="myBtn" style='margin: 0 0 0 560px;'>로그인</button>

		</div>

		@include('menu.dropNav')
		@include('menu.homeSlide')
		@include('menu.logIn')		
		<!-- 본문 -->
		<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
			
			<div class='w3-row w3-white'>

				<div class='w3-col l10 m12' id='main'>
					<!-- 	<div id='mainLeaderboard' style='overflow:hidden;'>
							
							<div id='div-gpt-ad-1422003450156-2'>
							<script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1422003450156-2'); });</script>
						</div>
					</div> -->


					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
					<h6>Documents</h6>
				</div>
			</div>
		</div>
		<!-- Side -->
		<div class='w3-sidebar w3-collapse' id='sidenav'>
			<div id='leftmenuinner'>

				<div class='w3-light-grey'>
					
					<br><br>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
					<h6>SIDE MENU</h6>
				</div>
			</div>
		</div>
		<!-- 풋터 -->
		
		<br><br><br><br>
		@include('menu.foot')
	</body>
</html>