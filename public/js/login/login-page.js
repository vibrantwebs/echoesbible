class LoginPage
{
    constructor() {

        $('#loginButton').on('click', () => {

            let email = $('#loginEmail').val();
            let password = $('#loginPassword').val();

            $.ajax({
                url: '/login',
                type: 'POST',
                dataType: 'json',
                data: {
                    email: email,
                    password: password
                }
            })
                .done((data) => {
                    console.log("Login successful");
                    console.log(data);

                    window.location.href = '/account';
                })
                .fail((data) => {
                    console.log("Login failed");
                    console.log(data);

                    $('#loginPassword').val('');
                });
        });
    }
}

$(document).ready(() => {
    new LoginPage();
});
