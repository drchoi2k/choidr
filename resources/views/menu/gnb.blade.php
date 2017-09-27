
 <meta charset="utf-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jquery.lavalamp.js"></script>
	 <!--  <link rel="stylesheet" type="text/css" href="/css/w3.css"> -->
	<!--   <link rel="stylesheet" type="text/css" href="/css/default.css"> -->
<style type="text/css">
#mainNav {
	position: relative;
	width: 100%;
	height: 36px;
	margin: 0 auto;
	list-style: none;
	white-space: nowrap;
	background: #045da2;
	/*-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;*/
	background: -webkit-gradient(linear, 0 0, 0 70%, from(#00a0de), to(#045da2));
	background: -webkit-linear-gradient(#00a0de, #045da2 70%);
	background: -moz-linear-gradient(#00a0de, #045da2 70%);
	background: -ms-linear-gradient(#00a0de, #045da2 70%);
	background: -o-linear-gradient(#00a0de, #045da2 70%);
	background: linear-gradient(#00a0de, #045da2 70%);
	-pie-background: linear-gradient(#00a0de, #045da2 70%)
}
#mainNav ul {
	margin: 0;
	padding: 0
}
.s_nav {
	position: absolute;
	overflow: hidden;
	left: 15px;
	white-space: nowrap;
	z-index: 1
}
.s_nav ul {
	display: block;
	list-style: none;
	margin: 0;
	padding: 0
}
.s_nav ul:after {
	content: "";
	display: block;
	clear: both
}
.s_nav li {
	position: relative;
	float: left;
	height: 36px;
	line-height: 36px;
	left: 150px;
	font-size: 17px;
	list-style: none;
	white-space: nowrap;
	margin: 0;
	padding: 0
}
.s_nav li a {
	display: block;
	float: left;
	font-weight: normal;
	color: #e8e8e8;
	white-space: nowrap;
	text-decoration: none

}
.s_nav li a:hover, .s_nav li a:active, .s_nav li a:focus {
	color: #fff
}
.s_nav li.active a {
	font-weight: bold;
	color: #fff;
	background: url(/iconLayout.gif) no-repeat center -67px
}
.s_nav li.backLava {
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
.s_nav li.backLava .leftLava {
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


/*W3.CSS*/
html, body {
	font-family: Verdana, sans-serif;
	font-size: 15px;
	line-height: 1.5
}
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
	margin:0 0 0 0px;
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
.dropNav ul ul {
	display: none;
	position: absolute;
	left: 0;
	top: 36px;
	border: 1px solid #b4b3b3;
	border-top: 0;
	background: #fafcde;
	z-index: 1;
	-moz-border-radius: 0 0 3px 3px;
	-webkit-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
	-moz-box-shadow: #969696 2px 2px 5px;
	-webkit-box-shadow: #969696 2px 2px 5px;
	box-shadow: #969696 2px 2px 5px
}
.dropNav ul ul ul {
	display: none;
	position: absolute;
	left: 100px;
	top: -1px;
	border: 1px solid #b4b3b3;
	background: #fafcde;
	z-index: 1
}
.dropNav li {
	position: relative;
	float: left;
	height: 36px;
	left: 150px;
	line-height: 36px;
	font-size: 16px;
	list-style: none;
	white-space: nowrap;
	z-index: 1
}
.dropNav li.first {
	padding: 0;
	background: 0
}
.dropNav li a {
	display: block;
	color: #e8e8e8;
	white-space: nowrap;
	text-decoration: none
}
.dropNav li a span {
	display: block;
	padding: 0 9px
}
.dropNav li a:hover, .dropNav li a:active, .dropNav li a:focus {
	color: #fff
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
    z-index: 1;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content a {
    color: #000;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	z-index: 100;
}
.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
/*ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}*/
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 0px 16px;
    text-decoration: none;
}


</style>



<block>
	<div id="mainNav">
		<block>
			<script type="text/javascript">
				(jQuery)(function($) {
					$('#dropNav').lavaLamp();
				});
			</script>
		</block>
		<div id="dropNav" class="dropNav w3-bar">
			<ul>
					<li class="w3-bar-item on" ><a href='http://localhost:8000/gnb#' title='HTML Tutorial' onfocus="this.blur()">홈</a></li>
					<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">회사소개</a>
					    <div class="dropdown-content">
					      <a href="#">Link 1</a>
					      <a href="#">Link 2</a>
					      <a href="#">Link 3</a>
					    </div>
					  </li>
					<li class="w3-bar-item"><a href='http://localhost:8000/gnb#' title='JavaScript Tutorial' onfocus="this.blur()">업무소개</a></li>
					<li class="w3-bar-item"><a href='http://localhost:8000/gnb#' title='JavaScript Tutorial' onfocus="this.blur()">품질정책</a></li>
					<li class="w3-bar-item"><a href='http://localhost:8000/gnb#' title='JavaScript Tutorial' onfocus="this.blur()">고객센터</a></li>

	
				
			
								




					</ul>
				</ul>

			</div>
		
	</div>
<!-- 					<div class="dropdown">
				  	<button class="dropbtn">드롭다운</button>
				  	<div class="dropdown dropdown-content">
				    <a href="#">Link 1</a>
				    <a href="#">Link 2</a>
				    <a href="#">Link 3</a>
				  	</div>
					</div>	 -->	

</block>


							
				
				
	










<!-- <block><include target="top_nav.html" /></block> -->




<!-- <block cond="$layout_info->header_nav_type=='5'">
	{$layout_info->header_nav_outer}
</block>

<block cond="$layout_info->mainNav_r">
	<div class="mainNav_r">{$layout_info->mainNav_r}</div>
</block> -->