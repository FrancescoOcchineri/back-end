<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!--
Visual Coffee Theme by https://visual.coffee
	-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page">
	<header id="site-header">
        <div>
            <?php
            the_custom_logo();

            if ( ! has_custom_logo() ) { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                </a>
            <?php } ?>
        </div>

        <nav id="primary-nav">
            <button id="nav-toggle" class="nav-slide-button" aria-label="open"><span><span class="screen-reader-text">Menu</span></span></button>
            <div id="menu-modal" aria-hidden="true" role="dialog">
                <button id="nav-close" class="nav-slide-button" aria-label="close"><span><span class="screen-reader-text">Menu</span></span></button>
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'clear',
                    'container'      => '',
                    'depth'          => 1
                ) ); ?>
            </div>
            <div id="modalOverlay" tabindex="-1"></div>
        </nav>

        <ul class="social-media-profiles">
            <?php if ( get_theme_mod( 'visualcoffee_social_media_twitter_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_twitter_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
            <?php if ( get_theme_mod( 'visualcoffee_social_media_instagram_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_instagram_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
            <?php if ( get_theme_mod( 'visualcoffee_social_media_pinterest_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_pinterest_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
            <?php if ( get_theme_mod( 'visualcoffee_social_media_facebook_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_facebook_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
            <?php if ( get_theme_mod( 'visualcoffee_social_media_snapchat_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_snapchat_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M510.846 392.673c-5.211 12.157-27.239 21.089-67.36 27.318-2.064 2.786-3.775 14.686-6.507 23.956-1.625 5.566-5.623 8.869-12.128 8.869l-.297-.005c-9.395 0-19.203-4.323-38.852-4.323-26.521 0-35.662 6.043-56.254 20.588-21.832 15.438-42.771 28.764-74.027 27.399-31.646 2.334-58.025-16.908-72.871-27.404-20.714-14.643-29.828-20.582-56.241-20.582-18.864 0-30.736 4.72-38.852 4.72-8.073 0-11.213-4.922-12.422-9.04-2.703-9.189-4.404-21.263-6.523-24.13-20.679-3.209-67.31-11.344-68.498-32.15a10.627 10.627 0 0 1 8.877-11.069c69.583-11.455 100.924-82.901 102.227-85.934.074-.176.155-.344.237-.515 3.713-7.537 4.544-13.849 2.463-18.753-5.05-11.896-26.872-16.164-36.053-19.796-23.715-9.366-27.015-20.128-25.612-27.504 2.437-12.836 21.725-20.735 33.002-15.453 8.919 4.181 16.843 6.297 23.547 6.297 5.022 0 8.212-1.204 9.96-2.171-2.043-35.936-7.101-87.29 5.687-115.969C158.122 21.304 229.705 15.42 250.826 15.42c.944 0 9.141-.089 10.11-.089 52.148 0 102.254 26.78 126.723 81.643 12.777 28.65 7.749 79.792 5.695 116.009 1.582.872 4.357 1.942 8.599 2.139 6.397-.286 13.815-2.389 22.069-6.257 6.085-2.846 14.406-2.461 20.48.058l.029.01c9.476 3.385 15.439 10.215 15.589 17.87.184 9.747-8.522 18.165-25.878 25.018-2.118.835-4.694 1.655-7.434 2.525-9.797 3.106-24.6 7.805-28.616 17.271-2.079 4.904-1.256 11.211 2.46 18.748.087.168.166.342.239.515 1.301 3.03 32.615 74.46 102.23 85.934 6.427 1.058 11.163 7.877 7.725 15.859z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
            <?php if ( get_theme_mod( 'visualcoffee_social_media_bloglovin_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_bloglovin_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133 133">
                            <path d="M74,65c4.48-4.55,9.59-7,12.62-13,7.09-14.16.57-34.11-14.62-39.61C63.64,9.36,54.73,10,46,10H6V121H53c9.34,0,18.87.69,27-4.85C96,105.21,96,69.26,74,65ZM28,31c9.6,0,24.1-2.68,32.91,1.65,7.84,3.87,7.72,16.2.07,20.17C57.72,54.52,53.55,54,50,54H28ZM63,98.54c-3.61,1.92-8,1.46-12,1.46H28V75H49c4.31,0,9-.39,13,1.57C70.22,80.63,71.47,94,63,98.54ZM125.25,49C120,56.88,112.9,60.4,108,50a35.08,35.08,0,0,0,11-14c-12.35-.64-18.73-16.42-6.91-23.58,7.77-4.7,16.16.81,18.69,8.58C133.74,30.12,130.42,41.28,125.25,49Z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
            <?php if ( get_theme_mod( 'visualcoffee_social_media_youtube_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_youtube_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
            <?php if ( get_theme_mod( 'visualcoffee_social_media_rss_setting' ) ) { ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'visualcoffee_social_media_rss_setting' ) ); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M128.081 415.959c0 35.369-28.672 64.041-64.041 64.041S0 451.328 0 415.959s28.672-64.041 64.041-64.041 64.04 28.673 64.04 64.041zm175.66 47.25c-8.354-154.6-132.185-278.587-286.95-286.95C7.656 175.765 0 183.105 0 192.253v48.069c0 8.415 6.49 15.472 14.887 16.018 111.832 7.284 201.473 96.702 208.772 208.772.547 8.397 7.604 14.887 16.018 14.887h48.069c9.149.001 16.489-7.655 15.995-16.79zm144.249.288C439.596 229.677 251.465 40.445 16.503 32.01 7.473 31.686 0 38.981 0 48.016v48.068c0 8.625 6.835 15.645 15.453 15.999 191.179 7.839 344.627 161.316 352.465 352.465.353 8.618 7.373 15.453 15.999 15.453h48.068c9.034-.001 16.329-7.474 16.005-16.504z"/>
                        </svg>
                    </a>
                </li>
            <?php } ?>
        </ul>
	</header>

    <main id="site-content">
	<?php
	if ( is_page() || is_404() ) { ?>
	    <section class="grid__page">

	<?php } elseif ( is_search() ) { ?>
	    <section class="grid">

	<?php } elseif ( is_single() && ! is_page() ) { ?>
	    <section class="grid__single">

	<?php } else { ?>
	    <section class="grid">
	<?php } ?>