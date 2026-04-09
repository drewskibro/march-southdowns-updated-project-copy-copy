<?php
/**
 * Southdowns Pharmacy — functions.php
 * Core theme setup, ACF options page, helper functions, asset enqueuing.
 */

// ============================================================
// THEME SETUP
// ============================================================

add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo' );

    register_nav_menus( [
        'primary'        => __( 'Primary Navigation', 'southdowns-pharmacy' ),
        'footer-services' => __( 'Footer Services', 'southdowns-pharmacy' ),
        'footer-info'    => __( 'Footer Information', 'southdowns-pharmacy' ),
    ] );
} );


// ============================================================
// ACF OPTIONS PAGE (Pharmacy Settings)
// ============================================================

add_action( 'acf/init', function() {
    if ( function_exists( 'acf_add_options_page' ) ) {

        acf_add_options_page( [
            'page_title'  => 'Pharmacy Settings',
            'menu_title'  => 'Pharmacy Settings',
            'menu_slug'   => 'pharmacy-settings',
            'capability'  => 'manage_options',
            'icon_url'    => 'dashicons-heart',
            'position'    => 2,
            'redirect'    => false,
        ] );

        acf_add_options_sub_page( [
            'page_title'  => 'Branch Locations',
            'menu_title'  => 'Branch Locations',
            'parent_slug' => 'pharmacy-settings',
        ] );

        acf_add_options_sub_page( [
            'page_title'  => 'Contact & Social',
            'menu_title'  => 'Contact & Social',
            'parent_slug' => 'pharmacy-settings',
        ] );
    }
} );


// ============================================================
// HELPER FUNCTIONS
// ============================================================

/**
 * Get a global pharmacy options field (ACF options page).
 * Usage: sp_option( 'sp_pharmacy_name' )
 *
 * @param string $field_name  ACF field name.
 * @param mixed  $fallback    Default value if field is empty.
 * @return mixed
 */
function sp_option( string $field_name, $fallback = '' ) {
    if ( ! function_exists( 'get_field' ) ) {
        return $fallback;
    }
    $value = get_field( $field_name, 'option' );
    if ( $value === null || $value === '' || $value === false ) {
        return $fallback;
    }
    return $value;
}

/**
 * Get a page-level ACF field, falling back to options then hardcoded default.
 * Usage: sp_field( 'yf_hero_headline', 'Yellow Fever Vaccination' )
 *
 * @param string $field_name  ACF field name.
 * @param mixed  $fallback    Default value if field is empty on both page and options.
 * @return mixed
 */
function sp_field( string $field_name, $fallback = '' ) {
    if ( ! function_exists( 'get_field' ) ) {
        return $fallback;
    }
    $value = get_field( $field_name );
    if ( $value === null || $value === '' || $value === false ) {
        return $fallback;
    }
    return $value;
}

/**
 * Pharmacy name.
 */
function sp_pharmacy_name(): string {
    return sp_option( 'sp_pharmacy_name', 'Southdowns Pharmacy' );
}

/**
 * Primary phone number (raw, for tel: links).
 */
function sp_phone_raw(): string {
    return sp_option( 'sp_phone_raw', '02392123456' );
}

/**
 * Primary phone number (formatted, for display).
 */
function sp_phone(): string {
    return sp_option( 'sp_phone_display', '023 9212 3456' );
}

/**
 * Primary booking URL.
 */
function sp_booking_url(): string {
    return sp_option( 'sp_booking_url', '#' );
}

/**
 * Logo URL (falls back to Customizer logo, then theme asset).
 */
function sp_logo_url(): string {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        $logo = wp_get_attachment_image_url( $custom_logo_id, 'full' );
        if ( $logo ) return $logo;
    }
    return sp_option( 'sp_logo_url', 'https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773141719755-0.png' );
}

/**
 * Primary contact email.
 */
function sp_email(): string {
    return sp_option( 'sp_email', 'info@southdownspharmacy.co.uk' );
}

/**
 * Get a specific branch's data by number (1–4).
 * Returns array: name, address_line1, address_line2, city, postcode, phone, hours_weekday, hours_saturday, maps_url
 *
 * @param int $branch  Branch number 1–4.
 * @return array
 */
