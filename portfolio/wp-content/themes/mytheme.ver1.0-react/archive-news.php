<?php get_header(); ?>

<section class="contents pg__contents">
  <div class="container sec__container sec__info">
    <div class="sec__news cf"><!--sec news-->
      <h2 class="sec__ttl">NEWS</h2>
      <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 10,
          'paged' => $paged,
          'post_type' => array('news'),
          'post_status' => array('publish'),
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()) :
      ?>
      <div class="info__contents">
        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="info__contents__row">
          <div class="info__contents__date"><span class="y"><?php echo get_post_time('Y'); ?></span><span class="d"><?php echo get_post_time('m.d.'); ?></span><span class="w"><?php echo get_post_time('D.'); ?></span></div>
          <div class="info__contents__txt"><?php echo the_title(); ?></div>
          <div class="info__contents__editor wp__editor"><?php echo the_content(); ?></div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; wp_reset_postdata(); ?>
      <div class="pagination">
      <?php
        $big = 999999999;
        echo paginate_links(array(
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'show_all' => false,
          'type' => 'plain',
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $the_query->max_num_pages,
          'prev_text' => __('&lt;'),
          'next_text' => __('&gt;')
        ));
      ?>
      </div>
    </div><!--end sec news-->
  </div>
</section>

<?php get_footer();