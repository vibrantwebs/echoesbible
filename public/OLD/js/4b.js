$(document).ready(function () {

    $('#sidebarNav').on('click', (e) => {
        $('#sidebarNav .nav-link').removeClass('active');
        $(e.target).addClass('active');
    });

    $('#expandCommentBtn').on('click', (e) => {

        let isExpanded = !( $('#expandableComment').hasClass('displayNone') );

        if (isExpanded) {
            $('#expandableComment').addClass('displayNone');
        } else {
            $('#expandableComment').removeClass('displayNone');
        }
    });

    let $echoGroupLeft = $('#echoGroupLeft')
    let $echoGroupRight = $('#echoGroupRight')
    let $sideExpander = $('.sideExpander');

    $('.echoThree').on('click', () => {

        let isOpen = !( $sideExpander.hasClass('displayNone') );

        if (isOpen) {
            $sideExpander.addClass('displayNone');

            // reduce size of echo-cols
            $echoGroupLeft.removeClass('col-sm-4');
            $echoGroupRight.removeClass('col-sm-4');
            $echoGroupLeft.addClass('col-sm-6');
            $echoGroupRight.addClass('col-sm-6');

        } else {
            $sideExpander.removeClass('displayNone');

            // increase size of echo-cols
            $echoGroupLeft.removeClass('col-sm-6');
            $echoGroupRight.removeClass('col-sm-6');
            $echoGroupLeft.addClass('col-sm-4');
            $echoGroupRight.addClass('col-sm-4');
        }
    });
});