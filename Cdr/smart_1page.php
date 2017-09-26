<load target="js/layout.js" />
<!--%import("lang")-->
<load target="css/default.css" cond="$layout_info->colorset=='default'" />
<load target="css/white.css" cond="$layout_info->colorset=='white'" />
<load target="css/black.css" cond="$layout_info->colorset=='black'" />
<!--@if(!$layout_info->colorset)-->{@$layout_info->colorset = "default"}<!--@end-->
<!--@if(!$layout_info->index_url)-->{@$layout_info->index_url=getSiteUrl($site_module_info->domain)}<!--@end-->
<include target="style1.html" />
<include target="style2.html" />
<include target="style3.html" />
<include target="style4.html" />
<include target="style5.html" />

<block cond="$logged_info->is_admin=='Y'"><include target="top_admin.html" /></block>
<div id="header_container">
	<div class="s_header">
		<block cond="$layout_info->header_flash">
			<span style="position:absolute;margin-left:-{$layout_info->header_margin_lr}px">{$layout_info->header_flash}</span>
		</block>
		<include target="top_nav.html" />
		<h1>
			<a href="{$layout_info->index_url}" onfocus="this.blur()" cond="$layout_info->logo_image"><img src="{$layout_info->logo_image}" alt="{$layout_info->site_name}" title="{$layout_info->site_name}" border="0" class="iePngFix" /></a>
			<a href="{$layout_info->index_url}" onfocus="this.blur()" cond="!$layout_info->logo_image">{$layout_info->site_name}</a>
		</h1>


<!-- sub -->
		
		<div class="sub">
			<h1>
				<a href="{$layout_info->sub_index_url}" onfocus="this.blur()" cond="$layout_info->sub_logo_image"><img src="{$layout_info->sub_logo_image}" alt="{$layout_info->page_name}" title="{$layout_info->page_name}" border="0" class="iePngFix" /></a>
				<a href="{$layout_info->sub_index_url}" onfocus="this.blur()" cond="!$layout_info->sub_logo_image">{$layout_info->page_name}</a>
			</h1>
		</div>
		<block cond="$layout_info->select_lang=='2'">
			<div class="s_language">
				<p title="{$lang_type}">{$lang_supported[$lang_type]}</p><button type="button" class="toggle"><img src="images/{$layout_info->colorset}/buttonLang.gif" alt="Select Language" /></button>
				<ul class="selectLang">
					<li loop="$lang_supported=>$key,$val" cond="$key!= $lang_type"><button type="button" onclick="doChangeLangType('{$key}');return false;">{$val}</button></li>
				</ul>
			</div>
		</block>
		<block cond="$layout_info->is_r=='1'||'2'"><include target="isearch.html" /></block>
		<block cond="$layout_info->popup_layer=='Y'">
			<!--@if($layout_info->popup_text||$layout_info->popup_img)--><include target="popup_layer.html" /><!--@end-->
		</block>
	</div>
	<!--@if($layout_info->header_nav_type=='N')--><!--@else-->
		<div class="s_header_nav">
			<include target="gnb.html" />
		</div>
	<!--@end-->
</div>




<div id="body_container">
	<div class="s_body">
		<include target="body.html" />
	</div>
</div>



<div id="footer_container">
	<block cond="$layout_info->sitemap=='Y'"><include target="sitemap.html" /></block>
	<include target="footer.html" />
</div>

<!--@if($layout_info->css3pie=='Y')-->
	<!--[if lt IE 9]>
		<style type="text/css">
			.css3pie {behavior: url(./layouts/{$layout_info->layout}/js/PIE.htc);}
		</style>
	<![endif]-->
<!--@end-->
<!--[if IE 6]>
	<script stype="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript">//<![CDATA[
	DD_belatedPNG.fix('.iePngFix');
	//]]></script>
<![endif]-->
<load target="css/ie7.css" targetie="IE 7" />
<load target="css/ie6.css" targetie="IE 6" />