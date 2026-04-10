<?php
/**
 * Template Name: Weight Loss
 *
 * Select this template on the Weight Loss page via Page → Template in the editor.
 */
get_header();
$booking_url = sp_booking_url();
$phone_raw   = sp_phone_raw();
$phone       = sp_phone();
?>

<!-- Page-scoped styles -->
<style>
  .yf-reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.7s cubic-bezier(0.4,0,0.2,1), transform 0.7s cubic-bezier(0.4,0,0.2,1); }
  .yf-reveal.visible { opacity: 1; transform: translateY(0); }
  .yf-reveal[data-delay="1"] { transition-delay: 0.1s; }
  .yf-reveal[data-delay="2"] { transition-delay: 0.2s; }
  .yf-reveal[data-delay="3"] { transition-delay: 0.3s; }
  .yf-reveal[data-delay="4"] { transition-delay: 0.4s; }
  .yf-reveal[data-delay="5"] { transition-delay: 0.5s; }

  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  .yf-shimmer { background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.08) 50%, transparent 100%); background-size: 200% 100%; animation: shimmer 3s ease-in-out infinite; }

  .yf-card-lift { transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.4s ease; }
  .yf-card-lift:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }

  .yf-step:hover .yf-step-num { transform: scale(1.15); box-shadow: 0 0 0 8px rgba(59,130,246,0.15); }
  .yf-step-num { transition: transform 0.3s ease, box-shadow 0.3s ease; }

  /* FAQ — native <details> accordion */
  .wl-faq-item { border: 1px solid #e5e7eb; border-radius: 1rem; overflow: hidden; transition: border-color 0.3s, box-shadow 0.3s, transform 0.3s; }
  .wl-faq-item:hover { border-color: #93c5fd; box-shadow: 0 8px 30px rgba(59,130,246,0.1); transform: translateY(-2px); }
  .wl-faq-item[open] { border-color: #3b82f6; box-shadow: 0 8px 30px rgba(59,130,246,0.15); }
  .wl-faq-question { display: flex; align-items: center; justify-content: space-between; padding: 1.25rem 1.5rem; cursor: pointer; font-weight: 600; font-size: 1.05rem; color: #1e293b; list-style: none; }
  .wl-faq-question::-webkit-details-marker { display: none; }
  .wl-faq-chevron { transition: transform 0.3s; flex-shrink: 0; margin-left: 1rem; }
  .wl-faq-item[open] .wl-faq-chevron { transform: rotate(180deg); }
  .wl-faq-answer { padding: 0 1.5rem 1.25rem; color: #4b5563; line-height: 1.7; }
</style>

<!-- ============================================================
     S1: HERO — Matches homepage 2-column layout exactly
     ============================================================ -->
<section class="relative w-full min-h-[500px] lg:min-h-[600px] overflow-hidden">

  <!-- Mobile: full-width image with overlay -->
  <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1200&q=80&auto=format&fit=crop');"></div>
  <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
  <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
    <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-xs font-medium px-4 py-2 rounded-full mb-4 border border-white/20 self-start">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      Medical Weight Loss &middot; Hampshire
    </div>
    <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Lose 10&ndash;20% of your body weight in 12 months &mdash; with prescription support at your local Hampshire pharmacy</h1>
    <p class="text-white text-base leading-relaxed mb-5 font-jost">Mounjaro and Wegovy prescriptions from our Hampshire pharmacists. No GP referral. No long waits. Expert face-to-face care across 4 locations.</p>
    <div class="flex flex-wrap gap-3 mb-4">
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-sm font-semibold px-5 py-2.5 rounded-full">
        Book Free Consultation
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
      <a href="#treatments" class="inline-flex items-center gap-2 text-white text-sm font-medium border-2 border-white/40 px-5 py-2.5 rounded-full hover:bg-white/10 transition-colors font-jost">Check Eligibility</a>
    </div>
    <div class="flex flex-wrap gap-4 text-white/90 text-xs font-jost">
      <span>&#10003; GPhC Registered</span>
      <span>&#10003; No GP Referral</span>
      <span>&#10003; Face-to-Face Support</span>
    </div>
  </div>

  <!-- Desktop: 2-column split matching homepage hero -->
  <div class="hidden md:flex">
    <!-- Left: solid blue panel -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
      <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20 self-start">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Medical Weight Loss &middot; Hampshire
      </div>
      <h1 class="text-white text-4xl lg:text-[46px] font-semibold leading-tight mb-6 font-jost" style="line-height:1.1;">Lose 10&ndash;20% of your body weight in 12 months &mdash; with prescription support at your local Hampshire pharmacy</h1>
      <p class="text-white text-lg lg:text-xl leading-relaxed mb-6 font-jost">Mounjaro and Wegovy prescriptions from our Hampshire pharmacists. No GP referral. No long waits. Expert face-to-face care at Southsea, Waterlooville, Havant &amp; Portsmouth.</p>
      <div class="flex flex-wrap gap-3 mb-6">
        <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-base font-semibold px-6 py-3 rounded-full hover:bg-blue-50 transition-colors shadow-lg font-jost">
          Book Free Consultation
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="#treatments" class="inline-flex items-center gap-2 text-white text-base font-medium border-2 border-white/30 px-6 py-3 rounded-full hover:bg-white/10 transition-colors font-jost">Check Eligibility</a>
      </div>
      <div class="flex flex-wrap gap-5 text-white text-sm font-jost">
        <span class="flex items-center gap-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          GPhC Registered
        </span>
        <span class="flex items-center gap-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          No GP Referral
        </span>
        <span class="flex items-center gap-1.5">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          Face-to-Face Support
        </span>
      </div>
    </div>

    <!-- Right: image -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1200&q=80&auto=format&fit=crop');"></div>

    <!-- Badge images straddling the centre divider -->
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398697-0.png" alt="Same Day Appointments" class="w-[130px] h-[130px] object-contain drop-shadow-lg" />
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:50%;transform:translate(-50%,-50%);">
      <img src="https://southdownspharmacygroup.kinsta.cloud/wp-content/uploads/2026/04/Untitled-design-5.png" alt="Medical Weight Loss" class="w-[130px] h-[130px] object-contain drop-shadow-lg rounded-full" />
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;bottom:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398725-1.png" alt="5-Star Service" class="w-[130px] h-[130px] object-contain drop-shadow-lg" />
    </div>
  </div>

</section>


<!-- ============================================================
     S2: SOCIAL PROOF BAR — Blue gradient, 5 glassmorphism stat cards
     ============================================================ -->
<section class="relative py-16 md:py-20 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);">
  <div class="absolute inset-0 yf-shimmer pointer-events-none"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">

      <!-- Card 1: Patients Treated -->
      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-5 md:p-6 text-center" data-delay="1">
        <div class="text-3xl md:text-4xl font-bold text-white mb-1 font-jost">10,000+</div>
        <div class="text-sm text-blue-100 font-medium font-jost">Patients Treated</div>
        <div class="mt-3 flex justify-center">
          <svg class="w-6 h-6 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/>
          </svg>
        </div>
      </div>

      <!-- Card 2: Body Weight Lost -->
      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-5 md:p-6 text-center" data-delay="2">
        <div class="text-3xl md:text-4xl font-bold text-white mb-1 font-jost">10–20%</div>
        <div class="text-sm text-blue-100 font-medium font-jost">Body Weight Lost</div>
        <div class="mt-3 flex justify-center">
          <svg class="w-6 h-6 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/>
          </svg>
        </div>
      </div>

      <!-- Card 3: Satisfaction -->
      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-5 md:p-6 text-center" data-delay="3">
        <div class="text-3xl md:text-4xl font-bold text-white mb-1 font-jost">4.9/5</div>
        <div class="text-sm text-blue-100 font-medium font-jost">Patient Satisfaction</div>
        <div class="mt-3 flex justify-center">
          <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
          </svg>
        </div>
      </div>

      <!-- Card 4: Locations -->
      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-5 md:p-6 text-center" data-delay="4">
        <div class="text-3xl md:text-4xl font-bold text-white mb-1 font-jost">4</div>
        <div class="text-sm text-blue-100 font-medium font-jost">Hampshire Locations</div>
        <div class="mt-3 flex justify-center">
          <svg class="w-6 h-6 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>
      </div>

      <!-- Card 5: Same Day -->
      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-5 md:p-6 text-center col-span-2 md:col-span-1" data-delay="5">
        <div class="text-3xl md:text-4xl font-bold text-white mb-1 font-jost">Same Day</div>
        <div class="text-sm text-blue-100 font-medium font-jost">Appointments</div>
        <div class="mt-3 flex justify-center">
          <svg class="w-6 h-6 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     S3: WHY DIETS FAIL — Light gradient, stats + problem/solution cards
     ============================================================ -->
<section class="py-16 md:py-24" style="background: linear-gradient(180deg, #f0f7ff 0%, #ffffff 100%);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12 md:mb-16 yf-reveal">
      <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-4">The Science Behind Weight Loss</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-jost">Why diets alone often fail &mdash; and what actually works</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto font-jost">Most people regain weight after dieting because hunger hormones work against them. Prescription medications change that equation.</p>
    </div>

    <!-- Stats strip -->
    <div class="grid grid-cols-3 gap-4 md:gap-8 mb-12 md:mb-16">
      <div class="yf-reveal text-center" data-delay="1">
        <div class="text-3xl md:text-5xl font-bold text-blue-600 mb-2 font-jost">95%</div>
        <div class="text-sm md:text-base text-gray-600 font-jost">of dieters regain weight within 5 years</div>
      </div>
      <div class="yf-reveal text-center" data-delay="2">
        <div class="text-3xl md:text-5xl font-bold text-blue-600 mb-2 font-jost">3×</div>
        <div class="text-sm md:text-base text-gray-600 font-jost">more weight lost with GLP-1 medication vs diet alone</div>
      </div>
      <div class="yf-reveal text-center" data-delay="3">
        <div class="text-3xl md:text-5xl font-bold text-blue-600 mb-2 font-jost">68%</div>
        <div class="text-sm md:text-base text-gray-600 font-jost">of adults in England are overweight or obese</div>
      </div>
    </div>

    <!-- Problem / Solution two-col cards -->
    <div class="grid md:grid-cols-2 gap-6 md:gap-8">

      <!-- Problem card -->
      <div class="yf-reveal yf-card-lift bg-white rounded-2xl p-8 border border-red-100 shadow-sm" data-delay="1">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 bg-red-50 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 font-jost">Traditional dieting</h3>
        </div>
        <ul class="space-y-3">
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
            Constant hunger and cravings make adherence extremely difficult
          </li>
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
            Metabolism slows down, making weight loss progressively harder
          </li>
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
            Hormones actively drive you to regain lost weight
          </li>
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-red-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
            Yo-yo cycling damages long-term metabolic health
          </li>
        </ul>
      </div>

      <!-- Solution card -->
      <div class="yf-reveal yf-card-lift bg-white rounded-2xl p-8 border border-blue-100 shadow-sm" data-delay="2">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 font-jost">Medical weight loss (GLP-1)</h3>
        </div>
        <ul class="space-y-3">
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Reduces appetite at a hormonal level &mdash; hunger feels manageable
          </li>
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Slows gastric emptying so you feel full for longer after meals
          </li>
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Clinically proven: 10&ndash;20% body weight loss over 12 months
          </li>
          <li class="flex items-start gap-3 text-gray-600 font-jost">
            <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Ongoing pharmacist support to help maintain results long-term
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     S4: TREATMENTS — White bg, Mounjaro + Wegovy side-by-side cards
     ============================================================ -->
<section id="treatments" class="py-16 md:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12 md:mb-16 yf-reveal">
      <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-4">Prescription Treatments</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-jost">Clinically proven weight loss medications</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto font-jost">Our GPhC-registered pharmacists prescribe the two most effective GLP-1 medications available in the UK, tailored to your health profile.</p>
    </div>

    <!-- Treatment cards -->
    <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">

      <!-- Mounjaro card -->
      <div class="yf-reveal yf-card-lift bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-md" data-delay="1">
        <div class="relative h-56 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=800&q=80&auto=format&fit=crop" alt="Mounjaro weight loss injection" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent"></div>
          <div class="absolute bottom-4 left-5">
            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">Most Popular</span>
          </div>
        </div>
        <div class="p-7">
          <h3 class="text-2xl font-bold text-gray-900 mb-1 font-jost">Mounjaro&reg;</h3>
          <p class="text-sm text-blue-600 font-medium mb-4 font-jost">Tirzepatide &middot; GIP &amp; GLP-1 receptor agonist</p>
          <p class="text-gray-600 mb-5 font-jost leading-relaxed">The newest and most effective medication available. Mounjaro targets two hormones simultaneously, producing up to <strong>22.5% weight loss</strong> in clinical trials &mdash; more than any other approved treatment.</p>
          <ul class="space-y-2.5 mb-6">
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Weekly self-injection, 2.5mg starting dose
            </li>
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Dual-action: reduces appetite &amp; improves insulin sensitivity
            </li>
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              MHRA-approved for BMI &ge;30, or &ge;27 with comorbidities
            </li>
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              From &pound;149/month including pharmacist support
            </li>
          </ul>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-full transition-colors font-jost">
            Book Free Consultation
          </a>
        </div>
      </div>

      <!-- Wegovy card -->
      <div class="yf-reveal yf-card-lift bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-md" data-delay="2">
        <div class="relative h-56 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=800&q=80&auto=format&fit=crop" alt="Wegovy weight loss injection" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent"></div>
          <div class="absolute bottom-4 left-5">
            <span class="bg-teal-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">Well Established</span>
          </div>
        </div>
        <div class="p-7">
          <h3 class="text-2xl font-bold text-gray-900 mb-1 font-jost">Wegovy&reg;</h3>
          <p class="text-sm text-blue-600 font-medium mb-4 font-jost">Semaglutide &middot; GLP-1 receptor agonist</p>
          <p class="text-gray-600 mb-5 font-jost leading-relaxed">The gold-standard GLP-1 medication with an extensive clinical track record. SUSTAIN and STEP trial data show up to <strong>15% body weight reduction</strong> &mdash; a major advance over lifestyle intervention alone.</p>
          <ul class="space-y-2.5 mb-6">
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Weekly self-injection, 0.25mg starting dose
            </li>
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              Mimics natural GLP-1 hormone to suppress appetite
            </li>
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              MHRA-approved for BMI &ge;30, or &ge;27 with comorbidities
            </li>
            <li class="flex items-start gap-2.5 text-sm text-gray-700 font-jost">
              <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
              From &pound;149/month including pharmacist support
            </li>
          </ul>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-full transition-colors font-jost">
            Book Free Consultation
          </a>
        </div>
      </div>

    </div>

    <!-- Eligibility note -->
    <div class="mt-10 text-center yf-reveal">
      <div class="inline-flex items-start gap-3 bg-blue-50 border border-blue-100 rounded-2xl px-6 py-4 max-w-2xl text-left">
        <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <p class="text-sm text-blue-800 font-jost"><strong>Eligibility:</strong> You must have a BMI of 30 or above, or 27+ with a weight-related health condition such as type 2 diabetes or hypertension. Our pharmacists will assess your suitability at your free consultation.</p>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     S5: OUTCOMES & BENEFITS — Light gradient, 6 result photo cards
     ============================================================ -->
<section class="py-16 md:py-24" style="background: linear-gradient(180deg, #f0f7ff 0%, #ffffff 100%);">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12 md:mb-16 yf-reveal">
      <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-4">Real Results</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-jost">What you can expect from your programme</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto font-jost">Beyond the number on the scales, patients report wide-ranging improvements to their health and quality of life.</p>
    </div>

    <!-- 6 benefit cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="yf-reveal yf-card-lift bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm" data-delay="1">
        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=600&q=80&auto=format&fit=crop" alt="Healthy weight" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"/>
        </div>
        <div class="p-6">
          <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center mb-3">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/></svg>
          </div>
          <h3 class="font-bold text-gray-900 mb-1 font-jost">Significant weight loss</h3>
          <p class="text-sm text-gray-600 font-jost">10&ndash;20% of body weight lost over 12 months, with most patients seeing results within the first 4 weeks.</p>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm" data-delay="2">
        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=600&q=80&auto=format&fit=crop" alt="Blood sugar control" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"/>
        </div>
        <div class="p-6">
          <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center mb-3">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="font-bold text-gray-900 mb-1 font-jost">Improved blood sugar control</h3>
          <p class="text-sm text-gray-600 font-jost">GLP-1 medications improve insulin sensitivity, helping to prevent or manage type 2 diabetes alongside weight loss.</p>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm" data-delay="3">
        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&q=80&auto=format&fit=crop" alt="Better energy" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"/>
        </div>
        <div class="p-6">
          <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center mb-3">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="font-bold text-gray-900 mb-1 font-jost">More energy, less fatigue</h3>
          <p class="text-sm text-gray-600 font-jost">Patients consistently report better energy levels, improved sleep quality and greater motivation for exercise.</p>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm" data-delay="1">
        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1505576399279-565b52d4ac71?w=600&q=80&auto=format&fit=crop" alt="Heart health" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"/>
        </div>
        <div class="p-6">
          <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center mb-3">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <h3 class="font-bold text-gray-900 mb-1 font-jost">Reduced cardiovascular risk</h3>
          <p class="text-sm text-gray-600 font-jost">Lower blood pressure, improved cholesterol levels and reduced strain on your heart as you reach a healthier weight.</p>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm" data-delay="2">
        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=600&q=80&auto=format&fit=crop" alt="Mental wellbeing" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"/>
        </div>
        <div class="p-6">
          <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center mb-3">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="font-bold text-gray-900 mb-1 font-jost">Better mental wellbeing</h3>
          <p class="text-sm text-gray-600 font-jost">Improved self-confidence, reduced anxiety around food and a greater sense of control over your health and body.</p>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm" data-delay="3">
        <div class="h-44 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=600&q=80&auto=format&fit=crop" alt="Joint health" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"/>
        </div>
        <div class="p-6">
          <div class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center mb-3">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
          </div>
          <h3 class="font-bold text-gray-900 mb-1 font-jost">Reduced joint pain</h3>
          <p class="text-sm text-gray-600 font-jost">Less weight means less pressure on knees, hips and ankles &mdash; many patients report significantly reduced joint pain within months.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ============================================================
     S6: HOW IT WORKS — White bg, photo left + 4 numbered step cards
     ============================================================ -->
<section class="py-16 md:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12 md:mb-16 yf-reveal">
      <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-4">Your Journey</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-jost">How our programme works</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto font-jost">From your first free consultation to reaching your goal weight, we're with you at every step.</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <!-- Photo -->
      <div class="yf-reveal order-2 lg:order-1">
        <div class="relative rounded-3xl overflow-hidden shadow-xl">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=80&auto=format&fit=crop" alt="Pharmacist consultation" class="w-full h-[420px] object-cover"/>
          <div class="absolute inset-0 bg-gradient-to-t from-blue-900/40 to-transparent"></div>
          <div class="absolute bottom-6 left-6 right-6">
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl px-5 py-4 shadow-lg">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                  <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                  </svg>
                </div>
                <div>
                  <div class="font-bold text-gray-900 text-sm font-jost">GPhC-Registered Pharmacists</div>
                  <div class="text-xs text-gray-600 font-jost">Expert face-to-face care across Hampshire</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Steps -->
      <div class="order-1 lg:order-2 space-y-5">

        <div class="yf-reveal yf-step flex gap-5 p-5 bg-blue-50 rounded-2xl hover:bg-blue-100 transition-colors" data-delay="1">
          <div class="yf-step-num w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg flex-shrink-0 font-jost" style="background-color:#1a73e9;">1</div>
          <div>
            <h3 class="font-bold text-gray-900 mb-1 font-jost">Free consultation</h3>
            <p class="text-sm text-gray-600 font-jost">Book a same-day appointment at your nearest Southdowns branch. Our pharmacist reviews your medical history, BMI and health goals to recommend the right treatment.</p>
          </div>
        </div>

        <div class="yf-reveal yf-step flex gap-5 p-5 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors" data-delay="2">
          <div class="yf-step-num w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg flex-shrink-0 font-jost" style="background: linear-gradient(135deg, #1a73e9, #1d4ed8);">2</div>
          <div>
            <h3 class="font-bold text-gray-900 mb-1 font-jost">Same-day prescription &amp; injection training</h3>
            <p class="text-sm text-gray-600 font-jost">If eligible, your prescription is issued the same day. We show you exactly how to self-administer your weekly injection safely and confidently.</p>
          </div>
        </div>

        <div class="yf-reveal yf-step flex gap-5 p-5 bg-blue-50 rounded-2xl hover:bg-blue-100 transition-colors" data-delay="3">
          <div class="yf-step-num w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg flex-shrink-0 font-jost" style="background-color:#1a73e9;">3</div>
          <div>
            <h3 class="font-bold text-gray-900 mb-1 font-jost">Monthly check-ins &amp; dose adjustments</h3>
            <p class="text-sm text-gray-600 font-jost">Return monthly for weight monitoring, blood pressure checks and dose titration. We adjust your medication as needed to maximise results and minimise side effects.</p>
          </div>
        </div>

        <div class="yf-reveal yf-step flex gap-5 p-5 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors" data-delay="4">
          <div class="yf-step-num w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg flex-shrink-0 font-jost" style="background: linear-gradient(135deg, #1a73e9, #1d4ed8);">4</div>
          <div>
            <h3 class="font-bold text-gray-900 mb-1 font-jost">Reach your goal &amp; maintain results</h3>
            <p class="text-sm text-gray-600 font-jost">At your goal weight, we guide you through a structured exit plan to help you maintain your results long-term, with lifestyle advice and ongoing support.</p>
          </div>
        </div>

        <div class="yf-reveal pt-2" data-delay="5">
          <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-7 py-3.5 rounded-full transition-colors font-jost shadow-lg shadow-blue-500/20">
            Book Your Free Consultation
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     S7: TESTIMONIALS — Blue gradient, 6 glassmorphism review cards
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);">
  <div class="absolute inset-0 yf-shimmer pointer-events-none"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12 md:mb-16 yf-reveal">
      <span class="inline-flex items-center gap-2 bg-white/15 text-white text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-4 border border-white/20">
        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        Patient Stories
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-jost">Real patients, real results</h2>
      <p class="text-lg text-blue-100 max-w-2xl mx-auto font-jost">Hundreds of Hampshire patients have transformed their health through our medical weight loss programme.</p>
    </div>

    <!-- 6 review cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6" data-delay="1">
        <div class="flex gap-1 mb-3">
          <?php for($i=0;$i<5;$i++): ?><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?>
        </div>
        <p class="text-white/90 text-sm leading-relaxed mb-4 font-jost">&ldquo;I've tried every diet going over the years. With Mounjaro I lost 18kg in 6 months. The Southdowns team have been brilliant &mdash; so knowledgeable and supportive throughout.&rdquo;</p>
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-white font-bold text-sm">SH</div>
          <div>
            <div class="text-white font-semibold text-sm font-jost">Sarah H.</div>
            <div class="text-blue-200 text-xs font-jost">Waterlooville</div>
          </div>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6" data-delay="2">
        <div class="flex gap-1 mb-3">
          <?php for($i=0;$i<5;$i++): ?><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?>
        </div>
        <p class="text-white/90 text-sm leading-relaxed mb-4 font-jost">&ldquo;My GP had a 3-month wait. I walked into Southdowns pharmacy, had a consultation the same day and started Wegovy that afternoon. 14kg down in 5 months &mdash; absolutely life-changing.&rdquo;</p>
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-white font-bold text-sm">MT</div>
          <div>
            <div class="text-white font-semibold text-sm font-jost">Mark T.</div>
            <div class="text-blue-200 text-xs font-jost">Portsmouth</div>
          </div>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6" data-delay="3">
        <div class="flex gap-1 mb-3">
          <?php for($i=0;$i<5;$i++): ?><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?>
        </div>
        <p class="text-white/90 text-sm leading-relaxed mb-4 font-jost">&ldquo;I was sceptical at first but the pharmacist explained everything so clearly. My blood sugar is now normal for the first time in years and I've lost nearly 3 stone. Highly recommend.&rdquo;</p>
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-white font-bold text-sm">LR</div>
          <div>
            <div class="text-white font-semibold text-sm font-jost">Linda R.</div>
            <div class="text-blue-200 text-xs font-jost">Havant</div>
          </div>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6" data-delay="1">
        <div class="flex gap-1 mb-3">
          <?php for($i=0;$i<5;$i++): ?><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?>
        </div>
        <p class="text-white/90 text-sm leading-relaxed mb-4 font-jost">&ldquo;The monthly check-ins are what make this different from online services. Having a real pharmacist monitor my progress and adjust my dose has made all the difference. Down 22kg and counting.&rdquo;</p>
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-white font-bold text-sm">DJ</div>
          <div>
            <div class="text-white font-semibold text-sm font-jost">David J.</div>
            <div class="text-blue-200 text-xs font-jost">Southsea</div>
          </div>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6" data-delay="2">
        <div class="flex gap-1 mb-3">
          <?php for($i=0;$i<5;$i++): ?><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?>
        </div>
        <p class="text-white/90 text-sm leading-relaxed mb-4 font-jost">&ldquo;I'd heard horror stories about side effects but mine were minimal. The pharmacist gave me clear advice on managing them. 11kg lost in 3 months and my joints feel amazing.&rdquo;</p>
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-white font-bold text-sm">JB</div>
          <div>
            <div class="text-white font-semibold text-sm font-jost">Julie B.</div>
            <div class="text-blue-200 text-xs font-jost">Waterlooville</div>
          </div>
        </div>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6" data-delay="3">
        <div class="flex gap-1 mb-3">
          <?php for($i=0;$i<5;$i++): ?><svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?>
        </div>
        <p class="text-white/90 text-sm leading-relaxed mb-4 font-jost">&ldquo;Fantastic service from start to finish. No judgement, just professional support. I feel like a completely different person. The team at Portsmouth are wonderful.&rdquo;</p>
        <div class="flex items-center gap-3">
          <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-white font-bold text-sm">RC</div>
          <div>
            <div class="text-white font-semibold text-sm font-jost">Rachel C.</div>
            <div class="text-blue-200 text-xs font-jost">Portsmouth</div>
          </div>
        </div>
      </div>

    </div>

    <!-- Trust row -->
    <div class="flex flex-wrap justify-center gap-8 yf-reveal">
      <div class="flex items-center gap-2 text-white font-jost">
        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        <span class="font-bold">4.9/5</span><span class="text-blue-200 text-sm">average rating</span>
      </div>
      <div class="flex items-center gap-2 text-white font-jost">
        <svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        <span class="font-bold">400+</span><span class="text-blue-200 text-sm">verified reviews</span>
      </div>
      <div class="flex items-center gap-2 text-white font-jost">
        <svg class="w-5 h-5 text-blue-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span class="font-bold">GPhC</span><span class="text-blue-200 text-sm">registered</span>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     S8: LOCATIONS — White bg, 4 branch photo cards with hover zoom
     ============================================================ -->
<section class="py-16 md:py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12 md:mb-16 yf-reveal">
      <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-4">Our Pharmacies</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 font-jost">Visit us at your nearest Hampshire location</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto font-jost">Walk in or book online &mdash; same-day weight loss consultations available at all four Southdowns branches.</p>
    </div>

    <!-- Branch photo cards -->
    <?php
    $branch_images = [
      1 => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=600&q=80&auto=format&fit=crop',
      2 => 'https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=600&q=80&auto=format&fit=crop',
      3 => 'https://images.unsplash.com/photo-1576602976047-174e57a47881?w=600&q=80&auto=format&fit=crop',
      4 => 'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=600&q=80&auto=format&fit=crop',
    ];
    ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 yf-reveal">
      <?php for ( $i = 1; $i <= 4; $i++ ) :
        $b = sp_branch( $i ); ?>
      <div class="group relative bg-white rounded-2xl overflow-hidden border border-gray-200/80 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
        <div class="relative overflow-hidden aspect-[4/3]">
          <img src="<?php echo esc_url( $branch_images[ $i ] ); ?>" alt="<?php echo esc_attr( $b['name'] ); ?> pharmacy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy"/>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
          <div class="absolute bottom-3 left-3">
            <h3 class="text-white text-xl font-bold font-jost"><?php echo esc_html( $b['name'] ); ?></h3>
          </div>
        </div>
        <div class="p-5">
          <div class="flex items-start gap-2 mb-2">
            <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span class="text-gray-600 text-sm font-jost"><?php echo esc_html( $b['address_line1'] . ', ' . $b['address_line2'] ); ?></span>
          </div>
          <div class="flex items-start gap-2 mb-4">
            <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            <span class="text-gray-400 text-xs font-jost"><?php echo esc_html( $b['hours_weekday'] ); ?></span>
          </div>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="flex items-center justify-center gap-2 w-full text-blue-600 text-sm font-semibold bg-blue-50 hover:bg-blue-100 px-4 py-2.5 rounded-xl transition-colors font-jost">
            Book Weight Loss Consultation
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <!-- Info banner -->
    <div class="mt-10 bg-gradient-to-r from-blue-600 to-blue-500 rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center gap-6 shadow-xl shadow-blue-500/15 yf-reveal">
      <div class="flex-shrink-0">
        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
          <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
        </div>
      </div>
      <div class="flex-1 text-center md:text-left">
        <p class="text-white text-lg font-semibold mb-1 font-jost">No GP referral needed</p>
        <p class="text-blue-100 text-base font-jost">Walk in or book online. Our pharmacists can prescribe Mounjaro or Wegovy directly &mdash; same day, no waiting lists.</p>
      </div>
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold px-6 py-3 rounded-full hover:bg-blue-50 transition-colors shadow-lg text-sm font-jost flex-shrink-0">
        Book Free Consultation
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>

  </div>
</section>


<!-- ============================================================
     S9: WHY SOUTHDOWNS — Blue gradient, 6-card grid
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);">
  <div class="absolute inset-0 yf-shimmer pointer-events-none"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12 md:mb-16 yf-reveal">
      <span class="inline-flex items-center gap-2 bg-white/15 text-white text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-4 border border-white/20">
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Why Choose Us
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 font-jost">Why Hampshire chooses Southdowns</h2>
      <p class="text-lg text-blue-100 max-w-2xl mx-auto font-jost">We combine clinical expertise with genuine face-to-face care &mdash; the things online weight loss services simply can't replicate.</p>
    </div>

    <!-- 6-card grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7" data-delay="1">
        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-white mb-2 font-jost">GPhC-Registered</h3>
        <p class="text-blue-100 text-sm leading-relaxed font-jost">All prescribers are General Pharmaceutical Council registered. Your safety and clinical standards are never compromised.</p>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7" data-delay="2">
        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-white mb-2 font-jost">Same-Day Prescriptions</h3>
        <p class="text-blue-100 text-sm leading-relaxed font-jost">No waiting lists, no GP referrals. Book a free consultation online and start your weight loss programme the same day.</p>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7" data-delay="3">
        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        </div>
        <h3 class="text-lg font-bold text-white mb-2 font-jost">Face-to-Face Care</h3>
        <p class="text-blue-100 text-sm leading-relaxed font-jost">Unlike online services, our pharmacists see you in person every month &mdash; monitoring progress, adjusting doses and answering your questions.</p>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7" data-delay="1">
        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-white mb-2 font-jost">4 Hampshire Locations</h3>
        <p class="text-blue-100 text-sm leading-relaxed font-jost">Southsea, Waterlooville, Havant and Portsmouth &mdash; with free parking. Always a convenient branch near you.</p>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7" data-delay="2">
        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-white mb-2 font-jost">MHRA-Approved Medications</h3>
        <p class="text-blue-100 text-sm leading-relaxed font-jost">We only prescribe UK-licensed, MHRA-approved medications. No compounded or unregulated products &mdash; ever.</p>
      </div>

      <div class="yf-reveal yf-card-lift bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-7" data-delay="3">
        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-5">
          <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-white mb-2 font-jost">10,000+ Patients Served</h3>
        <p class="text-blue-100 text-sm leading-relaxed font-jost">Over a decade serving Hampshire communities. Our 4.9-star rating reflects the care and trust we build with every patient.</p>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
