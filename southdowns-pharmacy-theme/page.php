<?php
/**
 * Default page template — used for standard WordPress pages
 * that don't have a custom template assigned.
 */
get_header();
?>
<main class="max-w-4xl mx-auto px-4 py-16">
  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <h1 class="text-3xl font-bold font-jost text-gray-900 mb-6"><?php the_title(); ?></h1>
      <div class="prose prose-gray max-w-none text-gray-600 leading-relaxed">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>
<?php
get_footer();
