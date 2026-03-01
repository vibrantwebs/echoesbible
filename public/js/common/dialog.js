import Util from "/js/common/util.js";

class Dialog
{
    constructor({
        title = '',
        bodyHtml = '',
        size = '', /** modal-sm, modal-lg */
        buttons = [{text: "Done", click: () => {this.close()}}],
        timeout = null,
        backdrop = 'static' /** true, false, 'static' */
    }) {

        Util.bindFunctionContext(this);

        let titleHtml = title ? `<h5 class="font-weight-bolder">${title}</h5><hr>` : '<br>';

        this.$dialog = $(`
            <div class="dialogDiv modal fade" tabindex="-1">
                <div class="modal-dialog ${size}">
                    <div class="modal-content" style="border: none;">
                        <div class="modal-body">
                            ${titleHtml}
                            ${bodyHtml}
                            <br>
                            <br>
                            <div class="dialogFooter">
                                <!-- buttons -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `);

        buttons.forEach((button) => {

            let $button = $(`
                    <button type="button" class="btn btn-primary btn-sm bg-gradient-primary" style="margin-bottom: 0; margin-right: 10px;">
                        ${button.text}
                    </button>
                `)
                .on('click', () => {

                    button.click();
                });

            this.$dialog.find('.dialogFooter').append($button);
        });

        this.bsMd = new bootstrap.Modal(this.$dialog, {
            keyboard: false,
            backdrop: backdrop
        });
        this.bsMd.show();

        if (timeout) {
            setTimeout(() => {
                this.close();
            }, timeout);
        }
    }

    close() {
        this.bsMd.hide();
        this.$dialog.remove();
    }

    get$() {
        return this.$dialog;
    }
}

class Confirm extends Dialog
{
    constructor(
        {
            title = 'Confirm',
            bodyHtml = 'Are you sure?',
            confirmCallback = () => {super.close();},
            cancelCallback = () => {super.close();},
            buttons = [
                {text: "Confirm", click: confirmCallback},
                {text: "Cancel", click: cancelCallback}
            ],
            size = 'modal-sm',
            timeout = false
        } = {}
    ) {

        super({title: title, bodyHtml: bodyHtml, buttons: buttons, size: size, timeout: timeout, confirmCallback: confirmCallback, cancelCallback: cancelCallback})
    }
}

class Popup extends Dialog
{
    constructor(
        {
            title = '',
            bodyHtml = 'Are you sure?',
            buttons = [{text: "Done", click: () => {this.close()}}],
            size = 'modal-sm',
            timeout = false,
            backdrop = true
        } = {}
    ) {

        super({title: title, bodyHtml: bodyHtml, buttons: buttons, size: size, timeout: timeout, backdrop: backdrop})
    }
}

export {
    Dialog,
    Confirm,
    Popup,
}
