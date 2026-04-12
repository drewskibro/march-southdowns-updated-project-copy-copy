<?php
/**
 * Template Name: Travel Health
 *
 * Select this template on the Travel Health page via Page → Template in the editor.
 */
get_header();
$booking_url = sp_booking_url();
$phone_raw   = sp_phone_raw();
$phone       = sp_phone();
?>

<!-- Page-scoped styles -->
<style>
  /* Scroll reveal */
  .tv-reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.7s cubic-bezier(0.4,0,0.2,1), transform 0.7s cubic-bezier(0.4,0,0.2,1); }
  .tv-reveal.visible { opacity: 1; transform: translateY(0); }
  .tv-reveal[data-delay="1"] { transition-delay: 0.1s; }
  .tv-reveal[data-delay="2"] { transition-delay: 0.2s; }
  .tv-reveal[data-delay="3"] { transition-delay: 0.3s; }
  .tv-reveal[data-delay="4"] { transition-delay: 0.4s; }
  .tv-reveal[data-delay="5"] { transition-delay: 0.5s; }

  /* FAQ Accordion */
  .tv-faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s cubic-bezier(0.4,0,0.2,1), padding 0.3s ease; }
  .tv-faq-item.active .tv-faq-answer { max-height: 500px; }
  .tv-faq-item.active .tv-faq-icon { transform: rotate(45deg); }
  .tv-faq-icon { transition: transform 0.3s cubic-bezier(0.4,0,0.2,1); }
  .tv-faq-item { transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease; }
  .tv-faq-item:hover { border-color: #93c5fd; box-shadow: 0 8px 30px rgba(59,130,246,0.1); transform: translateY(-2px); }
  .tv-faq-item.active { border-color: #3b82f6; box-shadow: 0 8px 30px rgba(59,130,246,0.15); transform: translateY(-2px); }

  /* Card hover lift */
  .tv-card-lift { transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.4s ease; }
  .tv-card-lift:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }

  /* Shimmer */
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  .tv-shimmer { background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.08) 50%, transparent 100%); background-size: 200% 100%; animation: shimmer 3s ease-in-out infinite; }
</style>

<!-- ============================================================
     S1: HERO — Matches homepage 2-column layout exactly
     ============================================================ -->
<section class="relative w-full min-h-[500px] lg:min-h-[600px] overflow-hidden">

  <!-- Mobile: full-width image with overlay -->
  <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=1200&q=80&auto=format&fit=crop');"></div>
  <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
  <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
    <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-xs font-medium px-4 py-2 rounded-full mb-4 border border-white/20 self-start">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      No GP Referral Needed
    </div>
    <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Hampshire&rsquo;s Trusted Travel Health Clinic</h1>
    <p class="text-white text-base leading-relaxed mb-5 font-jost">Expert vaccination advice, same-day appointments, and everything you need to travel safely &mdash; all under one roof across 4 Hampshire locations.</p>
    <div class="flex flex-wrap gap-3 mb-4">
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-sm font-semibold px-5 py-2.5 rounded-full shadow-lg font-jost">
        Book Travel Consultation
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
    <p class="text-white/90 text-sm font-jost">Same-day appointments typically available &middot; No referral needed</p>
  </div>

  <!-- Desktop: 2-column split matching homepage hero -->
  <div class="hidden md:flex">
    <!-- Left: solid blue panel -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
      <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20 self-start">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        No GP Referral &middot; Same-Day Appointments
      </div>
      <h1 class="text-white text-4xl lg:text-[50px] font-semibold leading-tight mb-6 font-jost" style="line-height:1.1;">Hampshire&rsquo;s Trusted Travel Health Clinic</h1>
      <p class="text-white text-lg lg:text-xl leading-relaxed mb-6 font-jost">Southdowns Pharmacy&rsquo;s dedicated travel health service, serving Hampshire from 4 locations. Expert vaccination advice, same-day appointments, and everything you need to travel safely &mdash; all under one roof.</p>
      <div class="flex flex-wrap gap-3 mb-6">
        <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-base font-semibold px-6 py-3 rounded-full hover:bg-blue-50 transition-colors shadow-lg font-jost">
          Book Travel Consultation
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="#vaccines" class="inline-flex items-center gap-2 text-white/80 text-sm font-medium px-5 py-3 rounded-full hover:text-white transition-colors font-jost">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 14l2 2 4-4"/></svg>
          Check What Vaccines You Need
        </a>
      </div>
      <div class="flex flex-wrap gap-x-6 gap-y-2 text-white/90 text-sm font-jost">
        <span class="flex items-center gap-1.5"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> All Travel Vaccines</span>
        <span class="flex items-center gap-1.5"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg> Same-Day Available</span>
        <span class="flex items-center gap-1.5"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> Expert Pharmacists</span>
      </div>
    </div>

    <!-- Right: image -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=1200&q=80&auto=format&fit=crop');"></div>

    <!-- Badge images straddling the centre divider -->
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398697-0.png" alt="Same Day Appointments" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:50%;transform:translate(-50%,-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398761-2.png" alt="Yellow Fever Centre" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;bottom:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398725-1.png" alt="5-Star Service" class="w-[130px] h-[130px] object-contain drop-shadow-lg"/>
    </div>
  </div>

