<?php 
/*
Plugin Name: IDETEC Impostometro
Plugin URI: http://idetec.com.br
Description: Plugin para exibir impostometro
Version: 1.0
Author: Valdir Junior
Author URI: http://idetec.com.br
License: GPLv2
*/

// Add Shortcode
function insere_impostometro() {

	// Codigo
	?>
	
	<div id="impostometro" style="width: 100%; text-align: center;">
		<object width="728" height="90" align="middle" id="impostometro" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
			<param name="movie" value="http://www.impostometro.com.br//painel/embed/impostometro-728x90.swf">
			<param name="quality" value="high">
			<param name="bgcolor" value="#000000">
			<param name="play" value="true">
			<param name="loop" value="true">
			<param name="wmode" value="window">
			<param name="base" value="http://www.impostometro.com.br//api/embed">
			<param name="scale" value="showall">
			<param name="menu" value="true">
			<param name="devicefont" value="false">
			<param name="salign" value="">
			<param name="allowScriptAccess" value="sameDomain">
							
			<!--[if !IE]>-->
			<object width="728" height="90" data="http://www.impostometro.com.br//painel/embed/impostometro-728x90.swf" type="application/x-shockwave-flash">
				<param name="movie" value="http://www.impostometro.com.br//painel/embed/impostometro-728x90.swf">
				<param name="quality" value="high">
				<param name="base" value="http://www.impostometro.com.br//api/embed">
				<param name="bgcolor" value="#000000">
				<param name="play" value="true">
				<param name="loop" value="true">
				<param name="wmode" value="window">
				<param name="scale" value="showall">
				<param name="menu" value="true">
				<param name="devicefont" value="false">
				<param name="salign" value="">
				<param name="allowScriptAccess" value="sameDomain">
			<!--<![endif]-->

				<a href="http://www.adobe.com/go/getflash">
					<img alt="Get Adobe Flash player" src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif">
				</a>
			
			<!--[if !IE]>-->
			</object>
			<!--<![endif]-->
		</object>
	</div><!-- #impostometro -->

	<?php
}
add_shortcode( 'impostometro', 'insere_impostometro' );