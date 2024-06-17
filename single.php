<?php get_header('archives'); ?>

<div class="archive__content">
    <div class="archive__content--item single__content--item">
    <?php if ( have_posts() ): while ( have_posts() ): the_post() ?> 
    <section>
        <h1><?php the_title() ?></h1>
        <p class="popular_date"><?php echo get_the_date(); ?></p>

		<div class="single__thumbnail">
    <?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('full'); ?>
    <?php else : ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png">
    <?php endif; ?>
		</div>

    <?php the_content() ?>
    </section>
    <?php endwhile; ?>
<?php else : ?>
  <p>記事がありません</p>
<?php endif; ?>

<!-- 関連記事 -->
<?php if(has_category() ) {
    $catlist =get_the_category();
    $category = array();
    foreach($catlist as $cat){
        $category[] = $cat->term_id;
    }}
?>

<div id="prevNextPost">
  <?php
  $prev_post = get_previous_post(true);
  $next_post = get_next_post(true);
  ?>

<div class="prev-wrap">
<div class="prev-btn">
<?php previous_post_link('%link', '<< 前の記事へ >>'); ?>
</div>
  <?php if($prev_post){ ?>
  <a class="prevPost" href="<?php echo get_permalink($prev_post->ID); ?>">
    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prev_post->ID)); ?>" alt="">
    <h4><?php echo $prev_post->post_title; ?></h4>
  </a>
  <?php } ?>
  </div>

  <div class="next-wrap">
  <div class="next-btn">
  <?php next_post_link('%link', '<< 次の記事へ >>'); ?>
  </div>
  <?php if($next_post){ ?>
  <a class="nextPost" href="<?php echo get_permalink($next_post->ID); ?>">
    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($next_post->ID)); ?>" alt="">
    <h4><?php echo $next_post->post_title; ?></h4>
  </a>
  <?php } ?>
  </div>

</div>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer('archives'); ?>