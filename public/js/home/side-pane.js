export default class SidePane
{
    constructor() {

        this.isClosed = true;
        this.echoId = null;

        this.$sidePane = $('#sidePane');
        this.$echoSubGroupLeft = $('.echoSubGroupLeft');
        // this.$echoSubGroupRight = $('.echoSubGroupRight');

        this.registerEventListeners();
    }

    registerEventListeners() {

        $('#closeSidePaneButton').on('click', () => {
            this.close();
        });
    }

    open(echoId) {

        /**
         * If they click the same echo twice, treat it like a toggle and close the pane.
         */
        if (echoId === this.echoId) {
            this.close();
            return;
        }

        this.echoId = echoId;

        this.$sidePane.removeClass('displayNone');
        this.$echoSubGroupLeft.removeClass('col-sm-6');
        //this.$echoSubGroupRight.removeClass('col-sm-6');
        this.$echoSubGroupLeft.addClass('col-sm-4');
        // this.$echoSubGroupRight.addClass('col-sm-4');

        /**
         * Retrieve the hidden echo data and display it inside the card body.
         */
        let echoHtml = $(`#hiddenData`).find(`[data-echo-id=${echoId}]`).html();
        this.$sidePane.find('.card-body').html(echoHtml);

        this.isClosed = false;
    }

    close() {

        this.$sidePane.addClass('displayNone');
        this.$echoSubGroupLeft.removeClass('col-sm-4');
        //this.$echoSubGroupRight.removeClass('col-sm-4');
        this.$echoSubGroupLeft.addClass('col-sm-6');
        this.$echoSubGroupRight.addClass('col-sm-6');

        this.echoId = null;
        this.$sidePane.find('card-body').html('');

        this.isClosed = true;
    }
}
