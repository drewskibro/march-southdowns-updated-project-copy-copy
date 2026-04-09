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
$check_svg   = '<svg class="w-4 h-4 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>';
?>

<!-- FAQPage JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"How much does the Yellow Fever vaccine cost?","acceptedAnswer":{"@type":"Answer","text":"The Yellow Fever vaccination at Southdowns Pharmacy costs £65 per dose. This includes the travel health consultation, the Stamaril® vaccine, and the official ICVP certificate. It is a private service, not available free on the NHS."}},
    {"@type":"Question","name":"Do I need an appointment for the Yellow Fever vaccine?","acceptedAnswer":{"@type":"Answer","text":"Walk-ins are welcome for travel health advice, but we recommend booking an appointment for vaccinations to guarantee vaccine stock availability. Same-day appointments are often available — call your nearest branch to check."}},
    {"@type":"Question","name":"How soon before travel do I need the Yellow Fever vaccine?","acceptedAnswer":{"@type":"Answer","text":"You must be vaccinated at least 10 days before departure. The ICVP certificate only becomes valid 10 days after vaccination. Ideally book 4–6 weeks in advance."}},
    {"@type":"Question","name":"I had the Yellow Fever vaccine years ago — do I need a booster?","acceptedAnswer":{"@type":"Answer","text":"No — in the vast majority of cases, you do not need a booster. Since July 2016, the WHO confirmed that a single Yellow Fever dose provides lifelong protection. All previously issued 10-year certificates have also been automatically extended for life."}},
    {"@type":"Question","name":"Can children have the Yellow Fever vaccine?","acceptedAnswer":{"@type":"Answer","text":"Yes, for children aged 9 months and over. The vaccine is not recommended for infants under 6 months due to the risk of vaccine-associated encephalitis."}},
    {"@type":"Question","name":"What are the side effects of the Yellow Fever vaccine?","acceptedAnswer":{"@type":"Answer","text":"Most people experience only mild, short-lived side effects: soreness at the injection site, mild headache, low-grade fever, and fatigue for a few days. Serious adverse reactions are very rare."}},
    {"@type":"Question","name":"Can I have other vaccines at the same time as Yellow Fever?","acceptedAnswer":{"@type":"Answer","text":"Yes. Inactivated vaccines such as Typhoid, Hepatitis A, and Hepatitis B can safely be given alongside Yellow Fever at the same appointment. Other live vaccines should ideally be given on the same day or separated by at least 4 weeks."}},
    {"@type":"Question","name":"What if I can't have the Yellow Fever vaccine for medical reasons?","acceptedAnswer":{"@type":"Answer","text":"If you have a genuine medical contraindication, our pharmacist can issue a medical exemption waiver letter. Some countries accept this in lieu of the ICVP — check with your destination's embassy before travelling."}}
  ]
}
</script>

<!-- ============================================================
     S1: HERO
     ============================================================ -->
