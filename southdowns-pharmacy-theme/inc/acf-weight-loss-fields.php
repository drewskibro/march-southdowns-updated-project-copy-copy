<?php
/**
 * ACF Local Field Group — Weight Loss Page
 *
 * Applies to: page-templates/page-weight-loss.php
 * Position:   acf_after_title (below page title, above classic editor)
 *
 * Tabs:
 *   1. Hero
 *   2. Science Section
 *   3. Pricing
 *   4. Testimonials
 *   5. FAQ
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

            // ============================================================
            // TAB 4 — TESTIMONIALS (S7)
            // ============================================================
            [ 'key' => 'field_wl_tab_testimonials', 'label' => 'Testimonials', 'name' => '', 'type' => 'tab' ],
            [
                'key'         => 'field_wl_testimonials_eyebrow',
                'label'       => 'Eyebrow Text',
                'name'        => 'wl_testimonials_eyebrow',
                'type'        => 'text',
                'placeholder' => 'Patient Stories',
            ],
            [
                'key'         => 'field_wl_testimonials_headline',
                'label'       => 'Headline',
                'name'        => 'wl_testimonials_headline',
                'type'        => 'text',
                'placeholder' => 'Real patients, real results',
            ],
            [
                'key'         => 'field_wl_testimonials_subhead',
                'label'       => 'Sub-headline',
                'name'        => 'wl_testimonials_subhead',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'Hundreds of Hampshire patients have transformed their health through our medical weight loss programme.',
            ],
            [
                'key'          => 'field_wl_testimonials_reviews',
                'label'        => 'Reviews',
                'name'         => 'wl_testimonials_reviews',
                'type'         => 'repeater',
                'min'          => 0,
                'max'          => 12,
                'layout'       => 'block',
                'button_label' => 'Add Review',
                'instructions' => 'Up to twelve review cards (six recommended). Cards always render with five yellow stars; per-card star ratings are not editable. Leave empty to use the six built-in defaults.',
                'sub_fields'   => [
                    [ 'key' => 'field_wl_review_quote',    'label' => 'Quote',             'name' => 'quote',    'type' => 'textarea', 'rows' => 4, 'instructions' => 'No surrounding quotation marks needed — the template adds them.' ],
                    [ 'key' => 'field_wl_review_initials', 'label' => 'Initials',          'name' => 'initials', 'type' => 'text', 'instructions' => '2–3 letters shown in the circular avatar (e.g. "SH").' ],
                    [ 'key' => 'field_wl_review_name',     'label' => 'Name',              'name' => 'name',     'type' => 'text', 'placeholder' => 'Sarah H.' ],
                    [ 'key' => 'field_wl_review_location', 'label' => 'Location / Branch', 'name' => 'location', 'type' => 'text', 'placeholder' => 'Waterlooville' ],
                ],
            ],
            [
                'key'          => 'field_wl_testimonials_trust',
                'label'        => 'Trust Row',
                'name'         => 'wl_testimonials_trust',
                'type'         => 'repeater',
                'min'          => 0,
                'max'          => 4,
                'layout'       => 'table',
                'button_label' => 'Add Trust Item',
                'instructions' => 'Trust indicators below the cards. Icons cycle by position: 1 = star, 2 = people, 3 = shield. Leave empty to use defaults.',
                'sub_fields'   => [
                    [ 'key' => 'field_wl_trust_value',   'label' => 'Value',   'name' => 'value',   'type' => 'text', 'instructions' => 'Bold value (e.g. "4.9/5", "400+", "GPhC").' ],
                    [ 'key' => 'field_wl_trust_caption', 'label' => 'Caption', 'name' => 'caption', 'type' => 'text', 'instructions' => 'e.g. "average rating", "verified reviews".' ],
                ],
            ],

            // ============================================================
            // TAB 5 — FAQ (S10)
            // ============================================================
            [ 'key' => 'field_wl_tab_faq', 'label' => 'FAQ', 'name' => '', 'type' => 'tab' ],
            [
                'key'         => 'field_wl_faq_eyebrow',
                'label'       => 'Eyebrow Text',
                'name'        => 'wl_faq_eyebrow',
                'type'        => 'text',
                'placeholder' => 'FAQs',
            ],
            [
                'key'         => 'field_wl_faq_headline',
                'label'       => 'Sidebar Headline',
                'name'        => 'wl_faq_headline',
                'type'        => 'text',
                'placeholder' => 'Common questions about medical weight loss',
            ],
            [
                'key'         => 'field_wl_faq_intro',
                'label'       => 'Sidebar Intro',
                'name'        => 'wl_faq_intro',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'Everything you need to know before starting your journey. Can’t find your answer? Call us free.',
            ],
            [
                'key'          => 'field_wl_faq_stats',
                'label'        => 'Sidebar Stat Tiles',
                'name'         => 'wl_faq_stats',
                'type'         => 'repeater',
                'min'          => 0,
                'max'          => 6,
                'layout'       => 'table',
                'button_label' => 'Add Stat',
                'instructions' => 'Up to six small stat tiles in the sidebar (three recommended). Leave empty to use defaults.',
                'sub_fields'   => [
                    [ 'key' => 'field_wl_faq_stat_value', 'label' => 'Value', 'name' => 'value', 'type' => 'text', 'instructions' => 'e.g. "4.9", "400+", "10k+".' ],
                    [ 'key' => 'field_wl_faq_stat_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'instructions' => 'e.g. "Rating", "Reviews", "Patients".' ],
                ],
            ],
            [
                'key'         => 'field_wl_faq_cta_label',
                'label'       => 'CTA Button Label',
                'name'        => 'wl_faq_cta_label',
                'type'        => 'text',
                'placeholder' => 'Book Free Consultation',
                'instructions' => 'Button beneath the sidebar stat tiles. Links to the global booking URL.',
            ],
            [
                'key'          => 'field_wl_faq_items',
                'label'        => 'FAQ Items',
                'name'         => 'wl_faq_items',
                'type'         => 'repeater',
                'min'          => 0,
                'max'          => 30,
                'layout'       => 'block',
                'button_label' => 'Add FAQ',
                'instructions' => 'Accordion items. Answers accept basic HTML (e.g. <strong>, <em>, links). Leave empty to use the eight built-in defaults.',
                'sub_fields'   => [
                    [ 'key' => 'field_wl_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ],
                    [ 'key' => 'field_wl_faq_answer',   'label' => 'Answer',   'name' => 'answer',   'type' => 'textarea', 'rows' => 5, 'instructions' => 'Basic HTML allowed.' ],
                ],
            ],
        ],
    ] );
} );
