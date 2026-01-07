$(document).ready(function () {

    $('#sidebarNav').on('click', (e) => {
        $('#sidebarNav .nav-link').removeClass('active');
        $(e.target).addClass('active');
    });

    $('#expandCommentBtn').on('click', (e) => {
console.log("Expand!!");
        let isExpanded = !( $('#expandableComment').hasClass('displayNone') );

        console.log(isExpanded);

        if (isExpanded) {
            $('#expandableComment').addClass('displayNone');
        } else {
            $('#expandableComment').removeClass('displayNone');
        }
    });
});