<section class="bg-blue-950 relative overflow-hidden">
  <div class="absolute inset-0 dot-pattern pointer-events-none"></div>
  <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-500/8 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center py-16 lg:py-24">

      <!-- Left -->
      <div>
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-blue-400 mb-6" aria-label="Breadcrumb">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-amber-400 transition-colors">Home</a>
          <span class="text-blue-700">/</span>
          <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="hover:text-amber-400 transition-colors">Travel Health</a>
          <span class="text-blue-700">/</span>
          <span class="text-amber-400">Yellow Fever</span>
        </nav>

        <!-- Badge -->
        <div class="inline-flex items-center gap-2.5 bg-amber-400/15 border border-amber-400/30 text-amber-300 text-xs font-bold tracking-widest uppercase px-4 py-2.5 rounded-full mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          NHS Designated Yellow Fever Centre
        </div>

        <!-- Headline -->
        <h1 class="text-4xl md:text-5xl lg:text-[52px] font-extrabold text-white font-jost leading-tight mb-5">
          Yellow Fever Vaccine<br>
          &amp; Official <span class="gradient-text-amber">ICVP Certificate</span>
        </h1>

        <!-- Subheading -->
        <p class="text-blue-200 text-lg leading-relaxed mb-8 max-w-lg">
          Required for entry to dozens of countries. <?php echo esc_html( sp_pharmacy_name() ); ?> is an NHS-approved Yellow Fever Vaccination Centre across all four Hampshire branches — issuing the official International Certificate of Vaccination or Prophylaxis (ICVP), the only document accepted at borders.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row gap-4 mb-10">
          <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center justify-center gap-2 bg-amber-400 text-amber-950 font-bold px-8 py-4 rounded-xl hover:bg-amber-300 transition-all duration-300 shadow-lg text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            Book Your Appointment
          </a>
          <a href="#countries" class="inline-flex items-center justify-center gap-2 bg-white/10 border border-white/20 text-white font-semibold px-8 py-4 rounded-xl hover:bg-white/15 transition-all duration-300 text-base">
            Do I need it?
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
          </a>
        </div>

        <!-- Trust badges -->
        <div class="flex flex-wrap gap-4">
          <?php foreach ( ['ICVP issued same day','Valid for life','No GP referral needed','4 Hampshire locations'] as $badge ) : ?>
          <div class="flex items-center gap-2 text-blue-200 text-sm">
            <?php echo $check_svg; ?>
            <?php echo esc_html( $badge ); ?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: ICVP certificate card -->
      <div class="relative flex items-center justify-center lg:justify-end">
        <div class="relative w-full max-w-sm">

          <!-- Certificate card -->
          <div class="bg-gradient-to-br from-amber-400 via-amber-300 to-yellow-300 rounded-2xl p-7 shadow-2xl shadow-amber-900/40 relative overflow-hidden">
            <div class="absolute inset-0 dot-pattern-amber pointer-events-none"></div>
            <div class="relative z-10">
              <div class="flex items-center justify-between mb-5">
                <div>
                  <p class="text-amber-900 text-xs font-bold tracking-widest uppercase">World Health Organisation</p>
                  <p class="text-amber-950 font-extrabold font-jost text-base leading-tight mt-0.5">International Certificate of<br>Vaccination or Prophylaxis</p>
                </div>
                <div class="w-14 h-14 bg-amber-500/30 rounded-full flex items-center justify-center shrink-0 border-2 border-amber-600/30">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
              </div>
              <div class="space-y-3 mb-5">
                <div class="bg-white/40 rounded-lg px-3 py-2">
                  <p class="text-amber-900 text-xs font-semibold uppercase tracking-wider mb-0.5">Vaccine</p>
                  <p class="text-amber-950 font-bold text-sm">Yellow Fever (Stamaril®)</p>
                </div>
                <div class="grid grid-cols-2 gap-2">
                  <div class="bg-white/40 rounded-lg px-3 py-2">
                    <p class="text-amber-900 text-xs font-semibold uppercase tracking-wider mb-0.5">Valid from</p>
                    <p class="text-amber-950 font-bold text-sm">10 days post-dose</p>
                  </div>
                  <div class="bg-white/40 rounded-lg px-3 py-2">
                    <p class="text-amber-900 text-xs font-semibold uppercase tracking-wider mb-0.5">Expires</p>
                    <p class="text-amber-950 font-bold text-sm">Does not expire</p>
                  </div>
                </div>
                <div class="bg-white/40 rounded-lg px-3 py-2">
                  <p class="text-amber-900 text-xs font-semibold uppercase tracking-wider mb-0.5">Issuing centre</p>
                  <p class="text-amber-950 font-bold text-sm"><?php echo esc_html( sp_pharmacy_name() ); ?> — NHS Approved</p>
                </div>
              </div>
              <div class="border-t border-amber-500/30 pt-4 flex items-center gap-2">
                <div class="w-10 h-10 rounded-full border-2 border-amber-700/40 flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <p class="text-amber-900 text-xs font-semibold">Certified by GPhC-registered pharmacist<br><span class="font-normal"><?php echo esc_html( sp_pharmacy_name() ); ?></span></p>
              </div>
            </div>
          </div>

          <!-- Floating badge: NHS Approved -->
          <div class="absolute -top-4 -left-4 bg-blue-900 border border-blue-700 rounded-xl px-4 py-2.5 shadow-xl">
            <p class="text-amber-400 text-xs font-bold tracking-wider uppercase">NHS Approved</p>
            <p class="text-white text-xs font-medium">Designated Centre</p>
          </div>

          <!-- Floating badge: Same Day -->
          <div class="absolute -bottom-4 -right-4 bg-white rounded-xl px-4 py-2.5 shadow-xl border border-gray-100">
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
              <div>
                <p class="text-gray-900 text-xs font-bold">Same-day available</p>
                <p class="text-gray-400 text-xs">Book your slot today</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <div class="h-8 bg-gradient-to-b from-transparent to-white relative z-10 -mt-1"></div>
</section>

<!-- ============================================================
     S2: CREDENTIALS STRIP
     ============================================================ -->
