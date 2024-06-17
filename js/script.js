jQuery(document).ready(function(){
    jQuery('#topBtn').click(function () { // #topBtnをクリックすると
        jQuery('body,html').animate({ // いちばん上にanimateする
        scrollTop: 0 // 戻る位置
        }, 400); // 戻るスピード
        return false;
    });
});

jQuery(function() {
    jQuery('.hamburger').click(function() {
        jQuery(this).toggleClass('js-active');
 
        if (jQuery(this).hasClass('js-active')) {
            jQuery('.globalMenuSp').addClass('js-active');
        } else {
            jQuery('.globalMenuSp').removeClass('js-active');
        }
    });
});

// スクロールフェードインポップアップver
var delaySpeed = 300;
jQuery(window).on("load scroll", function (){
	jQuery(".fade_trigger1 .element").each(function(i){
		var element = jQuery(".fade_trigger1").offset().top;
		var scroll = jQuery(window).scrollTop();
		var windowHeight = jQuery(window).height();
		if (scroll > element - windowHeight + windowHeight / 5){
			jQuery(this).delay(i*(delaySpeed)).queue(function(){
				jQuery(this).addClass("active");
			});
		}
	});
});

// スクロールフェードイン上からver
jQuery(function () {
    jQuery(window).scroll(function () {
      jQuery(".effect-fade").each(function () {
        var elemPos = jQuery(this).offset().top; /* 要素の位置を取得 */
        var scroll = jQuery(window).scrollTop(); /* スクロール位置を取得 */
        var windowHeight = jQuery(window).height(); /* 画面幅を取得（画面の下側に入ったときに動作させるため） */
        if (scroll > elemPos - windowHeight) {
          /* 要素位置までスクロール出来たときに動作する */
          jQuery(this).addClass("effect-scroll");
        }
      });
    });
    jQuery(window).scroll();
  });

  jQuery(function () {
    jQuery(window).scroll(function () {
      const windowHeight = jQuery(window).height();
      const scroll = jQuery(window).scrollTop();
  
      jQuery('.js-element').each(function () {
        const targetPosition = jQuery(this).offset().top;
        if (scroll > targetPosition - windowHeight + 100) {
          jQuery(this).addClass("is-fadein");
        }
      });
    });
  });

//お問い合わせ
//
	
  jQuery('.ajaxzip3').on('click', function(){
    AjaxZip3.zip2addr('zip','','addr1','addr2','addr3', 'addr4');

    //成功時に実行する処理
    AjaxZip3.onSuccess = function() {
        jQuery('.addr3').focus();
    };
    
    //失敗時に実行する処理
    AjaxZip3.onFailure = function() {
        alert('郵便番号に該当する住所が見つかりません');
    };
    
    return false;
});

//【追加】お問合せページのmultipleSelect
$(function () {
  $('#multiple-time').multipleSelect({
      placeholder: '',
      selectAll: false,
      formatSelectAll: function() {
          return 'すべてを選択';
      },
      formatAllSelected: function() {
          return '全て選択されています';
      }
  });
});



function checkfunction() {
    var check = document.getElementById("check");
    var hide = document.getElementById("hide__box");
    if (check.checked == true) {
        hide.style.display = "block";
    } 
    else {
       hide.style.display = "none";
    }
}

    //チェックボックスのバリデーション制御


//スライドショー

 jQuery('.slider').slick({
	infinite: true,
	centerMode: true,
	centerPadding: '',
	slidesToShow: 3,
	autoplay: true,
	autoplaySpeed: 2500,
	arrows: false,
	dots: false,
	responsive: [
		{
		  breakpoint: 896, 
		  settings: {
			slidesToShow: 1,
		  },
		},
	  ],
  });


  //同意規約にチェックを入れると送信できるようになる設定

document.addEventListener('DOMContentLoaded', function(event) {
  const targetButton = document.getElementById('submitButton');
  const triggerCheckbox = document.querySelector('input[name="Agree"]');

  targetButton.disabled = true;
  targetButton.classList.add('is-inactive');

  triggerCheckbox.addEventListener('change', function() {
    if (this.checked) {
      targetButton.disabled = false;
      targetButton.classList.remove('is-inactive');
      targetButton.classList.add('is-active');
    } else {
      targetButton.disabled = true;
      targetButton.classList.remove('is-active');
      targetButton.classList.add('is-inactive');
    }
  }, false);
}, false);


