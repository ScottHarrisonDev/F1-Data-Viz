$(document).ready(function () {
    $('li').on('mouseenter', function () {
        var img = $(this).data('img');
        $('.highlight-wrapper img').attr('src', img);
    });
});