<?php
/**
 * ACF Local Field Group — Travel Health Page
 *
 * Applies to: page-templates/page-travel-health.php
 * Position:   acf_after_title (requires Classic Editor — see functions.php)
 *
 * Wired incrementally, section by section. Tabs to be added as more
 * sections of the template are migrated to ACF.
 *
 * Tabs registered so far:
 *   1. Hero
 */

add_action( 'acf/init', function () {

    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( [
        'key'                   => 'group_travel_health_page',
        'title'                 => 'Travel Health — Page Content',
        'position'              => 'acf_after_title',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => [ 'the_content' ],
        'active'                => true,

        'location' => [
            [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-health.php' ] ],
        ],

        'fields' => [

            // ---- Tab 1 · Hero ------------------------------------
            [ 'key' => 'field_th_tab_hero', 'label' => 'Hero', 'name' => '', 'type' => 'tab' ],
            [
                'key'           => 'field_th_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'th_hero_image',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => 'Displayed on the right half of the hero (desktop) and as the background on mobile. Minimum 1200 × 800 px.',
            ],
            [
                'key'         => 'field_th_hero_badge',
                'label'       => 'Hero Badge Text',
                'name'        => 'th_hero_badge',
                'type'        => 'text',
                'placeholder' => 'No GP Referral · Same-Day Appointments',
            ],
            [
                'key'         => 'field_th_hero_headline',
                'label'       => 'Hero Headline (H1)',
                'name'        => 'th_hero_headline',
                'type'        => 'text',
                'placeholder' => 'Hampshire’s Trusted Travel Health Clinic',
            ],
            [
                'key'         => 'field_th_hero_body',
                'label'       => 'Hero Body Text',
                'name'        => 'th_hero_body',
                'type'        => 'textarea',
                'rows'        => 3,
                'placeholder' => 'Southdowns Pharmacy’s dedicated travel health service, serving Hampshire from 4 locations. Expert vaccination advice, same-day appointments, and everything you need to travel safely — all under one roof.',
            ],

        ],
    ] );

} );
