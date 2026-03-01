$(document).ready(function () {

    let $subExpander = $('.subExpander');
    $('.echoThree').on('click', () => {

        let isOpen = !( $subExpander.hasClass('displayNone') );
        if (isOpen) {
            $subExpander.addClass('displayNone');
        } else {
            $subExpander.removeClass('displayNone');
        }
    });
});