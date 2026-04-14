<?php
/**
 * Template Name: Emsworth Location
 *
 * Dedicated location page for the Emsworth branch.
 * 2-4 Central Buildings, Emsworth, Hampshire, PO10 7DU
 * Tel: 01243 968 869
 * Mon–Fri 9am–7pm | Sat 9am–5pm | Sun Closed
 */

get_header();

$booking_url = sp_booking_url();
$phone       = '01243 968 869';
$phone_raw   = '01243968869';
$maps_dir_url = 'https://www.google.com/maps/dir/?api=1&destination=2-4+Central+Buildings,+Emsworth,+Hampshire+PO10+7DU';
$maps_src     = ''; // Add Google Maps embed src URL here
$hero_img     = 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200&h=800&fit=crop';
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
    <span class="text-gray-800 font-medium">Emsworth</span>
  </div>
</div>


<!-- ============================================================
     S1: HERO
     ============================================================ -->
<section class="relative w-full min-h-[500px] lg:min-h-[600px] overflow-hidden">

  <!-- Mobile: full-bleed image + gradient overlay -->
  <div class="md:hidden absolute inset-0 bg-cover bg-center"
       style="background-image: url('<?php echo esc_url($hero_img); ?>');"></div>
  <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
  <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
    <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-xs font-medium px-4 py-2 rounded-full mb-4 border border-white/20 self-start font-jost">
      <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      GPhC Registered &bull; Emsworth
    </div>
    <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Your Local Pharmacy in Emsworth</h1>
    <p class="text-white text-base leading-relaxed mb-5 font-jost">Expert healthcare and prescription services in the heart of Emsworth. Same-day appointments available — no GP referral needed.</p>
    <div class="flex flex-wrap gap-3 mb-4">
      <a href="<?php echo esc_url($booking_url); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-sm font-semibold px-5 py-2.5 rounded-full shadow-lg font-jost">
        Book Appointment
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
    <p class="text-white/90 text-sm font-jost">Mon–Fri 9am–7pm &nbsp;|&nbsp; Sat 9am–5pm &nbsp;|&nbsp; Free town centre parking</p>
  </div>

  <!-- Desktop: two-column split -->
  <div class="hidden md:flex relative">

    <!-- Left: solid blue panel -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
      <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20 self-start font-jost">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        GPhC Registered &bull; Emsworth Branch
      </div>
      <h1 class="text-white text-4xl lg:text-[50px] font-semibold mb-6 font-jost" style="line-height:1.1;">Your Local Pharmacy in Emsworth</h1>
      <p class="text-white text-lg lg:text-xl leading-relaxed mb-6 font-jost">Expert healthcare and prescription services in the heart of Emsworth. Same-day appointments available — no GP referral needed.</p>
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
          Mon–Fri 9am–7pm
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Sat 9am–5pm
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Sun Closed
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

<!-- ============================================================
     S2: MAP & DIRECTIONS
     ============================================================ -->
