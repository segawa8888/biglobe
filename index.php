 <?php get_header(); ?>

    <main>
        <div class="mainvisual__bg__container fade_trigger1">

            <img class="mainvisual__bg pc__bg" src="<?php echo get_template_directory_uri(); ?>/img/bg-top2.png" alt="">
            <img class="mainvisual__bg sp__bg" src="<?php echo get_template_directory_uri(); ?>/img/top__bg__sp.png" alt="">

                <img class="top__center element" src="<?php echo get_template_directory_uri(); ?>/img/kv.svg" alt="">
                <img class="top__center2 element" src="<?php echo get_template_directory_uri(); ?>/img/top_ribbon_sp.svg" alt="">
                <img class="top__center3 element" src="<?php echo get_template_directory_uri(); ?>/img/top__center_text.svg" alt="">
                <img class="top__left element" src="<?php echo get_template_directory_uri(); ?>/img/top-left.svg" alt="">
                <img class="top__right element" src="<?php echo get_template_directory_uri(); ?>/img/top-right.png" alt="">
                <img class="top__right2 element" src="<?php echo get_template_directory_uri(); ?>/img/top7.svg" alt="">
                <img class="top__right3 element" src="<?php echo get_template_directory_uri(); ?>/img/char1.svg" alt="">
                <img class="top__left__bottom element" src="<?php echo get_template_directory_uri(); ?>/img/top-left-bottom.png" alt="">
                <div class="top__right__bottom element">
                <img class="top__right__bottom1 element" src="<?php echo get_template_directory_uri(); ?>/img/fv-pop1.svg" alt="">
                <img class="top__right__bottom2 element" src="<?php echo get_template_directory_uri(); ?>/img/top-right-bottom2.png" alt="">
            </div>
        </div>

        <div class="main__cv__content">
            <div class="main__cv__items" style="background:white;">
                <div class="main__cv__item">
            <p style="color:#0154AC"><span>WEB</span>から申し込む (24時間受付可)</p>
            <p class="kanketsu">1分で完結！</p>
        </div>
            <a href="<?php echo home_url('/contact'); ?>" class="cv__btn btn-gradient"><span>WEB申し込みはこちら<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
        </div>

            <div class="main__cv__items" style="background:#0154AC;">
                <div class="main__cv__item">
                    <p style="color:white;"><span>電話</span>で申し込む(10：00〜19：00)</p>
                    <p class="main__cv-tel">0120-877-872</p>
                    </p>
                </div>
                    <a href="tel:0120-877-872" class="cv__btn btn-gradient"><span>お電話での申し込みはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
            </div>
        </div>

        <div class="point__container">
            <div class="section__tittle">
                <img class="point__icon" src="<?php echo get_template_directory_uri(); ?>/img/biglobe-icon.png" alt="">
                <div class="fadeUpTrigger">
                <img class="point__bg__icon" src="<?php echo get_template_directory_uri(); ?>/img/light.svg" alt="">
                </div>
                <p>当サイトからお申し込みが選ばれる</p>
                <img class="section__ttl" src="<?php echo get_template_directory_uri(); ?>/img/point.png" alt="">
            </div>
            <div class="point__wrapper">
                <ul class="pricecards js-element">
                    <li class="pricecard free">
                        <h3>IPv6接続（IPoE方式）<br>
                            対応で使い放題の<br>
                            高速インターネット！</h3>
                        <h4>高速1Gbps</h4>
                        <p class="pricecard__border__top">ビッグローブ光は、NTT東日本・NTT西日本の光回線とBIGLOBEのプロバイダ接続サービスをひとつにまとめた光コラボレーションモデルのサービスです。 
                            フレッツ光と同じ<span>通信速度最大1Gbps</span>の高速光回線、充実したサポートが特徴です。</p>
                            <p>※ お住まいによっては、最大200Mbps、または100Mbpsの回線タイプとなることがあります。
                                ビッグローブ光はベストエフォート型のサービスです。最大1Gbpsとは理論上の最大速度となり、
                                お客さまのご利用環境や回線状況などにより、低下する場合があります。</p>
                        <p class="pricecard__btn" href="">ビッグローブ光はフレッツ光と<br>同じギガスピード！</p>
                    </li>
                    <li class="pricecard premium">
                        <h3>インターネット回線・<br>
                            プロバイダ料込みで<br>
                            おトクな料金</h3>
                        <h4 class="tatemoji">4,378円〜</h4>
                        <span class="pricecard__mini">※マンションタイプをご契約の方</span>
                        <h3>さらにおトクな特典！</h3>
                        <div class="pricecard__tokuten">
                            <div class="pricecard__item">
                             <img src="<?php echo get_template_directory_uri(); ?>/img/Icon awesome-tools.png" alt="">
                                <h3>工事費用<span class="kome">*1</span><br><span style="color:#D93F2B">相当額割引!</span></h3>
                            </div>
                            <div class="pricecard__item">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/Icon feather-plus-circle.png" alt="">
                            </div>
                            <div class="pricecard__item">
                               <img src="<?php echo get_template_directory_uri(); ?>/img/Icon material-laptop-chromebook.png" alt="">
                                <h3>開通月は<span class="kome">*2</span><br>
                                    <span style="color:#D93F2B">月額無料!</span></h3>
                            </div>
                        </div>
                        <p>※1 特典適用の場合のみ割引</p>
                        <p> ※2 回線新規でのお申し込みの場合のみ適用</p>
                        <a href="<?php echo home_url('/plan'); ?>" class="cv__btn btn-gradient"><span>詳しい料金プランはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
                    </li>
                    <li class="pricecard standard">
                        <h3>当サイトはおトクな<br>
                            特典が豊富</h3>
                            <h4 class="tatemoji2">55,000 円</h4>
                     <table class="pricecard__table">
                        <tbody>
                            <tr>
                                <th>特典1</th>
                                <td>新規キャッシュバック特典<br><span class="td__big">55,000</span><span>円還元（最大）</span></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td class="td__mini">（３年プラン契約の場合）</td>
                            </tr>
                            <tr>
                                <th>特典2</th>
                                <td>工事費実質0円（戸建て）<br><span class="td__big">19,800</span><span>円還元</span></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td class="td__mini">（2年プラン契約の場合）</td>
                            </tr>
                            <tr>
                                <th>特典3</th>
                                <td>無線LANルータ同時申込<br><span class="td__big">半年間 0 円</span></td>
                            </tr>
                        </tbody>
                     </table>
                     <p>高額キャッシュバックや大幅割引など様々な特典を実施中！インターネットをおトクに始めるチャンス！<br>
                     特典1・2はどちらか片方のみの適用となります。</p>
                     <a href="<?php echo home_url('/campaign'); ?>" class="cv__btn btn-gradient"><span>おトクな特典の詳細はコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
                    </li>
                </ul>
            </div>
            <div class="custom-shape-divider-top-1655284932">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>

        <div class="step__container">
            <div class="section__tittle js-element">
                <img class="point__bg__icon effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/flush.svg" alt="">
                <p>申し込みから開通までの簡単3ステップ</p>
                <img class="section__ttl" src="<?php echo get_template_directory_uri(); ?>/img/kaitu.png" alt="">
            </div>

            <div class="step__wrapper">
                <div class="step__content js-element">
                    <div class="step__item">
                        <div class="step__icon">
                            <img class="step"  src="<?php echo get_template_directory_uri(); ?>/img/step1.svg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt="">
                            <p class="step__inner__text">お申し込み</p>
                        </div>
                        <p>お電話（ <a href="tel:0120-877-872">0120-877-872</a>）<br>
							または<a href="<?php echo home_url('/contact'); ?>">お申し込みフォーム</a><br>
                            よりお申し込みください。</p> 
                    </div>
                    <div class="step__item">
                        <div class="step__icon">
                            <img class="step"  src="<?php echo get_template_directory_uri(); ?>/img/step2.svg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="">
                            <p class="step__inner__text">確認・宅内調査</p>
                        </div>
                        <p>弊社よりエリア・お申し込み内容を確認させていただきます。<br>
                            後日、工事日程をご案内します。</p> 
                    </div>
                    <div class="step__item">
                        <div class="step__icon">
                            <img class="step"  src="<?php echo get_template_directory_uri(); ?>/img/step3.svg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/gear.svg" alt="">
                            <p class="step__inner__text">開通工事</p>
                        </div>
                        <p>工事業者がご自宅にお伺いし、<br>
                            回線の開通を実施します。</p> 
                    </div>
                </div>
                 <a class="cv__btn btn-gradient" href="tel:0120-877-872"><span>お電話での申し込みはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
            </div>
        </div>

        <div class="campaign__container">
            <div class="section__tittle js-element">
                <img class="point__bg__icon effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/153158.png" alt="">
                <img class="campaign__tittle pc__tittle" src="<?php echo get_template_directory_uri(); ?>/img/campaign.png" alt="">
                <img class="campaign__tittle sp__tittle section__ttl" src="<?php echo get_template_directory_uri(); ?>/img/campaign__tittle__sp.png" alt="">
            </div>
            <div class="campaign__text js-element">
            <p>55,000円キャッシュバック<br>キャンペーン！！</p>
            <p>(50,000円キャッシュバックの場合は<br>オプション加入必要なし)</p>
        </div>

        <div class="campaign__content js-element">
            <div class="campaign__item">
                <img class="campaign__inner" src="<?php echo get_template_directory_uri(); ?>/img/kanketu.png" alt="">
                <h3>WEBから申し込み</h3>
                <p>(24時間受付可)</p>
                <div class="campaign__inner__icon">
                <img class="campaign__icon" src="<?php echo get_template_directory_uri(); ?>/img/sp-mail-blue.svg" alt="">
            </div>
                <a href="<?php echo home_url('/contact'); ?>" class="cv__btn btn-gradient"><span>Web申し込みはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
            </div>
            <div class="campaign__item"> 
                <img class="campaign__inner" src="<?php echo get_template_directory_uri(); ?>/img/offer-tel.svg" alt="">
                <h3 style="color:#FF1D00;">0120-877-872</h3>
                <p>(10：00〜19：00)</p>
                <p>年中無休（年末年始を除く）</p>
                <div class="campaign__inner__icon icon2">
                <img class="campaign__icon" src="<?php echo get_template_directory_uri(); ?>/img/headphone-red.svg" alt="">
            </div>
                <a href="tel:0120-877-872" class="cv__btn btn-gradient"><span>お電話での申し込みはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
            </div>
        </div>
        </div>

        <div class="option__container">
            <div class="option__wrapper">
            <div class="option__content">
                <div class="option__item js-element">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/group1.png" alt="">
                </div>
                <div class="option__item js-element">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hikaku.png" alt="">
                </div>
            </div>

            <div class="option__content content__positioning">
                <div class="option__item order1 js-element">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/rock.png" alt="">
                </div>
                <div class="option__item order0 js-element">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/group2.png" alt="">
                </div>
            </div>

            </div>

            <div class="custom-shape-divider-top-1655284932">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            </div>

            <div class="plan__container">
                <div class="section__tittle">
                    <img class="point__bg__icon effect-fade" src="<?php echo get_template_directory_uri(); ?>/img/wallet.svg" alt="">
                    <img class="section__ttl" src="<?php echo get_template_directory_uri(); ?>/img/plan-title.svg" alt="">
                </div>
                <div class="plan__text">
                <p>プロバイダ料金と回線料金が<br>コミコミでとってもお得！</p>
                <p>auのスマホをお使いの方は<br>セット割適用で更にお得に！</p>
                <img class="fade-in fade-in-down" src="<?php echo get_template_directory_uri(); ?>/img/char1.svg" alt="">
            </div>

            <div class="plan__content js-element">
                <div class="plan__item">
                    <div class="plan__border">
                        <div class="plan__type type__1" style="background:#0388DA">
                            <h4>ファミリータイプ<br><span>1戸建にお住まいの方</span></h4>
                        </div>
                        <div class="plan__getugaku">
                            <h3><span>4,980</span>円~ /月</h3>
                            <p>（税込5,478円〜）</p>
                        </div>
                    </div>
                </div>

                <div class="plan__item">
                    <div class="plan__border">
                        <div class="plan__type type__2" style="background:#EC439A;">
                            <h4>マンションタイプ<br><span>マンションにお住まいの方</span></h4>
                        </div>
                        <div class="plan__getugaku">
                        <h3><span>3,980</span>円~ /月</h3>
                        <p>（税込4,378円〜）</p>
                    </div>
                    </div>
                </div>
                </div>
                <a href="<?php echo home_url('/contact'); ?>" class="cv__btn btn-gradient"><span>WEB申し込みはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
                </div>


                <div class="campaign__container">
                    <div class="section__tittle js-element">
                        <img class="point__bg__icon" src="<?php echo get_template_directory_uri(); ?>/img/153158.png" alt="">
                        <img class="campaign__tittle pc__tittle" src="<?php echo get_template_directory_uri(); ?>/img/campaign.png" alt="">
                        <img class="campaign__tittle sp__tittle section__ttl" src="<?php echo get_template_directory_uri(); ?>/img/campaign__tittle__sp.png" alt="">
                    </div>
                    <div class="campaign__text js-element">
                    <p>55,000円キャッシュバック<br>キャンペーン！！</p>
                    <p>(50,000円キャッシュバックの場合は<br>オプション加入必要なし)</p>
                </div>
        
                <div class="campaign__content js-element">
                    <div class="campaign__item">
                        <img class="campaign__inner" src="<?php echo get_template_directory_uri(); ?>/img/kanketu.png" alt="">
                        <h3>WEBから申し込み</h3>
                        <p>(24時間受付可)</p>
                        <div class="campaign__inner__icon">
                        <img class="campaign__icon" src="<?php echo get_template_directory_uri(); ?>/img/sp-mail-blue.svg" alt="">
                    </div>
                        <a href="<?php echo home_url('/contact'); ?>" class="cv__btn btn-gradient"><span>Web申し込みはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
                    </div>
                    <div class="campaign__item"> 
                        <img class="campaign__inner" src="<?php echo get_template_directory_uri(); ?>/img/offer-tel.svg" alt="">
                        <h3 style="color:#FF1D00;">0120-877-872</h3>
                        <p>(10：00〜19：00)</p>
                        <p>年中無休（年末年始を除く）</p>
                        <div class="campaign__inner__icon icon2">
                        <img class="campaign__icon" src="<?php echo get_template_directory_uri(); ?>/img/headphone-red.svg" alt="">
                    </div>
                        <a href="tel:0120-877-872" class="cv__btn btn-gradient"><span>お電話での申し込みはコチラ<i class="fa-solid fa-angle-right fa-1.5x"></i></span></a>
                    </div>
                </div>
                </div>

                <div class="faq__container">
                    <div class="section__tittle js-element">
                        <img class="point__bg__icon" src="<?php echo get_template_directory_uri(); ?>/img/faq.svg" alt="">
                        <img class="section__ttl" src="<?php echo get_template_directory_uri(); ?>/img/faq-title.svg" alt="">
                    </div>

                    <div class="acd__container js-element">
                        <div class="acd acd__top">
                            <input id="check1" type="checkbox" class="acd-hidden">
                            <label for="check1" class="acd-open"><span>Q</span>ビッグローブ光とはどんな<br>サービスですか？</label>
                            <label for="check1" class="acd-close"><span>A</span>ビッグローブ光は、NTT東日本・NTT西日本の光回線とBIGLOBEのプロバイダ接続サービスをひとつにまとめたサービスです(光コラボレーションモデル)。<br>
