<?php
/**
 * Homepage template — WordPress uses this automatically for the front page.
 * Set front page: Settings → Reading → "A static page" → Front page.
 */
get_header();
$booking_url = sp_booking_url();
$star_svg = '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>';
$stars = str_repeat( $star_svg, 5 );
?>

<!-- ============================================================
     HERO SLIDER
     ============================================================ -->
<section class="relative w-full min-h-[500px] md:min-h-[500px] lg:min-h-[600px] overflow-hidden" id="hero-slider">
  <div class="relative w-full min-h-[500px] md:min-h-[500px] lg:min-h-[600px]">

    <!-- Slide 1: Travel Vaccines -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-100 z-10" data-slide="0">
      <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image: url('https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773049303978-0.png');"></div>
      <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
      <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
        <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Same Day Vaccine &amp; Blood Test Appointments</h1>
        <p class="text-white text-base font-normal leading-relaxed mb-5 font-jost">Book your vaccine or blood test appointment today online or call our friendly team for advice and more information.</p>
        <div class="mb-4">
          <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 text-white text-sm font-medium bg-transparent border-2 border-white/40 px-5 py-2.5 rounded-full hover:bg-white/10 transition-colors font-jost">
            Book Appointment
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>
        <p class="text-white/90 text-sm font-normal leading-relaxed font-jost">Same day appointments typically available—book early to avoid disappointment.</p>
      </div>
      <div class="hidden md:flex">
        <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
          <h1 class="text-white text-4xl lg:text-[50px] font-semibold leading-tight mb-6 font-jost" style="line-height:1.1;">Same Day Vaccine &amp; Blood Test Appointments</h1>
          <p class="text-white text-lg lg:text-xl font-normal leading-relaxed mb-6 font-jost">Book your vaccine or blood test appointment today online or call our friendly team for advice and more information.</p>
          <div class="mb-6">
            <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 text-white text-base font-medium bg-transparent border-2 border-white/30 px-6 py-3 rounded-full hover:bg-white/10 transition-colors font-jost">
              Book Appointment
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
          <p class="text-white text-base lg:text-lg font-medium leading-relaxed font-jost">Same day appointments are typically available but please book in early to avoid disappointment.</p>
        </div>
        <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover bg-center" style="background-image:url('https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773049303978-0.png');"></div>
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
    </div>

    <!-- Slide 2: Weight Loss -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-0" data-slide="1">
      <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image:url('https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773078227843-0.png');"></div>
      <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
      <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
        <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Medical Weight Loss Programme</h1>
        <p class="text-white text-base font-normal leading-relaxed mb-5 font-jost">Achieve your weight loss goals with our clinically supervised programme. GPhC registered pharmacists providing safe, effective treatments.</p>
        <div class="mb-4">
          <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="inline-flex items-center gap-2 text-white text-sm font-medium bg-transparent border-2 border-white/40 px-5 py-2.5 rounded-full hover:bg-white/10 transition-colors font-jost">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>
        <p class="text-white/90 text-sm font-normal leading-relaxed font-jost">Average 15-20kg weight loss with monthly check-ins included.</p>
      </div>
      <div class="hidden md:flex">
        <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
          <h1 class="text-white text-4xl lg:text-[50px] font-semibold leading-tight mb-6 font-jost" style="line-height:1.1;">Medical Weight Loss Programme</h1>
          <p class="text-white text-lg lg:text-xl font-normal leading-relaxed mb-6 font-jost">Achieve your weight loss goals with our clinically supervised programme. GPhC registered pharmacists providing safe, effective treatments.</p>
          <div class="mb-6">
            <a href="<?php echo esc_url( home_url( '/weight-loss/' ) ); ?>" class="inline-flex items-center gap-2 text-white text-base font-medium bg-transparent border-2 border-white/30 px-6 py-3 rounded-full hover:bg-white/10 transition-colors font-jost">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
          <p class="text-white text-base lg:text-lg font-medium leading-relaxed font-jost">Average 15-20kg weight loss with monthly check-ins included.</p>
        </div>
        <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover" style="background-image:url('https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773078227843-0.png');background-position:85% center;"></div>
      </div>
    </div>

    <!-- Slide 3: Blood Tests -->
    <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0 z-0" data-slide="2">
      <div class="md:hidden absolute inset-0 bg-cover bg-center" style="background-image:url('https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773078227870-1.png');"></div>
      <div class="md:hidden absolute inset-0 bg-gradient-to-t from-blue-900/95 via-blue-900/70 to-transparent"></div>
      <div class="md:hidden absolute inset-0 flex flex-col justify-end px-6 py-8 z-10">
        <h1 class="text-white text-3xl font-semibold leading-tight mb-4 font-jost" style="line-height:1.2;">Comprehensive Blood Testing</h1>
        <p class="text-white text-base font-normal leading-relaxed mb-5 font-jost">Same day blood test appointments available across 4 Hampshire locations. Vitamin B12 deficiency testing and full health screening.</p>
        <div class="mb-4">
          <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 text-white text-sm font-medium bg-transparent border-2 border-white/40 px-5 py-2.5 rounded-full hover:bg-white/10 transition-colors font-jost">
            Book Blood Test
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>
        <p class="text-white/90 text-sm font-normal leading-relaxed font-jost">Results typically available within 24-48 hours.</p>
      </div>
      <div class="hidden md:flex">
        <div class="w-1/2 min-h-[500px] lg:min-h-[600px] flex flex-col justify-center px-12 lg:px-16 py-12" style="background-color:#1a73e9;">
          <h1 class="text-white text-4xl lg:text-[50px] font-semibold leading-tight mb-6 font-jost" style="line-height:1.1;">Comprehensive Blood Testing</h1>
          <p class="text-white text-lg lg:text-xl font-normal leading-relaxed mb-6 font-jost">Same day blood test appointments available across 4 Hampshire locations. Vitamin B12 deficiency testing and full health screening.</p>
          <div class="mb-6">
            <a href="<?php echo esc_url( $booking_url ); ?>" class="inline-flex items-center gap-2 text-white text-base font-medium bg-transparent border-2 border-white/30 px-6 py-3 rounded-full hover:bg-white/10 transition-colors font-jost">
              Book Blood Test
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
          <p class="text-white text-base lg:text-lg font-medium leading-relaxed font-jost">Results typically available within 24-48 hours.</p>
        </div>
        <div class="w-1/2 min-h-[500px] lg:min-h-[600px] bg-cover" style="background-image:url('https://c.animaapp.com/mmkd7a1dRSnHAj/img/uploaded-asset-1773078227870-1.png');background-position:85% center;"></div>
      </div>
    </div>

  </div>

  <!-- Navigation Dots -->
  <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-20 flex gap-3">
    <button class="slider-dot w-3 h-3 rounded-full bg-white transition-all duration-300" data-slide="0" aria-label="Go to slide 1"></button>
    <button class="slider-dot w-3 h-3 rounded-full bg-white/50 transition-all duration-300" data-slide="1" aria-label="Go to slide 2"></button>
    <button class="slider-dot w-3 h-3 rounded-full bg-white/50 transition-all duration-300" data-slide="2" aria-label="Go to slide 3"></button>
  </div>

  <!-- Prev/Next Arrows -->
  <button class="slider-prev absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center hover:bg-white/40 transition-colors" aria-label="Previous slide">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
  </button>
  <button class="slider-next absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center hover:bg-white/40 transition-colors" aria-label="Next slide">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
  </button>
