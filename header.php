<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PS5P882');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Ads: 10952046786 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10952046786"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10952046786');
</script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <?php if ( is_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages.css">
  <?php endif; ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <?php wp_head(); ?>
    <title>ビッグローブ光</title>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS5P882"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="header__menu pc__menu">
            <div class="header__tittle">
                <a href="<?php echo home_url('/'); ?>"><img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
                <div class="header__text">
                    <p class="omoshikomi"><img src="<?php echo get_template_directory_uri(); ?>/img/biglobe.png" alt="">お申し込みサイト</p>
                    <p class="header__company">正規販売取扱店 株式会社スターティングライン・コーポレーション<br>
                        販売取扱店届出番号 第C1903251号</p>
                    </div>
                </div>

            <div class="header__list">
                <ul class="header__list__menu">
                    <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                    <li><a href="<?php echo home_url('/plan'); ?>">料金プラン</a></li>
                    <li><a href="<?php echo home_url('/flow'); ?>">開通までの流れ</a></li>
                </ul>
                <div class="header__list__tel">
                    <div class="list__tel">
                  <p class="uketsuke">受付時間 10:00〜19:00（年中無休・年末年始を除く）</p>
                  <p class="tel__wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/free-dial.png" alt=""><span class="tel">0120-877-872</span></p>
                </div>
                  <a href="<?php echo home_url('/contact'); ?>" class="cv__btn btn-gradient"><span>WEB申し込みはこちら<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
                </div>
            </div>
        </div>

        <div class="header__menu sp__menu">
            <div class="header__menu__top">
				<a href="<?php echo home_url('/'); ?>"><img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
                <div class="list__tel">
                    <p class="uketsuke">受付時間 10:00〜19:00（年中無休・年末年始を除く）</p>
                    <a href="tel:0120-877-872"><p class="tel__wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/free-dial.png" alt=""><span class="tel">0120-877-872</span></p></a>
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                      
                      <nav class="globalMenuSp">
                          <ul>
                            <li><a href="<?php echo home_url('/'); ?>">トップページ</a></li>
                            <li><a href="<?php echo home_url('/plan'); ?>">料金プラン</a></li>
                            <li><a href="<?php echo home_url('/flow'); ?>">開通までの流れ</a></li>
                            <li><a href="https://www.sl-c.co.jp/">スターティングラインについて</a></li>
                            <li><a href="<?php echo home_url('/contact/#privacy'); ?>">ご利用規約</a></li>
                          </ul>
                      </nav>
                  </div>
            </div>
        </div>
    </header>