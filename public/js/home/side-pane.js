export default class SidePane
{
    constructor(test) {

        this.isClosed = true;
        this.echoId = null;

        this.$sidePane = $('#sidePane');
        this.$echoGroupLeft = $('#echoGroupLeft');
        this.$echoGroupRight = $('#echoGroupRight');
    }

    open(echoId) {
        this.isClosed = false;
        this.echoId = echoId;

        this.$sidePane.removeClass('displayNone');
        this.$echoGroupLeft.removeClass('col-sm-6');
        this.$echoGroupRight.removeClass('col-sm-6');
        this.$echoGroupLeft.addClass('col-sm-4');
        this.$echoGroupRight.addClass('col-sm-4');

        $.ajax({
            url: '/side-pane-data',
            type: 'POST',
            dataType: 'json',
            data: {
                echoId: echoId
            }
        })
            .done((data) => {
                let echoHtml = data.html;
                this.$sidePane.find('.card-body').html(echoHtml);
            })
            .fail((data) => {
                this.$sidePane.find('.card-body').html('');
            })
    }

    close() {
        this.isClosed = true;

        this.$sidePane.addClass('displayNone');
        this.$echoGroupLeft.removeClass('col-sm-4');
        this.$echoGroupRight.removeClass('col-sm-4');
        this.$echoGroupLeft.addClass('col-sm-6');
        this.$echoGroupRight.addClass('col-sm-6');

        this.echoId = null;
        this.$sidePane.find('card-body').html('');
    }
}