<section id="loc-directions" class="relative py-16 lg:py-24 overflow-hidden" style="background:linear-gradient(135deg,#1e3a8a 0%,#1d4ed8 50%,#3b82f6 100%);">

  <div class="absolute inset-0 opacity-5" style="background-image:radial-gradient(circle at 20% 30%,#ffffff 1px,transparent 1px),radial-gradient(circle at 80% 70%,#ffffff 1px,transparent 1px);background-size:50px 50px;"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 lg:px-12">

    <!-- Heading -->
    <div class="text-center mb-12 loc-reveal">
      <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-sm font-medium px-5 py-2 rounded-full mb-5 border border-white/20 font-jost">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Getting Here
      </div>
      <h2 class="text-white text-3xl lg:text-4xl font-semibold font-jost mb-4">Find Our Emsworth Branch</h2>
      <p class="text-blue-100 text-lg font-jost max-w-2xl mx-auto">Multiple ways to reach us — by car, bus, train, or on foot.</p>
    </div>

    <!-- Map + Address row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10 loc-reveal">

      <!-- Google Map -->
      <div class="lg:col-span-2 rounded-2xl overflow-hidden shadow-2xl bg-white/10" style="min-height:380px;">
        <?php if ( $maps_src ) : ?>
          <iframe src="<?php echo esc_url($maps_src); ?>" width="100%" height="380" style="border:0;display:block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <?php else : ?>
          <div class="flex items-center justify-center h-[380px] bg-white/10">
            <p class="text-white/60 font-jost text-sm">Map coming soon</p>
          </div>
        <?php endif; ?>
      </div>

      <!-- Address card -->
      <div class="flex flex-col justify-between bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 lg:p-8">
        <div>
          <h3 class="text-white font-semibold text-xl font-jost mb-4">Emsworth Pharmacy</h3>
          <div class="flex items-start gap-3 mb-5">
            <svg class="w-5 h-5 text-blue-200 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            <address class="text-white not-italic font-jost leading-relaxed text-sm">
              2-4 Central Buildings<br>
              Emsworth, Hampshire<br>
              PO10 7DU
            </address>
          </div>
          <div class="flex items-start gap-3 mb-5">
            <svg class="w-5 h-5 text-blue-200 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <div class="text-white font-jost text-sm leading-relaxed">
              <div>Mon–Fri: 9am–7pm</div>
              <div>Sat: 9am–5pm</div>
              <div class="text-blue-200">Sun: Closed</div>
            </div>
          </div>
          <div class="flex items-center gap-3 mb-6">
            <svg class="w-5 h-5 text-blue-200 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="text-white font-jost text-sm hover:text-blue-200 transition-colors"><?php echo esc_html($phone); ?></a>
          </div>
        </div>
        <a href="<?php echo esc_url($maps_dir_url); ?>" target="_blank" rel="noopener noreferrer"
           class="flex items-center justify-center gap-2 bg-white text-blue-700 font-semibold text-sm px-5 py-3 rounded-xl hover:bg-blue-50 transition-colors shadow-lg font-jost w-full">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          Get Directions
        </a>
      </div>

    </div><!-- /Map + Address row -->

    <!-- 4 Direction cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 loc-reveal">

      <!-- By Car -->
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 loc-card-lift">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(255,255,255,0.15);">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l2.5 0M13 16H3m10 0h2m4-6l-2-4H9l-2 4h12z"/></svg>
        </div>
        <h4 class="text-white font-semibold text-base font-jost mb-2">By Car</h4>
        <p class="text-blue-100 text-sm font-jost leading-relaxed mb-4">Located on the A259 coast road with easy access from the A27 Emsworth junction. Free public car parks in North Street and Queen Street are within 3 minutes' walk.</p>
        <div class="flex flex-wrap gap-2">
          <span class="bg-white/15 text-white text-xs font-medium px-3 py-1 rounded-full font-jost border border-white/20">Off A259 coast road</span>
          <span class="bg-white/15 text-white text-xs font-medium px-3 py-1 rounded-full font-jost border border-white/20">Near A27 junction</span>
          <span class="bg-white/15 text-white text-xs font-medium px-3 py-1 rounded-full font-jost border border-white/20">Free town centre parking</span>
        </div>
      </div>

      <!-- By Bus -->
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 loc-card-lift">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(255,255,255,0.15);">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="3"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 19v2m8-2v2M3 10h18M8 5V3m8 2V3"/><circle cx="8" cy="15" r="1" fill="currentColor"/><circle cx="16" cy="15" r="1" fill="currentColor"/></svg>
        </div>
        <h4 class="text-white font-semibold text-base font-jost mb-2">By Bus</h4>
        <p class="text-blue-100 text-sm font-jost leading-relaxed mb-4">Stagecoach Coastliner services run frequently along the A259 through Emsworth town centre, connecting Portsmouth and Chichester.</p>
        <div class="flex flex-wrap gap-2">
          <span class="bg-white text-blue-700 text-xs font-bold px-3 py-1 rounded-full font-jost">Route 700</span>
          <span class="bg-white text-blue-700 text-xs font-bold px-3 py-1 rounded-full font-jost">Route 700X</span>
        </div>
      </div>

      <!-- By Train -->
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 loc-card-lift">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(255,255,255,0.15);">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19l-2 3m14-3l-2 3M5 7h14a2 2 0 012 2v7a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2z"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 15a1 1 0 100-2 1 1 0 000 2zm6 0a1 1 0 100-2 1 1 0 000 2zM12 7V4"/></svg>
        </div>
        <h4 class="text-white font-semibold text-base font-jost mb-2">By Train</h4>
        <p class="text-blue-100 text-sm font-jost leading-relaxed mb-4">Emsworth railway station is on Southern's West Coastway line (Portsmouth–Brighton). The pharmacy is an 8-minute walk from the station.</p>
        <div class="flex flex-col gap-2">
          <div class="flex items-center justify-between bg-white/15 rounded-lg px-3 py-2 border border-white/20">
            <span class="text-white text-xs font-medium font-jost">Emsworth Station</span>
            <span class="text-blue-200 text-xs font-jost">8 min walk</span>
          </div>
          <div class="flex items-center justify-between bg-white/15 rounded-lg px-3 py-2 border border-white/20">
            <span class="text-white text-xs font-medium font-jost">Havant Station</span>
            <span class="text-blue-200 text-xs font-jost">Connections available</span>
          </div>
        </div>
      </div>

      <!-- On Foot -->
      <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 loc-card-lift">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4" style="background:rgba(255,255,255,0.15);">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14l-4 4m4-4l4 4m-4-4v6"/></svg>
        </div>
        <h4 class="text-white font-semibold text-base font-jost mb-2">On Foot</h4>
        <p class="text-blue-100 text-sm font-jost leading-relaxed mb-4">A short stroll from Emsworth High Street and the town's main square. Central Buildings is clearly signposted along the main road through town.</p>
        <div class="flex items-center gap-2 bg-white/15 rounded-lg px-3 py-2 border border-white/20">
          <svg class="w-4 h-4 text-blue-200 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
          <span class="text-white text-xs font-medium font-jost">Near Emsworth Square</span>
        </div>
      </div>

    </div><!-- /Direction cards -->

  </div>
