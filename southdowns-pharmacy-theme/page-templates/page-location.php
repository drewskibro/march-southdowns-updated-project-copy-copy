<?php
/**
 * Template Name: Location
 *
 * One template powers all four branch location pages.
 * Assign this template to each branch page via Page → Template, then
 * populate the ACF fields for that branch.
 *
 * Required ACF fields (all text unless noted):
 *  branch_location_name      – short area name, e.g. "Southsea"
 *  branch_hero_subtitle      – h1 tagline
 *  branch_hero_description   – hero body copy (textarea)
 *  branch_hero_image         – image field (returns URL)
 *  branch_hours_weekday      – e.g. "Mon–Fri 9am–6pm"
 *  branch_hours_saturday     – e.g. "Sat 9am–1pm"
 *  branch_address_line1      – e.g. "123 High Street"
 *  branch_address_line2      – e.g. "Southsea, Hampshire"
 *  branch_postcode           – e.g. "PO5 1AA"
 *  branch_phone              – formatted, e.g. "023 9212 3456"
 *  branch_phone_raw          – e.g. "02392123456" (for tel: link)
 *  branch_parking            – e.g. "Free street parking nearby"
 *  branch_maps_embed_src     – Google Maps iframe src URL
 *  branch_maps_directions_url – Google Maps directions URL
 *  branch_by_car             – textarea
 *  branch_by_car_tags        – comma-sep, e.g. "Free street parking, 20 min from M27"
 *  branch_by_bus             – textarea
 *  branch_bus_routes         – comma-sep route numbers, e.g. "1, 3, 17, 23"
 *  branch_by_train           – textarea
 *  branch_train_stations     – pipe-sep pairs, e.g. "Portsmouth & Southsea|10 min,Fratton|15 min"
 *  branch_on_foot            – textarea
 *  branch_landmark           – e.g. "Kings Theatre"
 *  branch_is_flagship        – true/false field
 *  branch_area_image         – image field (URL, for other-branches card)
 *  branch_services_count     – number (default 8)
 *  branch_testimonials       – repeater:
 *                               quote (textarea)
 *                               author_name (text)
 *                               author_initials (text)
 *                               service (text)
 *                               review_date (text)
 *                               avatar_bg (text, Tailwind gradient classes)
 */

get_header();

$booking_url   = sp_booking_url();

// Pull ACF fields for this branch
$loc_name      = get_field('branch_location_name')     ?: get_the_title();
$hero_subtitle = get_field('branch_hero_subtitle')     ?: 'Your Community Pharmacy in ' . esc_html($loc_name);
$hero_desc     = get_field('branch_hero_description')  ?: 'Expert healthcare services across all of our Hampshire locations. Same-day appointments available — no GP referral needed.';
$hero_img      = get_field('branch_hero_image')        ?: 'https://images.unsplash.com/photo-1582560475093-ba66accbc424?w=1200&h=800&fit=crop';
$hours_wd      = get_field('branch_hours_weekday')     ?: 'Mon–Fri 9am–6pm';
$hours_sat     = get_field('branch_hours_saturday')    ?: 'Sat 9am–1pm';
$addr1         = get_field('branch_address_line1')     ?: '';
$addr2         = get_field('branch_address_line2')     ?: '';
$postcode      = get_field('branch_postcode')          ?: '';
$phone         = get_field('branch_phone')             ?: sp_phone();
$phone_raw     = get_field('branch_phone_raw')         ?: sp_phone_raw();
$parking       = get_field('branch_parking')           ?: 'Parking available nearby';
$maps_src      = get_field('branch_maps_embed_src')    ?: '';
$maps_dir_url  = get_field('branch_maps_directions_url') ?: '#';
$is_flagship   = get_field('branch_is_flagship')       ?: false;
?>

