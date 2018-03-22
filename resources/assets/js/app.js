$(document).ready(function () {
    $('li').on('mouseenter', function () {
        const img = $(this).data('img');
        const ref = $(this).data('ref');
        $('.highlight-wrapper img').attr('src', img);
        $('.highlight-wrapper .highlight-details').addClass('hidden');
        $('.highlight-wrapper .highlight-details[data-ref="' + ref + '"]').removeClass('hidden');
    });
});