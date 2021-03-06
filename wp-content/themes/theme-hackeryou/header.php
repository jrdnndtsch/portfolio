<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" href="img/squareoutline.png">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php if(!is_front_page()) :  ?>
	<div class="topNav">
		<svg class="logoRect" width="150px" height="150px" viewBox="0 0 92 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
		    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
		        <rect id="logoRect" fill="#070707" sketch:type="MSShapeGroup" x="0" y="0" width="92" height="84"></rect>
		          
		        <text id="HO" sketch:type="MSTextLayer" font-family="Andale Mono" font-size="20" font-weight="normal" letter-spacing="6.4000001" fill="#FFFFFF">
		            <a class ="link" xlink:href="#">
		            <tspan x="30" y="35">ME</tspan>
		            <tspan x="30" y="60">NU</tspan>
		            </a>
		        </text>
		    </g>
		    <style>
				.link{
					fill: white;
				}
				.link:hover{
				  fill:lime;
				}
		    </style>
		</svg>
		<div class="dropMenu">
		  <ul>
		  	<?php get_permalink(2); ?>
		    <li><a href="<?php echo get_permalink(2); ?>">Home</a></li>
		     <?php get_permalink(77); ?>
		    <li><a href="<?php echo get_permalink(77); ?>">Portfolio</a></li>
		    <?php get_permalink(50); ?>
		    <li><a href="<?php echo get_permalink(50); ?>">Blog</a></li>
		  </ul>
		</div> <!-- end .dropDown -->
	</div> <!-- end .topNav -->
<?php endif; ?>
		           