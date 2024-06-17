<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <?php wp_head(); ?>
    <title>ビッグローブ光</title>
</head>
<body>
    <header id="archive__header">
        <div class="archive__header--content">
			<a href="<?php echo home_url('/'); ?>"><img class="archive__header--logo" src="<?php echo get_template_directory_uri(); ?>/img/biglobe-logo.png" alt=""></a>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
        <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                      
                      <nav class="globalMenuSp">
                      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                      </nav>
</header>