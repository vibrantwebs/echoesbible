import {Confirm} from "/js/common/dialog.js";

class AccountPage
{
    constructor() {

        $('#logoutButton').on('click', () => {

            let confirmLogout = new Confirm({
                bodyHtml: "Are you sure you want to logout?",
                confirmCallback: () => {

                    $.ajax({
                        url: '/logout',
                        type: 'POST',
                        dataType: 'json'
                    })
                        .done((data) => {
                            console.log("success");
                            console.log(data);

                            window.location.href = '/';
                        })
                        .fail((data) => {
                            console.log("fail");
                            console.log(data);
                        });
                }
            })
        });
    }
}

$(document).ready(() => {
    new AccountPage();
});