<!-- Page-scoped styles -->
<style>
  .loc-reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .loc-reveal.loc-visible { opacity: 1; transform: translateY(0); }
  .loc-card-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
  .loc-card-lift:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.12); }

  /* Branch card premium hover glow */
  .branch-card { position: relative; transition: transform 0.5s cubic-bezier(0.23,1,0.32,1), box-shadow 0.5s cubic-bezier(0.23,1,0.32,1); isolation: isolate; }
  .branch-card::before { content: ''; position: absolute; inset: -2px; border-radius: 18px; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 40%, #1e3a8a 70%, #6366f1 100%); opacity: 0; z-index: -1; transition: opacity 0.4s ease; }
  .branch-card:hover::before { opacity: 1; }
  .branch-card:hover { transform: translateY(-8px); box-shadow: 0 25px 50px rgba(30,58,138,0.2), 0 0 40px rgba(59,130,246,0.1); }
  .branch-card .branch-cta-arrow { transition: transform 0.35s cubic-bezier(0.23,1,0.32,1); }
  .branch-card:hover .branch-cta-arrow { transform: translateX(5px); }
  .branch-card .branch-cta-btn { transition: box-shadow 0.4s ease; }
  .branch-card:hover .branch-cta-btn { box-shadow: 0 8px 24px rgba(30,58,138,0.35); }
  .branch-stagger-1 { transition-delay: 0s; }
  .branch-stagger-2 { transition-delay: 0.15s; }
  .branch-stagger-3 { transition-delay: 0.3s; }
</style>


<!-- ============================================================
     BREADCRUMB
     ============================================================ -->
<div class="bg-gray-50 border-b border-gray-200 px-4 md:px-8 lg:px-12 py-3">
  <div class="max-w-7xl mx-auto flex items-center gap-2 text-sm font-jost">
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-blue-600 hover:text-blue-800 transition-colors">Home</a>
    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    <span class="text-gray-500">Locations</span>
    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    <span class="text-gray-800 font-medium"><?php echo esc_html($loc_name); ?></span>
  </div>
</div>


<!-- ============================================================
     S1: HERO — Two-column layout matching homepage/service pages
     ============================================================ -->
<section class="relative w-full min-h-[500px] lg:min-h-[600px] overflow-hidden">

  <!-- Mobile: full-bleed image + gradient overlay -->
  <div class="md:hidden absolute inset-0 bg-cover bg-center"
       style="background-image: url('<?php echo esc_url($hero_img); ?>');"></div>
  <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
  <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
    <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-xs font-medium px-4 py-2 rounded-full mb-4 border border-white/20 self-start font-jost">
      <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      GPhC Registered &bull; <?php echo esc_html($loc_name); ?>
    </div>
    <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;"><?php echo esc_html($hero_subtitle); ?></h1>
    <p class="text-white text-base leading-relaxed mb-5 font-jost"><?php echo esc_html($hero_desc); ?></p>
    <div class="flex flex-wrap gap-3 mb-4">
      <a href="<?php echo esc_url($booking_url); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-sm font-semibold px-5 py-2.5 rounded-full shadow-lg font-jost">
        Book Appointment
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
    <p class="text-white/90 text-sm font-jost"><?php echo esc_html($hours_wd); ?> &nbsp;|&nbsp; <?php echo esc_html($hours_sat); ?><?php if ($parking): ?> &nbsp;|&nbsp; <?php echo esc_html($parking); ?><?php endif; ?></p>
  </div>

  <!-- Desktop: two-column split -->
  <div class="hidden md:flex relative">
    <!-- Left: solid blue panel -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
      <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20 self-start font-jost">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        GPhC Registered &bull; <?php echo esc_html($loc_name); ?> Branch
      </div>
      <h1 class="text-white text-4xl lg:text-[50px] font-semibold mb-6 font-jost" style="line-height:1.1;"><?php echo esc_html($hero_subtitle); ?></h1>
      <p class="text-white text-lg lg:text-xl leading-relaxed mb-6 font-jost"><?php echo esc_html($hero_desc); ?></p>
      <div class="flex flex-wrap gap-3 mb-6">
        <a href="<?php echo esc_url($booking_url); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-base font-semibold px-6 py-3 rounded-full hover:bg-blue-50 transition-colors shadow-lg font-jost">
          Book Appointment
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="#loc-directions" class="inline-flex items-center gap-2 text-white/80 text-base font-medium hover:text-white transition-colors font-jost">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          Get Directions
        </a>
      </div>
      <div class="flex flex-wrap gap-x-6 gap-y-2 text-white text-base font-medium font-jost">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <?php echo esc_html($hours_wd); ?>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <?php echo esc_html($hours_sat); ?>
        </div>
      </div>
    </div>

    <!-- Right: hero image -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover bg-center"
         style="background-image: url('<?php echo esc_url($hero_img); ?>');"></div>

    <!-- Centre-straddling trust badges -->
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398697-0.png" alt="Same Day Appointments" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:50%;transform:translate(-50%,-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398761-2.png" alt="GPhC Registered" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;bottom:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398725-1.png" alt="5-Star Rated" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
  </div>

</section>

<?php get_footer(); ?>
