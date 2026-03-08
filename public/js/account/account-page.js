import {Confirm} from "/js/common/dialog.js";

class AccountPage
{
    constructor() {

        $('#editProfileButton').on('click', () => { console.log("editProfileButton"); });

        $('#myBookmarksButton').on('click', () => { console.log("myBookmarksButton"); });

        $('#settingsButton').on('click', () => { console.log("settingsButton"); });

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

        $('#backToAppButton').on('click', () => {
            window.location.href = '/';
        });

        $.ajax({
            url: '/account-data',
            type: 'GET',
            dataType: 'json'
        })
            .done((data) => {

                $('#firstName').val(data.firstName);
                $('#lastName').val(data.lastName);
                $('#email').val(data.email);

            })
            .fail((data) => {

                // todo: handle
                console.log("fail");
                console.log(data);
            });
    }
}

$(document).ready(() => {
    new AccountPage();
});
