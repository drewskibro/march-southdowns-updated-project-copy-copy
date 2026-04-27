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
 *   2. Stats Bar
 *   3. Why Choose Us
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

            // ---- Tab 2 · Stats Bar -------------------------------
            [ 'key' => 'field_th_tab_stats', 'label' => 'Stats Bar', 'name' => '', 'type' => 'tab' ],
            [
                'key'          => 'field_th_stats',
                'label'        => 'Stat Cards',
                'name'         => 'th_stats',
                'type'         => 'repeater',
                'min'          => 0,
                'max'          => 4,
                'layout'       => 'block',
                'button_label' => 'Add Stat',
                'instructions' => 'Up to four stat cards. Leave empty to use defaults. Display order matches the order set here.',
                'sub_fields'   => [
                    [ 'key' => 'field_th_stat_value',   'label' => 'Big Value',          'name' => 'value',   'type' => 'text', 'instructions' => 'e.g. "1,000+", "Same Day", "4.9★"' ],
                    [ 'key' => 'field_th_stat_label',   'label' => 'Label',              'name' => 'label',   'type' => 'text', 'instructions' => 'e.g. "Travellers Protected"' ],
                    [ 'key' => 'field_th_stat_caption', 'label' => 'Supporting Caption', 'name' => 'caption', 'type' => 'text', 'instructions' => 'Smaller line beneath the label.' ],
                ],
            ],

            // ---- Tab 3 · Why Choose Us ---------------------------
            [ 'key' => 'field_th_tab_why', 'label' => 'Why Choose Us', 'name' => '', 'type' => 'tab' ],
            [
                'key'         => 'field_th_why_eyebrow',
                'label'       => 'Eyebrow Text',
                'name'        => 'th_why_eyebrow',
                'type'        => 'text',
                'placeholder' => 'More Than Just Jabs',
            ],
            [
                'key'         => 'field_th_why_headline',
                'label'       => 'Headline',
                'name'        => 'th_why_headline',
                'type'        => 'text',
                'placeholder' => 'Why Choose Our Hampshire Travel Clinics?',
            ],
            [
                'key'         => 'field_th_why_subhead',
                'label'       => 'Sub-headline',
                'name'        => 'th_why_subhead',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'Comprehensive travel health protection that gives you confidence from booking to landing.',
            ],
            [
                'key'          => 'field_th_why_cards',
                'label'        => 'Cards',
                'name'         => 'th_why_cards',
                'type'         => 'repeater',
                'min'          => 0,
                'max'          => 3,
                'layout'       => 'block',
                'button_label' => 'Add Card',
                'instructions' => 'Up to three feature cards. Numbered badges (01/02/03) are generated automatically from card position. Leave empty to use defaults.',
                'sub_fields'   => [
                    [
                        'key'           => 'field_th_why_card_image',
                        'label'         => 'Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'url',
                        'preview_size'  => 'medium',
                        'instructions'  => 'Recommended 600 × 400 px (3:2).',
                    ],
                    [ 'key' => 'field_th_why_card_title',      'label' => 'Title',      'name' => 'title',      'type' => 'text' ],
                    [ 'key' => 'field_th_why_card_body',       'label' => 'Body',       'name' => 'body',       'type' => 'textarea', 'rows' => 4 ],
                    [ 'key' => 'field_th_why_card_link_label', 'label' => 'Link Label', 'name' => 'link_label', 'type' => 'text', 'instructions' => 'e.g. "Book Consultation". Leave empty to hide the link.' ],
                    [ 'key' => 'field_th_why_card_link_url',   'label' => 'Link URL',   'name' => 'link_url',   'type' => 'url',  'instructions' => 'Full URL or in-page anchor (e.g. "#vaccines"). Leave empty to default to the global booking URL.' ],
                ],
            ],

        ],
    ] );

} );
