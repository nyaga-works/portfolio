<?php get_header(); ?>

<section class="contents pg__contents pg__single__contents">
  <div class="container sec__container sec__info">
    <div class="sec__news cf"><!--sec news-->
      <h2 class="sec__ttl">NEWS</h2>
      <div class="info__contents">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="info__contents__row">
          <div class="info__contents__date"><span class="y"><?php echo get_post_time('Y'); ?></span><span class="d"><?php echo get_post_time('m.d.'); ?></span><span class="w"><?php echo get_post_time('D.'); ?></span></div>
          <div class="info__contents__txt"><?php echo the_title(); ?></div>
          <div class="info__contents__editor wp__editor"><?php echo the_content(); ?></div>
        </div>
        <?php endwhile; endif; ?>
      <div class="btn__wrap">
        <div class="btn back"><a href="<?php echo home_url(); ?>/news/"><span>ALL NEWS</span></a></div>
      </div>
    </div><!--end sec news-->
  </div>
</section>

<?php get_footer();