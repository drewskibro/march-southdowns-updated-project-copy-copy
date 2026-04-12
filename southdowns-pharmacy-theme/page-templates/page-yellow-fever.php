<?php
/**
 * Template Name: Yellow Fever
 *
 * Select this template on the Yellow Fever page via Page → Template in the editor.
 */
get_header();
$booking_url = sp_booking_url();
$phone_raw   = sp_phone_raw();
$phone       = sp_phone();
?>

<!-- FAQPage JSON-LD Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"How long does yellow fever vaccination protection last?","acceptedAnswer":{"@type":"Answer","text":"A single dose provides lifelong immunity for most people. The International Certificate of Vaccination is now valid for life."}},
    {"@type":"Question","name":"When should I get the vaccine before travel?","acceptedAnswer":{"@type":"Answer","text":"Book at least 10 days before departure. Your ICVP certificate becomes valid 10 days after vaccination."}},
    {"@type":"Question","name":"Which countries require yellow fever certification?","acceptedAnswer":{"@type":"Answer","text":"Over 40 countries require proof of vaccination, including most of sub-Saharan Africa, parts of South America, and some Asian nations when arriving from endemic areas."}},
    {"@type":"Question","name":"Do I need the vaccine if I'm only transiting through an affected country?","acceptedAnswer":{"@type":"Answer","text":"Yes, often. Many countries require certification if you've transited through a yellow fever endemic country, even without leaving the airport."}},
    {"@type":"Question","name":"Can I get yellow fever vaccine on the NHS?","acceptedAnswer":{"@type":"Answer","text":"No. Yellow fever vaccination has never been available on the NHS. Our all-inclusive price of £85 covers the vaccine, consultation, official certificate, and everything you need."}},
    {"@type":"Question","name":"I lost my certificate. Can I get a replacement?","acceptedAnswer":{"@type":"Answer","text":"If you were vaccinated at Southdowns Pharmacy, we can issue a replacement certificate from our vaccination records. Bring valid photo ID."}},
    {"@type":"Question","name":"Is the vaccine safe during pregnancy?","acceptedAnswer":{"@type":"Answer","text":"Yellow fever vaccine is generally avoided during pregnancy as it is a live vaccine. Discuss your situation with our pharmacist if travel is unavoidable."}},
    {"@type":"Question","name":"What if I have an egg allergy?","acceptedAnswer":{"@type":"Answer","text":"The vaccine is grown in eggs. Severe anaphylactic egg allergy is a contraindication. Disclose your complete allergy history during consultation."}}
  ]
}
</script>

