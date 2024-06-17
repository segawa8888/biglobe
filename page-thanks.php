<?php 
/* Template Name: Thanks */
?>

<?php get_header(); ?>

<style>

    .sp-only {
        
    }
    
    .thanksCts {
        width: 100%;
        height: 100vh;
        background-color: #2FA4FF;
        text-align: center;
    }

    .thanksInner {
        max-width: 92%;
        margin: auto;
    }

    .thankyou {
        opacity: 0.15;
        position: absolute;
        top: 25%;
        left: 50%;
        transform: translateX(-50%);
        width: 80vw;
        max-width: 1000px;
        animation: imgfade 0.6s linear ;
    }

    .thanksFade {
        animation: fadeIn 0.6s linear ;
    }

    @keyframes imgfade {
        from {
            opacity: 0;
        }
        to {
            opacity: 0.15;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0px);
        }
    }

    .heroTxt {
        color: #fff;
        padding-top: 20vh;
        font-size: 2.5vw;
    }



    .heroTxtSub {
        color: #fff;
        font-size: 18px;
        padding-top: 30px;
    }

    .char1 {
        margin-top: 30px;
    }

    a.btn-gradient {
        width: 300px;
        margin: auto;
    }

    .thanksBtn {
        margin-top: 5vh !important;
    }


    @media screen and (max-width: 660px) {
        .heroTxt {
            padding-top: 150px;
            font-size: 4.5vw;
    }
    }

</style>

<div class="thanksCts">
    <div class="thanksInner">

  

<h1 class="heroTxt thanksFade">お問い合わせありがとうございます！</h1>
<p class="heroTxtSub thanksFade">内容を確認後、<br class="sp-only">24時間以内に<br>
電話でご連絡させて頂きます。<br>※年末年始を除く</p>
<div class="thanks">
<img class="thankyou" src="<?php echo get_template_directory_uri(); ?>/img/Thankyou.svg" alt="">
</div>
<div class="char1">
    <img class="thanksFade" src="<?php echo get_template_directory_uri(); ?>/img/char1.svg" alt="">
</div>
<a href="<?php echo home_url(''); ?>" class="cv__btn btn-gradient thanksFade thanksBtn"><span>トップへ戻る<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
  </div>
</div>


<footer></footer>

<?php wp_footer(); ?>
</body>
</html>