<section class="bg-white border-b border-gray-100 py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Amber info bar -->
    <div class="bg-amber-50 border border-amber-200 rounded-xl px-5 py-3.5 flex items-center gap-3 mb-8">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      <p class="text-amber-900 text-sm font-medium"><strong>Not all pharmacies can issue Yellow Fever certificates.</strong> We are an officially designated centre — your ICVP is legally valid for international travel and border crossing.</p>
    </div>

    <!-- Stats grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">

      <!-- NHS Designated Centre -->
      <div class="flex flex-col items-center text-center gap-2">
        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        </div>
        <p class="text-gray-900 font-bold text-sm leading-tight">NHS Designated</p>
        <p class="text-gray-500 text-xs">Yellow Fever Centre</p>
      </div>

      <!-- Same-day certificate -->
      <div class="flex flex-col items-center text-center gap-2">
        <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <p class="text-gray-900 font-bold text-sm leading-tight">Same-Day</p>
        <p class="text-gray-500 text-xs">ICVP Certificate</p>
      </div>

      <!-- Valid for life -->
      <div class="flex flex-col items-center text-center gap-2">
        <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
        </div>
        <p class="text-gray-900 font-bold text-sm leading-tight">Valid for Life</p>
        <p class="text-gray-500 text-xs">No booster needed</p>
      </div>

      <!-- 4 Hampshire locations -->
      <div class="flex flex-col items-center text-center gap-2">
        <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <p class="text-gray-900 font-bold text-sm leading-tight">4 Locations</p>
        <p class="text-gray-500 text-xs">Across Hampshire</p>
      </div>

      <!-- GPhC registered -->
      <div class="flex flex-col items-center text-center gap-2">
        <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <p class="text-gray-900 font-bold text-sm leading-tight">GPhC Registered</p>
        <p class="text-gray-500 text-xs">Pharmacist-administered</p>
      </div>

      <!-- NATHNAC approved -->
      <div class="flex flex-col items-center text-center gap-2">
        <div class="w-12 h-12 bg-rose-50 rounded-xl flex items-center justify-center mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <p class="text-gray-900 font-bold text-sm leading-tight">NATHNAC</p>
        <p class="text-gray-500 text-xs">Travel health guidance</p>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     S3: WHAT IS YELLOW FEVER?
     ============================================================ -->
<section class="bg-gray-50 py-16 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

      <!-- Left: disease info -->
      <div>
        <p class="text-amber-500 font-bold text-xs tracking-widest uppercase mb-3">The Disease</p>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 font-jost leading-tight mb-6">
          What is Yellow Fever?
        </h2>
        <p class="text-gray-600 leading-relaxed mb-5">
          Yellow Fever is a viral haemorrhagic disease transmitted by infected <em>Aedes aegypti</em> mosquitoes. It takes its name from the jaundice (yellowing of the skin and eyes) that affects some patients as the disease attacks the liver.
        </p>
        <p class="text-gray-600 leading-relaxed mb-5">
          The virus circulates in tropical regions of Africa and Central and South America. There is no specific antiviral treatment — once infected, medical care focuses on managing symptoms. This makes prevention through vaccination critically important.
        </p>
        <p class="text-gray-600 leading-relaxed mb-8">
          The good news: a single dose of the Stamaril® vaccine provides <strong class="text-gray-800">lifelong protection</strong> in the vast majority of recipients, and takes effect within 10 days of administration.
        </p>

        <!-- Key facts -->
        <div class="space-y-3">
          <?php
          $facts = [
            ['icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z', 'label' => 'Transmission', 'value' => 'Bite of an infected Aedes mosquito — not person-to-person'],
            ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'label' => 'Incubation', 'value' => '3–6 days after the mosquito bite'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Vaccine onset', 'value' => 'Full protection develops 10 days after vaccination'],
            ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label' => 'Protection', 'value' => 'One dose — valid for life (WHO confirmed 2016)'],
          ];
          foreach ( $facts as $f ) : ?>
          <div class="flex items-start gap-3 bg-white rounded-xl px-4 py-3.5 border border-gray-100 shadow-sm">
            <div class="w-8 h-8 bg-amber-50 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $f['icon'] ); ?>"/></svg>
            </div>
            <div>
              <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-0.5"><?php echo esc_html( $f['label'] ); ?></p>
              <p class="text-gray-800 text-sm font-medium"><?php echo esc_html( $f['value'] ); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: stat cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
          <p class="text-4xl font-extrabold text-amber-500 font-jost mb-2">47</p>
          <p class="text-gray-900 font-bold text-base mb-1">Countries at risk</p>
          <p class="text-gray-500 text-sm leading-relaxed">Spread across sub-Saharan Africa and tropical South America — regions where the virus circulates actively.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
          <p class="text-4xl font-extrabold text-amber-500 font-jost mb-2">20–50%</p>
          <p class="text-gray-900 font-bold text-base mb-1">Case fatality rate</p>
          <p class="text-gray-500 text-sm leading-relaxed">In severe "toxic phase" cases. There is no cure — prevention through vaccination is the only reliable protection.</p>
        </div>

        <div class="bg-amber-400 rounded-2xl p-6 shadow-sm">
          <p class="text-4xl font-extrabold text-amber-950 font-jost mb-2">99%</p>
          <p class="text-amber-950 font-bold text-base mb-1">Vaccine efficacy</p>
          <p class="text-amber-900 text-sm leading-relaxed">The Stamaril® vaccine is highly effective. A single dose provides robust, lasting immunity in virtually all recipients.</p>
        </div>

        <div class="bg-blue-950 rounded-2xl p-6 shadow-sm">
          <p class="text-4xl font-extrabold text-amber-400 font-jost mb-2">10 days</p>
          <p class="text-white font-bold text-base mb-1">Before you travel</p>
          <p class="text-blue-300 text-sm leading-relaxed">The ICVP certificate only becomes valid 10 days after vaccination. Book in advance — ideally 4–6 weeks before departure.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
