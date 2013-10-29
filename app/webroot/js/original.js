
// jsグローバル変数
var focus_tmp;


jQuery(function($){

    // テキストボックスフォーカスセット時に現在のフォーカス場所を記憶
    $('input').focus(function(){
        focus_tmp = $(this).attr("id");
        console.log(focus_tmp);
    });

    // 入力制限セット
    $('.only-num').onlyNumeric();

});