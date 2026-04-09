<?php
/**
 * Fallback index template.
 * WordPress requires this file. Custom page templates handle all actual pages.
 */
get_header();
?>
<main class="max-w-4xl mx-auto px-4 py-20 text-center">
  <h1 class="text-3xl font-bold font-jost text-gray-900 mb-4">
    <?php echo esc_html( sp_pharmacy_name() ); ?>
  </h1>
  <p class="text-gray-500">Please assign a page template to this page in WordPress admin.</p>
</main>
<?php
get_footer();
