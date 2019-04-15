	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="<?php echo get_template_directory_uri(); ?>/home.html">Home</a></li>
				<li><a href="<?php echo get_template_directory_uri(); ?>/services.html">Services</a></li>
				<li><a href="<?php echo get_template_directory_uri(); ?>/blog.html">Blog</a></li>
				<li><a href="<?php echo get_template_directory_uri(); ?>/contact.html">Contact</a></li>
				<li><a href="<?php echo get_template_directory_uri(); ?>/elements.html">Elements</a></li>
			</ul>
			<?php
        wp_nav_menu([
            // 'menu' => 'main-menu',
          'menu_class' => 'navbar-nav ml-auto',
          'theme-location' => 'main-menu',
          'container' => ''
        ]);
        ?>
		</nav>
	</header>
	<!-- Header section end -->