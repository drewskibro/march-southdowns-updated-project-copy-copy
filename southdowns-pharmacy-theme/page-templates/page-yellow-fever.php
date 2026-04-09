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

<!-- ============================================================
     S4: DO YOU NEED IT?
     ============================================================ -->
<section id="countries" class="bg-white py-16 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center max-w-2xl mx-auto mb-12">
      <p class="text-amber-500 font-bold text-xs tracking-widest uppercase mb-3">Travel Requirements</p>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 font-jost leading-tight mb-4">
        Do you need the Yellow Fever vaccine?
      </h2>
      <p class="text-gray-500 text-lg leading-relaxed">
        Requirements vary by destination and your travel itinerary. Use the scenarios below to understand your situation — and always check with your destination's embassy or consulate before travel.
      </p>
    </div>

    <!-- Three scenario cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

      <!-- Mandatory -->
      <div class="rounded-2xl border-2 border-red-200 bg-red-50 p-7 flex flex-col">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 bg-red-500 rounded-xl flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
          </div>
          <div>
            <span class="inline-block bg-red-500 text-white text-xs font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Mandatory</span>
          </div>
        </div>
        <h3 class="text-gray-900 font-extrabold text-xl font-jost mb-3">Required for entry</h3>
        <p class="text-gray-600 text-sm leading-relaxed mb-5">
          Some countries legally require proof of Yellow Fever vaccination for <strong>all travellers</strong> regardless of where they are coming from. You will not be allowed to board or enter without a valid ICVP certificate.
        </p>
        <div class="mt-auto">
          <p class="text-gray-500 text-xs font-bold uppercase tracking-wider mb-2">Examples include</p>
          <div class="flex flex-wrap gap-1.5">
            <?php foreach ( ['Ghana', 'Nigeria', 'Cameroon', 'Uganda', 'Democratic Republic of Congo', 'French Guiana'] as $country ) : ?>
            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-1 rounded-full"><?php echo esc_html( $country ); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Conditional -->
      <div class="rounded-2xl border-2 border-amber-300 bg-amber-50 p-7 flex flex-col">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 bg-amber-400 rounded-xl flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-950" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div>
            <span class="inline-block bg-amber-400 text-amber-950 text-xs font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Conditional</span>
          </div>
        </div>
        <h3 class="text-gray-900 font-extrabold text-xl font-jost mb-3">Required if arriving from a risk country</h3>
        <p class="text-gray-600 text-sm leading-relaxed mb-5">
          Many countries require proof of vaccination only if you are <strong>arriving from or transiting through</strong> a Yellow Fever endemic country. This includes layovers of 12 hours or more in some cases.
        </p>
        <div class="mt-auto">
          <p class="text-gray-500 text-xs font-bold uppercase tracking-wider mb-2">Examples include</p>
          <div class="flex flex-wrap gap-1.5">
            <?php foreach ( ['India', 'Thailand', 'Australia', 'China', 'Egypt', 'Indonesia'] as $country ) : ?>
            <span class="bg-amber-100 text-amber-800 text-xs font-medium px-2.5 py-1 rounded-full"><?php echo esc_html( $country ); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Recommended -->
      <div class="rounded-2xl border-2 border-green-200 bg-green-50 p-7 flex flex-col">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div>
            <span class="inline-block bg-green-500 text-white text-xs font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Recommended</span>
          </div>
        </div>
        <h3 class="text-gray-900 font-extrabold text-xl font-jost mb-3">Advised for traveller protection</h3>
        <p class="text-gray-600 text-sm leading-relaxed mb-5">
          Even where no certificate is required, vaccination is medically recommended if you are visiting areas where Yellow Fever is <strong>endemic or active</strong>. The disease is potentially fatal and there is no cure — the vaccine is your only protection.
        </p>
        <div class="mt-auto">
          <p class="text-gray-500 text-xs font-bold uppercase tracking-wider mb-2">Examples include</p>
          <div class="flex flex-wrap gap-1.5">
            <?php foreach ( ['Brazil', 'Bolivia', 'Peru', 'Colombia', 'Kenya', 'Tanzania'] as $country ) : ?>
            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full"><?php echo esc_html( $country ); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>

    <!-- Bottom disclaimer -->
    <div class="bg-gray-50 border border-gray-200 rounded-xl px-6 py-4 flex items-start gap-3 max-w-3xl mx-auto">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      <p class="text-gray-500 text-sm leading-relaxed">Travel health requirements change frequently. Always verify current entry requirements with your destination's official embassy, the <a href="https://travelhealthpro.org.uk" target="_blank" rel="noopener noreferrer" class="text-amber-600 font-semibold hover:underline">TravelHealthPro</a> database, or speak to our pharmacist.</p>
    </div>

  </div>
