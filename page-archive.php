<?php get_header('archives'); ?>

<?php
$sliders = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => 6,
);
$wp_query = new WP_Query($sliders);
?>

<div class="slider">
  <?php if($wp_query->have_posts()): ?>
    <?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
    <article class="slider_item">
      <a href="<?php the_permalink(); ?>">
        <div class="slider_img">
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png">
          <?php endif; ?>
        </div><!--slider_img-->
        <h2 class="slider_title"><?php the_title(); ?></h2>
      </a>
    <?php the_category(); ?>
    </article>
    <?php endwhile; ?>
  <?php
  wp_reset_postdata();
  endif;
  ?>
</div><!-- .slider -->

<main>

<div class="popular_tittle">
<h3>全ての記事</h3>
<p>all</p>
</div>

<div class="popular_content">
<?php
$args = array(
  'post_type' => array('post'),
  'posts_per_page' => 16,
);

$query = new WP_Query($args);
if($query->have_posts()):
  while($query->have_posts()):
      $query->the_post();
?>
<div class="popularPost popular_other">
    <a class="popularPostImage" href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
    <?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('full'); ?>
    <?php else : ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png">
    <?php endif; ?>
    </a>
    <div class="popularPostBody">
        <?php the_category(); ?>
        <a href="<?php echo get_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
    </a>
    <p class="popular_date"><?php echo get_the_date(); ?></p>
    </div>
</div>

<?php 
    endwhile;
else:
    echo '投稿がありません';
endif;
wp_reset_postdata();
?>

</div>

<?php the_posts_pagination(
    array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
); ?>

</main>


<?php get_footer('archives'); ?>