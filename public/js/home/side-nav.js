export default class SideNav {
    constructor() {
        this.exploreLink = $('#exploreLink');
        this.exploreSubMenu = $('#exploreSubMenu');

        this.init();
    }

    init() {
        this.exploreLink.on('click', () => {
            this.exploreSubMenu.slideToggle('fast');
        });
    }
}
