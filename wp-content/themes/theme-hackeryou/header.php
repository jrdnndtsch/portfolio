<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php if(!is_front_page()) :  ?>
	<div class="topNav">
		<svg width="847px" height="137px" viewBox="0 0 847 137" version="1.1" xmlns="http://www.w3.org/2000/svg" >
		    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
		        <rect id="Rectangle-4" fill="#FFFFFF" sketch:type="MSShapeGroup" x="0" y="11" width="847" height="126"></rect>
		        <path d="M825,33 L25,33" id="Line-11" stroke="#070707" stroke-width="4" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <path d="M824,115 L24,115" id="Line-12" stroke="#070707" stroke-width="4" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <path d="M21,33 L21,115" id="Line-13" stroke="#070707" stroke-width="4" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <path d="M127.75,34 L127.75,116" id="Line-15" stroke="#070707" stroke-width="1.5" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <path d="M248.75,32 L248.75,114" id="Line-18" stroke="#070707" stroke-width="1.5" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <path d="M475,32 L475,68" id="Line-17" stroke="#070707" stroke-width="1.5" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <path d="M654,32 L654,68" id="Line-19" stroke="#070707" stroke-width="1.5" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <path d="M826,33 L826,115" id="Line-14" stroke="#070707" stroke-width="4" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <rect id="Rectangle-3" fill="#070707" sketch:type="MSShapeGroup" x="22" y="32" width="53" height="48"></rect>
		        <text id="JD-2" sketch:type="MSTextLayer" font-family="Avenir Next" font-size="26" font-weight="260" letter-spacing="1.85714293" fill="#FFFFFF">
		            <tspan x="30" y="62">JD</tspan>
		        </text>
		        <path d="M250,70 L827,70" id="Line-16" stroke="#070707" stroke-width="1.5" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
		        <text id="HOME" sketch:type="MSTextLayer" font-family="Andale Mono" font-size="20" font-weight="normal" fill="#070707">
		           	<?php get_permalink(2); ?>
		            <a xlink:href="<?php echo get_permalink(2) ?>"><tspan x="164" y="80">HOME</tspan></a>
		        </text>
		        <text id="About" sketch:type="MSTextLayer" font-family="Andale Mono" font-size="18" font-weight="normal" fill="#070707">
		            <a xlink:href="<?php echo get_permalink(2) ?>"id="#about"><tspan x="536" y="58">About</tspan></a>
		        </text>
		        <text id="Contact" sketch:type="MSTextLayer" font-family="Andale Mono" font-size="18" font-weight="normal" fill="#070707">
		        	<?php get_permalink(79); ?>
		            <a xlink:href="<?php echo get_permalink(79) ?>"><tspan x="324" y="58">Contact</tspan></a>
		        </text>
		        <text id="Blog" sketch:type="MSTextLayer" font-family="Andale Mono" font-size="18" font-weight="normal" fill="#070707">
		        	<?php get_permalink(50); ?>
		            <a xlink:href="<?php echo get_permalink(50) ?>"><tspan x="716" y="57">Blog</tspan></a>
		        </text>
		        <text id="Portfolio" sketch:type="MSTextLayer" font-family="Andale Mono" font-size="18" font-weight="normal" fill="#070707">
		        	<?php get_permalink(77); ?>
		           <a xlink:href="<?php echo get_permalink(77) ?>"><tspan x="487" y="99">Portfolio</tspan></a>
		        </text>
		    </g>
		</svg>
	</div> <!-- end .topNav -->
<?php endif; ?>