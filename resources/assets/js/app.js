let mostPopularCircuits = {

    init: function () {
        $('.d-mpc--data li:not(:first-of-type)').on('mouseenter', function () {
            mostPopularCircuits.updateViz(this);
        });
        $('.d-mpc--data li:nth-child(2)').mouseenter();
    },

    updateViz: function (item) {
        const li = $(item);
        const img = li.data('img');
        const ref = li.data('ref');
        $('.d-mpc--viz img').attr('src', img);
        $('.d-mpc--details').addClass('hidden');
        $(`.d-mpc--details[data-ref="${ref}"]`).removeClass('hidden');
    }

}


$(document).ready(function () {

    mostPopularCircuits.init();

});