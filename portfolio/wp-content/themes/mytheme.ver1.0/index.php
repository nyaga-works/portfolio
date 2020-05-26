<?php get_header(); ?>


<section class="contents idx__contents">  
    <div class="container sec__container">
      <ul class="wp__instagram__widget">
        <?php dynamic_sidebar('instagram-sidebar'); ?>
      </ul>
    </div>
</div>


<div class="main__wrap" id="maincontents">
  <section class="contents idx__contents">  
    <div class="container sec__container sec__info">
      <div class="sec__news cf"><!--sec news-->
        <h2 class="sec__ttl">NEWS</h2>
        <?php
          $args = array(
            'posts_per_page' => 3,
            'post_type' => array('news'),
            'post_status' => array('publish'),
            'no_found_rows' => true,
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
            <div class="info__contents__txt"><a href="<?php the_permalink(); ?>" class="txtlink"><?php echo the_title();?></a></div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="btn section__btn"><a href="<?php echo home_url(); ?>/news/"><span>VIEW MORE</span></a></div>
        <?php else: ?>
        <div class="info__contents">
          <div class="info__contents__row">
            <div class="info__contents__date"><span class="y"></span><span class="d"></span><span class="w"></span></div>
            <div class="info__contents__txt">記事がありません。</div>
          </div>
        </div>
        <?php endif; ?>
      </div><!--end sec news-->
    </div>
  </section>
</div>

<?php get_footer(); 