</section>


<!-- ============================================================
     S2: STATS BAR — Blue gradient, 4 glassmorphism stat cards
     ============================================================ -->
<section class="relative py-16 md:py-20 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white rounded-full translate-x-1/4 translate-y-1/4"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
      <div class="tv-reveal tv-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="1">
        <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 font-jost">Same Day</div>
        <div class="text-sm md:text-base text-blue-100 font-medium font-jost">Travel Vaccinations</div>
        <div class="text-xs text-blue-200/60 mt-1 font-jost">No referral needed, no long waits</div>
      </div>
      <div class="tv-reveal tv-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="2">
        <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 font-jost">1,000+</div>
        <div class="text-sm md:text-base text-blue-100 font-medium font-jost">Travellers Protected</div>
        <div class="text-xs text-blue-200/60 mt-1 font-jost">Safe journeys across 50+ countries</div>
      </div>
      <div class="tv-reveal tv-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="3">
        <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 font-jost">20+</div>
        <div class="text-sm md:text-base text-blue-100 font-medium font-jost">Vaccines In Stock</div>
        <div class="text-xs text-blue-200/60 mt-1 font-jost">Complete travel protection</div>
      </div>
      <div class="tv-reveal tv-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="4">
        <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-2 font-jost">4.9&#9733;</div>
        <div class="text-sm md:text-base text-blue-100 font-medium font-jost">Patient Rating</div>
        <div class="text-xs text-blue-200/60 mt-1 font-jost">GPhC registered pharmacists</div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     S3: WHY CHOOSE US — White bg, 3 photo cards with numbered badges
     ============================================================ -->
