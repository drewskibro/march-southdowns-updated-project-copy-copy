<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'font-jost bg-white text-gray-900 overflow-x-hidden' ); ?>>
<?php wp_body_open(); ?>

<!-- ============================================================
     HEADER / NAV
     ACF: SP_pharmacy_name, SP_logo_url (global options)
     ============================================================ -->
<header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 md:h-20">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( sp_pharmacy_name() ); ?>">
        <img src="<?php echo esc_url( sp_logo_url() ); ?>"
             alt="<?php echo esc_attr( sp_pharmacy_name() ); ?>"
             class="h-12 md:h-16 w-auto" />
      </a>

      <!-- Desktop nav -->
      <nav class="hidden md:flex items-center gap-6 text-sm font-normal text-gray-700" aria-label="Primary navigation">
        <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="hover:text-blue-600 transition-colors">Services</a>
        <a href="#faqs" class="hover:text-blue-600 transition-colors">FAQs</a>
        <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="hover:text-blue-600 transition-colors">Blog</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="hover:text-blue-600 transition-colors">Contact Us</a>
        <button class="flex items-center gap-2 bg-purple-600 hover:bg-purple-700 text-white text-sm font-medium px-4 py-2.5 rounded-full transition-colors"
                aria-label="Speak to our AI agent">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
          Speak to our AI agent
        </button>
        <a href="<?php echo esc_url( sp_booking_url() ); ?>" class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2.5 rounded-full transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
          </svg>
          Book Appointment
        </a>
      </nav>

      <!-- Mobile hamburger -->
      <button class="md:hidden text-gray-700 p-2" aria-label="Open menu" id="mobile-menu-btn">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile menu drawer -->
  <div class="md:hidden hidden bg-white border-t border-gray-100 shadow-lg" id="mobile-menu">
    <nav class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-3">
      <a href="<?php echo esc_url( home_url( '/travel-health/' ) ); ?>" class="text-gray-700 font-medium py-2 border-b border-gray-50">Services</a>
      <a href="#faqs" class="text-gray-700 font-medium py-2 border-b border-gray-50">FAQs</a>
      <a href="<?php echo esc_url( home_url( '/health-hub/' ) ); ?>" class="text-gray-700 font-medium py-2 border-b border-gray-50">Blog</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="text-gray-700 font-medium py-2 border-b border-gray-50">Contact Us</a>
      <a href="<?php echo esc_url( sp_booking_url() ); ?>" class="mt-2 inline-flex items-center justify-center gap-2 bg-blue-900 text-white font-semibold text-sm px-6 py-3 rounded-xl">
        Book appointment
      </a>
    </nav>
  </div>
</header>

<script>
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
  const menu = document.getElementById('mobile-menu');
  menu.classList.toggle('hidden');
});
</script>
