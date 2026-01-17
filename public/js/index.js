$(document).ready(function () {

    $('#sidebarNav').on('click', (e) => {
        $('#sidebarNav .nav-link').removeClass('active');
        $(e.target).addClass('active');
    });

    $('#expandCommentBtn').on('click', (e) => {

        let isExpanded = !( $('#expandableComment').hasClass('displayNone') );

        console.log(isExpanded);

        if (isExpanded) {
            $('#expandableComment').addClass('displayNone');
        } else {
            $('#expandableComment').removeClass('displayNone');
        }
    });

    let $sidePane = $('#sidePane');
    let $echoGroup = $('#echoGroup');

    let sidePaneIsOpen = false;
    $('.echoOne').on('click', () => {
        if (sidePaneIsOpen) {

            // open? Close it.
            $sidePane.addClass('displayNone');
            $echoGroup.removeClass('col-sm-6');
            $echoGroup.addClass('col-sm-12');

        } else {

            // closed? Open it.
            $sidePane.removeClass('displayNone');
            $echoGroup.addClass('col-sm-6');
            $echoGroup.removeClass('col-sm-12');
        }

        sidePaneIsOpen = !sidePaneIsOpen;
    });
});