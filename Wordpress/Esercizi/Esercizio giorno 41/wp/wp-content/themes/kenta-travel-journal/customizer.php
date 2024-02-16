<?php
/**
 * Customizer settings default value
 *
 * @package Kenta Travel Journal
 */

if ( ! function_exists( 'kenta_travel_journal_return_yes' ) ) {
	function kenta_travel_journal_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'kenta_travel_journal_return_no' ) ) {
	function kenta_travel_journal_return_no() {
		return 'no';
	}
}

// Disable site wrap by default
add_filter( 'kenta_enable_site_wrap_default_value', 'kenta_travel_journal_return_no' );
// Enable transparent header by default
add_filter( 'kenta_enable_transparent_header_default_value', 'kenta_travel_journal_return_yes' );

//
//  Card style
//
if ( ! function_exists( 'kenta_travel_journal_card_preset' ) ) {
	function kenta_travel_journal_card_preset() {
		return 'inner-shadow';
	}
}
add_filter( 'kenta_card_style_preset_default_value', 'kenta_travel_journal_card_preset' );
add_filter( 'kenta_store_card_style_preset_default_value', 'kenta_travel_journal_card_preset' );
add_filter( 'kenta_global_sidebar_widgets-style_default_value', 'kenta_travel_journal_card_preset' );
//add_filter( 'kenta_post_content_style_preset_default_value', 'kenta_travel_journal_card_preset' );

//
// Form style
//
if ( ! function_exists( 'kenta_travel_journal_form_style' ) ) {
	function kenta_travel_journal_form_style() {
		return 'modern';
	}
}
add_filter( 'kenta_content_form_style_default_value', 'kenta_travel_journal_form_style' );

//
// Sidebar
//
add_filter( 'kenta_post_sidebar_section_default_value', 'kenta_travel_journal_return_no' );
add_filter( 'kenta_archive_sidebar_section_default_value', 'kenta_travel_journal_return_no' );

//
// Default color preset
//

if ( ! function_exists( 'kenta_travel_journal_default_color_presets' ) ) {
	function kenta_travel_journal_default_color_presets() {
		return 'kenta-travel-journal';
	}
}
add_filter( 'kenta_color_palettes_default_value', 'kenta_travel_journal_default_color_presets' );

if ( ! function_exists( 'kenta_travel_journal_color_presets' ) ) {
	function kenta_travel_journal_color_presets( $presets ) {
		$presets['kenta-travel-journal'] = array(
			'kenta-primary-color'  => '#00a4db',
			'kenta-primary-active' => '#096dd9',
			'kenta-accent-color'   => '#181f28',
			'kenta-accent-active'  => '#334155',
			'kenta-base-300'       => '#e2e8f0',
			'kenta-base-200'       => '#f1f5f9',
			'kenta-base-100'       => '#f8fafc',
			'kenta-base-color'     => '#ffffff',
		);

		return $presets;
	}
}
add_filter( 'kenta_filter_color_presets', 'kenta_travel_journal_color_presets' );

//
// Dark color preset
//
if ( ! function_exists( 'kenta_travel_journal_dark_base_color' ) ) {
	function kenta_travel_journal_dark_base_color() {
		return [
			'300'     => '#3a404b',
			'200'     => '#2d3642',
			'100'     => '#262c36',
			'default' => '#1c202b',
		];
	}
}
add_filter( 'kenta_dark_base_color_default_value', 'kenta_travel_journal_dark_base_color' );

//
// Global typography
//
if ( ! function_exists( 'kenta_travel_journal_global_typography' ) ) {
	function kenta_travel_journal_global_typography() {
		return [
			'family'   => 'inter',
			'fontSize' => '18px',
			'variant'  => '400',
		];
	}
}
add_filter( 'kenta_site_global_typography_default_value', 'kenta_travel_journal_global_typography' );

//
// Preloader
//
if ( ! function_exists( 'kenta_travel_journal_preloader_preset' ) ) {
	function kenta_travel_journal_preloader_preset() {
		return 'preset-2';
	}
}
add_filter( 'kenta_preloader_preset_default_value', 'kenta_travel_journal_preloader_preset' );

if ( ! function_exists( 'kenta_travel_journal_preloader_colors' ) ) {
	function kenta_travel_journal_preloader_colors() {
		return [
			'background' => '#181f28',
			'accent'     => '#ffffff',
			'primary'    => 'var(--kenta-primary-color)',
		];
	}
}
add_filter( 'kenta_preloader_colors_default_value', 'kenta_travel_journal_preloader_colors' );

