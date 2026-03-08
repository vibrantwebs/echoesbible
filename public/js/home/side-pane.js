export default class SidePane
{
    constructor() {

        this.isClosed = true;
        this.echoId = null;

        this.$sidePane = $('#sidePane');
        this.$echoGroupLeft = $('#echoGroupLeft');
        this.$echoGroupRight = $('#echoGroupRight');

        this.registerEventListeners();
    }

    registerEventListeners() {

        $('#closeSidePaneButton').on('click', () => {
            console.log("Close!");
            this.close();
        });
    }

    open(echoId) {
        this.isClosed = false;
        this.echoId = echoId;

        this.$sidePane.removeClass('displayNone');
        this.$echoGroupLeft.removeClass('col-sm-6');
        this.$echoGroupRight.removeClass('col-sm-6');
        this.$echoGroupLeft.addClass('col-sm-4');
        this.$echoGroupRight.addClass('col-sm-4');

        /**
         * Retrieve the hidden echo data and display it inside the card body.
         */
        let echoHtml = $(`#hiddenData`).find(`[data-echo-id=${echoId}]`).html();
        this.$sidePane.find('.card-body').html(echoHtml);
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
