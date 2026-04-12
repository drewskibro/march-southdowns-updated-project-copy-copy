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

<?php get_footer(); ?>
