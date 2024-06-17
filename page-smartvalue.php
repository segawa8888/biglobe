<?php get_header(); ?>

<style>
    .color__red {
        color: #FF1D00;
    }

    .page__table span {
        font: inherit;
        opacity: inherit;
    }
    .page__table th,
    .page__table td {
        padding: 0;
        text-align: left;
        width: 50%;
    } 

    .td__span {
        padding: 2rem !important;
    }

    .fbf {
        display: flex;
        align-items: stretch;

    }

    .page__table th.parent  {
        width: auto;
    }

    .page__table th.th1, .th1 {
        padding: 2rem;
    }

    .th1 {
        width: 60%;
        border-right: #B9B9B9 1px solid;
    }

    .th__span {
        display: flex;
    align-items: center;
    }

    .td1__span {
        padding: 2rem;
    }

    .th2 {
        width: 40%;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
    }

    .th4 {
        display: flex;
        align-items: center;
        width: 40%;
    }

    .th2__span,
    .td1__span {
        padding: 2rem;
        border-bottom: 1px solid #B9B9B9;
        width: 100%;
        height: 50%;
        display: flex;
        align-items: center;
    }

    .th2__span:last-of-type,
    .td1__span:last-of-type {
        border: none;
    }

    @media screen and (max-width: 660px) {
        tr {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .fbf {
            flex-direction: column;
        }
        .th2 {
            display: flex;
            flex-direction: row;
            width: 100%;
            justify-content: center;
        }
        .th2__span {
            width: 100%;
            text-align: center;
        }

        .th2__span, .td1__span {
            border-bottom: none;
            display: block;
            text-align: center;
            padding: 1.5rem;
            height: auto;

        }

        .th2__span:last-of-type,
        .td1__span:last-of-type {
            border-left: #B9B9B9 1px solid;
        }

        .th1, .td1 {
            width: 100%;
            text-align: center;
        }

        .th1 {
            align-items: center;
            justify-content: center;
        }

        .th1 {
            border-bottom: #B9B9B9 1px solid;
        }

        .th2__span:first-of-type {
            border-right: #B9B9B9 1px solid;
        }
        .page__table td {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page__table th, .page__table td {
            width: 100%;
            text-align: center;
        }

        .th4 {
            width: 100%;
        }

        .td__span {
            display: block;
        }

        .pc__block {
            display: block !important;
        }

    }

</style>

<div class="page__tittle__wrapper">
    <h2>auスマートバリュー</h2>
</div>

<div class="page__container">

<p class="page__table__text">
auスマートバリューとは、「ビッグローブ光」 (ネット＋電話) と、指定のデータ (パケット) 定額サービスで契約中の「auスマートフォン」などをセットでのご利用で、au携帯電話の
ご利用料金が割引きになるサービスです。(KDDI主催)
</p>
<h2 class="page__secondary__tittle">適用条件</h2>
<p class="page__table__text">
①②両方を満たす方<br>
①auスマホ/auタブレット(4G LTE)/auケータイで対象の料金プラン*に加入<br>
※機種によって、ご加入いただける料金プランが異なります。<br>
②「auひかり」や「対象のご自宅のインターネットサービス」(ネット＋電話)のお申込み
</p>
<p class="page__table__text">
※一部サービスは対象外となります。
</p>

<h2 class="page__secondary__tittle">スマートフォン（5G）／スマートフォン（4G LTE）</h2>
<table class="page__table">
    <tr>
        <th class="parent fbf">
            <div class="th1 th__span">
                ピタットプラン 5G<br>
                ピタットプラン 4G LTE<br>
                （新auピタットプランN）
            </div>
            <div class="th2">
                <div class="th2__span">
                    1GBまで
                </div>
                <div class="th2__span">
                    1GB超～7GBまで
                </div>
            </div>
        </th>
        <td>
            <div class="td1__span">割引対象外</div>
            <div class="td1__span">翌月から<span class="color__red">550円（税込）／月割引</span></div>
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
        使い放題MAX 5G ALL STAR パック<br>
        使い放題MAX 5G テレビパック<br>
        使い放題MAX 5G Netflixパック（P）<br>
        使い放題MAX 5G Netflixパック<br>
        使い放題MAX 5G DAZNパック<br>
        使い放題MAX 5G with Amazonプライム<br>
        使い放題MAX 5G<br>
        使い放題MAX 4G テレビパック<br>
        使い放題MAX 4G Netflixパック（P）<br>
        使い放題MAX 4G Netflixパック<br>
        使い放題MAX 4G DAZNパック<br>
        使い放題MAX 4G<br>
        ※受付終了プラン<br>
        データMAX 5G ALL STARパック<br>
        データMAX 5G テレビパック<br>
        データMAX 5G Netflixパック（P）<br>
        データMAX 5G Netflixパック<br>
        データMAX 5G with Amazonプライム<br>
        データMAX 5G<br>
        データMAX 4G LTE テレビパック<br>
        データMAX 4G LTE Netflixパック<br>
        データMAX 4G LTE<br>
        auデータMAXプラン Netflixパック<br>
        auデータMAXプランPro<br>
        auフラットプラン25 NetflixパックN<br>
        auフラットプラン20N<br>
        auフラットプラン7プラスN<br>
        auデータMAXプラン<br>
        auフラットプラン30<br>
        auフラットプラン25 Netflixパック<br>
        auフラットプラン20<br>
        auフラットプラン7プラス<br>
        auフラットプラン5（学割専用）<br>
        </th>
<td class="td__span">翌月から<span class="color__red">1,100円（税込）／月割引</span></td>
    </tr>
    <tr>
        <th class="parent fbf">
            <div class="th1 th__span2">
                ピタットプラン 5G<br>
                ピタットプラン 4G LTE<br>
            </div>
            <div class="th4">
                <div class="th2__span">
                    2GB超～20GBまで
                </div>
            </div>
        </th>
        <td class="td__span">
            翌月から<span class="color__red">550円（税込）／月割引</span>
        </td>
    </tr>
    <tr>
        <th class="parent fbf">
            <div class="th1 th__span">
                ※受付終了プラン<br>
                auピタットプランN（s）<br>
                auピタットプラン<br>
                auピタットプラン（s）
            </div>
            <div class="th2">
                <div class="th2__span">
                    2GBまで*1
                </div>
                <div class="th2__span">
                    2GB超～20GBまで
                </div>
            </div>
        </th>
        <td>
            <div class="td1__span">翌月から<span class="color__red">550円（税込）／月割引</span></div>
            <div class="td1__span">翌月から<span class="color__red">1,100円（税込）／月割引</span></div>
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            データ定額1
        </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">1,027円（税込）／月割引</span><br>
            3年目以降ずっと550円（税込）／月割引
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            U18データ定額20
        </th>
        <td class="td__span">
            翌月から<span class="color__red">1,551円（税込）／月割引</span>
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            データ定額5／8／20<br>
            データ定額5cp<br>
            LTEフラット<br>
            ISフラット<br>
            プランF（IS）シンプル
        </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">1,551円（税込）／月割引</span><br>
            3年目以降ずっと1,027円（税込）／月割引
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            データ定額10／13／30
        </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">2,200円（税込）／月割引</span><br>
            3年目以降ずっと1,027円（税込）／月割引
        </td>
    </tr>
</table>
<p class="page__table__text">
    ※4G LTE（au VoLTE対応）Android™スマートフォンの「料金プラン」「データ定額サービス」は名称に（V）がつきます。<br>
    *1 auピタットプラン（シンプル）の場合、1GBまで割引対象外となります
</p>

<h2 class="page__secondary__tittle">ケータイ（4G LTE）</h2>
<table class="page__table">
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            データ定額1（ケータイ）
        </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">1,027円（税込）／月割引</span><br>
            3年目以降ずっと550円（税込）／月割引
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
        ※受付終了プラン<br>
            データ定額2／3（ケータイ）
    </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">1,027円（税込）／月割引</span><br>
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            データ定額5／8（ケータイ）
        </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">1,551円（税込）／月割引</span><br>
            3年目以降ずっと1,027円（税込）／月割引
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            データ定額10／13（ケータイ）
        </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">2,200円（税込）／月割引</span><br>
            3年目以降ずっと1,027円（税込）／月割引
        </td>
    </tr>
</table>
<p class="page__table__text">
※「AQUOS K SHF31」はauスマートフォンのプランでご利用いただけます。
</p>

<h2 class="page__secondary__tittle">ケータイ（3G）</h2>
<table class="page__table">
    <tr>
        <th class="parent fbf">
            <div class="th1 th__span2">
                カケホ（3Gケータイ・データ付）
            </div>
            <div class="th4">
                <div class="th2__span">
                    1GBまで
                </div>
            </div>
        </th>
        <td class="td__span pc__block">
        翌月から<span class="color__red">1,027円（税込）／月割引</span>
        </td>
    </tr>
</table>

<h2 class="page__secondary__tittle">4G LTEタブレット／4G LTE対応PC</h2>
<table class="page__table">
    <tr>
        <th class="th1 th__span2">
            タブレットプラン20<br>
            ※受付終了プラン<br>
            LTEダブル定額 for Tab／Tab（i）（「ゼロスタート定額」）
        </th>
        <td class="td__span pc__block">
            翌月から<span class="color__red">1,027円（税込）／月割引</span>
        </td>
    </tr>
    <tr>
        <th class="th1 th__span2">
            ※受付終了プラン<br>
            LTEフラット for DATA（m）<br>
            LTEフラット for Tab／Tab（i）／Tab（L）
        </th>
        <td class="td__span pc__block">
            翌月から最大2年間<br>
            <span class="color__red">1,551円（税込）／月割引</span><br>
            3年目以降ずっと1,027円（税込）／月割引
        </td>
    </tr>
</table>

<h2 class="page__secondary__tittle">お申し込みについて</h2>
<p class="page__table__text">
    ご契約はご自宅のインターネットサービス1回線につき、au携帯電話(タブレット・PC含む)合計10回線(またはau ホームルーター 5G/au スマートポートなどの対象のルーターサービスの場合
    1回線につき、au携帯電話合計9回線)までです。<br>
    「auスマートバリュー」をご契約の回線が「家族割プラス」グループまたはUQ mobileの「自宅セット割」グループにも加入している場合、各グループにご加入のau/UQ携帯電話も回線数の
    カウントに含まれます。<br>
    ご自宅のインターネットサービス(au ホームルーター 5G/au スマートポートなどの対象のルーターサービス含む)とau携帯電話(タブレット・PC含む)のご契約者が同一姓・同一住所の場合、
    お申し込みできます。<br>
    50歳以上のご家族の場合は、対象のご自宅のインターネットサービス(「ネット＋電話」、「ネット＋テレビ」 、「テレビ＋電話」 )にご契約している住所と別住所でもお申し込みできます。<br>
    別姓やau携帯電話(タブレット・PC含む)が累計5回線以上の場合はご家族・同一住所であることの証明書が必要です(別住所で50歳以上はご家族の証明書のみ)。<br>
</p>

<h2 class="page__secondary__tittle">割引適用</h2>
<p class="page__table__text">
    auスマートバリューのお申し込み翌月以降から割引適用です。<br>
    スマホセット割ご加入の方がauスマートバリューを申し込みされた場合、自動的にauスマートバリューの割引に切り替わります。ただしauスマートバリュー適用前にスマホセット割を廃止し
    た場合、前月末をもってスマホセット割は終了となり、auスマートバリューは翌月からの割引です。<br>
    auスマートバリューご加入から2年間の割引(2,200円/月、1,551円/月、1,027円/月)適用は、対象のau携帯電話(タブレット・PC含む)1回線につき、auスマートバリューの割引を初めて適用した月を1ヶ月目としてカウントし、最大24ヶ月の割引をもって終了します。3年目以降は割引額が変更となります。<br>
    割引対象合計額が割引金額を下回る場合は、割引対象合計額を上限として割引します。<br>
    割引額は、月末時点で加入しているau携帯電話の料金プランやデータ定額サービスにより判定します。月末時点で条件を満たさない月は、割引は適用されません。<br>
    au携帯電話(タブレット・PC含む)を解約(一時休止、譲渡)をされた場合、割引の適用は解約(一時休止)月の当月、または譲渡月の前月をもって終了します。<br>
    ご自宅のインターネットサービスを「利用中」または「手続き中」の場合も、割引の適用となります。<br>
    インターネットサービスを解約された場合、割引の適用は解約のお申し込み月の前月をもって終了します。auスマートポート、au ホームルーター 5Gなど、対象のルーターサービスを解約された場合、割引の適用はお申し込み月の当月をもって終了します。<br>
    auスマートバリューお申し込み後、ご自宅のインターネットサービス (「ネット+電話」、「ネット＋テレビ」、「テレビ＋電話」)が6ヶ月経過後も開通されていない場合は、順次、割引を一
    時停止します。開通後、再び割引を再開します。<br>
    ご自宅のインターネットサービスを提供会社側都合で取消された場合は、取消月の翌月から3ヶ月目まで割引します。ただし、開通前にお客さま都合により取消された場合は、受付の前月利用分をもって割引を終了し、それまでの割引額をau携帯電話(タブレット・PC含む)側のご利用料金に合算し請求します。<br>弊社およびKDDI株式会社が実施する他の施策とは併用できない場合があります。<br>
</p>

<h2 class="page__secondary__tittle">その他注意事項</h2>
<p class="page__table__text">
    内容等が変更となる場合には事前にお知らせいたします。<br>
    別途、機種代金、通話・通信料、契約にかかる費用、ユニバーサルサービス料、電話リレーサービス料などがかかります。<br>
    掲載の内容は2022年7月3日現在の情報です。<br>
    Amazon、Amazon プライムおよびこれらに関連するすべての商標は、Amazon.com,Inc.またはその関連会社の商標です。
</p>

</div>

<?php get_footer(); ?>