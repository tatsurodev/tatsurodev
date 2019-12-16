$('.portfolio-menu').click(function () {
    $('.collapse').collapse('hide')
})

$(document).on('click', '[data-toggle="lightbox"]', function (e) {
    e.preventDefault()
    $(this).ekkoLightbox()
})

// 関数定義はlaravel mixが即時関数にしてしまうのでアクセスできなくなるが、globalに登録するとおｋ
// https://stackoverflow.com/questions/45444537/javascript-function-in-laravel-not-defined
window.changeLocale = function () {
    let url = document.locale.language.value
    location.href = url
}