//
// Social Networks
//
if ( ! function_exists( 'kenta_travel_journal_social_networks' ) ) {
	function kenta_travel_journal_social_networks() {
		return [
			[
				'visible'  => true,
				'settings' => [
					'color' => [ 'official' => '#557dbc' ],
					'label' => 'Facebook',
					'url'   => '',
					'share' => 'https://www.facebook.com/sharer/sharer.php?u={url}',
					'icon'  => [ 'value' => 'fab fa-facebook', 'library' => 'fa-brands' ]
				],
			],
			[
				'visible'  => true,
				'settings' => [
					'color' => [ 'official' => '#000000' ],
					'label' => 'Twitter',
					'url'   => '',
					'share' => 'https://twitter.com/share?url={url}&text={text}',
					'icon'  => [ 'value' => 'fab fa-x-twitter', 'library' => 'fa-brands' ]
				],
			],
			[
				'visible'  => true,
				'settings' => [
					'color' => [ 'official' => '#ed1376' ],
					'label' => 'Instagram',
					'url'   => '',
					'icon'  => [ 'value' => 'fab fa-instagram', 'library' => 'fa-brands' ]
				],
			],
			[
				'visible'  => true,
				'settings' => [
					'color' => [ 'official' => '#f42e53' ],
					'label' => 'Tiktok',
					'url'   => '',
					'icon'  => [ 'value' => 'fab fa-tiktok', 'library' => 'fa-brands' ]
				],
			],
		];
	}
}
add_filter( 'kenta_social_networks_default_value', 'kenta_travel_journal_social_networks' );

//
// Archive
//
if ( ! function_exists( 'kenta_travel_journal_archive_structure' ) ) {
	function kenta_travel_journal_archive_structure() {
		return [
			[ 'id' => 'thumbnail', 'visible' => true ],
			[ 'id' => 'categories', 'visible' => true ],
			[ 'id' => 'title', 'visible' => true ],
			[ 'id' => 'metas', 'visible' => true ],
			[ 'id' => 'excerpt', 'visible' => true ],
		];
	}
}
add_filter( 'kenta_card_structure_default_value', 'kenta_travel_journal_archive_structure' );

if ( ! function_exists( 'kenta_travel_journal_entry_tax_style' ) ) {
	function kenta_travel_journal_entry_tax_style() {
		return 'badge';
	}
}
add_filter( 'kenta_entry_tax_style_cats_default_value', 'kenta_travel_journal_entry_tax_style' );

// archive header
if ( ! function_exists( 'kenta_travel_journal_archive_header_background' ) ) {
	function kenta_travel_journal_archive_header_background() {
		return [
			'type'  => 'color',
			'color' => 'var(--kenta-base-color)'
		];
	}
}
add_filter( 'kenta_archive_header_background_default_value', 'kenta_travel_journal_archive_header_background' );

if ( ! function_exists( 'kenta_travel_journal_archive_title_color' ) ) {
	function kenta_travel_journal_archive_title_color() {
		return [ 'initial' => 'var(--kenta-accent-color)' ];
	}
}
add_filter( 'kenta_archive_title_color_default_value', 'kenta_travel_journal_archive_title_color' );

if ( ! function_exists( 'kenta_travel_journal_archive_description_color' ) ) {
	function kenta_travel_journal_archive_description_color() {
		return [ 'initial' => 'var(--kenta-accent-active)' ];
	}
}
add_filter( 'kenta_archive_description_color_default_value', 'kenta_travel_journal_archive_description_color' );

//
// Header elements
//

if ( ! function_exists( 'kenta_travel_journal_header_primary_row_elements' ) ) {
	function kenta_travel_journal_header_primary_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '20%' ]
				],
				[
					'elements' => [ 'menu-1' ],
					'settings' => [ 'width' => '60%', 'justify-content' => 'center', 'elements-gap' => '16px' ]
				],
				[
					'elements' => [ 'socials', 'theme-switch', 'search' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-end', 'elements-gap' => '16px' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '70%', ]
				],
				[
					'elements' => [ 'socials', 'theme-switch', 'search', 'trigger' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end', 'elements-gap' => '16px' ]
				],
			],
		];
	}
}
add_filter( 'kenta_header_primary_row_default_value', 'kenta_travel_journal_header_primary_row_elements' );

