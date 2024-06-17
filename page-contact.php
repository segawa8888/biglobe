<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

<div class="page__tittle__wrapper">
     <h2>お申し込み</h2>
</div>

<div class="page__contact--container">

  <h2 class="page__contact--tittle">お問い合わせフォーム</h2>

    <ol class="stepBar step3">
      <li class="step current">STEP1　情報入力</li>
      <li class="step">STEP2　入力内容の確認</li>
      <li class="step">STEP3　受付完了</li>
    </ol>

    <h3 class="page__contact--tertiary">お申し込み情報を入力してください。</h3>
    <form action="<?php echo home_url('/confirm'); ?>" method="post" onsubmit="return validate()">

      <table class="contact__table">
        <tr class="first">
          <th class="required pt0">お申し込み区分</th>
          <td>
            <div class="checkbox-wrap">
              <label class="label-checkbox">
                <input type="radio" id="check0" name="course" value="ご新規"   required="required">
                <span class="lever">ご新規</span>
              </label>
              <label class="label-checkbox">
                <input type="radio" id="check" onclick="checkfunction()" name="course" value="事業者変更・転用のお客様">
                <span class="lever">事業者変更・転用のお客様</span>
              </label>
            </div>
            <div id="hide__box" style="display:none;">
              <label id="hide__text">
                <input class="input__text" type="text" name="number" value="" placeholder="例)">
                <span>転用承諾番号</span></label>
              <label id="hide__text2">
                <input class="input__text" type="text" name="change" value="" placeholder="例)">
                <span>事業者変更承諾番号</span></label>
            </div>
          </td>
        </tr>

        <tr class="centering">
          <th class="required">ご希望のプラン</th>
          <td class="check-border">
            <div class="form-group">
              <label class="label-checkbox lever2">
                <input type="radio" name="plan" value="2年プラン" required="required">
                <span class="lever lever3">2年プラン</span>
              </label>
              <label class="label-checkbox lever2">
                <input type="radio" name="plan" value="3年プラン">
                <span class="lever lever3">3年プラン</span>
              </label>
            </div>
          </td>
        </tr>
      </table>

      <h3 class="page__contact--tertiary">お客様情報を入力してください。</h3>

      <table class="contact__table">
        <tr class="centering">
          <th class="required">お名前</th>
          <td><input class="input__text" type="text" name="name1" placeholder="例)" required="required"></td>
        </tr>
        <tr class="centering">
          <th class="required">ふりがな</th>
          <td class="check-border"><input class="input__text" type="text" name="name2" placeholder="例)" required="required"></td>
        </tr>
        <tr class="centering">
          <th class="pt1">設置先のご住所</th>
          <td class="check-border check-input">
            <div class="table__input input__content">
              〒<input type="text" name="zip" class="zip" value="" placeholder="例)">
              <button type="button" class="ajaxzip3" href="#">住所検索</button>
            </div>
            <div class="table__input">
              <p>都道府県・市区町村</p>
              <input type="text" name="addr1" class="addr1" value="" placeholder="例)">
            </div>
            <div class="table__input">
              <p>町名</p>
              <input type="text" name="addr2" class="addr2" value="" placeholder="例)">
            </div>
            <div class="table__input">
              <p>番地など</p>
              <input type="text" name="addr3" class="addr3" value="" placeholder="例)">
            </div>
            <div class="table__input">
              <p>建物名・部屋番号</p>
              <input type="text" name="addr4" class="addr4" value="" placeholder="例)">
            </div>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">建物の種類</th>
          <td class="check-border">
            <div class="form-group">
              <label class="label-checkbox lever2">
                <input type="radio" name="type" value="戸建て" required="required">
                <span class="lever lever3 lever-back">戸建て</span>
              </label>
              <label class="label-checkbox lever2">
                <input type="radio" name="type" value="集合住宅">
                <span class="lever lever3 lever-back2">集合住宅</span>
              </label>
            </div>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">電話番号</th>
          <td class="check-border check-left">
			  <input type="tel" name="tel" class="input__text2" placeholder="例)" value=""   required="required">
            <p>（半角数字、ハイフン無し）</p>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">メールアドレス</th>
          <td class="check-border"><input type="email" name="email" class="input__text" placeholder="例)"　value="メールアドレス"   required="required"></td>
        </tr>
      </table>

      <h3 class="page__contact--tertiary">ご希望の連絡日時を選択してください。</h3>

      <table class="contact__table">
        <tr class="centering">
          <th class="required pt2">ご案内希望曜日</th>
          <td>
            <div class="form-group group-flex">
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date" value="いつでも">
                <span class="lever lever3">いつでも</span>
              </label>
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date2" value="月曜日">
                <span class="lever lever3">月曜日</span>
              </label>
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date3" value="火曜日">
                <span class="lever lever3">火曜日</span>
              </label>
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date4" value="水曜日">
                <span class="lever lever3">水曜日</span>
              </label>
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date5" value="木曜日">
                <span class="lever lever3">木曜日</span>
              </label>
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date6" value="金曜日">
                <span class="lever lever3">金曜日</span>
              </label>
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date7" value="土曜日">
                <span class="lever lever3">土曜日</span>
              </label>
              <label class="label-checkbox lever2">
                <input class="check2" type="checkbox" name="date8" value="日曜日">
                <span class="lever lever3">日曜日</span>
              </label>
            </div>
          </td>
        </tr>
        <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
        <tr class="centering">
          <th class="required">ご案内希望時間帯</th>
          <td class="check-border">
            <!-- <div class="cp_ipselect cp_sl01">
              <select id= "shiritori" name="select" required>
                <option value="いつでも">いつでも</option>
                <option value="午前中">午前中</option>
                <option value="12~14時">12~14時</option>
                <option value="14~16時">14~16時</option>
                <option value="16~19時">16~19時</option>
              </select>
            </div> -->
            <div class="contact-multiple">
              <select id="multiple-time" multiple="multiple" name="select" required>
                <option value="いつでも">いつでも</option>
                <option value="10～11時">10～11時</option>
                <option value="11～12時">11～12時</option>
                <option value="12～13時">12～13時</option>
                <option value="13～14時">13～14時</option>
                <option value="14～15時">14～15時</option>
                <option value="15〜16時">15〜16時</option>
                <option value="16〜17時">16〜17時</option>
                <option value="17〜18時">17〜18時</option>
                <option value="18〜19時">18〜19時</option>
              </select>
            </div>
          </td>
        </tr>
      </table>

      <h3 class="page__contact--tertiary">ご質問等を入力してください。</h3>

      <table class="contact__table">
        <tr>
          <th>ご質問等入力欄</th>
          <td>
            <textarea name="textarea" class="form-textarea" placeholder="例)"></textarea>
          </td>
        </tr>
      </table>

      <div class="contactAgree">
        <label><input type="checkbox" name="Agree" value="Agree"  required="required"> <span>個人情報の取り扱い</span>に同意する</label>
        <input id="submitButton" type="submit" name="btn_confirm" value="入力内容の確認">
      </div>
    </form>

  <h2 class="page__contact--tittle" id="privacy">個人情報の取り扱い（プライバシーポリシー）</h2>
  <div class="scrollArea">
    プライバシーポリシー（個人情報保護方針）<br><br>

    株式会社スターティングライン・コーポレーション（以下、「弊社」）では、各種サービスをご提供するにあたり、お客様からお預かりした個人情報の保護を弊社の重大な責務であると認識し、ここにプライバシーポリシーを制定し、遵守に努めます。<br><br>

    個人情報の収集と利用について<br>
    個人情報とは、当サイトを通じてお客様からご提供いただく氏名・ご住所・電話番号・メールアドレス、職業、性別など特定の個人を識別できる情報を指します。<br>
    弊社では、お客様との取引やサービスの提供のためにお客様の個人情報を収集し、適法の範囲で利用いたします。<br>
    弊社は、個人情報の適切な管理によって個人情報の漏洩、紛失、毀損を防ぎ、個人情報への不正アクセスを防止します。<br>
    弊社は、お客様の個人情報に関して適用される法令、規範を遵守するとともに、本プライバシーポリシーの内容を継続的に見直し、維持・改善に努めます。<br>
    弊社はご本人様から個人情報の更新及び削除・開示等の請求があった場合、速やかに更新及び削除・開示を行います。<br>
    弊社は、お客様のご意見等も踏まえ、また法令の変更等に伴い、本プライバシーポリシーを必要に応じて見直し、その改善に努めます。本プライバシーポリシーを改定した場合、本ページに掲載することにより公表いたしますので、定期的にご確認いただきますようお願い申し上げます。<br><br>

    個人データの提供について<br>
    弊社は、個人データの取扱業務の全部または一部を委託する場合があります。この場合、弊社は、当該情報を適正に取り扱うと認められる委託先を選定し、委託契約において、安全管理措置、秘密保持、再委託の条件、委託契約終了時の個人データの返却等その他の個人データの取扱いに関する事項について適正に定め、必要かつ適切な監督を実施します。<br>
    弊社は、弊社が保有する個人データについて、通信事業者等の第三者に提供いたします。<br>
    弊社は、提携する第三者では個人を特定できない情報（個人関連情報）の提供を受け、弊社が保有する個人データと関連づける場合があります。その場合、法令の定めに従い、弊社はあらかじめ本人から個人データとして取得する旨お客さまから同意を取得するか、提携する第三者により当該同意を取得します。また、弊社から個人関連情報を提供し、提供先で個人データと関連づけをする場合、提供先にてお客さまの同意を取得している事業者に提供します。<br>
    弊社は、外国にある第三者へ個人データの提供を行う場合は、法令の定めに従い、同意の取得および情報提供等必要な措置を取ります。<br>
    上記のほか、弊社は、弊社が保有する個人データを、個人を識別できない形（匿名加工情報または統計情報）に加工した上で、第三者への提供を行うことがあります。<br><br>

    アクセス解析について<br>
    弊社では、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。<br>
    このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。<br>
    トラフィックデータは匿名で収集されており、個人を特定するものではありません。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。<br><br>

    ご利用回線IPアドレスやブラウザのCookieについて<br>
    弊社では、提供する情報やサービスを充実、サイトをより便利にする目的で、弊社ご利用者様のIPアドレスを収集し、ブラウザの<br>
    Cookie（セッション）機能を利用します。ただし、IPアドレスの収集やCookieの利用により、個人を特定できるような情報を得る目的はございません。お申し込みフォームご利用者様がブラウザを設定することにより、Cookieの受け取りを拒否<br>
    したり、クッキーを受け取った時に警告を表示させることが出来ますが、その結果、サービスの全部もしくは一部に制約が生じることがあります。<br><br><br>



    〒343-0845<br>
    埼玉県越谷市南越谷4丁目9番6号<br>
    TEL：048-989-3153<br>
    受付時間 10：00～19：00<br>
  </div>
</div>

<?php get_footer(); ?>