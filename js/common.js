jQuery('.news-front').slick({
  // centerMode: true,
  // centerPadding: '30%',
  // autoplay: true,
  // autoplayspeed: 0,
  // speed: 1000,
  // arrows: false,

  autoplay: true, //自動でスクロール
    autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
    speed: 6000, //スライドが流れる速度を設定
    cssEase: "linear", //スライドの流れ方を等速に設定
    slidesToShow: 2, //表示するスライドの数
    swipe: true, // 操作による切り替えはさせない
    arrows: false, //矢印非表示
    pauseOnFocus: true, //スライダーをフォーカスした時にスライドを停止させるか
    pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
    centerMode: true,
    centerPadding: '10%',
    dots: false,
  responsive: [
    {
        breakpoint: 769,
        settings: {
            autoplaySpeed: 2000, //自動再生のスライド切り替えまでの時間を設定
            speed: 100, //スライドが流れる速度を設定
            centerMode: true,
            slidesToShow: 1, //表示するスライドの数
            centerMode: true,
            centerPadding: '15%',
            dots: false,
        }
    }
]
});




// jQuery(function(){
//     jQuery("#news").slick({
      
//       centerMode: true,
//       centerPadding: '15%',
//       autoplay: true,
//       autoplayspeed: 0,
//       speed: 1000,
//       arrows: false, // スライドの左右の矢印ボタン
//       asNavFor: "#sub" ,// スライダを他のスライダのナビゲーションに設定する（class名またはID名）
//       cssEase: "linear", //スライドの流れ方を等速に設定
//     slidesToShow: 1, //表示するスライドの数
//     swipe: true, // 操作による切り替えはさせない
//     arrows: true, //矢印非表示
//     pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
//     pauseOnHover: true, //スライダーにマウスホバーした時にスライドを停止させるか
    

//     });
// });

//  jQuery(function() {
//     jQuery("#main").slick({
//       autoplay: true,//自動でスライドさせる
//       autoplaySpeed: 0,//次の画像に切り替えるまでの時間 今回の場合は0
//       speed: 8000,//画像が切り替わるまでの時間 今回の場合は難病で1枚分動くか
//       cssEase: 'linear',//動きの種類は等速に
//       arrows:false,//左右に出る矢印を非表示
//       swipe: false,//スワイプ禁止
//       pauseOnFocus: false,//フォーカスが合っても止めない
//       pauseOnHover: false,//hoverしても止めない
//       centerMode: true,//一枚目を中心に表示させる
//       initialSlide: 3,//最初に表示させる要素の番号を指定
//       variableWidth: true,//スライドの要素の幅をcssで設定できるようにする 
//     });

  // jQuery(function(){
  //   jQuery("#slick3").slick({
  //     arrows: false,
  //     autoplay: false,
  //     slidesToShow: 3, //表示するスライドの数
  //     autoplaySpeed: 0,
  //     speed: 7000,
  //     cssEase: "linear",
  //     pauseOnHover: true
  //   });
  // });

  // jQuery(document).on('ready', function() {
  //   jQuery("#slick3").slick({
  //     dots: false, // ドットインジケーターの表示
  //     vertical: true, // 垂直スライドモード
  //     verticalSwiping: true, // 垂直のスワイプを有効
  //     centerMode: true, // スライドを中心に表示して部分的に前後のスライドが見えるように設定（奇数番号のスライドに使用）
  //     slidesToShow: 3, // 表示するスライド数を設定
  //     cssEase: "linear",
  //     autoplaySpeed: 0,
  //     autoplay: true,
  //     speed: 7000,//画像が切り替わるまでの時間 今回の場合は難病で1枚分動くか
  //     pauseOnHover: false,//hoverしても止めない
  //     pauseOnFocus: false,//フォーカスが合っても止めない
  //     arrows: false,
  //   });
  // });

  //buttn
  jQuery(window).scroll(function (){
    jQuery('.button').each(function(){
        var elemPos = $(this).offset().top-50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeUp');
        }else{
        $(this).removeClass('fadeUp');
        }    });
});

jQuery(window).scroll(function (){
  jQuery('.parramota-logo').each(function(){
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
      $(this).addClass('parramota-logo-scroll');
      }else{
      $(this).removeClass('parramota-logo-scroll');
      }    });
});

jQuery('.head-logo-after').on ('animationend', function () {
  jQuery('.head-logo-after').removeClass("head-logo-before");
})



jQuery(window).scroll(function (){
  jQuery('.head-logo').each(function(){
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
      $(this).addClass('head-logo-small');
      }else{
      $(this).removeClass('head-logo-small');
      }    });
});

jQuery('.zoomInClickTrigger').on('click', function() {
  $(this).addClass('zoomIn');
})