// socials element
if ( ! function_exists( 'kenta_travel_journal_header_socials_icons_color_type' ) ) {
	function kenta_travel_journal_header_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'kenta_header_el_socials_icons_color_type_default_value', 'kenta_travel_journal_header_socials_icons_color_type' );

// icon size
if ( ! function_exists( 'kenta_travel_journal_icon_size' ) ) {
	function kenta_travel_journal_icon_size() {
		return '18px';
	}
}
add_filter( 'kenta_header_el_socials_icons_size_default_value', 'kenta_travel_journal_icon_size' );
add_filter( 'kenta_header_el_search_icon_button_size_default_value', 'kenta_travel_journal_icon_size' );
add_filter( 'kenta_header_el_trigger_icon_button_size_default_value', 'kenta_travel_journal_icon_size' );
add_filter( 'kenta_header_el_theme_switch_icon_button_size_default_value', 'kenta_travel_journal_icon_size' );
add_filter( 'kenta_header_el_cart_icon_button_size_default_value', 'kenta_travel_journal_icon_size' );

// search element
if ( ! function_exists( 'kenta_travel_journal_search_icon' ) ) {
	function kenta_travel_journal_search_icon() {
		return [
			'value'   => 'fas fa-q',
			'library' => 'fa-solid'
		];
	}
}
add_filter( 'kenta_header_el_search_icon_button_icon_default_value', 'kenta_travel_journal_search_icon' );

// menu element
if ( ! function_exists( 'kenta_travel_journal_menu_typography' ) ) {
	function kenta_travel_journal_menu_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => [ 'desktop' => '0.875rem', 'tablet' => '0.875rem', 'mobile' => '0.75em' ],
			'variant'       => '500',
			'lineHeight'    => '1.5',
			'textTransform' => 'capitalize',
		];
	}
}
add_filter( 'kenta_header_el_menu_1_top_level_typography_default_value', 'kenta_travel_journal_menu_typography' );
add_filter( 'kenta_header_el_menu_2_top_level_typography_default_value', 'kenta_travel_journal_menu_typography' );

// logo element
if ( ! function_exists( 'kenta_travel_journal_header_logo_title_typography' ) ) {
	function kenta_travel_journal_header_logo_title_typography() {
		return [
			'family'        => 'inherit',
			'fontSize'      => '1.45rem',
			'variant'       => '700',
			'lineHeight'    => '1.5',
			'textTransform' => 'capitalize',
		];
	}
}
add_filter( 'kenta_header_el_logo_site_title_typography_default_value', 'kenta_travel_journal_header_logo_title_typography' );

//
// Sticky header
//
add_filter( 'kenta_sticky_header_default_value', 'kenta_travel_journal_return_yes' );

if ( ! function_exists( 'kenta_travel_journal_sticky_header_shadow' ) ) {
	function kenta_travel_journal_sticky_header_shadow() {
		return [
			'enable'     => 'yes',
			'horizontal' => '0px',
			'vertical'   => '10px',
			'blur'       => '10px',
			'spread'     => '0px',
			'color'      => 'rgba(44,62,80,0.05)',
		];
	}
}
add_filter( 'kenta_sticky_header_shadow_default_value', 'kenta_travel_journal_sticky_header_shadow' );

//
// Footer elements
//

