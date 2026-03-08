export default class GroupCommentary
{
    constructor() {

        console.log("GroupCommentary");

        window.collapseShow = () => { $('#moreCommentaryBody').collapse('show'); };
        window.collapseHide = () => { $('#moreCommentaryBody').collapse('hide'); };

        this.isOpen = false;

        $('#moreCommentaryButton').on('click', () => {
            if (this.isOpen) {

                $('#moreCommentaryBody').collapse('hide');
                this.isOpen = false;
            } else {

                $('#moreCommentaryBody').collapse('show');
                this.isOpen = true;
            }
        });
    }
}
