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
});