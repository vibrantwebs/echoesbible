import SidePane from '/js/home/side-pane.js';

class HomePage
{
    constructor() {

        this.sidePane = new SidePane();

        $('.echo').on('click', (e) => {
            let $target = $(e.target);
            let echoId = $target.data('echo-id');
            this.sidePane.open(echoId);
        });
    }
}

$(document).ready(() => {
    new HomePage();
});
