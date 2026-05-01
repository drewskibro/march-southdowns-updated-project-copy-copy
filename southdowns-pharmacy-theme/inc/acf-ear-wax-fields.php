<?php
/**
 * ACF Local Field Group — Ear Wax Removal Page
 *
 * Applies to: page-templates/page-ear-wax.php
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
        'key'                   => 'group_ear_wax_page',
        'title'                 => 'Ear Wax Removal — Page Content',
        'position'              => 'acf_after_title',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => [ 'the_content' ],
        'active'                => true,

        'location' => [
            [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-ear-wax.php' ] ],
        ],

        'fields' => [

            // ---- Tab 1 · Hero ------------------------------------
            [ 'key' => 'field_ew_tab_hero', 'label' => 'Hero', 'name' => '', 'type' => 'tab' ],
            [
                'key'           => 'field_ew_hero_image',
                'label'         => 'Hero Image',
                'name'          => 'ew_hero_image',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => 'Displayed on the right half of the hero (desktop) and as the background on mobile. Minimum 1200 × 800 px.',
            ],
            [
                'key'         => 'field_ew_hero_badge',
                'label'       => 'Hero Badge Text',
                'name'        => 'ew_hero_badge',
                'type'        => 'text',
                'placeholder' => 'TympaHealth Certified',
                'instructions' => 'Small uppercase eyebrow above the headline (hairline-rule badge).',
            ],
            [
                'key'         => 'field_ew_hero_headline_pre',
                'label'       => 'Headline — Prefix',
                'name'        => 'ew_hero_headline_pre',
                'type'        => 'text',
                'placeholder' => 'Professional',
                'instructions' => 'Text before the italic serif emphasis. Add a trailing space if you want a gap before the italic word(s).',
            ],
            [
                'key'         => 'field_ew_hero_headline_em',
                'label'       => 'Headline — Serif Italic Emphasis',
                'name'        => 'ew_hero_headline_em',
                'type'        => 'text',
                'placeholder' => 'ear wax removal',
                'instructions' => 'The word(s) shown in the Playfair Display serif italic style. Leave empty to skip the emphasis.',
            ],
            [
                'key'         => 'field_ew_hero_headline_post',
                'label'       => 'Headline — Suffix',
                'name'        => 'ew_hero_headline_post',
                'type'        => 'text',
                'placeholder' => 'by microsuction',
                'instructions' => 'Text after the italic serif emphasis. Add a leading space if you want a gap after the italic word(s).',
            ],
            [
                'key'         => 'field_ew_hero_body',
                'label'       => 'Hero Body Text',
                'name'        => 'ew_hero_body',
                'type'        => 'textarea',
                'rows'        => 3,
                'placeholder' => 'Powered by TympaHealth, our trained clinicians use gentle low-pressure microsuction — the gold standard in ear care. No water, no mess, completely painless with immediate results.',
            ],
            [
                'key'         => 'field_ew_hero_trust_bar',
                'label'       => 'Trust Bar',
                'name'        => 'ew_hero_trust_bar',
                'type'        => 'text',
                'placeholder' => 'From £49 · Free follow-up included · Same-day appointments',
                'instructions' => 'Single line of trust copy beneath the buttons.',
            ],
            [
                'key'           => 'field_ew_hero_roundel_1',
                'label'         => 'Roundel Badge — Top',
                'name'          => 'ew_hero_roundel_1',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'thumbnail',
                'instructions'  => 'Floating circular badge at top of the dividing line (desktop). Square PNG, 260 × 260 px recommended (renders at 130 × 130).',
            ],
            [
                'key'           => 'field_ew_hero_roundel_2',
                'label'         => 'Roundel Badge — Centre',
                'name'          => 'ew_hero_roundel_2',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'thumbnail',
                'instructions'  => 'Floating circular badge in the centre of the dividing line. Same specs as the top roundel.',
            ],
            [
                'key'           => 'field_ew_hero_roundel_3',
                'label'         => 'Roundel Badge — Bottom',
                'name'          => 'ew_hero_roundel_3',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'thumbnail',
                'instructions'  => 'Floating circular badge at the bottom of the dividing line. Same specs as the top roundel.',
            ],

        ],
    ] );

} );