if ( ! function_exists( 'kenta_travel_journal_footer_middle_row_elements' ) ) {
	function kenta_travel_journal_footer_middle_row_elements() {
		return [
			[
				'elements' => [ 'widgets-1', 'footer-socials' ],
				'settings' => [
					'width' => [ 'desktop' => '33.33%', 'tablet' => '100%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [ 'widgets-2' ],
				'settings' => [
					'width' => [ 'desktop' => '33.33%', 'tablet' => '100%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			],
			[
				'elements' => [ 'widgets-4' ],
				'settings' => [
					'width' => [ 'desktop' => '33.33%', 'tablet' => '100%', 'mobile' => '100%' ],
					'padding' => [ 'top' => '12px', 'right' => '12px', 'bottom' => '12px', 'left' => '12px' ]
				],
			]
		];
	}
}
add_filter( 'kenta_footer_middle_row_default_value', 'kenta_travel_journal_footer_middle_row_elements' );

if ( ! function_exists( 'kenta_travel_journal_footer_middle_row_vt_spacing' ) ) {
	function kenta_travel_journal_footer_middle_row_vt_spacing() {
		return '68px';
	}
}
add_filter( 'kenta_footer_middle_row_vt_spacing_default_value', 'kenta_travel_journal_footer_middle_row_vt_spacing' );

if ( ! function_exists( 'kenta_travel_journal_builder_row_border' ) ) {
	function kenta_travel_journal_builder_row_border() {
		return [
			'style'   => 'solid',
			'width'   => 1,
			'color'   => 'var(--kenta-base-300)',
		];
	}
}
add_filter( 'kenta_footer_bottom_row_border_top_default_value', 'kenta_travel_journal_builder_row_border' );

//
// Article & Archive header style
//
if ( ! function_exists( 'kenta_travel_journal_article_featured_image_position' ) ) {
	/**
	 * Change default article featured image position design
	 *
	 * @return string
	 */
	function kenta_travel_journal_article_featured_image_position() {
		return 'behind';
	}
}
add_filter( 'kenta_post_featured_image_position_default_value', 'kenta_travel_journal_article_featured_image_position' );
add_filter( 'kenta_page_featured_image_position_default_value', 'kenta_travel_journal_article_featured_image_position' );


if ( ! function_exists( 'kenta_travel_journal_remove_default_content_spacing' ) ) {
	/**
	 * Remove default content spacing
	 *
	 * @return string
	 */
	function kenta_travel_journal_remove_default_content_spacing() {
		return '0x';
	}
}
//add_filter( 'kenta_single_post_content_spacing_default_value', 'kenta_travel_journal_remove_default_content_spacing' );
add_filter( 'kenta_pages_content_spacing_default_value', 'kenta_travel_journal_remove_default_content_spacing' );

if ( ! function_exists( 'kenta_travel_journal_default_archive_header_padding' ) ) {
	/**
	 * Change default padding for archive header
	 *
	 * @return array
	 */
	function kenta_travel_journal_default_archive_header_padding() {
		return array(
			'top'    => '148px',
			'bottom' => '68px',
			'left'   => '24px',
			'right'  => '24px',
			'linked' => false
		);
	}
}
add_filter( 'kenta_archive_header_padding_default_value', 'kenta_travel_journal_default_archive_header_padding' );

if ( ! function_exists( 'kenta_travel_journal_archive_title_typography' ) ) {
	function kenta_travel_journal_archive_title_typography() {
		return array(
			'family'        => 'inherit',
			'fontSize'      => [ 'desktop' => '3rem', 'tablet' => '2rem', 'mobile' => '1.875em' ],
			'variant'       => '700',
			'lineHeight'    => '1.5',
			'textTransform' => 'capitalize',
		);
	}
}
add_filter( 'kenta_archive_title_typography_default_value', 'kenta_travel_journal_archive_title_typography' );

if ( ! function_exists( 'kenta_travel_journal_archive_title_color' ) ) {
	function kenta_travel_journal_archive_title_color() {
		return array(
			'initial' => '#fff'
		);
	}
}
add_filter( 'kenta_archive_title_color_default_value', 'kenta_travel_journal_archive_title_color' );

// Enable archive header overlay
add_filter( 'kenta_archive_header_has_overlay_default_value', 'kenta_travel_journal_return_yes' );

if ( ! function_exists( 'kenta_travel_journal_archive_description_color' ) ) {
	function kenta_travel_journal_archive_description_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
		);
	}
}
add_filter( 'kenta_archive_description_color_default_value', 'kenta_travel_journal_archive_description_color' );

if ( ! function_exists( 'kenta_travel_journal_hero_background' ) ) {
	/**
	 * Change default hero background for archive
	 *
	 * @return array
	 */
	function kenta_travel_journal_hero_background() {
		return array(
			'type'  => 'image',
			'image' => array(
				'color'  => 'var(--kenta-accent-color)',
				'size'   => 'cover',
				'repeat' => 'no-repeat',
				'source' => array(
					'url' => KENTA_TRAVEL_JOURNAL_ASSETS_URL . 'images/hero-background.jpg',
					'x'   => 0.5,
					'y'   => 0.5,
				)
			),
		);
	}
}
add_filter( 'kenta_archive_header_background_default_value', 'kenta_travel_journal_hero_background' );

if ( ! function_exists( 'kenta_travel_journal_featured_image_background_overlay' ) ) {
	/**
	 * Change default hero background for single posts and pages
	 *
	 * @return array
	 */
	function kenta_travel_journal_featured_image_background_overlay() {
		return array(
			'type'  => 'color',
			'color' => '#000000'
		);
	}
}
add_filter( 'kenta_post_featured_image_background_overlay_default_value', 'kenta_travel_journal_featured_image_background_overlay' );
add_filter( 'kenta_page_featured_image_background_overlay_default_value', 'kenta_travel_journal_featured_image_background_overlay' );


if ( ! function_exists( 'kenta_travel_journal_featured_image_background_overlay_opacity' ) ) {
	/**
	 * Change default hero background for single posts and pages
	 *
	 * @return array
	 */
	function kenta_travel_journal_featured_image_background_overlay_opacity() {
		return 0.4;
	}
}
add_filter( 'kenta_post_featured_image_background_overlay_opacity_default_value', 'kenta_travel_journal_featured_image_background_overlay_opacity' );
add_filter( 'kenta_page_featured_image_background_overlay_opacity_default_value', 'kenta_travel_journal_featured_image_background_overlay_opacity' );

if ( ! function_exists( 'kenta_travel_journal_featured_image_fallback' ) ) {
	function kenta_travel_journal_featured_image_fallback() {
		return array(
			'url' => KENTA_TRAVEL_JOURNAL_ASSETS_URL . 'images/hero-background.jpg',
			'x'   => 0.5,
			'y'   => 0.5,
		);
	}
}
add_filter( 'kenta_post_featured_image_fallback_default_value', 'kenta_travel_journal_featured_image_fallback' );
add_filter( 'kenta_page_featured_image_fallback_default_value', 'kenta_travel_journal_featured_image_fallback' );
// Disable fallback image in archive
add_filter( 'kenta_entry_thumbnail_use_fallback_default_value', 'kenta_travel_journal_return_no' );

if ( ! function_exists( 'kenta_travel_journal_featured_image_elements_override' ) ) {
	function kenta_travel_journal_featured_image_elements_override() {
		return array(
			'override' => '#fff'
		);
	}
}
add_filter( 'kenta_post_featured_image_elements_override_default_value', 'kenta_travel_journal_featured_image_elements_override' );
add_filter( 'kenta_page_featured_image_elements_override_default_value', 'kenta_travel_journal_featured_image_elements_override' );

//
// Transparent Header settings
//

if ( ! function_exists( 'kenta_travel_journal_transparent_header_device' ) ) {
	function kenta_travel_journal_transparent_header_device() {
		return 'all';
	}
}
add_filter( 'kenta_enable_transparent_header_device_default_value', 'kenta_travel_journal_transparent_header_device' );

if ( ! function_exists( 'kenta_travel_journal_trans_header_site_title_color' ) ) {
	function kenta_travel_journal_trans_header_site_title_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
			'hover'   => '#fff',
		);
	}
}
add_filter( 'kenta_trans_header_site_title_color_default_value', 'kenta_travel_journal_trans_header_site_title_color' );

if ( ! function_exists( 'kenta_travel_journal_trans_header_menu_color' ) ) {
	function kenta_travel_journal_trans_header_menu_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
			'hover'   => '#fff',
			'active'  => '#fff',
		);
	}
}
add_filter( 'kenta_trans_header_menu_color_default_value', 'kenta_travel_journal_trans_header_menu_color' );