</section>

<script>
(function() {
  const slides = document.querySelectorAll('.hero-slide');
  const dots   = document.querySelectorAll('.slider-dot');
  const prev   = document.querySelector('.slider-prev');
  const next   = document.querySelector('.slider-next');
  let current = 0, timer;
  function go(i) {
    if (i < 0) i = slides.length - 1;
    if (i >= slides.length) i = 0;
    slides.forEach((s,n) => { s.classList.toggle('opacity-100', n===i); s.classList.toggle('z-10', n===i); s.classList.toggle('opacity-0', n!==i); s.classList.toggle('z-0', n!==i); });
    dots.forEach((d,n)   => { d.classList.toggle('bg-white', n===i); d.classList.toggle('bg-white/50', n!==i); });
    current = i;
  }
  function reset() { clearInterval(timer); timer = setInterval(() => go(current+1), 5000); }
  dots.forEach(d => d.addEventListener('click', () => { go(parseInt(d.dataset.slide)); reset(); }));
  prev.addEventListener('click', () => { go(current-1); reset(); });
  next.addEventListener('click', () => { go(current+1); reset(); });
  reset();
})();
</script>

<!-- ============================================================
     SEARCH VACCINES BY DESTINATION
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background:linear-gradient(135deg,#1e3a8a 0%,#1d4ed8 50%,#3b82f6 100%);">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white rounded-full translate-x-1/4 translate-y-1/4"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 lg:px-12">
    <div class="text-center mb-10 md:mb-14">
      <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/30">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        <span>4 Locations Across Hampshire</span>
      </div>
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold tracking-tight text-white mb-6 font-jost">Search Vaccines by<br class="hidden md:block" /> Destination</h2>
      <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed font-jost">At <?php echo esc_html( sp_pharmacy_name() ); ?>, we provide expert travel health services across Hampshire. Find the vaccines you need for your next adventure.</p>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-10 md:mb-14">
      <?php
      $stats = [
        ['4',    'Hampshire Locations'],
        ['20+',  'Vaccines Available'],
        ['Same', 'Day Appointments'],
        ['5★',   'Rated Service'],
      ];
      foreach ( $stats as $s ) : ?>
      <div class="text-center p-6 md:p-8 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20 hover:bg-white/20 transition-colors">
        <div class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-2 font-jost"><?php echo esc_html( $s[0] ); ?></div>
        <div class="text-sm md:text-base text-blue-100 font-medium"><?php echo esc_html( $s[1] ); ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Destination Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8">
      <?php
      $destinations = [
        ['Africa',                  'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Africa.webp',                      '5 recommended vaccines'],
        ['Australasia & Pacific',   'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Australasia-Pacific.webp',         '4 recommended vaccines'],
        ['Caribbean',               'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Carribbean.webp',                  '4 recommended vaccines'],
        ['Central America',         'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Central-America.webp',             '5 recommended vaccines'],
        ['Central Asia',            'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Central-Asia.webp',                '7 recommended vaccines'],
        ['East Asia',               'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/East-Asia.webp',                   '6 recommended vaccines'],
        ['Europe &amp; Russia',     'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Europe-Russia.webp',               '5 recommended vaccines'],
        ['Middle East',             'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/Middle-East.webp',                 '5 recommended vaccines'],
        ['North America',           'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/North-America.webp',               '4 recommended vaccines'],
        ['South America &amp; Antarctica', 'https://c.animaapp.com/mmkd7a1dRSnHAj/assets/South-America-Antartica.webp', '6 recommended vaccines'],
      ];
      foreach ( $destinations as $d ) : ?>
      <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="group block">
        <div class="relative overflow-hidden rounded-2xl mb-4 shadow-lg">
          <img alt="<?php echo esc_attr( $d[0] ); ?>" src="<?php echo esc_url( $d[1] ); ?>" class="aspect-[4/3] w-full object-cover transition-transform duration-300 group-hover:scale-110" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>
        <h3 class="text-white text-xl md:text-2xl font-semibold mb-1 font-jost group-hover:text-blue-200 transition-colors"><?php echo $d[0]; ?></h3>
        <p class="text-blue-100 text-base md:text-lg font-normal font-jost"><?php echo esc_html( $d[2] ); ?></p>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     MOST POPULAR TREATMENTS
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden bg-white">
  <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 lg:px-12">
    <div class="text-center mb-10 md:mb-14">
      <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-blue-100">
        <span class="relative flex h-2.5 w-2.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500"></span></span>
        <span class="uppercase tracking-wider text-xs font-semibold">Trusted by thousands across Hampshire</span>
      </div>
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-slate-800 mb-6 font-jost">Our Most Popular Treatments</h2>
      <p class="text-lg md:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed font-jost">Comprehensive healthcare solutions tailored to your needs, delivered with care at our Hampshire locations.</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
      <?php
      $treatments = [
        ['Weight Loss',       home_url('/weight-loss/'),    'https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944273995-0.jpeg', 'Weight loss treatment at Southdowns Pharmacy'],
        ['Travel Health',     home_url('/travel-health/'),  'https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944274005-1.jpeg', 'Travel health vaccinations at Southdowns Pharmacy'],
        ['Ear Wax Removal',   home_url('/ear-wax/'),        'https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944517596-0.jpeg', 'Ear wax removal service at Southdowns Pharmacy'],
        ['Hair Loss',         home_url('/hair-loss/'),      'https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944274011-2.jpeg', 'Hair loss treatment at Southdowns Pharmacy'],
        ['Smoking Cessation', home_url('/smoking-cessation/'), 'https://c.animaapp.com/mkl3y6t51Gb5OV/img/uploaded-asset-1769944583782-0.jpeg', 'Smoking cessation support at Southdowns Pharmacy'],
      ];
      foreach ( $treatments as $t ) : ?>
      <a href="<?php echo esc_url( $t[1] ); ?>" class="group block">
        <div class="relative overflow-hidden rounded-2xl shadow-lg aspect-[3/4]">
          <img alt="<?php echo esc_attr( $t[3] ); ?>" src="<?php echo esc_url( $t[2] ); ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
          <div class="absolute inset-0 bg-blue-600/0 group-hover:bg-blue-600/40 transition-colors duration-300 flex items-center justify-center">
            <span class="text-white text-sm font-medium px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 border border-white/30">View Details</span>
          </div>
          <div class="absolute bottom-0 left-0 right-0 p-4 md:p-5">
            <h3 class="text-white text-lg md:text-xl font-semibold font-jost mb-1"><?php echo esc_html( $t[0] ); ?></h3>
            <div class="w-8 h-0.5 bg-blue-400 group-hover:w-12 transition-all duration-300"></div>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="relative py-16 md:py-24 overflow-hidden" style="background:linear-gradient(135deg,#1e3a8a 0%,#1d4ed8 50%,#3b82f6 100%);">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-white rounded-full -translate-x-1/4 translate-y-1/4"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 lg:px-12">
    <div class="text-center mb-10 md:mb-16">
      <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full mb-6 border border-white/30">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
        <span class="uppercase tracking-wider text-xs font-semibold">Trusted by Thousands</span>
      </div>
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-6 font-jost">What Our Patients Say</h2>
      <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed font-jost">Real experiences from real patients across our Hampshire locations.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      <?php
      $testimonials = [
        ['SJ', 'Sarah Johnson',   'Portsmouth Branch',     '"Excellent service from start to finish. The pharmacist was incredibly knowledgeable about travel vaccines and made me feel completely at ease. Same day appointment was a lifesaver!"'],
        ['MT', 'Michael Thompson','Southsea Branch',       '"The weight loss programme has been life-changing. Professional, supportive, and results-driven. I\'ve lost 18kg in 4 months with their expert guidance."'],
        ['EP', 'Emma Patel',      'Waterlooville Branch',  '"Quick, efficient blood testing service. Results came back within 24 hours and the staff explained everything clearly. Highly recommend for anyone needing health checks."'],
        ['DW', 'David Williams',  'Havant Branch',         '"Fantastic ear wax removal service. Painless procedure and immediate relief. The practitioner was gentle and professional throughout. Worth every penny."'],
        ['RC', 'Rachel Chen',     'Portsmouth Branch',     '"As a frequent traveller, I rely on Southdowns for all my travel health needs. Yellow fever certification was processed immediately. Couldn\'t ask for better service."'],
        ['JM', 'James Mitchell',  'Southsea Branch',       '"The smoking cessation programme helped me quit after 15 years. Supportive team, effective treatment, and ongoing check-ins made all the difference. Smoke-free for 6 months now!"'],
      ];
      foreach ( $testimonials as $t ) : ?>
      <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105">
        <div class="flex gap-1 mb-4"><?php echo $stars; ?></div>
        <p class="text-white text-base md:text-lg leading-relaxed mb-6 font-jost italic"><?php echo esc_html( $t[3] ); ?></p>
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center text-white font-semibold text-lg"><?php echo esc_html( $t[0] ); ?></div>
          <div>
            <div class="text-white font-semibold text-base font-jost"><?php echo esc_html( $t[1] ); ?></div>
            <div class="text-blue-200 text-sm font-jost"><?php echo esc_html( $t[2] ); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
