$(document).ready(function($) {
    $('.delete').on('click', function () {
        $('.notification').fadeOut("slow", function () {
            $('.flash-notification-container').remove();
        });
    });
});

