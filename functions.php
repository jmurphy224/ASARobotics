<?php
/**
 * ASA Robotics theme functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ---- Basic theme support ----
function asa_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'asa-robotics' ),
		'footer'  => __( 'Footer Menu', 'asa-robotics' ),
	) );
}
add_action( 'after_setup_theme', 'asa_theme_setup' );

// ---- Enqueue styles and fonts ----
function asa_enqueue_assets() {
	wp_enqueue_style(
		'asa-google-fonts',
		'https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600;8..60,700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'asa-theme-style',
		get_stylesheet_uri(),
		array( 'asa-google-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'asa_enqueue_assets' );

/**
 * Breadcrumb helper.
 * Usage: asa_breadcrumb( array( 'Programs' => home_url('/programs/') ), 'FLL Explore' );
 * The last argument is the current (non-linked) page label.
 */
function asa_breadcrumb( $trail = array(), $current = '' ) {
	echo '<div class="crumb"><div class="crumb-inner">';
	echo '<a href="' . esc_url( home_url( '/' ) ) . '">Home</a>';
	foreach ( $trail as $label => $url ) {
		echo '<span class="sep">/</span><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a>';
	}
	if ( $current ) {
		echo '<span class="sep">/</span><span class="current">' . esc_html( $current ) . '</span>';
	}
	echo '</div></div>';
}

/**
 * ---- Customizer: org-identity fields any Admin can edit with no code ----
 * Appearance -> Customize -> Site Identity & ASA Robotics Settings
 */
function asa_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'asa_contact', array(
		'title'    => __( 'Club Contact Info', 'asa-robotics' ),
		'priority' => 30,
	) );

	$fields = array(
		'asa_contact_email' => array( 'label' => 'Contact email', 'default' => 'coach@asarbots.org' ),
		'asa_contact_phone' => array( 'label' => 'Contact phone', 'default' => '(314) 555-0142' ),
		'asa_footer_blurb'  => array( 'label' => 'Footer blurb', 'default' => 'A K–12 FIRST robotics program at All Saints Academy, Florissant, MO.' ),
	);

	foreach ( $fields as $id => $args ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $args['default'],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => $args['label'],
			'section' => 'asa_contact',
			'type'    => 'text',
		) );
	}

	// ---- Homepage hero ----
	$wp_customize->add_section( 'asa_home_hero', array(
		'title'    => __( 'Homepage Hero', 'asa-robotics' ),
		'priority' => 31,
	) );

	$hero_fields = array(
		'asa_hero_eyebrow'  => array( 'label' => 'Eyebrow text',   'default' => 'ASARBOTS.ORG — FLORISSANT, MO', 'type' => 'text' ),
		'asa_hero_headline' => array( 'label' => 'Headline (HTML ok, e.g. <em> for gold italic)', 'default' => 'Students build robots.<br>We build the <em>program</em> around them.', 'type' => 'textarea' ),
		'asa_hero_lede'     => array( 'label' => 'Subheadline',    'default' => 'All Saints Academy Robotics runs three FIRST programs under one roof — from first-time builders in kindergarten to FTC engineers headed to State. One club, one home field, a clear path in at any age.', 'type' => 'textarea' ),
		'asa_stat_programs' => array( 'label' => 'Stat: programs count',  'default' => '3', 'type' => 'text' ),
		'asa_stat_teams'    => array( 'label' => 'Stat: teams count',     'default' => '7', 'type' => 'text' ),
		'asa_stat_students' => array( 'label' => 'Stat: students count',  'default' => '58', 'type' => 'text' ),
	);

	foreach ( $hero_fields as $id => $args ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $args['default'],
			'sanitize_callback' => ( $args['type'] === 'textarea' ) ? 'wp_kses_post' : 'sanitize_text_field',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => $args['label'],
			'section' => 'asa_home_hero',
			'type'    => $args['type'],
		) );
	}
}
add_action( 'customize_register', 'asa_customize_register' );