<section class="py-16 md:py-24 bg-white relative overflow-hidden" id="why-us">
  <div class="absolute top-0 right-0 w-96 h-96 bg-blue-50/50 rounded-full translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-blue-100">
        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500"></span></span>
        <span class="uppercase tracking-wider text-xs font-semibold">More Than Just Jabs</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6 font-jost">Why Choose Our Hampshire Travel Clinics?</h2>
      <p class="text-lg md:text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-jost">Comprehensive travel health protection that gives you confidence from booking to landing.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

      <div class="tv-reveal tv-card-lift bg-white rounded-2xl overflow-hidden border border-gray-200/80 shadow-sm group" data-delay="1">
        <div class="relative overflow-hidden aspect-[3/2]">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=600&h=400&fit=crop" alt="Expert travel health consultation" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
          <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-blue-700 text-xs font-bold px-3 py-1.5 rounded-full">01</div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Expert Travel Consultations</h3>
          <p class="text-gray-600 leading-relaxed mb-4 font-jost">Personalised risk assessment based on your exact itinerary, not generic destination advice. We consider your route, accommodation type, activities, and medical history.</p>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:gap-3 transition-all font-jost">
            Book Consultation <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>

      <div class="tv-reveal tv-card-lift bg-white rounded-2xl overflow-hidden border border-gray-200/80 shadow-sm group" data-delay="2">
        <div class="relative overflow-hidden aspect-[3/2]">
          <img src="https://images.unsplash.com/photo-1584982751601-97dcc096659c?w=600&h=400&fit=crop" alt="Same-day travel vaccination appointments" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
          <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-blue-700 text-xs font-bold px-3 py-1.5 rounded-full">02</div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Same-Day Appointments</h3>
          <p class="text-gray-600 leading-relaxed mb-4 font-jost">Last-minute trip planned? No problem. Get essential vaccinations administered the same day and walk out protected, not stressed about timing.</p>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:gap-3 transition-all font-jost">
            Book Consultation <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>

      <div class="tv-reveal tv-card-lift bg-white rounded-2xl overflow-hidden border border-gray-200/80 shadow-sm group" data-delay="3">
        <div class="relative overflow-hidden aspect-[3/2]">
          <img src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=600&h=400&fit=crop" alt="Full range of travel vaccines in stock" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
          <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-blue-700 text-xs font-bold px-3 py-1.5 rounded-full">03</div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Every Vaccine In Stock</h3>
          <p class="text-gray-600 leading-relaxed mb-4 font-jost">No prescription delays or follow-up visits. We stock every travel vaccine including Yellow Fever, DTP, Typhoid, Rabies, Japanese Encephalitis, and malaria prevention.</p>
          <a href="#vaccines" class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:gap-3 transition-all font-jost">
            View All Vaccines <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     S4: POPULAR DESTINATIONS — Blue gradient, 8 destination photo cards
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);" id="destinations">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white rounded-full translate-x-1/4 translate-y-1/4"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <div class="inline-flex items-center gap-2 bg-white/15 text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        <span class="uppercase tracking-wider text-xs font-semibold">Popular Travel Destinations</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-jost">Where Are You Headed?</h2>
      <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed font-jost">From tropical Asia to safari Africa, we have the vaccinations and expert advice to keep you safe wherever your adventure takes you.</p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5">

      <!-- Thailand -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="1">
        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&h=450&fit=crop" alt="Thailand travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">Southeast Asia</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">Thailand</h3>
          <p class="text-blue-100/80 text-xs font-jost">Hep A/B &middot; Typhoid &middot; Rabies</p>
        </div>
      </div>

      <!-- India -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="2">
        <img src="https://images.unsplash.com/photo-1564507592333-c60657eea523?w=600&h=450&fit=crop" alt="India travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">South Asia</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">India</h3>
          <p class="text-blue-100/80 text-xs font-jost">Hep A/B &middot; Typhoid &middot; DTP</p>
        </div>
      </div>

      <!-- Kenya -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="3">
        <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?w=600&h=450&fit=crop" alt="Kenya travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">East Africa</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">Kenya</h3>
          <p class="text-blue-100/80 text-xs font-jost">Yellow Fever &middot; Typhoid &middot; Malaria</p>
        </div>
      </div>

      <!-- Vietnam -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="4">
        <img src="https://images.unsplash.com/photo-1528360983277-13d401cdc186?w=600&h=450&fit=crop" alt="Vietnam travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">Southeast Asia</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">Vietnam</h3>
          <p class="text-blue-100/80 text-xs font-jost">Hep A &middot; Typhoid &middot; Rabies</p>
        </div>
      </div>

      <!-- Tanzania -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="1">
        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=600&h=450&fit=crop" alt="Tanzania safari travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">East Africa</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">Tanzania</h3>
          <p class="text-blue-100/80 text-xs font-jost">Yellow Fever &middot; Malaria &middot; Typhoid</p>
        </div>
      </div>

      <!-- Morocco -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="2">
        <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=600&h=450&fit=crop" alt="Morocco travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">North Africa</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">Morocco</h3>
          <p class="text-blue-100/80 text-xs font-jost">Hep A &middot; Typhoid &middot; Rabies</p>
        </div>
      </div>

      <!-- Indonesia / Bali -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="3">
        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=600&h=450&fit=crop" alt="Indonesia Bali travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">Southeast Asia</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">Indonesia / Bali</h3>
          <p class="text-blue-100/80 text-xs font-jost">Hep A/B &middot; Typhoid &middot; Rabies</p>
        </div>
      </div>

      <!-- Dubai / UAE -->
      <div class="tv-reveal tv-card-lift relative group overflow-hidden rounded-2xl aspect-[4/3]" data-delay="4">
        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=600&h=450&fit=crop" alt="Dubai UAE travel vaccinations" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent"></div>
        <div class="absolute inset-0 flex flex-col justify-end p-4">
          <div class="text-xs text-blue-200 font-semibold uppercase tracking-wider mb-1 font-jost">Middle East</div>
          <h3 class="text-white font-bold text-lg leading-tight mb-1 font-jost">Dubai / UAE</h3>
          <p class="text-blue-100/80 text-xs font-jost">Hep A &middot; DTP &middot; Advice</p>
        </div>
      </div>

    </div>
    <!-- CTA strip -->
    <div class="text-center mt-10">
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-7 py-3.5 rounded-full hover:bg-blue-50 transition-colors shadow-lg font-jost">
        Get Your Personalised Vaccine Plan
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
      <p class="text-blue-200 text-sm mt-3 font-jost">Not seeing your destination? We cover 150+ countries &mdash; book a consultation for a personalised assessment.</p>
    </div>
  </div>