<!-- Page-scoped styles -->
<style>
  /* FAQ Accordion */
  .yf-faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s cubic-bezier(0.4,0,0.2,1), padding 0.3s ease; }
  .yf-faq-item.active .yf-faq-answer { max-height: 500px; }
  .yf-faq-item.active .yf-faq-icon { transform: rotate(45deg); }
  .yf-faq-icon { transition: transform 0.3s cubic-bezier(0.4,0,0.2,1); }

  /* Scroll reveal */
  .yf-reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.7s cubic-bezier(0.4,0,0.2,1), transform 0.7s cubic-bezier(0.4,0,0.2,1); }
  .yf-reveal.visible { opacity: 1; transform: translateY(0); }
  .yf-reveal[data-delay="1"] { transition-delay: 0.1s; }
  .yf-reveal[data-delay="2"] { transition-delay: 0.2s; }
  .yf-reveal[data-delay="3"] { transition-delay: 0.3s; }
  .yf-reveal[data-delay="4"] { transition-delay: 0.4s; }
  .yf-reveal[data-delay="5"] { transition-delay: 0.5s; }

  /* Animated gradient border for pricing card */
  @keyframes borderRotate { 0% { --angle: 0deg; } 100% { --angle: 360deg; } }
  @property --angle { syntax: '<angle>'; initial-value: 0deg; inherits: false; }
  .yf-glow-card { position: relative; background: white; border-radius: 1.25rem; overflow: hidden; }
  .yf-glow-card::before { content: ''; position: absolute; inset: -2px; border-radius: 1.35rem; background: conic-gradient(from var(--angle), #3b82f6, #f59e0b, #3b82f6); animation: borderRotate 4s linear infinite; z-index: -1; }

  /* Shimmer */
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  .yf-shimmer { background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.08) 50%, transparent 100%); background-size: 200% 100%; animation: shimmer 3s ease-in-out infinite; }

  /* Card hover lift */
  .yf-card-lift { transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.4s ease; }
  .yf-card-lift:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }

  /* Step number hover */
  .yf-step:hover .yf-step-num { transform: scale(1.15); box-shadow: 0 0 0 8px rgba(59,130,246,0.15); }
  .yf-step-num { transition: transform 0.3s ease, box-shadow 0.3s ease; }

  /* FAQ item transitions */
  .yf-faq-item { transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease; }
  .yf-faq-item:hover { border-color: #93c5fd; box-shadow: 0 8px 30px rgba(59,130,246,0.1); transform: translateY(-2px); }
  .yf-faq-item.active { border-color: #3b82f6; box-shadow: 0 8px 30px rgba(59,130,246,0.15); transform: translateY(-2px); }
</style>

<!-- ============================================================
     S1: HERO — Matches homepage 2-column layout exactly
     ============================================================ -->
<section class="relative w-full min-h-[500px] lg:min-h-[600px] overflow-hidden">

  <!-- Mobile: full-width image with overlay -->
  <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1200&q=80&auto=format&fit=crop');"></div>
  <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
  <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
    <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-xs font-medium px-4 py-2 rounded-full mb-4 border border-white/20 self-start">
      <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-amber-400"></span></span>
      NaTHNaC Registered Centre
    </div>
    <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Yellow Fever Vaccine Hampshire</h1>
    <p class="text-white text-base leading-relaxed mb-5 font-jost">Registered Yellow Fever Vaccination Centre. Lifetime protection with official ICVP certificate included. Available at all 4 Hampshire locations.</p>
    <div class="flex flex-wrap gap-3 mb-4">
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-sm font-semibold px-5 py-2.5 rounded-full shadow-lg font-jost">
        Book Vaccination
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>
    <p class="text-white/90 text-sm font-jost">&pound;85 all-inclusive &middot; Same day appointments available</p>
  </div>

  <!-- Desktop: 2-column split matching homepage hero -->
  <div class="hidden md:flex">
    <!-- Left: solid blue panel -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
      <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/20 self-start">
        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-400"></span></span>
        NaTHNaC Registered &middot; Yellow Fever Centre
      </div>
      <h1 class="text-white text-4xl lg:text-[50px] font-semibold leading-tight mb-6 font-jost" style="line-height:1.1;">Yellow Fever Vaccine Hampshire</h1>
      <p class="text-white text-lg lg:text-xl leading-relaxed mb-6 font-jost">Registered Yellow Fever Vaccination Centre serving Hampshire. Lifetime protection with official International Certificate included. Available at all 4 locations.</p>
      <div class="flex flex-wrap gap-3 mb-6">
        <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-white text-blue-700 text-base font-semibold px-6 py-3 rounded-full hover:bg-blue-50 transition-colors shadow-lg font-jost">
          Book Vaccination
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <a href="#locations" class="inline-flex items-center gap-2 text-white/80 text-sm font-medium px-5 py-3 rounded-full hover:text-white transition-colors font-jost">
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          Find Your Nearest Branch
        </a>
      </div>
      <p class="text-white text-base lg:text-lg font-medium font-jost">&pound;85 all-inclusive &middot; Same day appointments typically available.</p>
    </div>

    <!-- Right: image -->
    <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=1200&q=80&auto=format&fit=crop');"></div>

    <!-- Badge images straddling the centre divider -->
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398697-0.png" alt="Same Day Appointments" class="w-[130px] h-[130px] object-contain drop-shadow-lg" />
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;top:50%;transform:translate(-50%,-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398761-2.png" alt="Yellow Fever Centre" class="w-[130px] h-[130px] object-contain drop-shadow-lg" />
    </div>
    <div class="absolute z-30 flex flex-col items-center" style="left:50%;bottom:15%;transform:translateX(-50%);">
      <img src="https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773073398725-1.png" alt="5-Star Service" class="w-[130px] h-[130px] object-contain drop-shadow-lg" />
    </div>
  </div>

</section>


<!-- ============================================================
     S2: KEY FACTS — Blue gradient, 4 glassmorphism stat cards
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #3b82f6 100%);">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white rounded-full translate-x-1/4 translate-y-1/4"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-10 md:mb-14">
      <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/30">
        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-white"></span></span>
        <span class="uppercase tracking-wider text-xs font-semibold">At a Glance</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-jost">Key Facts About the Yellow Fever Vaccine</h2>
      <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed font-jost">Everything you need to know before booking your vaccination at Southdowns Pharmacy.</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
      <div class="yf-reveal yf-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="1">
        <div class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-2 font-jost">&infin;</div>
        <div class="text-sm md:text-base text-blue-100 font-medium">Lifetime Protection</div>
      </div>
      <div class="yf-reveal yf-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="2">
        <div class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-2 font-jost">ICVP</div>
        <div class="text-sm md:text-base text-blue-100 font-medium">Certificate Included</div>
      </div>
      <div class="yf-reveal yf-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="3">
        <div class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-2 font-jost">Same</div>
        <div class="text-sm md:text-base text-blue-100 font-medium">Day Appointments</div>
      </div>
      <div class="yf-reveal yf-card-lift text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors" data-delay="4">
        <div class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-2 font-jost">4</div>
        <div class="text-sm md:text-base text-blue-100 font-medium">Hampshire Locations</div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     S3: WHAT IS YELLOW FEVER — Light gradient, two-col layout
     ============================================================ -->
<section class="py-16 md:py-24 bg-gradient-to-br from-slate-50 via-white to-amber-50/30 relative overflow-hidden" id="about">
  <div class="absolute top-0 right-0 w-96 h-96 bg-amber-100/30 rounded-full translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center yf-reveal">
      <div>
        <span class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-50 to-blue-50 text-amber-700 text-xs font-semibold px-4 py-2 rounded-full mb-6 border border-amber-200/60 uppercase tracking-wider">What You Need to Know</span>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-6 font-jost">What Is Yellow Fever?</h2>
        <p class="text-gray-600 text-lg leading-relaxed mb-6 font-jost">Yellow Fever is a serious viral disease transmitted by infected mosquitoes across sub-Saharan Africa, South America and parts of Central America. In severe cases, the disease carries a fatality rate of up to 50%. There is no specific antiviral treatment &mdash; vaccination is the only effective prevention.</p>
        <p class="text-gray-600 text-lg leading-relaxed mb-8 font-jost">Many countries legally require proof of yellow fever vaccination for entry, even if you are simply transiting through an airport in an affected region. Without an official ICVP, you may be denied boarding, quarantined on arrival, or refused entry entirely.</p>
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-white rounded-xl p-5 border border-blue-100 shadow-sm hover:shadow-md transition-shadow yf-card-lift">
            <div class="text-3xl font-bold text-blue-600 mb-1 font-jost">99%</div>
            <div class="text-gray-500 text-sm font-jost">Protection from a single vaccine dose within 30 days</div>
          </div>
          <div class="bg-white rounded-xl p-5 border border-amber-100 shadow-sm hover:shadow-md transition-shadow yf-card-lift">
            <div class="text-3xl font-bold text-amber-500 mb-1 font-jost">Valid for Life</div>
            <div class="text-gray-500 text-sm font-jost">One vaccination. Your ICVP certificate never expires.</div>
          </div>
        </div>
      </div>
      <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
        <img src="https://images.unsplash.com/photo-1580060839134-75a5edca2e99?w=800&q=80&auto=format&fit=crop" alt="Healthcare professional administering a travel vaccination" class="w-full aspect-[4/3] object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy"/>
        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/30 to-transparent"></div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     S4: WHY YOU NEED IT — White bg, 3 numbered step cards
     ============================================================ -->
<section class="py-16 md:py-24 bg-white relative overflow-hidden">
  <div class="absolute top-0 left-0 w-64 h-64 bg-blue-100/20 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-14">
      <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-blue-100">
        <span class="uppercase tracking-wider text-xs font-semibold">Why It Matters</span>
      </div>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-800 mb-4 font-jost">Why You Need the Yellow Fever Vaccine</h2>
      <p class="text-lg text-gray-500 max-w-3xl mx-auto font-jost">Three essential reasons vaccination is critical for travel to affected regions.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

      <div class="yf-reveal yf-step bg-gradient-to-br from-white to-blue-50/30 rounded-2xl p-8 border border-blue-100/50 hover:shadow-xl hover:shadow-blue-100/30 hover:-translate-y-1 transition-all duration-300" data-delay="1">
        <div class="yf-step-num w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-2xl flex items-center justify-center text-xl font-bold mb-5 shadow-lg shadow-blue-500/25">1</div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Legal Entry Requirement</h3>
        <p class="text-gray-600 leading-relaxed font-jost">Many countries in Africa, South America, and Asia require a valid yellow fever certificate for entry. Your certificate becomes valid <strong>10 days after vaccination</strong>. Without it, you risk being denied boarding or quarantined.</p>
      </div>

      <div class="yf-reveal yf-step bg-gradient-to-br from-white to-amber-50/30 rounded-2xl p-8 border border-amber-100/50 hover:shadow-xl hover:shadow-amber-100/30 hover:-translate-y-1 transition-all duration-300" data-delay="2">
        <div class="yf-step-num w-12 h-12 bg-gradient-to-br from-amber-400 to-amber-600 text-white rounded-2xl flex items-center justify-center text-xl font-bold mb-5 shadow-lg shadow-amber-400/25">2</div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Serious Disease Prevention</h3>
        <p class="text-gray-600 leading-relaxed font-jost">Yellow fever is transmitted by mosquitoes in tropical regions. Most experience mild symptoms, but in some cases it can cause serious complications affecting the liver and kidneys. There is no specific treatment once infected.</p>
      </div>

      <div class="yf-reveal yf-step bg-gradient-to-br from-white to-blue-50/30 rounded-2xl p-8 border border-blue-100/50 hover:shadow-xl hover:shadow-blue-100/30 hover:-translate-y-1 transition-all duration-300" data-delay="3">
        <div class="yf-step-num w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 text-white rounded-2xl flex items-center justify-center text-xl font-bold mb-5 shadow-lg shadow-blue-500/25">3</div>
        <h3 class="text-xl font-bold text-slate-800 mb-3 font-jost">Lifetime Protection</h3>
        <p class="text-gray-600 leading-relaxed font-jost">Unlike many travel vaccines, yellow fever vaccination provides <strong>lifelong immunity from a single dose.</strong> Your official certificate is valid for life, even certificates issued before 2016 with old expiry dates.</p>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
