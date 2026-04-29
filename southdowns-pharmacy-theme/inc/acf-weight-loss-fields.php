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
                'key'           => 'field_wl_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'wl_hero_image',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => 'Displayed on the right half of the hero on desktop and as the background image on mobile. Recommended minimum 1200 × 800 px.',
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
            // TAB 2 — SCIENCE SECTION
            // ============================================================
            [
                'key'   => 'field_wl_tab_science',
                'label' => 'Science Section',
                'name'  => '',
                'type'  => 'tab',
            ],
            [
                'key'          => 'field_wl_science_eyebrow',
                'label'        => 'Eyebrow Label',
                'name'         => 'wl_science_eyebrow',
                'type'         => 'text',
                'instructions' => 'Small letter-spaced label above the headline (e.g. "Clinical Evidence").',
                'placeholder'  => 'Clinical Evidence',
            ],
            [
                'key'          => 'field_wl_science_headline',
                'label'        => 'Headline',
                'name'         => 'wl_science_headline',
                'type'         => 'text',
                'instructions' => 'Serif display headline introducing the chart.',
                'placeholder'  => 'Why diets alone fail — the science in one chart',
            ],
            [
                'key'          => 'field_wl_science_subhead',
                'label'        => 'Sub-headline',
                'name'         => 'wl_science_subhead',
                'type'         => 'textarea',
                'rows'         => 2,
                'placeholder'  => 'In randomised trials, GLP-1 receptor agonists produce sustained weight loss that lifestyle intervention alone rarely achieves.',
            ],
            [
                'key'          => 'field_wl_science_citation',
                'label'        => 'Chart Citation',
                'name'         => 'wl_science_citation',
                'type'         => 'text',
                'instructions' => 'Small footnote beneath the chart.',
                'placeholder'  => 'Data adapted from STEP-1 (Wilding et al., N Engl J Med 2021) and naturalistic dieting studies.',
            ],
            [
                'key'          => 'field_wl_science_quote',
                'label'        => 'Pullquote',
                'name'         => 'wl_science_quote',
                'type'         => 'textarea',
                'rows'         => 3,
                'placeholder'  => 'The patients I see on GLP-1 therapy describe something dieting never gave them — relief from the constant thinking about food. That is what makes the weight loss sustainable.',
            ],
            [
                'key'          => 'field_wl_science_quote_author',
                'label'        => 'Pullquote — Attribution Name',
                'name'         => 'wl_science_quote_author',
                'type'         => 'text',
                'placeholder'  => 'Alex Chen, MPharm',
            ],
            [
                'key'          => 'field_wl_science_quote_role',
                'label'        => 'Pullquote — Attribution Role',
                'name'         => 'wl_science_quote_role',
                'type'         => 'text',
                'placeholder'  => 'Lead Pharmacist, Southdowns Pharmacy',
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