</section>

<!-- ============================================================
     S5: COUNTRIES REQUIRING ICVP
     ============================================================ -->
<section class="bg-blue-950 relative overflow-hidden py-16 lg:py-24">
  <div class="absolute inset-0 dot-pattern pointer-events-none opacity-50"></div>
  <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

    <!-- Heading -->
    <div class="text-center max-w-2xl mx-auto mb-12">
      <p class="text-amber-400 font-bold text-xs tracking-widest uppercase mb-3">ICVP Required</p>
      <h2 class="text-3xl md:text-4xl font-extrabold text-white font-jost leading-tight mb-4">
        Countries requiring a Yellow Fever certificate
      </h2>
      <p class="text-blue-300 text-base leading-relaxed">
        The following countries require <strong class="text-white">all travellers</strong> to present a valid ICVP on arrival, regardless of origin. Travelling without one risks denial of boarding or entry.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

      <!-- Africa -->
      <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-9 h-9 bg-amber-400/20 rounded-lg flex items-center justify-center shrink-0">
            <span class="text-lg">🌍</span>
          </div>
          <div>
            <p class="text-white font-bold text-base">Africa</p>
            <p class="text-blue-400 text-xs">21 countries</p>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-x-4 gap-y-2">
          <?php
          $africa = [
            'Angola','Benin','Burkina Faso','Burundi','Cameroon',
            'Central African Republic','Chad','Côte d\'Ivoire','Democratic Republic of Congo',
            'Equatorial Guinea','Gabon','Ghana','Guinea','Guinea-Bissau',
            'Liberia','Mali','Niger','Nigeria','Republic of Congo','Sierra Leone','Togo',
          ];
          foreach ( $africa as $country ) : ?>
          <div class="flex items-center gap-2 py-1.5 border-b border-white/5">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-blue-100 text-sm"><?php echo esc_html( $country ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Americas + additional info -->
      <div class="flex flex-col gap-6">

        <!-- Americas -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-sm">
          <div class="flex items-center gap-3 mb-5">
            <div class="w-9 h-9 bg-amber-400/20 rounded-lg flex items-center justify-center shrink-0">
              <span class="text-lg">🌎</span>
            </div>
            <div>
              <p class="text-white font-bold text-base">Americas</p>
              <p class="text-blue-400 text-xs">3 countries</p>
            </div>
          </div>
          <div class="grid grid-cols-1 gap-y-2">
            <?php
            $americas = ['French Guiana', 'Panama (certain areas)', 'Trinidad and Tobago'];
            foreach ( $americas as $country ) : ?>
            <div class="flex items-center gap-2 py-1.5 border-b border-white/5">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              <span class="text-blue-100 text-sm"><?php echo esc_html( $country ); ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Transit warning card -->
        <div class="bg-amber-400/10 border border-amber-400/30 rounded-2xl p-6">
          <div class="flex items-start gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
            <div>
              <p class="text-amber-300 font-bold text-sm mb-1">Don't forget transit requirements</p>
              <p class="text-amber-200/80 text-sm leading-relaxed">If your flight connects through a Yellow Fever endemic country — even for a short layover — your onward destination may require a valid ICVP. Always check transit rules for every leg of your journey.</p>
            </div>
          </div>
        </div>

        <!-- Book CTA -->
        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 flex flex-col sm:flex-row items-center gap-4">
          <div class="flex-1">
            <p class="text-white font-bold text-base mb-1">Travelling to any of these countries?</p>
            <p class="text-blue-300 text-sm">Book your vaccination today — ICVP issued the same day.</p>
          </div>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-amber-400 text-amber-950 font-bold px-6 py-3 rounded-xl hover:bg-amber-300 transition-all duration-300 text-sm whitespace-nowrap shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            Book Now
          </a>
        </div>

      </div>
    </div>

    <!-- Footer note -->
    <p class="text-center text-blue-500 text-xs">Source: WHO / NaTHNaC TravelHealthPro. Requirements correct at time of publication — verify with your destination embassy before travel.</p>

  </div>
