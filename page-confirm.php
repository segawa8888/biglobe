<?php 
/* Template Name: Confirm */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // フォームから送信されたデータを各変数に格納
$course = $_POST["course"];
$number = $_POST["number"];
$change = $_POST["change"];
$plan = $_POST["plan"];
$name1 = $_POST["name1"];
$name2 = $_POST["name2"];
$zip = $_POST["zip"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$addr3 = $_POST["addr3"];
$addr4 = $_POST["addr4"];
$type = $_POST["type"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$date = $_POST['date'] . $_POST['date2'] . $_POST['date3'] . $_POST['date4'] . $_POST['date4'] . $_POST['date6'] . $_POST['date7'] .$_POST['date8'];
if (isset($_POST['select']) && is_array($_POST['select'])) {
  $select = implode("、", $_POST["select"]);
};
$textarea  = $_POST["textarea"];
}

if (isset($_POST["btn_submit"])) {

   // 送信ボタンが押された時に動作する処理をここに記述する

  // 変数とタイムゾーンを初期化
  $header = null;
  $auto_reply_subject = null;
  $auto_reply_text = null;
  $admin_reply_subject = null;
  $admin_reply_text = null;
  date_default_timezone_set('Asia/Tokyo');

  // 件名を設定
  $auto_reply_subject = 'お問い合わせありがとうございます。';

  // 本文を設定
  $auto_reply_text = "下記の内容でお問い合わせを受け付けました。\n\n";
  $auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
  $auto_reply_text .= "氏名：" . $_POST['name1'] . "\n";
  $auto_reply_text .= "ひらがな" . $_POST['name2'] . "\n";
  $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
  $auto_reply_text .= "ご希望コース：" . $_POST['course'] . "\n\n";
  $auto_reply_text .= "ご希望プラン：" . $_POST['plan'] . "\n\n";
  $auto_reply_text .= "郵便番号：" . $_POST['zip'] . "\n\n";
  $auto_reply_text .= "都道府県・市区町村：" . $_POST['addr1'] . "\n\n";
  $auto_reply_text .= "町名：" . $_POST['addr2']  . "\n\n";
  $auto_reply_text .= "番地など：" . $_POST['addr3'] . "\n\n";
  $auto_reply_text .= "建物名・部屋番号：" . $_POST['addr4']  . "\n\n";
  $auto_reply_text .= "建物の種類：" . $_POST['type'] . "\n\n";
  $auto_reply_text .= "電話番号：" . $_POST['tel']  . "\n\n";
  $auto_reply_text .= "ご案内希望曜日：" . $_POST['date'] .  $_POST['date2'] . $_POST['date3'] . $_POST['date4'] . $_POST['date4'] . $_POST['date6'] . $_POST['date7'] .$_POST['date8'] ."\n\n";
  $auto_reply_text .= "ご案内希望時間帯：" . $_POST['select']  . "\n\n";
  $auto_reply_text .= "ご質問等：" . $_POST['textarea']  . "\n\n";

  // 送信元のメールアドレスを変数fromEmailに格納
  $fromEmail = "haruto861012@gmail.com";

  // 送信元の名前を変数fromNameに格納
  $fromName = "BIGLOBE光";

  // ヘッダ情報を変数headerに格納する      
  $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

  // 自動返信メール送信
  mb_send_mail($_POST['email'], $auto_reply_subject, $auto_reply_text, $header);
	
	$to = 'haruto861012@gmail.com';
	
  // 運営側へ送るメールの件名
  $admin_reply_subject = "お問い合わせを受け付けました";

  // 本文を設定
  $admin_reply_text = "下記の内容でお問い合わせを受け付けました。\n\n";
 $admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
 $admin_reply_text .= "氏名：" . $_POST['name1'] . "\n";
 $admin_reply_text .= "ひらがな" . $_POST['name2'] . "\n";
 $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
 $admin_reply_text .= "ご希望コース：" . $_POST['course'] . "\n\n";
 $admin_reply_text .= "ご希望プラン：" . $_POST['plan'] . "\n\n";
 $admin_reply_text .= "郵便番号：" . $_POST['zip'] . "\n\n";
 $admin_reply_text .= "都道府県・市区町村：" . $_POST['addr1'] . "\n\n";
 $admin_reply_text .= "町名：" . $_POST['addr2']  . "\n\n";
 $admin_reply_text .= "番地など：" . $_POST['addr3'] . "\n\n";
 $admin_reply_text .= "建物名・部屋番号：" . $_POST['addr4']  . "\n\n";
 $admin_reply_text .= "建物の種類：" . $_POST['type'] . "\n\n";
 $admin_reply_text .= "電話番号：" . $_POST['tel']  . "\n\n";
 $admin_reply_text .= "ご案内希望曜日：" . $_POST['date'] .  $_POST['date2'] . $_POST['date3'] . $_POST['date4'] . $_POST['date4'] . $_POST['date6'] . $_POST['date7'] .$_POST['date8'] ."\n\n";
 $admin_reply_text .= "ご案内希望時間帯：" . $_POST['select']  . "\n\n";
 $admin_reply_text .= "ご質問等：" . $_POST['textarea']  . "\n\n";

  // 管理者へメール送信
  mb_send_mail($to, $admin_reply_subject, $admin_reply_text);
  

  header('Location:thanks/');
  exit;
}

?>

<?php get_header(); ?>

<div class="page__tittle__wrapper">
     <h2>お申し込み</h2>
</div>

<div class="page__contact--container">

  <h2 class="page__contact--tittle">お問い合わせフォーム</h2>

  <ol class="stepBar step3">
      <li class="step">STEP1　情報入力</li>
      <li class="step current">STEP2　入力内容の確認</li>
      <li class="step">STEP3　受付完了</li>
    </ol>

    <form action="" method="post">

      <h3 class="page__contact--tertiary">お申し込み情報</h3>

      <table class="contact__table confirm__table">
        <tr>
          <th class="required pt0 pt01">お申し込み区分</th>
          <td>
            <div class="checkbox-wrap">
              <label>
                <p><?php echo $course; ?></p>
              </label>
              <label>
                <p><?php echo $number; ?></p>
              </label>
              <label>
                <p><?php echo $change; ?></p>
              </label>
            </div>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">ご希望のプラン</th>
          <td class="check-border">
            <div class="form-group center">
              <label>
                <p><?php echo $plan; ?></p>
              </label>
            </div>
          </td>
        </tr>
      </table>

      <h3 class="page__contact--tertiary">お客様情報</h3>

      <table class="contact__table confirm__table">
        <tr class="centering">
          <th class="required">お名前</th>
          <td>
            <label>
              <p><?php echo $name1; ?></p>
            </label>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">ふりがな</th>
          <td class="check-border">
            <label>
              <p><?php echo $name2; ?></p>
            </label>
          </td>
        </tr>
        <tr class="centering">
          <th class="pt1">設置先のご住所</th>
          <td class="check-border check-input">
            <div class="table__input input__content">
              〒<label>
                <p><?php echo $zip; ?></p>
              </label>
            </div>
            <div class="table__input">
              <p>都道府県・市区町村</p>
              <label>
                <p><?php echo $addr1; ?></p>
              </label>
            </div>
            <div class="table__input">
              <p>町名</p>
              <label>
                <p><?php echo $addr2; ?></p>
              </label>
            </div>
            <div class="table__input">
              <p>番地など</p>
              <label>
                <p><?php echo $addr3; ?></p>
              </label>
            </div>
            <div class="table__input">
              <p>建物名・部屋番号</p>
              <label>
                <p><?php echo $addr4; ?></p>
              </label>
            </div>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">建物の種類</th>
          <td class="check-border">
            <div class="form-group center">
              <label>
                <p><?php echo $type; ?></p>
              </label>
            </div>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">電話番号</th>
          <td class="check-border check-left center">
            <label>
              <p><?php echo $tel; ?></p>
            </label>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">メールアドレス</th>
          <td class="check-border">
            <label>
              <p><?php echo $email; ?></p>
            </label>
          </td>
        </tr>
      </table>

      <h3 class="page__contact--tertiary">ご希望の連絡日時</h3>

      <table class="contact__table">
        <tr class="centering">
          <th class="required pt2">ご案内希望曜日</th>
          <td>
            <div class="form-group group-flex center">
              <label>
                <p><?php echo $date; ?></p>
				  <p><?php echo $date2; ?></p>
				  <p><?php echo $date3; ?></p>
				  <p><?php echo $date4; ?></p>
				  <p><?php echo $date5; ?></p>
				  <p><?php echo $date6; ?></p>
				  <p><?php echo $date8; ?></p>
				  <p><?php echo $date9; ?></p>
              </label>
            </div>
          </td>
        </tr>
        <tr class="centering">
          <th class="required">ご案内希望時間帯</th>
          <td class="check-border">
            <!-- <div class="cp_ipselect cp_sl01"> -->
            <div class="form-group center">
              <label>
                <p><?php echo $select; ?></p>
              </label>
            </div>
          </td>
        </tr>
      </table>

      <h3 class="page__contact--tertiary">ご質問等</h3>

      <table class="contact__table confirm__table">
        <tr>
          <th>ご質問等</th>
          <td>
            <label>
              <p><?php echo $textarea; ?></p>
            </label>
          </td>
        </tr>
      </table>

      <div class="input__btn">
        <input type="button" name="btn_back" class="btn_back" onclick="history.back()" value="戻る">
        <input type="submit" name="btn_submit"  class="btn_submit" value="送信">
        <input type="hidden" name="email" value="<?php echo $_POST['name1']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['name2']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['course']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['number']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['change']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['plan']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['zip']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['addr1']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['addr2']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['addr3']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['addr4']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['type']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['tel']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date2']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date3']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date4']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date5']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date6']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date7']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['date8']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['select']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['textarea']; ?>">
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