</section>


<!-- ============================================================
     S3: TESTIMONIALS
     ============================================================ -->
<section class="py-16 lg:py-24" style="background:linear-gradient(180deg,#f8fafc 0%,#eff6ff 60%,#f8fafc 100%);">
  <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-12">

    <div class="text-center mb-12 loc-reveal">
      <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 text-sm font-medium px-5 py-2 rounded-full mb-5 border border-blue-200 font-jost">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        Patient Reviews
      </div>
      <h2 class="text-gray-900 text-3xl lg:text-4xl font-semibold font-jost mb-4">What Our Emsworth Patients Say</h2>
      <p class="text-gray-500 text-lg font-jost max-w-2xl mx-auto">Real experiences from patients at our Emsworth branch.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">

      <!-- Review 1 -->
      <div class="bg-white rounded-2xl shadow-sm border border-blue-100 p-7 loc-reveal loc-card-lift" style="transition-delay:0s;">
        <div class="flex gap-1 mb-4">
          <?php for($s=0;$s<5;$s++): ?><svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?>
        </div>
        <p class="text-gray-700 text-base font-jost leading-relaxed mb-6 italic">"Absolutely wonderful service at the Emsworth branch. I popped in without an appointment and was seen quickly for a minor ailment. The pharmacist was thorough and reassuring — I left feeling completely looked after."</p>
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center flex-shrink-0">
            <span class="text-white text-sm font-bold font-jost">RH</span>
          </div>
          <div>
            <div class="text-gray-900 font-semibold text-sm font-jost">Robert H.</div>
            <div class="text-gray-400 text-xs font-jost">Minor Ailments &middot; December 2024</div>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="bg-white rounded-2xl shadow-sm border border-blue-100 p-7 loc-reveal loc-card-lift" style="transition-delay:0.1s;">
        <div class="flex gap-1 mb-4">
          <?php for($s=0;$s<5;$s++): ?><svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?>
        </div>
        <p class="text-gray-700 text-base font-jost leading-relaxed mb-6 italic">"Had my travel vaccinations done here before a trip to Kenya. The consultation was detailed and they made sure I had everything I needed. Far easier than going through my GP and the staff were brilliant."</p>
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 rounded-full bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center flex-shrink-0">
            <span class="text-white text-sm font-bold font-jost">CW</span>
          </div>
          <div>
            <div class="text-gray-900 font-semibold text-sm font-jost">Claire W.</div>
            <div class="text-gray-400 text-xs font-jost">Travel Health &middot; January 2025</div>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="bg-white rounded-2xl shadow-sm border border-blue-100 p-7 loc-reveal loc-card-lift" style="transition-delay:0.2s;">
        <div class="flex gap-1 mb-4">
          <?php for($s=0;$s<5;$s++): ?><svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?>
        </div>
        <p class="text-gray-700 text-base font-jost leading-relaxed mb-6 italic">"Brilliant ear wax removal service. I'd been struggling with blocked ears for weeks and was seen the same day I called. Completely pain-free and I can hear perfectly again. Lovely team at Emsworth."</p>
        <div class="flex items-center gap-3">
          <div class="w-11 h-11 rounded-full bg-gradient-to-br from-teal-500 to-teal-700 flex items-center justify-center flex-shrink-0">
            <span class="text-white text-sm font-bold font-jost">MT</span>
          </div>
          <div>
            <div class="text-gray-900 font-semibold text-sm font-jost">Michael T.</div>
            <div class="text-gray-400 text-xs font-jost">Ear Wax Removal &middot; February 2025</div>
          </div>
        </div>
      </div>

    </div><!-- /Review cards -->

    <!-- Trust strip -->
    <div class="flex flex-wrap items-center justify-center gap-8 loc-reveal">
      <div class="flex items-center gap-3">
        <div class="flex gap-0.5">
          <?php for($s=0;$s<5;$s++): ?><svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?>
        </div>
        <span class="text-gray-700 font-semibold text-sm font-jost">4.9/5 Average Rating</span>
      </div>
      <div class="w-px h-6 bg-gray-300 hidden md:block"></div>
      <div class="text-gray-700 font-semibold text-sm font-jost">400+ Google Reviews</div>
      <div class="w-px h-6 bg-gray-300 hidden md:block"></div>
      <div class="text-gray-700 font-semibold text-sm font-jost">GPhC Registered Pharmacy</div>
      <div class="w-px h-6 bg-gray-300 hidden md:block"></div>
      <a href="<?php echo esc_url($booking_url); ?>" class="inline-flex items-center gap-2 bg-blue-600 text-white text-sm font-semibold px-5 py-2.5 rounded-full hover:bg-blue-700 transition-colors shadow-md font-jost">
        Book Appointment
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>

  </div>
</section>


<?php get_footer(); ?>