function sp_branch( int $branch ): array {
    $defaults = [
        1 => [
            'name'            => 'Emsworth',
            'address_line1'   => '2-4 Central Buildings',
            'address_line2'   => 'Emsworth',
            'city'            => 'Hampshire',
            'postcode'        => 'PO10 7DU',
            'phone'           => '023 9212 3456',
            'hours_weekday'   => 'Mon–Fri: 9:00am – 6:00pm',
            'hours_saturday'  => 'Saturday: 9:00am – 1:00pm',
            'maps_url'        => '#',
        ],
        2 => [
            'name'            => 'Havant',
            'address_line1'   => 'Bosmere Medical Centre, Solent Road',
            'address_line2'   => 'Havant',
            'city'            => 'Hampshire',
            'postcode'        => 'PO9 1DQ',
            'phone'           => '023 9212 3456',
            'hours_weekday'   => 'Mon–Fri: 9:00am – 6:00pm',
            'hours_saturday'  => 'Saturday: 9:00am – 1:00pm',
            'maps_url'        => '#',
        ],
        3 => [
            'name'            => 'Leigh Park',
            'address_line1'   => '35 Park Parade',
            'address_line2'   => 'Leigh Park, Havant',
            'city'            => 'Hampshire',
            'postcode'        => 'PO9 5AA',
            'phone'           => '023 9212 3456',
            'hours_weekday'   => 'Mon–Fri: 9:00am – 6:00pm',
            'hours_saturday'  => 'Saturday: 9:00am – 1:00pm',
            'maps_url'        => '#',
        ],
        4 => [
            'name'            => 'Rowlands Castle',
            'address_line1'   => '12 The Green',
            'address_line2'   => 'Rowlands Castle',
            'city'            => 'Hampshire',
            'postcode'        => 'PO9 6BN',
            'phone'           => '023 9212 3456',
            'hours_weekday'   => 'Mon–Fri: 9:00am – 6:00pm',
            'hours_saturday'  => 'Saturday: 9:00am – 1:00pm',
            'maps_url'        => '#',
        ],
    ];

    $b = $defaults[ $branch ] ?? $defaults[1];

    // Override with ACF options if set
    $prefix = 'sp_branch_' . $branch . '_';
    foreach ( array_keys( $b ) as $key ) {
        $acf_value = sp_option( $prefix . $key );
        if ( $acf_value !== '' ) {
            $b[ $key ] = $acf_value;
        }
    }

    return $b;
}


// ============================================================
// ASSET ENQUEUING
// ============================================================

add_action( 'wp_enqueue_scripts', function() {
    $ver = wp_get_theme()->get( 'Version' );

    // Tailwind CSS CDN
    wp_enqueue_script(
        'tailwind-cdn',
        'https://cdn.tailwindcss.com',
        [],
        null,
        false
    );

    // Tailwind config (Jost font family)
    wp_add_inline_script( 'tailwind-cdn', '
        tailwind.config = {
            content: [],
            theme: {
                extend: {
                    fontFamily: {
                        jost: ["Jost", "sans-serif"]
                    }
                }
            }
        };
    ' );

    // Global theme stylesheet (Jost font + shared CSS classes)
    wp_enqueue_style(
        'southdowns-global',
        get_template_directory_uri() . '/assets/css/global.css',
        [],
        $ver
    );

    // Page-specific scripts
    $template = get_page_template_slug();

    if ( $template === 'page-templates/page-weight-loss.php' ) {
        wp_enqueue_script(
            'southdowns-weight-loss',
            get_template_directory_uri() . '/assets/js/weight-loss.js',
            [],
            $ver,
            true
        );
    }

    if ( $template === 'page-templates/page-travel-health.php' ) {
        wp_enqueue_script(
            'southdowns-travel-health',
            get_template_directory_uri() . '/assets/js/travel-health.js',
            [],
            $ver,
            true
        );
    }

    if ( $template === 'page-templates/page-yellow-fever.php' ) {
        wp_enqueue_script(
            'southdowns-yellow-fever',
            get_template_directory_uri() . '/assets/js/yellow-fever.js',
            [],
            $ver,
            true
        );
    }
} );


// ============================================================
// DISABLE GUTENBERG FOR CUSTOM PAGE TEMPLATES
// ============================================================

add_filter( 'use_block_editor_for_post', function( bool $use_block_editor, \WP_Post $post ): bool {
    $custom_templates = [
        'page-templates/page-home.php',
        'page-templates/page-weight-loss.php',
        'page-templates/page-travel-health.php',
        'page-templates/page-yellow-fever.php',
    ];
    $template = get_page_template_slug( $post->ID );
    if ( in_array( $template, $custom_templates, true ) ) {
        return false;
    }
    return $use_block_editor;
}, 10, 2 );


// ============================================================
// JSON-LD SCHEMA (FAQPage — output per page template)
// ============================================================

add_action( 'wp_head', function() {
    // Individual page templates handle their own JSON-LD via wp_head hooks
    // or inline script blocks. This is a placeholder for global schema.
    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'Pharmacy',
        'name'     => sp_pharmacy_name(),
        'url'      => home_url(),
        'telephone' => sp_phone(),
        'email'    => sp_email(),
        'address'  => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => '2-4 Central Buildings',
            'addressLocality' => 'Emsworth',
            'addressRegion'   => 'Hampshire',
            'postalCode'      => 'PO10 7DU',
            'addressCountry'  => 'GB',
        ],
        'openingHours' => [ 'Mo-Fr 09:00-18:00', 'Sa 09:00-13:00' ],
    ];
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
} );
