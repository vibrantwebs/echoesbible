class CreateAccountPage
{
    constructor() {

        $('#createAccountButton').on('click', () => {

            let firstName = $('#firstName').val();
            let lastName = $('#lastName').val();
            let email = $('#email').val();
            let password = $('#password').val();
            let confirmPassword = $('#confirmPassword').val();

            $.ajax({
                url: '/create-account',
                type: 'POST',
                dataType: 'json',
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    email: email,
                    password: password,
                    confirmPassword: confirmPassword
                }
            })
                .done((data) => {
                    window.location.href = '/account';
                })
                .fail((data) => {
                    console.log("Create account failed");
                    console.log(data);
                });
        });
    }
}

$(document).ready(() => {
    new CreateAccountPage();
});