フレッツ光と同じ通信速度最大1Gbps＊1の光回線、IPv6接続(IPoE方式)＊2、充実したサポート、そして月々のお支払いをシンプルにお安くした料金体系が特徴です。
＊1 お住まいによっては、最大200Mbps、または100Mbpsの回線タイプとなることがあります。最大通信速度はお客さまのご利用機器、宅内配線、回線の混雑状況などにより低下します。
＊2 IPv6接続をご利用になるには、対応機器(光電話対応機器/接続機器(無線LAN付き))のご契約が必要です。</label>
                            </div>
                            <div class="acd acd__top">
                            <input id="check2" type="checkbox" class="acd-hidden">
                            <label for="check2" class="acd-open"><span>Q</span>IPv6接続(IPoE方式)はなぜ<br>速いのですか？</label>
                            <label for="check2" class="acd-close"><span>A</span>現在よく使われているネットワーク(PPPoE方式)は、近年、通信量の増加により各地域の設備が夜間混雑しています。<br>
IPv6接続では混雑しているPPPoE方式を使わず、IPoE方式を利用するため、地域や時間帯の影響を受けにくく、夜間でも快適にご利用いただけます。 常時IPv6接続をご利用になるには、対応機器(光電話対応機器/接続機器(無線LAN付き))のお申し込みが必要です。対応機器をご利用でない場合は、IPv6に対応したサービス/サイトがIPoE方式による接続となります(IPv4通信は従来どおりのPPPoE方式となります)。</label>
                            </div>
                            <div class="acd acd__top">
                            <input id="check3" type="checkbox" class="acd-hidden">
                            <label for="check3" class="acd-open"><span>Q</span>どれくらいの期間でインター<br>ネットが使えるようになりますか？</label>
                            <label for="check3" class="acd-close"><span>A</span>ご利用開始まで最短10日〜2カ月程度となります。＊1<br>
