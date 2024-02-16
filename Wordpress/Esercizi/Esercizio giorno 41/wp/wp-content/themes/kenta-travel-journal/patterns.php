<?php
/**
 * Theme patterns
 *
 * @package Kenta Travel Journal
 */

if ( ! function_exists( 'kenta_travel_journal_block_patterns_init' ) ) {
	/**
	 * Init block patterns
	 */
	function kenta_travel_journal_block_patterns_init() {
		// register custom pattern category
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category( 'kenta-travel-journal', array(
				'label' => __( 'Kenta Travel Journal', 'kenta-travel-journal' )
			) );
		}

		// register custom patterns
		if ( function_exists( 'register_block_pattern' ) ) {
			register_block_pattern(
				'kenta-travel-journal/hero',
				array(
					'title'      => __( 'Big Hero', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'hero' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'header', 'banner' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/media-text',
				array(
					'title'      => __( 'Media Text Section', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'section-media-text' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'columns', 'text', 'banner' )
				)
			);
			register_block_pattern(
				'kenta-travel-journal/text-media',
				array(
					'title'      => __( 'Text Media Section', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'section-text-media' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'columns', 'text', 'banner' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/popular-destinations',
				array(
					'title'      => __( 'Popular Destination', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'popular-destinations' ),
					'categories' => array( 'kenta-travel-journal', 'columns', 'featured', 'banner' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/gallery',
				array(
					'title'      => __( 'Gallery', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'gallery' ),
					'categories' => array( 'kenta-travel-journal', 'columns', 'featured', 'gallery' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/voice-of-subscribers',
				array(
					'title'      => __( 'Voice Of Subscribers', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'voice-of-subscribers' ),
					'categories' => array( 'kenta-travel-journal', 'columns', 'featured','text' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/features',
				array(
					'title'      => __( 'Four Columns of Feature Card', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'features' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'columns' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/quote',
				array(
					'title'      => __( 'Quote', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'quote' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'text' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/about',
				array(
					'title'      => __( 'About', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'about' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'text', 'gallery' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/call-to-action',
				array(
					'title'      => __( 'Call to Action', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'call-to-action' ),
					'categories' => array( 'kenta-travel-journal', 'banner', 'featured', 'banner', 'call-to-action' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/contact',
				array(
					'title'      => __( 'Contact', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'contact' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'banner', 'columns' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/subscribe',
				array(
					'title'      => __( 'Subscribe', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'subscribe' ),
					'categories' => array( 'kenta-travel-journal','banner', 'columns', 'call-to-action' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/heading',
				array(
					'title'      => __( 'Section Heading', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'heading' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'text' )
				)
			);

			register_block_pattern(
				'kenta-travel-journal/page-banner',
				array(
					'title'      => __( 'Page Banner', 'kenta-travel-journal' ),
					'content'    => kenta_travel_journal_pattern_markup( 'page-banner' ),
					'categories' => array( 'kenta-travel-journal', 'featured', 'header', 'banner' )
				)
			);
		}
	}
}
add_action( 'init', 'kenta_travel_journal_block_patterns_init' );
