import GroupCommentary from '/js/home/group-commentary.js';
import SidePane from '/js/home/side-pane.js';
import TopNav from "/js/home/top-nav.js";
import SideNav from "/js/home/side-nav.js";

class HomePage
{
    constructor() {

        this.topNav = new TopNav();
        this.sideNav = new SideNav();
        this.sidePane = new SidePane();
        this.groupCommentary = new GroupCommentary();

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