＊1 お客さまのお住まいの地域の混雑状況によります。</label>
                            </div>
                        <div class="acd acd__top">
                            <input id="check4" type="checkbox" class="acd-hidden">
                            <label for="check4" class="acd-open"><span>Q</span>工事日の日程はどのように<br>決まるのでしょうか？</label>
                            <label for="check4" class="acd-close"><span>A</span>お申し込みの際に、「工事希望日」をお客さまに指定していただきますが、お選びの日程での工事を確約するものではありません。お客さまのご希望がかなわない場合、日程調整のための電話連絡をさせていただきます。 また、連絡先に携帯電話番号をご登録いただいたお客さまには工事日が決まり次第、NTT東日本/NTT西日本よりショートメッセージが届きます。
</label>
                            </div>
                            <div class="acd acd__middle">
                            <input id="check5" type="checkbox" class="acd-hidden">
                            <label for="check5" class="acd-open"><span>Q</span>光回線の開通工事とはどのような<br>ものですか？立ち会いは必要ですか？</label>
                            <label for="check5" class="acd-close"><span>A</span>開通工事はNTTから委託された業者が行います。電話回線と同様に電柱から光ファイバー回線を宅内に引き込みます。宅内への引き込み方法は、既存の電話用配管やエアコン用ダクトを利用する場合や、壁に穴を空けて引き込む場合があります。 お申し込み後BIGLOBEから届く「開通のご案内」に工事日および立ち合いの有無を記載してありますので、必ずご確認ください。<br>マンションタイプに関しては基本的に穴あけ工事は行いません。もし穴あけ工事が必要な場合は必ず事前に確認をさせて頂きます。</label>
                            </div>
                            <div class="acd acd__bottom">
                            <input id="check6" type="checkbox" class="acd-hidden">
                            <label for="check6" class="acd-open"><span>Q</span>引越しの際は移転工事費が<br>かかりますか？</label>
                            <label for="check6" class="acd-close"><span>A</span>3年プランをご選択の方に関しては移転工事費は無料です。※<br><br>
※土曜日、日曜日、祝日（国民の祝日に関する法律に定める休日）に工事を行う場合は、3,300円の追加費用がかかります。<br>
追加オプション工事やビッグローブ光テレビ等のオプションサービスの工事費は別途かかります。</label>
                            </div>
                        </div>
                    </div>
                    </main>

                    <?php get_footer(); ?>