'use strict';

/**
 * Created by forest-sumo on 2017/03/27.
 */
$(document).ready(function () {

    var $btn_footerSignUp = $('#footer-btn-signup');
    var $footerNameInput = $('#footer-name');
    var $footerEmailInput = $('#footer-email-address');

    $btn_footerSignUp.click(function (e) {
        e.preventDefault();
        if ($footerNameInput.val().trim() == '' || $footerEmailInput.val().trim() == '') {
            swal({
                title: 'Oops...',
                text: 'Please enter your name <strong>and</strong> an email address.',
                html: true,
                type: 'error'
            });
        } else {
            $btn_footerSignUp.addClass('sending').prop('disabled', true);
            setTimeout(function () {
                $btn_footerSignUp.addClass('sent').removeClass('sending');
                swal("Subscribed", "You have successfully subscribed to our awesome newsletter! Thank you.", "success");
            }, 2000);
        }
    });
});
$(document).ready(function () {});
function initMap() {

    var puresport = { lat: -26.037155, lng: 27.9553322 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        scrollwheel: false,
        center: puresport
    });
    var marker = new google.maps.Marker({
        position: puresport,
        map: map
    });
}
$(function () {
    $('.match-height').matchHeight();
});
function initMap() {

    var puresport = { lat: -26.037155, lng: 27.9553322 };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        scrollwheel: false,
        center: puresport
    });
    var marker = new google.maps.Marker({
        position: puresport,
        map: map
    });
}
$(document).ready(function () {

    $('.package-gallery-slider').unslider({
        autoplay: true,
        delay: 3000,
        speed: 1000,
        arrows: false
    });
});
$(document).ready(function () {

    $('.resort-slider').unslider({
        autoplay: true,
        delay: 3000,
        speed: 1000,
        arrows: false
    });
});
$(document).ready(function () {

    $('.top-5-location-slider').unslider({
        autoplay: true,
        delay: 3000,
        speed: 1000,
        arrows: false
    });
});