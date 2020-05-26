<?php get_header(); ?>

<section class="contents pg__contents">
  <div class="container sec__container">
    <div class="sec__col cf">
      <h2 class="sec__ttl"><?php $pg_slug = get_query_var('post_type'); echo strtoupper($pg_slug); ?></h2>
      <?php if(have_posts()): ?>
      <div class="sec__col__contents">
        <?php while(have_posts()): the_post(); ?>
          <?php the_title(); ?>
        <?php endwhile; ?>
      </div>
      <?php endif; ?> 
    </div>
  </div>
</section>

<?php get_footer();