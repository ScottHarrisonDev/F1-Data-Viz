$(document).ready(function () {
    $('li').on('mouseenter', function () {
        const img = $(this).data('img');
        $('.highlight-wrapper img').attr('src', img);
    });
});