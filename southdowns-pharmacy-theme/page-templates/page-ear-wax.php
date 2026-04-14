<?php
/**
 * Template Name: Ear Wax Removal
 *
 * Select this template on the Ear Wax page via Page → Template in the editor.
 */
get_header();
$booking_url = sp_booking_url();
$phone_raw   = sp_phone_raw();
$phone       = sp_phone();
?>

<!-- Page-scoped styles -->
<style>
  /* Scroll reveal */
  .ew-reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.7s cubic-bezier(0.4,0,0.2,1), transform 0.7s cubic-bezier(0.4,0,0.2,1); }
  .ew-reveal.visible { opacity: 1; transform: translateY(0); }
  .ew-reveal[data-delay="1"] { transition-delay: 0.1s; }
  .ew-reveal[data-delay="2"] { transition-delay: 0.2s; }
  .ew-reveal[data-delay="3"] { transition-delay: 0.3s; }
  .ew-reveal[data-delay="4"] { transition-delay: 0.4s; }
  .ew-reveal[data-delay="5"] { transition-delay: 0.5s; }
  .ew-reveal[data-delay="6"] { transition-delay: 0.6s; }

  /* FAQ Accordion */
  .ew-faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s cubic-bezier(0.4,0,0.2,1), padding 0.3s ease; }
  .ew-faq-item.active .ew-faq-answer { max-height: 500px; }
  .ew-faq-item.active .ew-faq-icon { transform: rotate(45deg); }
  .ew-faq-icon { transition: transform 0.3s cubic-bezier(0.4,0,0.2,1); }
  .ew-faq-item { transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease; }
  .ew-faq-item:hover { border-color: #93c5fd; box-shadow: 0 8px 30px rgba(59,130,246,0.1); transform: translateY(-2px); }
  .ew-faq-item.active { border-color: #3b82f6; box-shadow: 0 8px 30px rgba(59,130,246,0.15); transform: translateY(-2px); }

  /* Card hover lift */
  .ew-card-lift { transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.4s ease; }
  .ew-card-lift:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }

  /* Animated glow border for pricing */
  @property --angle { syntax: '<angle>'; initial-value: 0deg; inherits: false; }
  @keyframes ewBorderRotate { to { --angle: 360deg; } }
  .ew-glow-card { position: relative; background: white; border-radius: 1.25rem; overflow: hidden; }
  .ew-glow-card::before { content: ''; position: absolute; inset: -2px; border-radius: 1.35rem; background: conic-gradient(from var(--angle), #3b82f6, #06b6d4, #3b82f6); animation: ewBorderRotate 4s linear infinite; z-index: -1; }

  /* Shimmer */
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  .ew-shimmer { background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.08) 50%, transparent 100%); background-size: 200% 100%; animation: shimmer 3s ease-in-out infinite; }
</style>


<!-- ============================================================
     S1: HERO — Matches homepage 2-column layout exactly
     ============================================================ -->
<section class="relative w-full min-h-[500px] lg:min-h-[600px] overflow-hidden">

  <!-- Mobile: full-width image with overlay -->
  <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=1200&q=80&auto=format&fit=crop');"></div>
  <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
  <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
    <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-xs font-medium px-4 py-2 rounded-full mb-4 border border-white/20 self-start">
      <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span></span>
      TympaHealth Certified
    </div>
    <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Professional Ear Wax Removal</h1>
    <p class="text-white text-base leading-relaxed mb-5 font-jost">Safe, painless microsuction by trained clinicians. The gold standard in ear care &mdash; no water, no mess, immediate results.</p>
    <div class="flex flex-wrap gap-3 mb-4">
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-sm font-semibold px-5 py-2.5 rounded-full shadow-lg font-jost">
        Book Appointment
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
    <p class="text-white/90 text-sm font-jost">Same-day appointments available &middot; From &pound;49 &middot; Free follow-up included</p>
  </div>

  <!-- Desktop: 2-column split matching homepage hero -->
  <div class="hidden md:flex">
    <!-- Left: solid blue panel -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
      <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20 self-start">
        <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span></span>
        TympaHealth Certified
      </div>
      <h1 class="text-white text-4xl lg:text-[50px] font-semibold leading-tight mb-6 font-jost" style="line-height:1.1;">Professional Ear Wax Removal by Microsuction</h1>
      <p class="text-white text-lg lg:text-xl leading-relaxed mb-6 font-jost">Powered by TympaHealth, our trained clinicians use gentle low-pressure microsuction &mdash; the gold standard in ear care. No water, no mess, completely painless with immediate results.</p>
      <div class="flex flex-wrap gap-3 mb-6">
        <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-base font-semibold px-6 py-3 rounded-full hover:bg-blue-50 transition-colors shadow-lg font-jost">
          Book Appointment
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="#locations" class="inline-flex items-center gap-2 text-white/80 text-sm font-medium px-5 py-3 rounded-full hover:text-white transition-colors font-jost">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Find Your Nearest Branch
        </a>
      </div>
      <p class="text-white text-base font-medium font-jost">From &pound;49 &middot; Free follow-up included &middot; Same-day appointments</p>
    </div>

    <!-- Right: image -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=1200&q=80&auto=format&fit=crop');"></div>

    <!-- Badge images — 2 badges (top + bottom, no middle for this service) -->
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398697-0.png" alt="Same Day Appointments" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;bottom:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398725-1.png" alt="5-Star Rated" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
  </div>

</section>


<!-- ============================================================
     S2: KEY STATS — Light gradient, 4 white stat cards
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background: linear-gradient(135deg, #f8fafc 0%, #eff6ff 50%, #f0f9ff 100%);">
  <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100/30 rounded-full translate-x-1/3 -translate-y-1/3 blur-3xl"></div>
  <div class="absolute bottom-0 left-0 w-80 h-80 bg-cyan-100/20 rounded-full -translate-x-1/3 translate-y-1/3 blur-3xl"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm text-blue-700 text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-blue-200/60 shadow-sm">
        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500"></span></span>
        <span class="uppercase tracking-wider text-xs font-semibold">At a Glance</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6 font-jost">Professional Microsuction Treatment</h2>
      <p class="text-lg md:text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-jost">The safest and most effective method of ear wax removal, available across our Hampshire locations.</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
      <div class="ew-reveal ew-card-lift text-center p-6 md:p-8 bg-white rounded-2xl border border-blue-100/60 shadow-sm hover:shadow-md transition-shadow" data-delay="1">
        <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2 font-jost">20</div>
        <div class="text-sm md:text-base text-gray-500 font-medium font-jost">Minute Appointments</div>
      </div>
      <div class="ew-reveal ew-card-lift text-center p-6 md:p-8 bg-white rounded-2xl border border-blue-100/60 shadow-sm hover:shadow-md transition-shadow" data-delay="2">
        <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2 font-jost">95%+</div>
        <div class="text-sm md:text-base text-gray-500 font-medium font-jost">Success Rate</div>
      </div>
      <div class="ew-reveal ew-card-lift text-center p-6 md:p-8 bg-white rounded-2xl border border-blue-100/60 shadow-sm hover:shadow-md transition-shadow" data-delay="3">
        <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2 font-jost">Same</div>
        <div class="text-sm md:text-base text-gray-500 font-medium font-jost">Day Appointments</div>
      </div>
      <div class="ew-reveal ew-card-lift text-center p-6 md:p-8 bg-white rounded-2xl border border-blue-100/60 shadow-sm hover:shadow-md transition-shadow" data-delay="4">
        <div class="text-4xl md:text-5xl font-bold text-blue-600 mb-2 font-jost">Free</div>
        <div class="text-sm md:text-base text-gray-500 font-medium font-jost">Follow-Up Included</div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
