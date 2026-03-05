export default class TopNav {

    constructor() {

        $.ajax({
            url: '/account-data',
            type: 'GET',
            dataType: 'json'
        })
            .done((data) => {

                if (data) {
                    $('#accountLinks').html(`
                        <a href="/account" class="echoesDarkBlue"><i class="bi bi-person-circle"></i> My Account</a>
                    `);
                }
            });
    }
}
