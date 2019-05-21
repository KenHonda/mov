/*//ローディング機能
$(function() {
  var h = $(window).height();
  $('#wrap').css('display','none');
  $('#loader-bg ,#loader').height(h).css('display','block');
});
//全ての読み込みが完了したら実行
$(document).ready(function () {
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
  $('#wrap').css('display', 'block');
});
*/
//メニュースライド機能
$(function(){
var menu = $('#slide_menu'), // スライドインするメニューを指定
    menuBtn = $('#button'), // メニューボタンを指定
    close = $('#close'),
    body = $(document.body),
    menuWidth = menu.outerWidth();

    // メニューボタンをクリックした時の動き
    menuBtn.on('click', function(){
    // body に open クラスを付与する
    body.toggleClass('open');
        if(body.hasClass('open')){
            // open クラスが body についていたらメニューをスライドインする
            body.animate({'left' : menuWidth }, 300);
            menu.animate({'left' : 0 }, 300);
            menuBtn.fadeOut();
        }
    });
    close.on('click', function(){
      body.removeClass('open');
      if(!body.hasClass('open')){
        menu.animate({'left' : -menuWidth }, 300);
        body.animate({'left' : 0 }, 300);
        menuBtn.fadeIn();
      }
    })
});