// $('select').multipleSelect({
//   width: 500,
//   formatSelectAll: function() {
//       return 'すべて';
//   },
//   formatAllSelected: function() {
//       return '全て選択されています';
//   }
// });


//各項目チェック

// var validate = function() {

// 	var flag = true;

// 	removeElementsByClass("error");
// 	removeClass("error-form");

// 	// お名前の入力をチェック
// 	if(document.form.name.value == ""){
// 		errorElement(document.form.name, "お名前が入力されていません");
// 		flag = false;
// 	}

// 	// ふりがなの入力をチェック
// 	if(document.form.furigana.value == ""){
// 		errorElement(document.form.furigana, "ふりがなが入力されていません");
//         	flag = false;
// 	} else {
// 		// ふりがなの形式をチェック
// 		if(!validateKana(document.form.furigana.value)){
// 			errorElement(document.form.furigana, "ひらがな以外の文字が入っています");
//             			flag = false;
// 		}
// 	}

// 	// メールアドレスの入力をチェック
// 	if(document.form.email.value == ""){
// 		errorElement(document.form.email, "メールアドレスが入力されていません");
// 		flag = false;
// 	} else {
// 		// メールアドレスの形式をチェック
// 		if(!validateMail(document.form.email.value)){
// 			errorElement(document.form.email, "メールアドレスが正しくありません");
// 			flag = false;
// 		}
// 	}

// 	// 電話番号の入力をチェック
// 	if(document.form.tel.value == ""){
// 		errorElement(document.form.tel, "電話番号が入力されていません");
// 		flag = false;
// 	} else {
// 		// 電話番号の形式をチェック
// 		if(!validateNumber(document.form.tel.value)){
// 			errorElement(document.form.tel, "半角数字のみを入力してください");
// 			flag = false;
// 		} else {
// 			if(!validateTel(document.form.tel.value)){
// 				errorElement(document.form.tel, "電話番号が正しくありません");
// 				flag = false;
// 			}
// 		}
// 	}

// 	// お問い合わせ項目の選択をチェック
// 	if(document.form.item.value == ""){
// 		errorElement(document.form.item, "お問い合わせ項目が選択されていません");
// 		flag = false;
// 	}

// 	// お問い合わせ内容の入力をチェック
// 	if(document.form.content.value == ""){
// 		errorElement(document.form.content, "お問い合わせ内容が入力されていません");
// 		flag = false;
// 	}

// 	return flag;
// }



// var errorElement = function(form, msg) {
// 	form.className = "error-form";
// 	var newElement = document.createElement("div");
// 	newElement.className = "error";
// 	var newText = document.createTextNode(msg);
// 	newElement.appendChild(newText);
// 	form.parentNode.insertBefore(newElement, form.nextSibling);
// }


// var removeElementsByClass = function(className){
// 	var elements = document.getElementsByClassName(className);
// 	while (elements.length > 0){ 
// 		elements[0].parentNode.removeChild(elements[0]);
// 	}
// }

// var removeClass = function(className){
// 	var elements = document.getElementsByClassName(className);
// 	while (elements.length > 0) {
// 		elements[0].className = "";
// 	}
// }

// var validateMail = function (val){
// 	if (val.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)==null) {
// 		return false;
// 	} else {
// 		return true;
// 	}
// }


// var validateNumber = function (val){
// 	if (val.match(/[^0-9]+/)) {
// 		return false;
// 	} else {
// 		return true;
// 	}
// }


// var validateTel = function (val){
// 	if (val.match(/^[0-9-]{6,13}$/) == null) {
// 		return false;
// 	} else {
// 		return true;
// 	}
// }


// var validateKana = function (val){
// 	if (val.match(/^[ぁ-ん]+$/) == null) {
// 		return false;
// 	} else {
// 		return true;
// 	}
// }