$(document).ready(function () {

    let $btn_footerSignUp = $('#footer-btn-signup');
    let $footerNameInput = $('#footer-name');
    let $footerEmailInput = $('#footer-email-address');

    $btn_footerSignUp.click(function (e) {
        e.preventDefault();
        if ($footerNameInput.val().trim() == '' || $footerEmailInput.val().trim() == '') {
            swal({
                title: 'Oops...',
                text:'Please enter your name <strong>and</strong> an email address.',
                html: true,
                type: 'error'
            });
        }
        else {
            $btn_footerSignUp.addClass('sending').prop('disabled', true);
            setTimeout(function () {
                $btn_footerSignUp.addClass('sent').removeClass('sending');
                swal("Subscribed", "You have successfully subscribed to our awesome newsletter! Thank you.", "success");
            }, 2000);
        }
    });
});