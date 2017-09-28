
 <meta charset="utf-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jquery.lavalamp.js"></script>
	<script type="text/javascript" src="js/w3schools_footer.js"></script>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<!--   <link rel="stylesheet" type="text/css" href="/css/default.css"> -->
<style type="text/css">
html, body {
	font-family: Verdana, sans-serif;
	font-size: 15px;
	line-height: 1.5
}

.mainNav {
	position: relative;
	width: 100%;
	height: 36px;
	margin: 0 auto;
	list-style: none;
	white-space: nowrap;
	background-color: #000054;
	/*background: #045da2;*/
	/*-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;*/
	/*background: -webkit-gradient(linear, 0 0, 0 70%, from(#00a0de), to(#045da2));
	background: -webkit-linear-gradient(#00a0de, #045da2 70%);
	background: -moz-linear-gradient(#00a0de, #045da2 70%);
	background: -ms-linear-gradient(#00a0de, #045da2 70%);
	background: -o-linear-gradient(#00a0de, #045da2 70%);
	background: linear-gradient(#00a0de, #045da2 70%);
	-pie-background: linear-gradient(#00a0de, #045da2 70%)*/
}
.mainNav ul {
	margin: 0;
	padding: 0
}


/*W3.CSS*/
.w3-bar {
	width: 100%;
	overflow: visible
}
.w3-bar .w3-bar-item {
	padding: 0px 20px;
	float: left;
	width: auto;
	border: none;
	outline: none;
	display: block;
}
.dropNav {
	position: absolute;
	left: 0;
	white-space: nowrap;
	margin-bottom: 10px
}
.dropNav ul {
	display: block;
	list-style: none;
	margin: 0;
	padding: 0
}
.dropNav ul:after {
	content: "";
	display: block;
	clear: both
}
.dropNav li {
	position: relative;
	float: left;
	height: 36px;
	left: 150px;
	line-height: 36px;
	font-size: 17px;
	list-style: none;
	white-space: nowrap;
	z-index: 1
}
.dropNav li a:hover, .dropNav li a:active, .dropNav li a:focus {
	color: #222;
	font-weight:bold;
}
.dropNav li.active a {
	font-weight: bold;
	color: #fff;
	background: url(../images/default/iconLayout.gif) no-repeat center -67px
}
.dropNav li li {
	clear: both;
	width: 130px;
	height: 27px;
	line-height: 27px;
	left: 0;
	font-size: 12px;
	padding: 0
}
.dropNav li li.first {
	padding: 0;
	background: 0
}
.dropNav li li a {
	display: block;
	font-weight: normal !important;
	color: #444 !important
}
.dropNav li li a span {
	display: block;
	padding: 0 0 0 12px
}
.dropNav li li a:hover, .dropNav li li a:active, .dropNav li li a:focus {
	color: #fff !important;
	background: #0399d4;
	background: -webkit-gradient(linear, 0 0, 0 70%, from(#04acec), to(#0186ba));
	background: -webkit-linear-gradient(#04acec, #0186ba 70%);
	background: -moz-linear-gradient(#04acec, #0186ba 70%);
	background: -ms-linear-gradient(#04acec, #0186ba 70%);
	background: -o-linear-gradient(#04acec, #0186ba 70%);
	background: linear-gradient(#04acec, #0186ba 70%);
	-pie-background: linear-gradient(#04acec, #0186ba 70%)
}
.dropNav li li.active>a {
	font-weight: bold !important;
	color: #666 !important
}
.dropNav li li.active>a:hover, .dropNav li li.active>a:active, .dropNav li li.active>a:focus {
	color: #fff !important
}
.dropNav .sub {
	background: url(../images/default/iconLayout.gif) no-repeat 110px -145px
}
.dropNav .sub:hover {
	background-position: 133px -305px
}
.dropNav li.backLava {
	position: absolute;
	height: 36px;
	margin: 0;
	background: #66b400;
	background: -webkit-gradient(linear, 0 0, 0 70%, from(#72c400), to(#4a8f00));
	background: -webkit-linear-gradient(#72c400, #4a8f00 70%);
	background: -moz-linear-gradient(#72c400, #4a8f00 70%);
	background: -ms-linear-gradient(#72c400, #4a8f00 70%);
	background: -o-linear-gradient(#72c400, #4a8f00 70%);
	background: linear-gradient(#72c400, #4a8f00 70%);
	-pie-background: linear-gradient(#72c400, #4a8f00 70%)
}
.dropNav li.backLava .leftLava {
	height: 100%;
	margin-right: 10px;
	background: #66b400;
	background: -webkit-gradient(linear, 0 0, 0 70%, from(#72c400), to(#4a8f00));
	background: -webkit-linear-gradient(#72c400, #4a8f00 70%);
	background: -moz-linear-gradient(#72c400, #4a8f00 70%);
	background: -ms-linear-gradient(#72c400, #4a8f00 70%);
	background: -o-linear-gradient(#72c400, #4a8f00 70%);
	background: linear-gradient(#72c400, #4a8f00 70%);
	-pie-background: linear-gradient(#72c400, #4a8f00 70%)
}



/*Dropdown Button*/
.dropdown {
    position: relative;
    display: inline-block;
    z-index: 100;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
}
.dropdown-content a {
    color: #000;
    padding: 0px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	z-index: 10;
}
.dropdown-content a:hover {
	color: #000;
	background-color: #777;

}
/*.dropdown-content a:active {
	color: #000;
}*/

.dropdown:hover .dropdown-content {
    display: block;
    color: #000;
}
/*ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: visible;
    background-color: #777;
}*/
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 0px 16px;
    text-decoration: none;
}

/*ETC*/
.hwe_name{
	font-size: 25px;
	font-weight: bold;
	text-decoration: none;
	margin: 0 0 0 50px;
}

.fa {
		display:inline-block;
		font:normal normal normal 14px/1 FontAwesome;
		font-size:inherit;
		text-rendering:auto;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale;
		transform:translate(0, 0);
		}
		.fa-2x {
		font-size:2em;
		}
		.fa-home:before {content:'\e800';}
		.fa-menu:before {content: '\f0c9';}
		.fa-globe:before {content:'\e801';}
		.fa-search:before {content:'\e802'; }
		.fa-thumbs-o-up:before {content:'\e803';}
		.fa-left-open:before {content:'\e804';}
		.fa-right-open:before {content:'\e805';}
		.fa-facebook-square:before {content:'\e806';}
		.fa-google-plus-square:before {content:'\e807';}
		.fa-twitter-square:before {content:'\e808';}
		.fa-caret-down:before {content:'\e809';}
		.fa-caret-up:before {content:'\e80a';}

		a.topnav-icons {
		width:52px !important;
		font-size:20px !important;
		padding-top:11px !important;
		padding-bottom:13px !important;
		}
		a.topnav-icons.fa-home {font-size:22px !important}
		a.topnav-icons.fa-menu {font-size:22px !important}
		a.topnav-localicons {
		font-size:20px !important;
		padding-top:6px !important;
		padding-bottom:12px !important;
		}

</style>


<!-- 	<script src="js/w3schools_footer.js"></script> -->
<block>
	<div>
		<a class="hwe_name" href="http://ds.cathms.kr#" title='교보테크' onfocus="this.blur()">교보테크(주)</a>
	</div>
	
		<block>
			<script type="text/javascript">
				(jQuery)(function($) {
					$('#overNav').lavaLamp();
				});
			</script>
		</block>
		<div id="topnav" class="mainNav">
		<div id="overNav" class="dropNav w3-bar">
			<ul>
					<!-- <li><a href='javascript:void(0);' class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button' onclick='open_menu()' title='Menu'></a></li>
					<li><a class="topnav-icons fa fa-home w3-left w3-bar-item w3-button" title="Home"></a></li> -->



					<li class="w3-bar-item on" ><a href='http://localhost:8000/mainHome#' title='HTML Tutorial' onfocus="this.blur()">홈</a></li>
					<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">회사소개</a>
					    <div class="dropdown-content">
					      <a href="http://localhost:8000/dropNav#">회사현황</a>
					      <a href="http://ds.cathms.kr">회사조직</a>
					      <a href="http://localhost:8000/dropNav#">오시는길</a>
					    </div>
					  </li>
					<li class="w3-bar-item"><a href='http://localhost:8000/dropNav#' title='JavaScript Tutorial' onfocus="this.blur()">업무소개</a></li>
					<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">품질정책</a>
					    <div class="dropdown-content">
					      <a href="http://localhost:8000/dropNav#">인증현황</a>
					      <a href="http://localhost:8000/dropNav#">품질관리</a>
					    </div>
					  </li>
					<li class="w3-bar-item"><a href='http://localhost:8000/dropNav#' title='JavaScript Tutorial' onfocus="this.blur()">고객센터</a></li>
					</ul>
			</div>
		</div>

</block>


							
				
				
	










<!-- <block><include target="top_nav.html" /></block> -->




<!-- <block cond="$layout_info->header_nav_type=='5'">
	{$layout_info->header_nav_outer}
</block>

<block cond="$layout_info->mainNav_r">
	<div class="mainNav_r">{$layout_info->mainNav_r}</div>
</block> -->