</section>

<!-- ============================================================
     S6: UNDERSTANDING THE ICVP CERTIFICATE
     ============================================================ -->
<section class="bg-gray-50 py-16 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center max-w-2xl mx-auto mb-12">
      <p class="text-amber-500 font-bold text-xs tracking-widest uppercase mb-3">The Certificate</p>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 font-jost leading-tight mb-4">
        Understanding your ICVP
      </h2>
      <p class="text-gray-500 text-base leading-relaxed">
        The International Certificate of Vaccination or Prophylaxis is the only document accepted at international borders as proof of Yellow Fever vaccination. Here is what you need to know.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

      <!-- Left: 4 rules -->
      <div class="space-y-4">

        <?php
        $rules = [
          [
            'num'   => '01',
            'title' => 'It only becomes valid 10 days after vaccination',
            'body'  => 'Your ICVP certificate is issued on the day of vaccination, but is not legally valid for international travel until 10 full days have passed. Plan your appointment at least 10 days before departure — ideally 4–6 weeks ahead.',
          ],
          [
            'num'   => '02',
            'title' => 'It is valid for life — no renewal required',
            'body'  => 'Since July 2016, the WHO confirmed that a single Yellow Fever dose provides lifelong immunity. All previously issued 10-year certificates have been automatically extended for life. You will never need a booster or a new certificate.',
          ],
          [
            'num'   => '03',
            'title' => 'It must be issued by a designated centre',
            'body'  => 'Only NHS-approved Yellow Fever Vaccination Centres can issue a legally valid ICVP. Certificates from non-designated clinics are not accepted. ' . esc_html( sp_pharmacy_name() ) . ' is an officially designated centre across all four Hampshire branches.',
          ],
          [
            'num'   => '04',
            'title' => 'Keep the original — copies are not accepted',
            'body'  => 'Border officials require the original booklet. Photocopies, digital photos, or scanned PDFs are not accepted. Keep your yellow booklet with your passport whenever you travel to or from a Yellow Fever zone.',
          ],
        ];
        foreach ( $rules as $rule ) : ?>
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex gap-5">
          <div class="shrink-0">
            <span class="block w-10 h-10 bg-amber-400 text-amber-950 font-extrabold text-sm rounded-xl flex items-center justify-center font-jost"><?php echo esc_html( $rule['num'] ); ?></span>
          </div>
          <div>
            <h3 class="text-gray-900 font-bold text-base mb-2"><?php echo esc_html( $rule['title'] ); ?></h3>
            <p class="text-gray-500 text-sm leading-relaxed"><?php echo esc_html( $rule['body'] ); ?></p>
          </div>
        </div>
        <?php endforeach; ?>

      </div>

      <!-- Right: certificate breakdown card -->
      <div class="sticky top-8">

        <!-- Certificate mockup -->
        <div class="bg-gradient-to-br from-amber-400 via-amber-300 to-yellow-300 rounded-2xl p-7 shadow-2xl shadow-amber-900/20 relative overflow-hidden mb-6">
          <div class="absolute inset-0 dot-pattern-amber pointer-events-none"></div>
          <div class="relative z-10">

            <div class="flex items-center justify-between mb-6">
              <div>
                <p class="text-amber-900 text-xs font-bold tracking-widest uppercase">World Health Organisation</p>
                <p class="text-amber-950 font-extrabold font-jost text-lg leading-tight mt-0.5">International Certificate of<br>Vaccination or Prophylaxis</p>
              </div>
              <div class="w-14 h-14 bg-amber-500/30 rounded-full flex items-center justify-center shrink-0 border-2 border-amber-600/30">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
            </div>

            <?php
            $fields = [
              ['label' => 'Vaccine',        'value' => 'Yellow Fever (Stamaril®)'],
              ['label' => 'Date of vaccination', 'value' => 'Stamped on day of dose'],
              ['label' => 'Valid from',     'value' => '10 days after vaccination'],
              ['label' => 'Expiry',         'value' => 'Does not expire (lifetime)'],
              ['label' => 'Issuing centre', 'value' => sp_pharmacy_name() . ' — NHS Approved'],
              ['label' => 'Batch number',   'value' => 'Recorded from vial'],
            ];
            ?>
            <div class="space-y-2 mb-5">
              <?php foreach ( $fields as $field ) : ?>
              <div class="bg-white/40 rounded-lg px-3 py-2 flex items-center justify-between gap-3">
                <p class="text-amber-900 text-xs font-semibold uppercase tracking-wider shrink-0"><?php echo esc_html( $field['label'] ); ?></p>
                <p class="text-amber-950 font-bold text-xs text-right"><?php echo esc_html( $field['value'] ); ?></p>
              </div>
              <?php endforeach; ?>
            </div>

            <div class="border-t border-amber-500/30 pt-4 flex items-center gap-2">
              <div class="w-8 h-8 rounded-full border-2 border-amber-700/40 flex items-center justify-center shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <p class="text-amber-900 text-xs font-semibold">Signed &amp; stamped by GPhC-registered pharmacist<br><span class="font-normal"><?php echo esc_html( sp_pharmacy_name() ); ?></span></p>
            </div>

          </div>
        </div>

        <!-- Lost certificate note -->
        <div class="bg-blue-50 border border-blue-200 rounded-xl px-5 py-4 flex items-start gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <div>
            <p class="text-blue-900 font-bold text-sm mb-1">Lost your certificate?</p>
            <p class="text-blue-700 text-sm leading-relaxed">If you were vaccinated at one of our branches, contact us — we keep vaccination records and may be able to assist with replacement documentation. Call <a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="font-semibold hover:underline"><?php echo esc_html( $phone ); ?></a>.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     S7: ELIGIBILITY
     ============================================================ -->
