<?php
/**
 * ACF Local Field Group — Weight Loss Page
 *
 * Applies to: page-templates/page-weight-loss.php
 * Position:   acf_after_title (below page title, above classic editor)
 *
 * Tabs:
 *   1. Hero
 *   2. Statistics
 *   3. Pricing
 */

add_action( 'acf/init', function () {

    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( [
        'key'                   => 'group_weight_loss_page',
        'title'                 => 'Weight Loss Page Content',
        'position'              => 'acf_after_title',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => [ 'the_content' ],
        'active'                => true,

        'location' => [
            [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-weight-loss.php' ] ],
        ],

        'fields' => [

            // ============================================================
            // TAB 1 — HERO
            // ============================================================
            [
                'key'   => 'field_wl_tab_hero',
                'label' => 'Hero',
                'name'  => '',
                'type'  => 'tab',
            ],
            [
                'key'          => 'field_wl_hero_headline',
                'label'        => 'Hero Headline (H1)',
                'name'         => 'wl_hero_headline',
                'type'         => 'text',
                'instructions' => 'Main headline displayed in the hero section.',
                'placeholder'  => 'Lose 10–20% of your body weight in 12 months — with prescription support at your local Hampshire pharmacy',
            ],
            [
                'key'          => 'field_wl_hero_body',
                'label'        => 'Hero Body Text',
                'name'         => 'wl_hero_body',
                'type'         => 'textarea',
                'rows'         => 3,
                'instructions' => 'Short paragraph shown beneath the headline in the hero section.',
                'placeholder'  => 'Mounjaro and Wegovy prescriptions from our Hampshire pharmacists. No GP referral. No long waits. Expert face-to-face care at Southsea, Waterlooville, Havant & Portsmouth.',
            ],
            [
                'key'          => 'field_wl_hero_badge_text',
                'label'        => 'Hero Badge Text',
                'name'         => 'wl_hero_badge_text',
                'type'         => 'text',
                'instructions' => 'Small pill badge above the headline.',
                'placeholder'  => 'Medical Weight Loss · Hampshire',
            ],

            // ============================================================
            // TAB 2 — STATISTICS
            // ============================================================
            [
                'key'   => 'field_wl_tab_stats',
                'label' => 'Statistics',
                'name'  => '',
                'type'  => 'tab',
            ],
            [
                'key'          => 'field_wl_stat_1_number',
                'label'        => 'Stat 1 — Number',
                'name'         => 'wl_stat_1_number',
                'type'         => 'text',
                'instructions' => 'e.g. 95%',
                'placeholder'  => '95%',
            ],
            [
                'key'          => 'field_wl_stat_1_label',
                'label'        => 'Stat 1 — Label',
                'name'         => 'wl_stat_1_label',
                'type'         => 'text',
                'placeholder'  => 'of dieters regain weight within 5 years',
            ],
            [
                'key'          => 'field_wl_stat_2_number',
                'label'        => 'Stat 2 — Number',
                'name'         => 'wl_stat_2_number',
                'type'         => 'text',
                'placeholder'  => '3×',
            ],
            [
                'key'          => 'field_wl_stat_2_label',
                'label'        => 'Stat 2 — Label',
                'name'         => 'wl_stat_2_label',
                'type'         => 'text',
                'placeholder'  => 'more weight lost with GLP-1 medication vs diet alone',
            ],
            [
                'key'          => 'field_wl_stat_3_number',
                'label'        => 'Stat 3 — Number',
                'name'         => 'wl_stat_3_number',
                'type'         => 'text',
                'placeholder'  => '68%',
            ],
            [
                'key'          => 'field_wl_stat_3_label',
                'label'        => 'Stat 3 — Label',
                'name'         => 'wl_stat_3_label',
                'type'         => 'text',
                'placeholder'  => 'of adults in England are overweight or obese',
            ],

            // ============================================================
            // TAB 3 — PRICING
            // ============================================================
            [
                'key'   => 'field_wl_tab_pricing',
                'label' => 'Pricing',
                'name'  => '',
                'type'  => 'tab',
            ],
            [
                'key'          => 'field_wl_mounjaro_price',
                'label'        => 'Mounjaro — Price Line',
                'name'         => 'wl_mounjaro_price',
                'type'         => 'text',
                'instructions' => 'Displayed at the bottom of the Mounjaro treatment card.',
                'placeholder'  => 'From £149/month including pharmacist support',
            ],
            [
                'key'          => 'field_wl_wegovy_price',
                'label'        => 'Wegovy — Price Line',
                'name'         => 'wl_wegovy_price',
                'type'         => 'text',
                'instructions' => 'Displayed at the bottom of the Wegovy treatment card.',
                'placeholder'  => 'From £149/month including pharmacist support',
            ],
        ],
    ] );
} );
