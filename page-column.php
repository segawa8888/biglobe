<?php get_header('archives'); ?>

<div class="slider">
	<?php
       $categories = get_categories('parent=0');
        foreach ($categories as $category):
    ?>
    <?php
        $my_query = new WP_Query(
            array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => 6,
            ));
	query_posts('cat='.$category->cat_ID);
        if ($my_query->have_posts()):
    ?>
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
  endif;?>
  <?php endforeach; ?>
</div><!-- .slider -->

<main>
<div class="popular_tittle">
<h3>人気の記事</h3>
<p>光回線</p>
</div>
<div class="popular_content">
<?php

if(function_exists('setPostViews')){
    setPostViews(get_the_ID());
}

$args = array(
    'post_type' => array('post'),
    'posts_per_page' => 6,
    'category_name' => 'lightning',
    'post_status' => array('publish'),
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'desc'
);

$query = new WP_Query($args);
if($query->have_posts()):
    while($query->have_posts()):
        $query->the_post();
?>

<div class="popularPost">
    <a class="popularPostImage" href="<?php echo get_permalink(); ?>">
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

<div class="popular_tittle">
<p>その他</p>
</div>
<div class="popular_content">
<?php

if(function_exists('setPostViews')){
    setPostViews(get_the_ID());
}

$args = array(
    'post_type' => array('post'),
    'posts_per_page' => 4,
    'category_name' => 'other',
    'post_status' => array('publish'),
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'desc'
);

$query = new WP_Query($args);
if($query->have_posts()):
    while($query->have_posts()):
        $query->the_post();
?>

<div class="popularPost popular_other">
    <a class="popularPostImage" href="<?php echo get_permalink(); ?>">
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

<div class="popular_tittle">
<p>最新の記事</p>
</div>
<div class="popular_content">
<?php

if(function_exists('setPostViews')){
    setPostViews(get_the_ID());
}

$args = array(
    'post_type' => array('post'),
    'posts_per_page' => 3,
    'order' => 'desc'
);

$query = new WP_Query($args);
if($query->have_posts()):
    while($query->have_posts()):
        $query->the_post();
?>

<div class="popularPost">
    <a class="popularPostImage" href="<?php echo get_permalink(); ?>">
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
<a class="all__archive--btn" href="<?php echo home_url( 'archive' );?>">すべての記事を見る</a>
</main>


<?php get_footer('archives'); ?>