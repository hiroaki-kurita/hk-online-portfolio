// ドロップダウンリスト
$(function(){
    $('.dropdwn li').hover(function(){
        $("ul:not(:animated)", this).slideDown();
    }, function(){
        $("ul.dropdwn_menu",this).slideUp();
    });
});

// スライダー
$('.slider-image').slick({
    autoplay:true,
    autoplaySpeed:4000,
    dots:false,
    infinite:true,
    arrows: false,
   pauseOnFocus: false,
   pauseOnHover: false,
   pauseOnDotsHover: false
});

$('.slider-sub').slick({
    autoplay:true,
    autoplaySpeed:4000,
    dots:false,
    infinite:true,//無限にスライドする
    arrows: false,
    // スライドをが止まるのを防ぐ
   pauseOnFocus: false,
   pauseOnHover: false,
   pauseOnDotsHover: false
});