<?php get_header('archives'); ?>

<main>
<div class="archive__content">
    <div class="archive__content--item">
<?php

$args = array(
    'post_type' => array('post'),
    'posts_per_page' => 10,

);

$query = new WP_Query($args);
if($query->have_posts()):
    while($query->have_posts()):
        $query->the_post();
?>

<div id="content_main">
<h1><?php the_title(); ?></h1>
	<article class="article">
    <figure>
    <a class="popularPostImage" href="<?php echo get_permalink(); ?>">
    <?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail('full'); ?>
    <?php else : ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png">
    <?php endif; ?>
    </a>
		</figure>

        <div class="article-info">
        <p><?php the_content(); ?></p>
        <div class="article-info-box">
        <a class="article-info__link" href="<?php echo get_permalink(); ?>">この記事を読む</a>
        <span class="popular_date"><?php echo get_the_date(); ?></span>
        </div>
        </div>
	</article>
</div>

<?php endwhile; ?>
<?php else : ?>
  <p>記事がありません</p>
<?php endif; ?>

<?php
  the_posts_pagination( array(
    'prev_text' => '前のページ',
    'next_text' => '次のページ',
  ) );
?>


</div>
<?php get_sidebar(); ?>
</div>

</main>

<?php get_footer('archives'); ?>