</section>


<!-- ============================================================
     S5: COMPREHENSIVE SERVICES — White bg, 6 service cards
     ============================================================ -->
<section class="py-16 md:py-24 bg-white relative overflow-hidden" id="services">
  <div class="absolute top-0 left-0 w-80 h-80 bg-blue-50/60 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-50/40 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-blue-100">
        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500"></span></span>
        <span class="uppercase tracking-wider text-xs font-semibold">Everything Under One Roof</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6 font-jost">Our Travel Health Services</h2>
      <p class="text-lg md:text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-jost">One appointment covers everything. No GP, no hospital, no hassle &mdash; we handle your complete travel health needs in one visit.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Travel Vaccination Consultation -->
      <div class="tv-reveal tv-card-lift rounded-2xl p-8 border border-blue-100 bg-gradient-to-br from-blue-50 to-white" data-delay="1">
        <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5" style="background:linear-gradient(135deg,#1d4ed8,#3b82f6);">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Travel Vaccination Consultation</h3>
        <p class="text-gray-600 leading-relaxed mb-4 font-jost">Comprehensive one-to-one assessment with a qualified travel health pharmacist. We review your destination, activities, medical history, and previous vaccinations to create your personalised plan.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Same-day vaccination if required</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Written vaccination record provided</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>No GP referral needed</li>
        </ul>
      </div>

      <!-- Malaria Prevention -->
      <div class="tv-reveal tv-card-lift rounded-2xl p-8 border border-blue-100 bg-gradient-to-br from-blue-50 to-white" data-delay="2">
        <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5" style="background:linear-gradient(135deg,#1d4ed8,#3b82f6);">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3M8 21H5a2 2 0 0 1-2-2v-3m18 0v3a2 2 0 0 1-2 2h-3"/><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Malaria Prevention</h3>
        <p class="text-gray-600 leading-relaxed mb-4 font-jost">Prescription anti-malarial medication tailored to your destination, travel dates, and medical history. We explain how and when to take your medication for maximum protection.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Doxycycline, Malarone &amp; Lariam</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Bite avoidance advice included</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Same-day prescription &amp; supply</li>
        </ul>
      </div>

      <!-- Fit to Fly Certificates -->
      <div class="tv-reveal tv-card-lift rounded-2xl p-8 border border-blue-100 bg-gradient-to-br from-blue-50 to-white" data-delay="3">
        <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5" style="background:linear-gradient(135deg,#1d4ed8,#3b82f6);">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.58a2 2 0 0 1 2-2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Fit to Fly Certificates</h3>
        <p class="text-gray-600 leading-relaxed mb-4 font-jost">Official documentation confirming you are medically fit to travel, accepted by all major UK airlines. Issued same-day following a brief assessment by our pharmacist.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Accepted by all UK airlines</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Same-day certificate issued</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Quick 15-minute appointment</li>
        </ul>
      </div>

      <!-- Travel Health Advice -->
      <div class="tv-reveal tv-card-lift rounded-2xl p-8 border border-blue-100 bg-gradient-to-br from-blue-50 to-white" data-delay="1">
        <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5" style="background:linear-gradient(135deg,#1d4ed8,#3b82f6);">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Destination Health Advice</h3>
        <p class="text-gray-600 leading-relaxed mb-4 font-jost">Detailed written guidance for your specific destinations covering food and water safety, insect protection, sun safety, altitude sickness, traveller&rsquo;s diarrhoea, and emergency medication.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Food &amp; water safety guidance</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Insect &amp; sun protection advice</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Emergency medication guidance</li>
        </ul>
      </div>

      <!-- Travel Medication -->
      <div class="tv-reveal tv-card-lift rounded-2xl p-8 border border-blue-100 bg-gradient-to-br from-blue-50 to-white" data-delay="2">
        <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5" style="background:linear-gradient(135deg,#1d4ed8,#3b82f6);">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><path d="M3 9h18M9 21V9"/></svg>
        </div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Travel Medication &amp; Kits</h3>
        <p class="text-gray-600 leading-relaxed mb-4 font-jost">We supply a full range of travel medications including altitude sickness tablets, traveller&rsquo;s diarrhoea treatment, antihistamines, and first aid essentials for your trip.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Altitude sickness prevention</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Traveller&rsquo;s diarrhoea treatment</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Full travel first-aid kits</li>
        </ul>
      </div>

      <!-- Yellow Fever — amber highlight card -->
      <div class="tv-reveal tv-card-lift rounded-2xl p-8 border border-amber-200 bg-gradient-to-br from-amber-50 to-white" data-delay="3">
        <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-5 bg-gradient-to-br from-amber-400 to-amber-600">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        </div>
        <div class="inline-flex items-center gap-1.5 bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full mb-3 uppercase tracking-wide">Official Vaccination Centre</div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Yellow Fever Vaccination</h3>
        <p class="text-gray-600 leading-relaxed mb-4 font-jost">We are an NHS-registered Yellow Fever Vaccination Centre. A single dose provides lifelong immunity and the ICVP certificate is valid for life. Accepted at all borders.</p>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>ICVP certificate issued same day</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Valid for life &mdash; no boosters needed</li>
          <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>NHS-registered centre</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/yellow-fever/') ); ?>" class="inline-flex items-center gap-2 text-amber-600 font-semibold text-sm mt-4 hover:gap-3 transition-all font-jost">
          Learn more about Yellow Fever <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>

    </div>
    <div class="text-center mt-10">
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 text-white font-semibold px-7 py-3.5 rounded-full shadow-lg font-jost transition-opacity hover:opacity-90" style="background:linear-gradient(135deg,#1d4ed8,#3b82f6);">
        Book Your Travel Health Appointment
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ============================================================
     S6: AVAILABLE VACCINES — Blue gradient, 12 vaccine name tiles
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);" id="vaccines">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-white rounded-full -translate-x-1/4 translate-y-1/4"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <div class="inline-flex items-center gap-2 bg-white/15 text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20"/></svg>
        <span class="uppercase tracking-wider text-xs font-semibold">Always In Stock</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-jost">Travel Vaccines We Provide</h2>
      <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed font-jost">No prescription, no waiting lists, no GP appointments. All vaccines are available same-day across our 4 Hampshire locations.</p>
    </div>

    <?php
    $vaccines = [
      ['Yellow Fever',           'ICVP certificate included &middot; Valid for life',           '#f59e0b', true ],
      ['Hepatitis A',            'Single dose gives 1 year protection, booster lasts 25 years', '#3b82f6', false],
      ['Hepatitis B',            'Course of 3 doses over 6 months &middot; Long-term protection','#3b82f6', false],
      ['Typhoid',                'Injection or oral capsules &middot; 3-year protection',        '#3b82f6', false],
      ['Rabies (Pre-Exposure)',   '3-dose course &middot; Essential for adventure travellers',   '#3b82f6', false],
      ['Meningitis ACWY',        'Single dose &middot; Required for Hajj / Umrah pilgrims',      '#3b82f6', false],
      ['Japanese Encephalitis',  '2-dose course &middot; For rural Asia travel',                '#3b82f6', false],
      ['Diphtheria, Tetanus &amp; Polio', 'Combined booster &middot; 10-year protection',       '#3b82f6', false],
      ['Cholera',                'Oral vaccine &middot; Includes diarrhoea protection',         '#3b82f6', false],
      ['Chickenpox (Varicella)', 'For travellers without prior immunity',                       '#3b82f6', false],
      ['MMR (Measles, Mumps, Rubella)', 'Catch-up for unvaccinated adults',                    '#3b82f6', false],
      ['Travel Flu &amp; Pneumo', 'For high-risk travellers and over-65s',                     '#3b82f6', false],
    ];
    ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach ( $vaccines as $i => $v ) :
        $delay = ( $i % 3 ) + 1;
        $is_yf = $v[3];
      ?>
      <div class="tv-reveal tv-card-lift flex items-start gap-4 p-5 rounded-2xl border backdrop-blur-sm <?php echo $is_yf ? 'bg-amber-500/20 border-amber-400/40' : 'bg-white/10 border-white/20 hover:bg-white/15'; ?> transition-colors" data-delay="<?php echo $delay; ?>">
        <div class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center <?php echo $is_yf ? 'bg-amber-400/30' : 'bg-white/20'; ?>">
          <?php if ( $is_yf ) : ?>
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          <?php else : ?>
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          <?php endif; ?>
        </div>
        <div>
          <div class="font-bold <?php echo $is_yf ? 'text-amber-200' : 'text-white'; ?> font-jost mb-1"><?php echo $v[0]; ?></div>
          <div class="text-xs <?php echo $is_yf ? 'text-amber-100/80' : 'text-blue-100/80'; ?> font-jost"><?php echo $v[1]; ?></div>
        </div>
        <?php if ( $is_yf ) : ?>
        <div class="ml-auto flex-shrink-0">
          <span class="bg-amber-400/30 text-amber-200 text-xs font-bold px-2.5 py-1 rounded-full font-jost">ICVP</span>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-10 p-5 rounded-2xl bg-white/10 border border-white/20 flex flex-col sm:flex-row items-start sm:items-center gap-4">
      <svg class="flex-shrink-0 w-8 h-8 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      <p class="text-blue-100 text-sm leading-relaxed font-jost flex-1">Some vaccinations require a course of doses over several weeks. We recommend booking your appointment at least <strong class="text-white">6–8 weeks before travel</strong>, though we can still help with last-minute trips.</p>
      <a href="<?php echo esc_url( $booking_url ); ?>" class="flex-shrink-0 inline-flex items-center gap-2 bg-white text-blue-700 font-semibold text-sm px-5 py-2.5 rounded-full hover:bg-blue-50 transition-colors shadow font-jost">
        Book Now <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ============================================================
     S7: HOW IT WORKS — White bg, 3 photo step cards
     ============================================================ -->
<section class="py-16 md:py-24 bg-white relative overflow-hidden">
  <div class="absolute top-0 left-0 w-80 h-80 bg-blue-50/60 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-blue-100">
        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500"></span></span>
        <span class="uppercase tracking-wider text-xs font-semibold">Simple &amp; Straightforward</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6 font-jost">How Your Appointment Works</h2>
      <p class="text-lg md:text-xl text-gray-500 max-w-3xl mx-auto leading-relaxed font-jost">From booking to protected &mdash; it really is this simple. No GP referral, no long waits, no unnecessary visits.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

      <!-- Step 1 -->
      <div class="tv-reveal tv-card-lift bg-white rounded-2xl overflow-hidden border border-gray-200/80 shadow-sm group" data-delay="1">
        <div class="relative overflow-hidden aspect-[3/2]">
          <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=600&h=400&fit=crop" alt="Book your travel health appointment online" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
          <div class="absolute top-4 left-4">
            <div class="bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider font-jost">STEP 1</div>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Book Online or Call Us</h3>
          <p class="text-gray-600 leading-relaxed mb-4 font-jost">Book a travel health consultation at your nearest Southdowns Pharmacy location. Same-day appointments are usually available &mdash; just call ahead to confirm. No GP referral needed.</p>
          <div class="flex flex-wrap gap-3">
            <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-full hover:bg-blue-700 transition-colors font-jost">
              Book Online
            </a>
            <a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="inline-flex items-center gap-2 text-blue-600 text-sm font-semibold px-4 py-2 rounded-full border border-blue-200 hover:border-blue-400 transition-colors font-jost">
              Call Us
            </a>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="tv-reveal tv-card-lift bg-white rounded-2xl overflow-hidden border border-gray-200/80 shadow-sm group" data-delay="2">
        <div class="relative overflow-hidden aspect-[3/2]">
          <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&h=400&fit=crop" alt="Travel health consultation with pharmacist" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
          <div class="absolute top-4 left-4">
            <div class="bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider font-jost">STEP 2</div>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Your Consultation</h3>
          <p class="text-gray-600 leading-relaxed mb-4 font-jost">A qualified travel health pharmacist reviews your destinations, activities, medical history, and travel dates. We build your personalised vaccine and health plan &mdash; typically takes 20&ndash;30 minutes.</p>
          <ul class="space-y-1.5">
            <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Personalised risk assessment</li>
            <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Written health advice provided</li>
          </ul>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="tv-reveal tv-card-lift bg-white rounded-2xl overflow-hidden border border-gray-200/80 shadow-sm group" data-delay="3">
        <div class="relative overflow-hidden aspect-[3/2]">
          <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&h=400&fit=crop" alt="Travel vaccinations administered same day" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
          <div class="absolute top-4 left-4">
            <div class="bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider font-jost">STEP 3</div>
          </div>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Vaccinated &amp; Ready to Go</h3>
          <p class="text-gray-600 leading-relaxed mb-4 font-jost">Approved vaccines are administered the same day, no follow-up visit needed. You leave with your vaccination record, written health advice, and the confidence to travel safely.</p>
          <ul class="space-y-1.5">
            <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Certificates issued same day</li>
            <li class="flex items-center gap-2 text-sm text-gray-600 font-jost"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>Complete vaccination record kept</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
