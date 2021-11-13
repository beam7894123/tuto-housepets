<header class="mh-header">
	<div class="mh-header-nav-mobile clearfix"></div>
	<div class="mh-header-nav-wrap mh-container mh-container-inner mh-row clearfix">
		<nav class="mh-col-2-3 mh-navigation mh-header-nav clearfix">
			<?php wp_nav_menu(array('theme_location' => 'tuto_header_nav')); ?>
		</nav>
		<?php if (has_nav_menu('tuto_social_nav')) { ?>
			<nav class="mh-col-1-3 mh-social-icons mh-social-nav mh-social-nav-header clearfix">
				<?php wp_nav_menu(array('theme_location' => 'tuto_social_nav', 'link_before' => '<i class="fa fa-mh-social"></i><span class="screen-reader-text">', 'link_after' => '</span>')); ?>
			</nav>
		<?php } ?>
	</div>
	<div class="mh-container mh-container-inner mh-row clearfix">
		<?php tuto_custom_header(); ?>
	</div>
	
<!-- AD  (I am sorry >~<) -->
		<div class="widget_text mh-widget-inner"><h4 class="mh-widget-title"><span class="mh-widget-title-inner mh-sidebar-widget-title-inner">โฆษณา (AD)</span></h4>
				<div align="center">
					<script type="text/javascript">
						atOptions = {
						'key' : '2616e2fed829d833f90a35221632c662',
						'format' : 'iframe',
						'height' : 90,
						'width' : 728,
						'params' : {}
											};
						document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.variouscreativeformats.com/2616e2fed829d833f90a35221632c662/invoke.js"></scr' + 'ipt>'); 
					</script>
				</div>
			</div>
	<div>
<h4 class="mh-widget-title"><span class="mh-widget-title-inner mh-sidebar-widget-title-inner"></span></h4>
	</div>
<!-- AD END (I dont want to add this but to keep this site up I need moneyyy ;^; ) -->
	
	<div class="mh-main-nav-wrap clearfix">
		<nav class="mh-navigation mh-main-nav mh-container mh-container-inner clearfix">
			<?php wp_nav_menu(array('theme_location' => 'tuto_main_nav')); ?>
		</nav>
	</div>
</header>