if ( ! function_exists( 'kenta_travel_journal_trans_header_button_color' ) ) {
	function kenta_travel_journal_trans_header_button_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
			'hover'   => '#fff',
		);
	}
}
add_filter( 'kenta_trans_header_button_color_default_value', 'kenta_travel_journal_trans_header_button_color' );

//
// Widgets area
//
if ( ! function_exists( 'kenta_travel_journal_widgets_title' ) ) {
	function kenta_travel_journal_widgets_title() {
		return 'style-2';
	}
}
add_action( 'kenta_global_sidebar_title-style_default_value', 'kenta_travel_journal_widgets_title' );
add_action( 'kenta_footer_el_widgets_1_title-style_default_value', 'kenta_travel_journal_widgets_title' );
add_action( 'kenta_footer_el_widgets_2_title-style_default_value', 'kenta_travel_journal_widgets_title' );
add_action( 'kenta_footer_el_widgets_3_title-style_default_value', 'kenta_travel_journal_widgets_title' );
add_action( 'kenta_footer_el_widgets_4_title-style_default_value', 'kenta_travel_journal_widgets_title' );
add_action( 'kenta_header_el_widgets_1_title-style_default_value', 'kenta_travel_journal_widgets_title' );
add_action( 'kenta_header_el_widgets_2_title-style_default_value', 'kenta_travel_journal_widgets_title' );