<section class="bg-white py-16 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center max-w-2xl mx-auto mb-12">
      <p class="text-amber-500 font-bold text-xs tracking-widest uppercase mb-3">Who Can Be Vaccinated</p>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 font-jost leading-tight mb-4">
        Eligibility for the Yellow Fever vaccine
      </h2>
      <p class="text-gray-500 text-base leading-relaxed">
        The vaccine is safe for most travellers, but there are some groups who cannot receive it. Our pharmacist will review your medical history at your appointment.
      </p>
    </div>

    <!-- Can / Cannot two columns -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

      <!-- Can receive -->
      <div class="bg-green-50 border border-green-200 rounded-2xl p-7">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-9 h-9 bg-green-500 rounded-xl flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
          </div>
          <h3 class="text-gray-900 font-extrabold text-lg font-jost">Who can be vaccinated</h3>
        </div>
        <ul class="space-y-3">
          <?php
          $can = [
            'Healthy adults and children aged 9 months and over',
            'Travellers with well-controlled chronic conditions (e.g. controlled hypertension, type 2 diabetes)',
            'Those on most common medications — confirm with our pharmacist',
            'Travellers who received a Yellow Fever vaccine previously (no booster needed — lifelong protection)',
            'Women who are breastfeeding (in most cases — discuss with pharmacist)',
          ];
          foreach ( $can as $item ) : ?>
          <li class="flex items-start gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm leading-relaxed"><?php echo esc_html( $item ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Cannot receive -->
      <div class="bg-red-50 border border-red-200 rounded-2xl p-7">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-9 h-9 bg-red-500 rounded-xl flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
          </div>
          <h3 class="text-gray-900 font-extrabold text-lg font-jost">Who cannot be vaccinated</h3>
        </div>
        <ul class="space-y-3">
          <?php
          $cannot = [
            'Infants under 6 months (risk of vaccine-associated encephalitis)',
            'People with a severe allergy to eggs or any vaccine component',
            'Those with a weakened immune system (e.g. HIV with low CD4, leukaemia, lymphoma)',
            'Patients currently on immunosuppressant medication (e.g. high-dose steroids)',
            'Anyone who has had a serious reaction to a previous Yellow Fever vaccine',
          ];
          foreach ( $cannot as $item ) : ?>
          <li class="flex items-start gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            <span class="text-gray-700 text-sm leading-relaxed"><?php echo esc_html( $item ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>

    <!-- 3 special cases -->
    <div class="mb-10">
      <h3 class="text-gray-900 font-extrabold text-xl font-jost text-center mb-6">Special considerations</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

        <?php
        $specials = [
          [
            'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
            'title' => 'Pregnancy',
            'body'  => 'Generally avoided in the first trimester. May be offered in the second or third trimester if travel to a high-risk area is unavoidable. Discuss the risk-benefit balance with our pharmacist.',
            'color' => 'rose',
          ],
          [
            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
            'title' => 'Children aged 6–9 months',
            'body'  => 'The vaccine is not routinely recommended for infants aged 6–9 months. It may be considered in exceptional circumstances where travel cannot be avoided — assessed case by case by our pharmacist.',
            'color' => 'orange',
          ],
          [
            'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
            'title' => 'Over 60 years of age',
            'body'  => 'Older travellers receiving the vaccine for the first time have a slightly higher risk of adverse events. Our pharmacist will discuss your individual circumstances and destination risk before administering.',
            'color' => 'blue',
          ],
        ];
        foreach ( $specials as $s ) : ?>
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6">
          <div class="w-10 h-10 bg-<?php echo esc_attr( $s['color'] ); ?>-100 rounded-xl flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-<?php echo esc_attr( $s['color'] ); ?>-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo esc_attr( $s['icon'] ); ?>"/></svg>
          </div>
          <h4 class="text-gray-900 font-bold text-base mb-2"><?php echo esc_html( $s['title'] ); ?></h4>
          <p class="text-gray-500 text-sm leading-relaxed"><?php echo esc_html( $s['body'] ); ?></p>
        </div>
        <?php endforeach; ?>

      </div>
    </div>

    <!-- Medical exemption waiver CTA -->
    <div class="bg-blue-950 rounded-2xl p-7 flex flex-col md:flex-row items-center gap-6">
      <div class="w-12 h-12 bg-amber-400/20 rounded-xl flex items-center justify-center shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
      </div>
      <div class="flex-1 text-center md:text-left">
        <p class="text-white font-extrabold text-lg font-jost mb-1">Can't have the vaccine for medical reasons?</p>
        <p class="text-blue-300 text-sm leading-relaxed">If you have a genuine medical contraindication, our GPhC-registered pharmacist can issue a <strong class="text-white">medical exemption waiver letter</strong>. Some countries accept this in lieu of the ICVP — always verify with your destination's embassy before travelling.</p>
      </div>
      <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 bg-amber-400 text-amber-950 font-bold px-6 py-3 rounded-xl hover:bg-amber-300 transition-all duration-300 text-sm whitespace-nowrap shrink-0">
        Speak to our pharmacist
      </a>
    </div>

  </div>
</section>

<!-- ============================================================
     S8: PRICING & BOOKING
     ============================================================ -->
<section class="bg-gray-50 py-16 lg:py-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center max-w-2xl mx-auto mb-12">
      <p class="text-amber-500 font-bold text-xs tracking-widest uppercase mb-3">Pricing &amp; Booking</p>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 font-jost leading-tight mb-4">
        Book your Yellow Fever vaccination
      </h2>
      <p class="text-gray-500 text-base leading-relaxed">
        No GP referral needed. Walk in or book online — same-day appointments often available. Your ICVP certificate is issued on the day.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

      <!-- Price card -->
      <div class="lg:col-span-1">
        <div class="bg-gradient-to-br from-amber-400 to-yellow-300 rounded-2xl p-8 shadow-xl shadow-amber-900/20 text-center sticky top-8">
          <p class="text-amber-900 text-xs font-bold tracking-widest uppercase mb-2">Yellow Fever Vaccination</p>
          <div class="flex items-start justify-center gap-1 mb-1">
            <span class="text-amber-900 font-bold text-2xl mt-2">£</span>
            <span class="text-7xl font-extrabold text-amber-950 font-jost leading-none">65</span>
          </div>
          <p class="text-amber-800 text-sm mb-6">per dose — all inclusive</p>
          <a href="<?php echo esc_url( $booking_url ); ?>" class="block w-full bg-amber-950 text-amber-400 font-bold py-4 rounded-xl hover:bg-blue-950 transition-all duration-300 text-base mb-4">
            Book Now
          </a>
          <a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="block w-full bg-white/40 text-amber-900 font-semibold py-3 rounded-xl hover:bg-white/60 transition-all duration-300 text-sm">
            <?php echo esc_html( $phone ); ?>
          </a>
          <p class="text-amber-800 text-xs mt-4">Private service — not available on the NHS</p>
        </div>
      </div>

      <!-- What's included -->
      <div class="lg:col-span-2">
        <h3 class="text-gray-900 font-extrabold text-xl font-jost mb-5">What's included in your £65</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
          <?php
          $included = [
            ['title' => 'Travel health consultation', 'body' => 'A full pre-travel assessment covering your destination, itinerary, and medical history — ensuring the vaccine is safe and appropriate for you.'],
            ['title' => 'Stamaril® Yellow Fever vaccine', 'body' => 'The only licensed Yellow Fever vaccine in the UK, manufactured by Sanofi Pasteur. Administered by a GPhC-registered pharmacist.'],
            ['title' => 'Official ICVP certificate', 'body' => 'The WHO-approved yellow booklet, completed, stamped, and signed. Legally valid for international travel immediately — active from 10 days post-dose.'],
            ['title' => 'Personalised travel advice', 'body' => 'Guidance on additional vaccines, malaria prevention, and other health precautions relevant to your specific destinations and activities.'],
          ];
          foreach ( $included as $item ) : ?>
          <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm flex gap-4">
            <div class="w-8 h-8 bg-amber-50 rounded-lg flex items-center justify-center shrink-0 mt-0.5">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <div>
              <p class="text-gray-900 font-bold text-sm mb-1"><?php echo esc_html( $item['title'] ); ?></p>
              <p class="text-gray-500 text-xs leading-relaxed"><?php echo esc_html( $item['body'] ); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- How to book steps -->
        <h3 class="text-gray-900 font-extrabold text-xl font-jost mb-5">How to book</h3>
        <div class="flex flex-col sm:flex-row gap-4">
          <?php
          $steps = [
            ['num' => '1', 'label' => 'Book online or call', 'sub' => 'Choose your branch and a convenient time'],
            ['num' => '2', 'label' => 'Attend your appointment', 'sub' => 'Consultation + vaccination — typically 20 mins'],
            ['num' => '3', 'label' => 'Collect your ICVP', 'sub' => 'Walk out with your certificate the same day'],
          ];
          foreach ( $steps as $step ) : ?>
          <div class="flex-1 bg-white rounded-xl px-5 py-4 border border-gray-100 shadow-sm flex items-center gap-4">
            <span class="w-9 h-9 bg-amber-400 text-amber-950 font-extrabold text-sm rounded-xl flex items-center justify-center shrink-0 font-jost"><?php echo esc_html( $step['num'] ); ?></span>
            <div>
              <p class="text-gray-900 font-bold text-sm"><?php echo esc_html( $step['label'] ); ?></p>
              <p class="text-gray-400 text-xs"><?php echo esc_html( $step['sub'] ); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- 4 Branch cards -->
    <h3 class="text-gray-900 font-extrabold text-xl font-jost text-center mb-6">Our Hampshire branches</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php for ( $i = 1; $i <= 4; $i++ ) :
        $b = sp_branch( $i ); ?>
      <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex flex-col">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-9 h-9 bg-blue-950 rounded-xl flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <p class="text-gray-900 font-extrabold text-base font-jost"><?php echo esc_html( $b['name'] ); ?></p>
        </div>
        <p class="text-gray-500 text-xs leading-relaxed mb-1"><?php echo esc_html( $b['address_line1'] ); ?></p>
        <p class="text-gray-500 text-xs mb-1"><?php echo esc_html( $b['address_line2'] ); ?>, <?php echo esc_html( $b['postcode'] ); ?></p>
        <p class="text-gray-400 text-xs mb-1"><?php echo esc_html( $b['hours_weekday'] ); ?></p>
        <p class="text-gray-400 text-xs mb-4"><?php echo esc_html( $b['hours_saturday'] ); ?></p>
        <div class="mt-auto flex flex-col gap-2">
          <a href="<?php echo esc_url( $booking_url ); ?>" class="block text-center bg-amber-400 text-amber-950 font-bold text-xs py-2.5 rounded-lg hover:bg-amber-300 transition-colors">Book here</a>
          <a href="<?php echo esc_url( $b['maps_url'] ); ?>" target="_blank" rel="noopener noreferrer" class="block text-center bg-gray-50 border border-gray-200 text-gray-600 font-semibold text-xs py-2.5 rounded-lg hover:bg-gray-100 transition-colors">Get directions</a>
        </div>
      </div>
      <?php endfor; ?>
    </div>

  </div>
</section>

<!-- ============================================================
     S9: FAQ ACCORDION
     ============================================================ -->
<section class="bg-white py-16 lg:py-24">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Heading -->
    <div class="text-center mb-12">
      <p class="text-amber-500 font-bold text-xs tracking-widest uppercase mb-3">FAQ</p>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 font-jost leading-tight mb-4">
        Frequently asked questions
      </h2>
      <p class="text-gray-500 text-base leading-relaxed">
        Everything you need to know about the Yellow Fever vaccine and your ICVP certificate.
      </p>
    </div>

    <!-- Accordion -->
    <div class="space-y-3" id="yf-faq">
      <?php
      $faqs = [
        [
          'q' => 'How much does the Yellow Fever vaccine cost?',
          'a' => 'The Yellow Fever vaccination at Southdowns Pharmacy costs £65 per dose. This includes the travel health consultation, the Stamaril® vaccine, and the official ICVP certificate. It is a private service — not available free on the NHS.',
        ],
        [
          'q' => 'Do I need an appointment for the Yellow Fever vaccine?',
          'a' => 'Walk-ins are welcome for travel health advice, but we recommend booking an appointment for vaccinations to guarantee vaccine stock availability. Same-day appointments are often available — call your nearest branch to check.',
        ],
        [
          'q' => 'How soon before travel do I need the Yellow Fever vaccine?',
          'a' => 'You must be vaccinated at least 10 days before departure. The ICVP certificate only becomes valid 10 days after vaccination. Ideally book 4–6 weeks in advance to allow time and ensure stock availability.',
        ],
        [
          'q' => 'I had the Yellow Fever vaccine years ago — do I need a booster?',
          'a' => 'No — in the vast majority of cases, you do not need a booster. Since July 2016, the WHO confirmed that a single Yellow Fever dose provides lifelong protection. All previously issued 10-year certificates have also been automatically extended for life.',
        ],
        [
          'q' => 'Can children have the Yellow Fever vaccine?',
          'a' => 'Yes, for children aged 9 months and over. The vaccine is not recommended for infants under 6 months due to the risk of vaccine-associated encephalitis. Children aged 6–9 months may be considered on a case-by-case basis — speak to our pharmacist.',
        ],
        [
          'q' => 'What are the side effects of the Yellow Fever vaccine?',
          'a' => 'Most people experience only mild, short-lived side effects: soreness at the injection site, mild headache, low-grade fever, and fatigue for a few days. Serious adverse reactions are very rare and will be discussed with you at your appointment.',
        ],
        [
          'q' => 'Can I have other vaccines at the same time as Yellow Fever?',
          'a' => 'Yes. Inactivated vaccines such as Typhoid, Hepatitis A, and Hepatitis B can safely be given alongside Yellow Fever at the same appointment. Other live vaccines should ideally be given on the same day or separated by at least 4 weeks.',
        ],
        [
          'q' => 'What if I can\'t have the Yellow Fever vaccine for medical reasons?',
          'a' => 'If you have a genuine medical contraindication, our pharmacist can issue a medical exemption waiver letter. Some countries accept this in lieu of the ICVP — check with your destination\'s embassy before travelling.',
        ],
      ];

      foreach ( $faqs as $idx => $faq ) :
        $num = str_pad( $idx + 1, 2, '0', STR_PAD_LEFT );
        $id  = 'faq-' . ( $idx + 1 );
      ?>
      <div class="faq-item border border-gray-200 rounded-2xl overflow-hidden transition-all duration-300" data-faq="<?php echo esc_attr( $id ); ?>">

        <!-- Question button -->
        <button
          type="button"
          class="faq-trigger w-full flex items-center gap-4 px-6 py-5 text-left hover:bg-gray-50 transition-colors duration-200"
          aria-expanded="false"
          aria-controls="<?php echo esc_attr( $id ); ?>"
        >
          <span class="shrink-0 w-8 h-8 bg-amber-50 border border-amber-200 text-amber-600 font-extrabold text-xs rounded-lg flex items-center justify-center font-jost"><?php echo esc_html( $num ); ?></span>
          <span class="flex-1 text-gray-900 font-bold text-base leading-snug"><?php echo esc_html( $faq['q'] ); ?></span>
          <svg class="faq-chevron w-5 h-5 text-gray-400 shrink-0 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </button>

        <!-- Answer panel -->
        <div id="<?php echo esc_attr( $id ); ?>" class="faq-panel hidden px-6 pb-5">
          <div class="pl-12 border-l-2 border-amber-400 ml-4">
            <p class="text-gray-600 text-sm leading-relaxed"><?php echo esc_html( $faq['a'] ); ?></p>
          </div>
        </div>

      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- FAQ accordion JS (self-contained, no dependencies) -->
<script>
(function () {
  var triggers = document.querySelectorAll('#yf-faq .faq-trigger');
  triggers.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item    = btn.closest('.faq-item');
      var panel   = item.querySelector('.faq-panel');
      var chevron = item.querySelector('.faq-chevron');
      var isOpen  = btn.getAttribute('aria-expanded') === 'true';

      // Close all
      document.querySelectorAll('#yf-faq .faq-item').forEach(function (el) {
        el.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
        el.querySelector('.faq-panel').classList.add('hidden');
        el.querySelector('.faq-chevron').classList.remove('rotate-180');
        el.classList.remove('border-amber-400', 'shadow-sm');
        el.classList.add('border-gray-200');
      });

      // Open clicked (if it was closed)
      if (!isOpen) {
        btn.setAttribute('aria-expanded', 'true');
        panel.classList.remove('hidden');
        chevron.classList.add('rotate-180');
        item.classList.remove('border-gray-200');
        item.classList.add('border-amber-400', 'shadow-sm');
      }
    });
  });
})();
</script>

<?php get_footer(); ?>
