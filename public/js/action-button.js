$( document ).ready(function() {
    $('.eb-modal-close').click(function () {
        $('.eb-modal').hide();
        $('.eb-modal-scroller').css('position','unset');
        $('#eb-modal-bg').css('width','unset');
    })
    $('.more').click(function () {
        $(this).parents('.rel').find('.expand-content').css('height','unset');
        $(this).parents('.rel').find('.white-bg').css('display','none');
    })
});