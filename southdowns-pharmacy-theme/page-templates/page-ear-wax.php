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


<!-- ============================================================
     S3: COMMON SYMPTOMS — Blue gradient, 6 symptom cards
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white rounded-full translate-x-1/4 translate-y-1/4"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <div class="inline-flex items-center gap-2 bg-white/15 text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        <span class="uppercase tracking-wider text-xs font-semibold">Common Symptoms</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-jost">Is Ear Wax Affecting Your Daily Life?</h2>
      <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed font-jost">Don&rsquo;t let blocked ears hold you back. Recognise these common symptoms?</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

      <div class="ew-reveal group bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105" data-delay="1">
        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-5 group-hover:scale-110 transition-transform" style="background:rgba(6,182,212,0.25);border:1px solid rgba(34,211,238,0.5);">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#67e8f9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/></svg>
        </div>
        <h3 class="text-white text-lg font-bold mb-3 font-jost">Difficulty Hearing</h3>
        <p class="text-blue-100 leading-relaxed font-jost">Muffled sounds or reduced hearing quality affecting conversations and daily activities.</p>
      </div>

      <div class="ew-reveal group bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105" data-delay="2">
        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-5 group-hover:scale-110 transition-transform" style="background:rgba(244,63,94,0.25);border:1px solid rgba(253,164,175,0.5);">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#fda4af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
        </div>
        <h3 class="text-white text-lg font-bold mb-3 font-jost">Earache or Discomfort</h3>
        <p class="text-blue-100 leading-relaxed font-jost">Persistent pain, pressure, or uncomfortable fullness in one or both ears.</p>
      </div>

      <div class="ew-reveal group bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105" data-delay="3">
        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-5 group-hover:scale-110 transition-transform" style="background:rgba(245,158,11,0.25);border:1px solid rgba(252,211,77,0.5);">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#fcd34d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg>
        </div>
        <h3 class="text-white text-lg font-bold mb-3 font-jost">Ringing or Buzzing</h3>
        <p class="text-blue-100 leading-relaxed font-jost">Tinnitus symptoms including ringing, buzzing, or humming sounds in your ears.</p>
      </div>

      <div class="ew-reveal group bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105" data-delay="4">
        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-5 group-hover:scale-110 transition-transform" style="background:rgba(139,92,246,0.25);border:1px solid rgba(196,181,253,0.5);">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#c4b5fd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
        </div>
        <h3 class="text-white text-lg font-bold mb-3 font-jost">Dizziness</h3>
        <p class="text-blue-100 leading-relaxed font-jost">Feeling off-balance or experiencing vertigo due to blocked ear canals.</p>
      </div>

      <div class="ew-reveal group bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105" data-delay="5">
        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-5 group-hover:scale-110 transition-transform" style="background:rgba(16,185,129,0.25);border:1px solid rgba(52,211,153,0.5);">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#6ee7b7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
        </div>
        <h3 class="text-white text-lg font-bold mb-3 font-jost">Hearing Aid Problems</h3>
        <p class="text-blue-100 leading-relaxed font-jost">Failed hearing aid fitting or devices not working properly due to wax build-up.</p>
      </div>

      <div class="ew-reveal group bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 hover:scale-105" data-delay="6">
        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-5 group-hover:scale-110 transition-transform" style="background:rgba(249,115,22,0.25);border:1px solid rgba(253,186,116,0.5);">
          <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#fdba74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-white text-lg font-bold mb-3 font-jost">Persistent Cough</h3>
        <p class="text-blue-100 leading-relaxed font-jost">Unexplained coughing caused by ear wax stimulating nerves in the ear canal.</p>
      </div>

    </div>
    <div class="text-center mt-10">
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-7 py-3.5 rounded-full hover:bg-blue-50 transition-colors shadow-lg font-jost">
        Book Your Appointment
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ============================================================
     S4: WHAT IS MICROSUCTION — Two-column: white left + image right
     ============================================================ -->
<section class="relative overflow-hidden" id="about">
  <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[540px]">
    <!-- Left: copy -->
    <div class="relative flex flex-col justify-center px-10 lg:px-16 py-16 bg-white overflow-hidden">
      <div class="absolute top-0 right-0 w-72 h-72 bg-blue-50/60 rounded-full translate-x-1/2 -translate-y-1/2 blur-2xl pointer-events-none"></div>
      <div class="absolute bottom-0 left-0 w-56 h-56 bg-cyan-50/60 rounded-full -translate-x-1/3 translate-y-1/3 blur-2xl pointer-events-none"></div>
      <div class="relative z-10 ew-reveal">
        <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-xs font-semibold px-4 py-2 rounded-full mb-6 border border-blue-200/60 uppercase tracking-wider self-start">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
          What You Need to Know
        </div>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-jost leading-tight">What Is Ear Microsuction?</h2>
        <p class="text-gray-600 text-lg leading-relaxed mb-5 font-jost">Ear Microsuction is the safest and most effective way to remove earwax. It works by inserting a low-pressure suction probe into the ear. One of our trained clinicians wearing a microscope will control the probe to clear the ear canal of wax.</p>
        <p class="text-gray-600 text-lg leading-relaxed mb-8 font-jost">Painless and clean &mdash; no water squirted into your ear canal like syringing. Immediate results every time.</p>
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-blue-50 rounded-xl p-5 border border-blue-100">
            <div class="text-3xl font-bold text-blue-600 mb-1 font-jost">95%+</div>
            <div class="text-gray-500 text-sm font-jost">Success rate with immediate improvement in hearing</div>
          </div>
          <div class="bg-blue-50 rounded-xl p-5 border border-blue-100">
            <div class="text-3xl font-bold text-blue-600 mb-1 font-jost">No Water</div>
            <div class="text-gray-500 text-sm font-jost">Dry procedure &mdash; no mess, no water squirted into your ears</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Right: image -->
    <div class="relative overflow-hidden min-h-[400px] lg:min-h-0">
      <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?w=900&q=80&auto=format&fit=crop" alt="Professional ear examination with advanced equipment" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 hover:scale-105" loading="lazy"/>
      <div class="absolute inset-0 bg-gradient-to-t from-blue-900/40 to-transparent"></div>
      <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-2.5 flex items-center gap-2 shadow-lg">
        <svg class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
        <span class="text-slate-800 font-semibold text-sm font-jost">TympaHealth Certified Clinicians</span>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
