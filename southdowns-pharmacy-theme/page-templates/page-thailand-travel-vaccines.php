<?php
/**
 * Template Name: Thailand Travel Vaccinations
 *
 * Hampshire Thailand travel health & vaccinations landing page.
 *
 * @package Southdowns_Pharmacy
 */

get_header(); ?>

<style>
  /* ───── Animated glow border (used on featured pricing card) ───── */
  @property --angle {
    syntax: '<angle>';
    initial-value: 0deg;
    inherits: false;
  }
  .yf-glow-card {
    position: relative;
    background: conic-gradient(from var(--angle), #3b82f6, #93c5fd, #3b82f6);
    animation: yf-rotate 6s linear infinite;
  }
  @keyframes yf-rotate {
    to { --angle: 360deg; }
  }

  /* ───── FAQ accordion icon rotation ───── */
  .yf-faq-trigger[aria-expanded="true"] .yf-faq-icon {
    transform: rotate(180deg);
  }

  /* ───── Reveal-on-scroll base ───── */
  .reveal-item {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.55s ease, transform 0.55s ease;
  }
</style>


<!-- ═══════════════════════════════════════════════════════
     S1 · HERO — split layout, blue gradient + image
════════════════════════════════════════════════════════ -->
<section class="relative w-full min-h-[500px] lg:min-h-[600px] overflow-hidden">

  <!-- Desktop split: 2 columns -->
  <div class="hidden lg:grid grid-cols-2 min-h-[600px]">

    <!-- Left: copy -->
    <div class="relative flex items-center px-12 xl:px-20 py-20" style="background:#1a73e9;">
      <div class="absolute inset-0 dot-pattern opacity-50 pointer-events-none"></div>
      <div class="absolute -bottom-20 -left-20 w-96 h-96 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(96,165,250,0.35) 0%,transparent 70%);"></div>

      <div class="relative z-10 max-w-xl">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-white/15 backdrop-blur-sm text-white border border-white/20">
          <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-300 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-200"></span>
          </span>
          Thailand Travel Health &middot; Hampshire
        </span>
        <h1 class="text-4xl xl:text-5xl font-extrabold text-white mb-6 font-jost leading-tight">Thailand Travel Vaccinations in Hampshire</h1>
        <p class="text-blue-100 text-lg mb-8 font-jost leading-relaxed">Expert travel health advice and all essential vaccines for your Thailand trip. Same-day appointments available across all four of our Hampshire locations &mdash; no waiting lists, no delays.</p>

        <div class="flex flex-col sm:flex-row gap-3 mb-8">
          <a href="<?php echo esc_url( sp_booking_url() ); ?>" class="inline-flex items-center justify-center gap-2 bg-white text-blue-700 font-bold px-6 py-3.5 rounded-xl font-jost hover:bg-blue-50 transition-colors duration-200 shadow-lg">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            Book Thailand Travel Consultation
          </a>
          <a href="#vaccines" class="inline-flex items-center justify-center gap-2 bg-white/15 backdrop-blur-sm text-white font-bold px-6 py-3.5 rounded-xl font-jost border border-white/30 hover:bg-white/25 transition-colors duration-200">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            Check What Vaccines You Need
          </a>
        </div>

        <!-- Trust pills -->
        <div class="flex flex-wrap gap-2">
          <?php
          $hero_pills = [
            'GPhC Registered',
            'Same-Day Appointments',
            'Expert Pharmacist Advice',
            '4 Hampshire Locations',
          ];
          foreach ( $hero_pills as $p ) : ?>
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold font-jost bg-white/10 backdrop-blur-sm text-blue-100 border border-white/15">
            <svg class="w-3 h-3 text-blue-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            <?php echo esc_html( $p ); ?>
          </span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Right: image -->
    <div class="relative">
      <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?w=1200&q=80&auto=format&fit=crop" alt="Thailand temple at sunset" class="absolute inset-0 w-full h-full object-cover" loading="eager"/>
      <div class="absolute inset-0 bg-gradient-to-l from-transparent to-blue-900/20"></div>
    </div>
  </div>

  <!-- Mobile / tablet: stacked image with overlay -->
  <div class="lg:hidden relative min-h-[500px]" style="background:#1a73e9;">
    <img src="https://images.unsplash.com/photo-1528181304800-259b08848526?w=1200&q=80&auto=format&fit=crop" alt="Thailand temple at sunset" class="absolute inset-0 w-full h-full object-cover opacity-30" loading="eager"/>
    <div class="absolute inset-0 dot-pattern opacity-40 pointer-events-none"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-blue-900/40 via-blue-800/60 to-blue-900/80"></div>

    <div class="relative z-10 px-6 py-16 sm:px-10 max-w-2xl">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-white/15 backdrop-blur-sm text-white border border-white/20">
        <span class="relative flex h-2 w-2">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-300 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-200"></span>
        </span>
        Thailand Travel Health &middot; Hampshire
      </span>
      <h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-5 font-jost leading-tight">Thailand Travel Vaccinations in Hampshire</h1>
      <p class="text-blue-100 text-base sm:text-lg mb-7 font-jost">Expert travel health advice and all essential vaccines for your Thailand trip. Same-day appointments across all four Hampshire locations.</p>

      <div class="flex flex-col gap-3 mb-6">
        <a href="<?php echo esc_url( sp_booking_url() ); ?>" class="inline-flex items-center justify-center gap-2 bg-white text-blue-700 font-bold px-5 py-3 rounded-xl font-jost hover:bg-blue-50 transition-colors duration-200 shadow-lg">
          Book Thailand Travel Consultation
        </a>
        <a href="#vaccines" class="inline-flex items-center justify-center gap-2 bg-white/15 backdrop-blur-sm text-white font-bold px-5 py-3 rounded-xl font-jost border border-white/30 hover:bg-white/25 transition-colors duration-200">
          Check What Vaccines You Need
        </a>
      </div>

      <div class="flex flex-wrap gap-2">
        <?php foreach ( $hero_pills as $p ) : ?>
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold font-jost bg-white/10 backdrop-blur-sm text-blue-100 border border-white/15">
          <svg class="w-3 h-3 text-blue-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
          <?php echo esc_html( $p ); ?>
        </span>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S2 · INTRO  (light)
════════════════════════════════════════════════════════ -->
<section class="py-16 md:py-24 bg-gradient-to-br from-slate-50 via-white to-blue-50/30">
  <div class="section-container">
    <div class="max-w-3xl mx-auto text-center">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-blue-50 text-blue-700 border border-blue-100">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        Travel Health Advice
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-5 font-jost">Essential Vaccinations for Thailand Travel</h2>
      <p class="text-slate-700 text-lg mb-5 font-jost leading-relaxed">Planning a trip to Thailand from Hampshire? Our travel clinics across Southsea, Waterlooville, Havant and Portsmouth provide comprehensive vaccination services and expert travel health advice for Thailand travellers.</p>
      <p class="text-slate-600 text-base font-jost leading-relaxed">Whether you're visiting Bangkok, Phuket, Chiang Mai, or exploring rural Thailand, we'll ensure you're fully protected with the right vaccines and antimalarial medication. Our GPhC-registered pharmacists assess your specific itinerary and medical history to create a personalised vaccination plan tailored to your trip.</p>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S3 · VACCINES  (dark, id="vaccines")
════════════════════════════════════════════════════════ -->
<section id="vaccines" class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(160deg,#0f172a 0%,#1e3a8a 55%,#1d4ed8 100%);">
  <div class="absolute inset-0 dot-pattern pointer-events-none"></div>
  <div class="absolute top-1/4 right-0 w-96 h-96 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(96,165,250,0.18) 0%,transparent 70%);"></div>
  <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(59,130,246,0.15) 0%,transparent 70%);"></div>

  <div class="section-container relative z-10">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-white/15 backdrop-blur-sm text-white border border-white/20">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Vaccination Guide
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-jost">Recommended Vaccines for Thailand</h2>
      <p class="text-blue-200 text-lg max-w-2xl mx-auto font-jost">Our pharmacists will confirm exactly which vaccines you need based on your itinerary, activities and medical history.</p>
    </div>

    <?php
    $vaccine_groups = [
      [
        'tag'      => 'Routine Vaccines',
        'subhead'  => 'Ensure these are up to date before travel',
        'colour'   => 'blue',
        'vaccines' => [
          [
            'num'    => '01',
            'name'   => 'MMR (Measles, Mumps, Rubella)',
            'who'    => 'All travellers',
            'doses'  => '2 doses if not previously vaccinated',
            'desc'   => 'Essential routine vaccine protecting against three serious viral infections. Most UK adults received this as children &mdash; check your records before travelling.',
          ],
          [
            'num'    => '02',
            'name'   => 'DTP Booster (Diphtheria, Tetanus, Polio)',
            'who'    => 'All travellers',
            'doses'  => '1 booster dose',
            'desc'   => 'A combined booster vaccine recommended every 10 years for travellers. Protects against three potentially fatal diseases.',
          ],
          [
            'num'    => '03',
            'name'   => 'Hepatitis A',
            'who'    => 'All travellers',
            'doses'  => '1 dose (booster at 6&ndash;12 months)',
            'desc'   => 'Highly recommended for all Thailand travellers. Spread through contaminated food and water, Hepatitis A is common throughout Southeast Asia and provides long-term immunity from a single dose.',
          ],
        ],
      ],
      [
        'tag'      => 'Recommended Vaccines',
        'subhead'  => 'Strongly advised depending on your itinerary',
        'colour'   => 'amber',
        'vaccines' => [
          [
            'num'    => '04',
            'name'   => 'Hepatitis B',
            'who'    => 'Long stays, adventure travellers',
            'doses'  => '3 doses over 21 days (accelerated course available)',
            'desc'   => 'Recommended for longer stays or if you may be exposed to blood or body fluids. Particularly important for adventure travellers and those visiting rural areas.',
          ],
          [
            'num'    => '05',
            'name'   => 'Typhoid',
            'who'    => 'All travellers, especially street food lovers',
            'doses'  => '1 dose',
            'desc'   => 'Common in areas with poor sanitation. Spread through contaminated food and water &mdash; essential if you plan to eat street food or travel outside major tourist areas.',
          ],
          [
            'num'    => '06',
            'name'   => 'Japanese Encephalitis',
            'who'    => 'Rural travellers, long stays',
            'doses'  => '2 doses, 28 days apart',
            'desc'   => 'Recommended if visiting rural areas, especially rice-growing regions, or staying for extended periods. Spread by mosquitoes and can cause serious neurological illness.',
          ],
          [
            'num'    => '07',
            'name'   => 'Rabies',
            'who'    => 'Adventure travellers, those with likely animal contact',
            'doses'  => '3 doses over 21&ndash;28 days',
            'desc'   => 'Strongly recommended for adventure travellers, cyclists, and those visiting remote areas. Stray dogs and monkeys are common throughout Thailand and rabies is present. Fatal once symptoms appear &mdash; pre-exposure vaccination is essential.',
          ],
        ],
      ],
      [
        'tag'      => 'Required Vaccines',
        'subhead'  => 'May be mandatory depending on your route',
        'colour'   => 'rose',
        'vaccines' => [
          [
            'num'    => '08',
            'name'   => 'Yellow Fever (Certificate Required)',
            'who'    => 'Travellers arriving from countries with Yellow Fever risk',
            'doses'  => '1 dose (lifetime immunity)',
            'desc'   => 'Required if arriving from a country with risk of Yellow Fever transmission. Thailand requires a valid ICVP certificate if you are travelling from or transiting through a Yellow Fever endemic country. Our pharmacists will advise based on your specific itinerary. Southdowns Pharmacy is a NaTHNaC registered Yellow Fever Vaccination Centre.',
          ],
        ],
      ],
    ];

    /* Colour helper for category tags */
    $tag_styles = [
      'blue'  => 'bg-blue-500/20 text-blue-200 border-blue-400/30',
      'amber' => 'bg-amber-500/20 text-amber-200 border-amber-400/30',
      'rose'  => 'bg-rose-500/20 text-rose-200 border-rose-400/30',
    ];
    $bullet_styles = [
      'blue'  => 'bg-blue-500/30 text-blue-300',
      'amber' => 'bg-amber-500/30 text-amber-300',
      'rose'  => 'bg-rose-500/30 text-rose-300',
    ];
    ?>

    <div class="space-y-12 max-w-5xl mx-auto">
      <?php foreach ( $vaccine_groups as $group ) : ?>
      <div>
        <!-- Group header -->
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-2 mb-6 border-b border-white/10 pb-4">
          <div class="flex items-center gap-3">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold font-jost uppercase tracking-wider border <?php echo esc_attr( $tag_styles[ $group['colour'] ] ); ?>">
              <?php echo esc_html( $group['tag'] ); ?>
            </span>
          </div>
          <p class="text-blue-300/80 text-sm font-jost"><?php echo esc_html( $group['subhead'] ); ?></p>
        </div>

        <!-- Vaccine cards -->
        <div class="grid md:grid-cols-2 gap-4">
          <?php foreach ( $group['vaccines'] as $v ) : ?>
          <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 hover:bg-white/15 transition-colors duration-300 reveal-item">
            <div class="flex items-start gap-4 mb-3">
              <span class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center text-sm font-bold font-jost <?php echo esc_attr( $bullet_styles[ $group['colour'] ] ); ?>">
                <?php echo esc_html( $v['num'] ); ?>
              </span>
              <h3 class="text-lg font-bold text-white font-jost leading-snug pt-1.5"><?php echo wp_kses_post( $v['name'] ); ?></h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3 pl-14">
              <div>
                <p class="text-blue-300/60 text-xs font-semibold uppercase tracking-wider font-jost mb-0.5">Who needs it</p>
                <p class="text-blue-100 text-sm font-jost"><?php echo esc_html( $v['who'] ); ?></p>
              </div>
              <div>
                <p class="text-blue-300/60 text-xs font-semibold uppercase tracking-wider font-jost mb-0.5">Doses</p>
                <p class="text-blue-100 text-sm font-jost"><?php echo wp_kses_post( $v['doses'] ); ?></p>
              </div>
            </div>
            <p class="text-blue-100/80 text-sm font-jost leading-relaxed pl-14"><?php echo wp_kses_post( $v['desc'] ); ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S4 · HEALTH RISKS  (light)
════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 bg-slate-50">
  <div class="section-container">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-amber-50 text-amber-700 border border-amber-100">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        Risk Awareness
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 font-jost">Health Risks When Travelling to Thailand</h2>
      <p class="text-slate-600 text-lg max-w-2xl mx-auto font-jost">Understanding potential health risks helps you prepare properly. Our pharmacists will assess your specific itinerary and activities to provide tailored advice.</p>
    </div>

    <?php
    $risk_cards = [
      [
        'title' => 'Mosquito-Borne Diseases',
        'icon'  => '<path d="M12 2a10 10 0 0 0-10 10c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.64.71 1.03 1.61 1.03 2.71 0 3.84-2.34 4.68-4.57 4.93.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2z"/>',
        'desc'  => 'Dengue fever is widespread throughout Thailand, including urban areas like Bangkok. While malaria risk is low in most popular tourist destinations, it remains a concern in rural and border regions. Use DEET-based repellents and wear long sleeves during dawn and dusk. Note that dengue-carrying mosquitoes bite during the day as well as at dusk.',
      ],
      [
        'title' => 'Food &amp; Water Safety',
        'icon'  => '<path d="M3 3h18v3H3zM5 6v15h14V6"/><path d="M9 10h6M9 14h6"/>',
        'desc'  => 'Travellers\' diarrhoea is extremely common in Thailand. Drink bottled water only, avoid ice from unknown sources, and be cautious with street food &mdash; choose busy stalls with fresh preparation where possible. Typhoid and Hepatitis A are real risks from contaminated food and water, making vaccination essential before your trip.',
      ],
      [
        'title' => 'Japanese Encephalitis',
        'icon'  => '<path d="M3 12h2l2-9 4 18 4-12 2 6h4"/>',
        'desc'  => 'Risk is higher in rural and agricultural areas, particularly rice-growing regions. The virus is spread by mosquitoes and can cause serious brain inflammation. Vaccination is recommended for travellers spending extended time in rural Thailand, particularly during the rainy season between May and October.',
      ],
      [
        'title' => 'Rabies from Animal Bites',
        'icon'  => '<circle cx="12" cy="12" r="10"/><circle cx="9" cy="10" r="1.5"/><circle cx="15" cy="10" r="1.5"/><path d="M8 15s1.5 2 4 2 4-2 4-2"/>',
        'desc'  => 'Stray dogs and monkeys are common throughout Thailand, including on temple grounds and in tourist areas. Rabies is fatal once symptoms appear &mdash; pre-exposure vaccination is strongly recommended, particularly for adventure travellers, cyclists, and families travelling with young children who may approach animals.',
      ],
    ];
    ?>

    <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
      <?php foreach ( $risk_cards as $idx => $r ) : ?>
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-100 hover:shadow-md transition-shadow duration-300 reveal-item">
        <div class="flex items-start gap-4 mb-4">
          <div class="flex-shrink-0 w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-amber-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $r['icon']; ?></svg>
          </div>
          <h3 class="text-lg font-bold text-slate-900 font-jost pt-2.5"><?php echo wp_kses_post( $r['title'] ); ?></h3>
        </div>
        <p class="text-slate-600 text-sm font-jost leading-relaxed"><?php echo wp_kses_post( $r['desc'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<!-- ═══════════════════════════════════════════════════════
     S5 · MALARIA  (dark)
════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(160deg,#0f172a 0%,#1e3a8a 55%,#1d4ed8 100%);">
  <div class="absolute inset-0 dot-pattern pointer-events-none"></div>
  <div class="absolute top-0 left-1/3 w-[500px] h-[500px] rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(96,165,250,0.15) 0%,transparent 70%);"></div>

  <div class="section-container relative z-10">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-white/15 backdrop-blur-sm text-white border border-white/20">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Antimalarial Protection
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-jost">Malaria Prevention for Thailand</h2>
      <p class="text-blue-200 text-lg max-w-2xl mx-auto font-jost">While most tourist areas in Thailand have low malaria risk, certain rural and border regions require antimalarial medication. Our pharmacists will assess your specific itinerary and recommend the right protection for your trip.</p>
    </div>

    <?php
    $malaria_cards = [
      [
        'title' => 'Risk Areas in Thailand',
        'icon'  => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        'desc'  => 'Border regions with Myanmar, Cambodia, and Laos carry the highest malaria risk. Rural forested areas in Kanchanaburi, Tak, and Trat provinces also require precautions. Popular beach destinations including Phuket, Koh Samui, Koh Phi Phi, and city destinations including Bangkok and Chiang Mai are generally considered malaria-free.',
      ],
      [
        'title' => 'Antimalarial Options',
        'icon'  => '<path d="M10.5 20H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h3.93a2 2 0 0 1 1.66.9l.82 1.2a2 2 0 0 0 1.66.9H20a2 2 0 0 1 2 2v3.5"/><path d="M16 19h6m-3-3v6"/>',
        'desc'  => 'We prescribe Malarone (atovaquone/proguanil), Doxycycline, and Mefloquine. Our pharmacists will recommend the most suitable option based on your health, activities, and duration of stay. All options are available in stock across all four Hampshire branches.',
      ],
      [
        'title' => 'Bite Prevention',
        'icon'  => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
        'desc'  => 'Use DEET 50% insect repellent on all exposed skin. Wear light-coloured long sleeves and trousers at dawn and dusk. Sleep under insecticide-treated mosquito nets in rural areas. We stock premium DEET repellents at all four branches.',
      ],
    ];
    ?>

    <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
      <?php foreach ( $malaria_cards as $card ) : ?>
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7 hover:bg-white/15 transition-colors duration-300 reveal-item">
        <div class="w-12 h-12 bg-blue-600/30 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-blue-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $card['icon']; ?></svg>
        </div>
        <h3 class="text-lg font-bold text-white mb-3 font-jost"><?php echo esc_html( $card['title'] ); ?></h3>
        <p class="text-blue-100/85 text-sm font-jost leading-relaxed"><?php echo esc_html( $card['desc'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S6 · HOW IT WORKS  (light)
════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 bg-slate-50">
  <div class="section-container">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-blue-50 text-blue-700 border border-blue-100">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
        Three-Step Process
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 font-jost">How to Get Your Thailand Travel Vaccinations at Southdowns Pharmacy</h2>
      <p class="text-slate-600 text-lg max-w-2xl mx-auto font-jost">Three simple steps from booking to being fully protected.</p>
    </div>

    <?php
    $how_steps = [
      [
        'num'   => '01',
        'title' => 'Book Your Consultation',
        'desc'  => 'Visit any of our four Hampshire locations during opening hours or book online. Walk-ins are welcome. We serve patients from across Hampshire including Portsmouth, Southsea, Waterlooville, Havant, Fareham, Gosport, and Chichester.',
        'icon'  => '<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>',
      ],
      [
        'num'   => '02',
        'title' => 'Expert Travel Health Assessment',
        'desc'  => 'Our GPhC-registered pharmacists will review your full itinerary, medical history, and planned activities to provide personalised Thailand travel health advice. We\'ll identify exactly which vaccines and medications you need &mdash; and just as importantly, which ones you don\'t.',
        'icon'  => '<path d="M9 11H1l8-8 8 8h-8v8a4 4 0 0 1-4-4z" transform="rotate(45 9 11)"/><path d="M14 2v6h6"/><path d="M16 13H8M16 17H8M10 9H8"/>',
      ],
      [
        'num'   => '03',
        'title' => 'Same-Day Vaccination',
        'desc'  => 'Receive your vaccines immediately at the same appointment. We stock all recommended Thailand travel vaccinations across all four branches and can complete your course before departure. No waiting lists, no delays.',
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/>',
      ],
    ];
    ?>

    <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
      <?php foreach ( $how_steps as $step ) : ?>
      <div class="bg-white rounded-2xl p-7 shadow-sm border border-slate-100 hover:shadow-md transition-shadow duration-300 reveal-item relative">
        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $step['icon']; ?></svg>
        </div>
        <span class="text-blue-400/70 text-xs font-bold tracking-widest font-jost uppercase">Step <?php echo esc_html( $step['num'] ); ?></span>
        <h3 class="text-lg font-bold text-slate-900 mt-1 mb-3 font-jost"><?php echo esc_html( $step['title'] ); ?></h3>
        <p class="text-slate-600 text-sm font-jost leading-relaxed"><?php echo wp_kses_post( $step['desc'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S7 · TIMING  (dark)
════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(160deg,#0f172a 0%,#1e3a8a 55%,#1d4ed8 100%);">
  <div class="absolute inset-0 dot-pattern pointer-events-none"></div>
  <div class="absolute bottom-0 right-1/4 w-96 h-96 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(59,130,246,0.18) 0%,transparent 70%);"></div>

  <div class="section-container relative z-10">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-white/15 backdrop-blur-sm text-white border border-white/20">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Timing Guide
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-jost">When to Get Your Thailand Travel Vaccinations</h2>
      <p class="text-blue-200 text-lg max-w-2xl mx-auto font-jost">Ideally, book 6&ndash;8 weeks before departure &mdash; but don't worry if your trip is sooner. We accommodate last-minute travellers with same-day appointments and can provide immediate protection for most vaccines.</p>
    </div>

    <?php
    $timing_cards = [
      [
        'tag'    => 'Ideal',
        'time'   => '6–8 Weeks Before',
        'colour' => 'green',
        'desc'   => 'Best timing for multi-dose vaccines like Hepatitis B, Japanese Encephalitis, and Rabies. Allows your immune system to develop full protection before departure.',
      ],
      [
        'tag'    => 'Good',
        'time'   => '2–4 Weeks Before',
        'colour' => 'blue',
        'desc'   => 'Still time for single-dose vaccines including Hepatitis A and Typhoid, plus accelerated courses. Antimalarial medication can be prescribed. First doses of multi-dose courses can begin.',
      ],
      [
        'tag'    => 'Last Minute',
        'time'   => 'Days Before Departure',
        'colour' => 'amber',
        'desc'   => 'Don\'t skip it &mdash; some protection is always better than none. Hepatitis A and Typhoid can be given same-day. Antimalarial tablets are available immediately. Come in even if you\'re leaving within days.',
      ],
    ];

    $timing_styles = [
      'green' => [ 'bg' => 'bg-green-500/20',  'text' => 'text-green-200',  'border' => 'border-green-400/30',  'dot' => 'bg-green-400' ],
      'blue'  => [ 'bg' => 'bg-blue-500/20',   'text' => 'text-blue-200',   'border' => 'border-blue-400/30',   'dot' => 'bg-blue-400' ],
      'amber' => [ 'bg' => 'bg-amber-500/20',  'text' => 'text-amber-200',  'border' => 'border-amber-400/30',  'dot' => 'bg-amber-400' ],
    ];
    ?>

    <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
      <?php foreach ( $timing_cards as $card ) : $s = $timing_styles[ $card['colour'] ]; ?>
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7 hover:bg-white/15 transition-colors duration-300 reveal-item">
        <div class="flex items-center gap-2 mb-4">
          <span class="w-2 h-2 rounded-full <?php echo esc_attr( $s['dot'] ); ?>"></span>
          <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold font-jost uppercase tracking-wider border <?php echo esc_attr( $s['bg'] . ' ' . $s['text'] . ' ' . $s['border'] ); ?>">
            <?php echo esc_html( $card['tag'] ); ?>
          </span>
        </div>
        <h3 class="text-xl font-bold text-white mb-3 font-jost"><?php echo wp_kses_post( $card['time'] ); ?></h3>
        <p class="text-blue-100/85 text-sm font-jost leading-relaxed"><?php echo wp_kses_post( $card['desc'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S8 · PRICING  (light, id="pricing")
════════════════════════════════════════════════════════ -->
<section id="pricing" class="py-20 md:py-28 bg-white">
  <div class="section-container">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-blue-50 text-blue-700 border border-blue-100">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        Transparent Pricing
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 font-jost">Thailand Travel Vaccination Pricing</h2>
      <p class="text-slate-600 text-lg max-w-2xl mx-auto font-jost">Transparent pricing with no hidden consultation fees. All prices include expert pharmacist assessment and vaccine administration.</p>
    </div>

    <!-- Package cards -->
    <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto mb-12">

      <!-- Package 1: Essential -->
      <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-md transition-shadow duration-300 reveal-item">
        <div class="flex items-center gap-2 mb-4">
          <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold font-jost uppercase tracking-wider bg-blue-50 text-blue-700 border border-blue-100">Essential</span>
        </div>
        <h3 class="text-2xl font-bold text-slate-900 mb-2 font-jost">Essential Thailand Package</h3>
        <p class="text-slate-500 text-sm font-jost mb-5">From <span class="text-3xl font-extrabold text-slate-900 align-baseline">£TBC</span></p>
        <ul class="space-y-3">
          <?php
          $pkg1 = [
            'Hepatitis A vaccination',
            'Typhoid vaccination',
            'Travel health consultation',
            'Personalised travel advice',
          ];
          foreach ( $pkg1 as $item ) : ?>
          <li class="flex items-start gap-3 text-slate-700 font-jost text-sm">
            <span class="flex-shrink-0 w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
              <svg class="w-3 h-3 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </span>
            <?php echo esc_html( $item ); ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Package 2: Comprehensive (Most Popular, glow card) -->
      <div class="yf-glow-card rounded-2xl p-1 reveal-item">
        <div class="bg-white rounded-[0.95rem] p-8 h-full">
          <div class="flex items-center gap-2 mb-4">
            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold font-jost uppercase tracking-wider bg-blue-600 text-white">Most Popular</span>
          </div>
          <h3 class="text-2xl font-bold text-slate-900 mb-2 font-jost">Comprehensive Thailand Package</h3>
          <p class="text-slate-500 text-sm font-jost mb-5">From <span class="text-3xl font-extrabold text-slate-900 align-baseline">£TBC</span></p>
          <ul class="space-y-3">
            <?php
            $pkg2 = [
              'Hepatitis A &amp; B vaccinations',
              'Typhoid vaccination',
              'Japanese Encephalitis (2 doses)',
              'Travel health consultation',
              'Antimalarial assessment',
            ];
            foreach ( $pkg2 as $item ) : ?>
            <li class="flex items-start gap-3 text-slate-700 font-jost text-sm">
              <span class="flex-shrink-0 w-5 h-5 bg-blue-600 rounded-full flex items-center justify-center mt-0.5">
                <svg class="w-3 h-3 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
              </span>
              <?php echo wp_kses_post( $item ); ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

    <!-- Individual vaccine pricing -->
    <div class="max-w-4xl mx-auto bg-slate-50 rounded-2xl p-8 border border-slate-100 mb-8">
      <h3 class="text-lg font-bold text-slate-900 mb-5 font-jost">Individual Vaccine Pricing</h3>
      <?php
      $individual_prices = [
        'Hepatitis A',
        'Hepatitis B (per dose)',
        'Typhoid',
        'Japanese Encephalitis (per dose)',
        'Rabies (per dose)',
        'DTP Booster',
        'Antimalarial Tablets',
      ];
      ?>
      <div class="grid sm:grid-cols-2 gap-x-8 gap-y-3">
        <?php foreach ( $individual_prices as $line ) : ?>
        <div class="flex items-center justify-between py-2 border-b border-slate-200/70">
          <span class="text-slate-700 font-jost text-sm"><?php echo esc_html( $line ); ?></span>
          <span class="text-blue-700 font-bold font-jost text-sm">£TBC</span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Info box -->
    <div class="max-w-4xl mx-auto bg-blue-50 border border-blue-100 rounded-2xl px-6 py-5 flex items-start gap-4">
      <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p class="text-blue-900 text-sm font-jost"><strong>Prices confirmed at consultation.</strong> All prices include expert pharmacist consultation and vaccine administration. No hidden fees.</p>
    </div>
  </div>
</section>



<!-- ═══════════════════════════════════════════════════════
     S9 · LOCATIONS  (white, id="locations")
════════════════════════════════════════════════════════ -->
<section id="locations" class="py-20 md:py-28 bg-slate-50">
  <div class="section-container">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-blue-50 text-blue-700 border border-blue-100">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Find Us
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 font-jost">Book at Your Nearest Hampshire Travel Clinic</h2>
      <p class="text-slate-600 text-lg max-w-2xl mx-auto font-jost">Thailand travel vaccinations available at all four Southdowns Pharmacy locations. Same-day appointments subject to availability. Free parking at all branches.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
      <?php for ( $i = 1; $i <= 4; $i++ ) :
        $b = sp_branch( $i );
      ?>
      <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg transition-shadow duration-300 reveal-item flex flex-col">
        <div class="relative overflow-hidden h-44">
          <img src="<?php echo esc_url( $b['card_image'] ); ?>" alt="<?php echo esc_attr( $b['name'] ); ?> pharmacy" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
          <span class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-slate-800 text-xs font-semibold font-jost px-2.5 py-1 rounded-full"><?php echo esc_html( $b['name'] ); ?></span>
        </div>
        <div class="p-5 space-y-2.5 flex flex-col flex-1">
          <div class="flex items-start gap-2 text-slate-600 text-sm font-jost">
            <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <?php echo esc_html( $b['address'] ); ?>
          </div>
          <div class="flex items-center gap-2 text-slate-600 text-sm font-jost">
            <svg class="w-4 h-4 text-blue-500 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 17l-.08-.08z"/></svg>
            <?php echo esc_html( $b['phone'] ); ?>
          </div>
          <a href="<?php echo esc_url( sp_booking_url() ); ?>" class="mt-auto pt-1 inline-flex items-center gap-1.5 text-blue-600 font-semibold text-sm font-jost hover:text-blue-700 transition-colors duration-200">
            Book here
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <p class="text-slate-600 text-center max-w-3xl mx-auto font-jost">Conveniently located to serve patients from across Hampshire including Portsmouth, Southsea, Waterlooville, Havant, Fareham, Gosport, Petersfield, and Chichester.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S10 · WHY SOUTHDOWNS  (dark)
════════════════════════════════════════════════════════ -->
<section class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(160deg,#0f172a 0%,#1e3a8a 55%,#1d4ed8 100%);">
  <div class="absolute inset-0 dot-pattern pointer-events-none"></div>
  <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(96,165,250,0.15) 0%,transparent 70%);"></div>
  <div class="absolute bottom-0 left-1/4 w-80 h-80 rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(59,130,246,0.12) 0%,transparent 70%);"></div>

  <div class="section-container relative z-10">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-white/15 backdrop-blur-sm text-white border border-white/20">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        Our Promise
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-jost">Why Choose Southdowns Pharmacy for Your Thailand Travel Vaccinations?</h2>
    </div>

    <?php
    $why_features = [
      [
        'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
        'title' => 'Expert GPhC-Registered Pharmacists',
        'desc'  => 'Qualified specialists in travel health providing evidence-based, personalised vaccination advice for every itinerary.',
      ],
      [
        'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'All Thailand Vaccines in Stock',
        'desc'  => 'No ordering delays — we carry every recommended vaccine for Thailand travel across all four Hampshire branches.',
      ],
      [
        'icon'  => '<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>',
        'title' => 'Same-Day Appointments',
        'desc'  => 'Walk in or book ahead — no waiting weeks for your travel vaccination appointment.',
      ],
      [
        'icon'  => '<path d="M9 12l2 2 4-4"/><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'title' => 'NaTHNaC Registered Yellow Fever Centre',
        'desc'  => 'Southdowns Pharmacy is an officially designated Yellow Fever Vaccination Centre, authorised to issue valid ICVP certificates.',
      ],
      [
        'icon'  => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        'title' => 'Four Hampshire Locations',
        'desc'  => 'Serving Portsmouth, Southsea, Waterlooville, Havant, and wider Hampshire. Free parking at all sites.',
      ],
      [
        'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M19 8v6M23 11h-6"/>',
        'title' => 'Family-Friendly Consultations',
        'desc'  => 'Child-safe dosing expertise and a welcoming environment for families travelling to Thailand with children of all ages.',
      ],
    ];
    ?>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
      <?php foreach ( $why_features as $feat ) : ?>
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7 hover:bg-white/15 transition-colors duration-300 reveal-item">
        <div class="w-11 h-11 bg-blue-600/30 rounded-xl flex items-center justify-center mb-4">
          <svg class="w-5 h-5 text-blue-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $feat['icon']; ?></svg>
        </div>
        <h3 class="text-base font-bold text-white mb-2 font-jost"><?php echo esc_html( $feat['title'] ); ?></h3>
        <p class="text-blue-100/85 text-sm font-jost leading-relaxed"><?php echo esc_html( $feat['desc'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S11 · FAQ  (light gradient, id="faq")
════════════════════════════════════════════════════════ -->
<section id="faq" class="py-20 md:py-28" style="background: linear-gradient(180deg, #f8fafc 0%, #eff6ff 100%);">
  <div class="section-container">
    <div class="text-center mb-14">
      <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-sm font-semibold font-jost mb-6 bg-blue-50 text-blue-700 border border-blue-100">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        Common Questions
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 font-jost">Frequently Asked Questions</h2>
      <p class="text-slate-600 text-lg max-w-xl mx-auto font-jost">Everything you need to know about Thailand travel vaccinations at Southdowns Pharmacy.</p>
    </div>

    <div class="max-w-3xl mx-auto space-y-3">
      <?php
      $faqs = [
        [
          'q' => 'Which vaccines do I need for Thailand?',
          'a' => 'The vaccines you need depend on your itinerary, activities, and medical history. At minimum, most travellers should ensure their Hepatitis A, Typhoid, and routine vaccines (MMR, DTP) are up to date. Hepatitis B, Japanese Encephalitis, and Rabies may be recommended depending on your plans. Our pharmacists will provide a personalised recommendation at your consultation.',
        ],
        [
          'q' => 'Do I need a Yellow Fever certificate for Thailand?',
          'a' => 'Thailand does not require Yellow Fever vaccination for most travellers. However, if you are arriving from or transiting through a country with Yellow Fever risk, a valid ICVP certificate may be required for entry. Our pharmacists will check your full itinerary during consultation. Southdowns Pharmacy is a NaTHNaC registered Yellow Fever Vaccination Centre.',
        ],
        [
          'q' => 'Is malaria a risk in Thailand?',
          'a' => 'Malaria risk in Thailand is low in most popular tourist destinations including Bangkok, Phuket, Chiang Mai, and the main islands. Risk is higher in rural and border regions with Myanmar, Cambodia, and Laos. Our pharmacists will assess your specific itinerary and prescribe antimalarials if appropriate.',
        ],
        [
          'q' => 'How far in advance should I book?',
          'a' => 'Ideally 6–8 weeks before departure, to allow time for multi-dose courses to be completed. However, we welcome last-minute travellers — many vaccines can be given on the same day, and some protection is always better than none.',
        ],
        [
          'q' => 'Can my whole family get vaccinated together?',
          'a' => 'Yes. We welcome families and can vaccinate adults and children at the same appointment. Our pharmacists have expertise in child-safe dosing and will advise on age-appropriate vaccines for younger travellers.',
        ],
        [
          'q' => 'Do you stock all Thailand travel vaccines?',
          'a' => 'Yes. We stock all recommended Thailand travel vaccines across all four Hampshire branches, including Hepatitis A and B, Typhoid, Japanese Encephalitis, Rabies, and DTP. No ordering delays or waiting lists.',
        ],
        [
          'q' => 'Can I get antimalarial tablets at the same appointment?',
          'a' => 'Yes. Our pharmacists can assess your malaria risk and prescribe antimalarial medication at the same appointment as your vaccinations. All options — Malarone, Doxycycline, and Mefloquine — are available in stock.',
        ],
        [
          'q' => 'How long does the travel health consultation take?',
          'a' => 'Most consultations take 20–30 minutes including vaccination. If you are having multiple vaccines or require an antimalarial prescription, allow a little longer. Same-day vaccination is available at all four branches.',
        ],
      ];
      foreach ( $faqs as $idx => $faq ) : $n = $idx + 1; ?>
      <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden reveal-item">
        <button class="yf-faq-trigger w-full flex items-center justify-between gap-4 px-6 py-5 text-left" aria-expanded="false">
          <span class="flex items-center gap-3">
            <span class="flex-shrink-0 w-7 h-7 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 font-bold text-xs font-jost"><?php echo $n; ?></span>
            <span class="font-semibold text-slate-900 font-jost"><?php echo esc_html( $faq['q'] ); ?></span>
          </span>
          <span class="yf-faq-icon flex-shrink-0 w-7 h-7 bg-blue-50 rounded-full flex items-center justify-center text-blue-600 transition-transform duration-300">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
          </span>
        </button>
        <div class="yf-faq-answer hidden px-6 pb-5">
          <div class="pl-10 text-slate-600 font-jost text-sm leading-relaxed"><?php echo esc_html( $faq['a'] ); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     S12 · FINAL CTA  (dark, id="book")
════════════════════════════════════════════════════════ -->
<section id="book" class="py-20 md:py-28 relative overflow-hidden" style="background: linear-gradient(160deg,#0f172a 0%,#1e3a8a 55%,#1d4ed8 100%);">
  <div class="absolute inset-0 dot-pattern pointer-events-none"></div>
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] rounded-full pointer-events-none" style="background:radial-gradient(circle,rgba(59,130,246,0.2) 0%,transparent 70%);"></div>

  <div class="section-container relative z-10 text-center">
    <div class="flex flex-wrap justify-center gap-2 mb-8">
      <?php
      $cta_badges = [
        'GPhC Registered',
        'All Vaccines in Stock',
        'Same-Day Appointments',
        '4 Hampshire Locations',
        'NaTHNaC Yellow Fever Centre',
      ];
      foreach ( $cta_badges as $badge ) : ?>
      <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full text-xs font-semibold font-jost bg-white/15 backdrop-blur-sm text-white border border-white/20">
        <svg class="w-3.5 h-3.5 text-blue-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
        <?php echo esc_html( $badge ); ?>
      </span>
      <?php endforeach; ?>
    </div>

    <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-5 font-jost leading-tight">Travelling to Thailand?<br>Get Protected Before You Go.</h2>
    <p class="text-blue-200 text-lg max-w-2xl mx-auto mb-10 font-jost">Book your Thailand travel vaccination consultation at any of our four Hampshire locations. Expert advice, all vaccines in stock, same-day appointments available.</p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
      <a href="<?php echo esc_url( sp_booking_url() ); ?>" class="inline-flex items-center justify-center gap-2 bg-white text-blue-700 font-bold px-8 py-4 rounded-xl font-jost hover:bg-blue-50 transition-colors duration-200 shadow-xl shadow-blue-900/30 text-lg">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        Book Thailand Travel Consultation
      </a>
      <a href="#locations" class="inline-flex items-center justify-center gap-2 bg-white/15 backdrop-blur-sm text-white font-bold px-8 py-4 rounded-xl font-jost border border-white/30 hover:bg-white/25 transition-colors duration-200 text-lg">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Find Your Nearest Branch
      </a>
    </div>

    <!-- Trust row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto border-t border-white/10 pt-10">
      <?php
      $trust_stats = [
        [ 'value' => 'All', 'label' => 'Vaccines in Stock' ],
        [ 'value' => 'Same-Day', 'label' => 'Appointments' ],
        [ 'value' => 'GPhC', 'label' => 'Registered Pharmacists' ],
        [ 'value' => '4',   'label' => 'Hampshire Locations' ],
      ];
      foreach ( $trust_stats as $stat ) : ?>
      <div class="text-center">
        <p class="text-2xl md:text-3xl font-extrabold text-white font-jost"><?php echo esc_html( $stat['value'] ); ?></p>
        <p class="text-blue-300 text-sm mt-1 font-jost"><?php echo esc_html( $stat['label'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     MEDICAL DISCLAIMER
════════════════════════════════════════════════════════ -->
<div class="bg-slate-100 border-t border-slate-200 py-6">
  <div class="section-container">
    <p class="text-slate-500 text-xs font-jost text-center leading-relaxed max-w-4xl mx-auto">
      <strong>Medical Disclaimer:</strong> Travel health recommendations for Thailand are based on current NaTHNaC, WHO, and MHRA guidance and are accurate as of April 2026. Requirements and recommendations may change &mdash; always consult the latest NaTHNaC or Foreign, Commonwealth &amp; Development Office guidance before travel. Vaccine suitability is assessed on an individual basis by our GPhC-registered pharmacists at the time of consultation.
    </p>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════════
     JAVASCRIPT — FAQ Accordion + Scroll Reveal
════════════════════════════════════════════════════════ -->
<script>
(function () {
  'use strict';

  /* FAQ accordion */
  document.querySelectorAll('.yf-faq-trigger').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var answer = btn.nextElementSibling;
      var icon   = btn.querySelector('.yf-faq-icon');
      var open   = btn.getAttribute('aria-expanded') === 'true';

      /* close all */
      document.querySelectorAll('.yf-faq-trigger').forEach(function (b) {
        b.setAttribute('aria-expanded', 'false');
        b.nextElementSibling.classList.add('hidden');
        b.querySelector('.yf-faq-icon').style.transform = 'rotate(0deg)';
      });

      if (!open) {
        btn.setAttribute('aria-expanded', 'true');
        answer.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
      }
    });
  });

  /* Scroll reveal */
  var items = document.querySelectorAll('.reveal-item');
  if (!items.length) return;

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.style.opacity   = '1';
        entry.target.style.transform = 'translateY(0)';
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  items.forEach(function (el) { io.observe(el); });
}());
</script>

<?php get_footer(); ?>
