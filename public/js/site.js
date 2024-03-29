﻿// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.
var next_click = document.querySelectorAll(".next_button");
var main_form = document.querySelectorAll(".signup-main");
var step_list = document.querySelectorAll(".signup-progress-bar li");
var num = document.querySelector(".step-number");
let formnumber = 0;

next_click.forEach(function (next_click_form) {
    next_click_form.addEventListener('click', function () {
        if (!validateform()) {
            return false
        }
        formnumber++;
        updateform();
        progress_forward();
        contentchange();
    });
});

var back_click = document.querySelectorAll(".back_button");
back_click.forEach(function (back_click_form) {
    back_click_form.addEventListener('click', function () {
        formnumber--;
        updateform();
        progress_backward();
        contentchange();
    });
});

var username = document.querySelector("#user_name");
var shownname = document.querySelector(".shown_name");


var submit_click = document.querySelectorAll(".submit_button");
submit_click.forEach(function (submit_click_form) {
    submit_click_form.addEventListener('click', function () {
        shownname.innerHTML = username.value;
        formnumber++;
        updateform();
    });
});

var heart = document.querySelector(".fa-heart");
heart.addEventListener('click', function () {
    heart.classList.toggle('heart');
});


var share = document.querySelector(".fa-share-alt");
share.addEventListener('click', function () {
    share.classList.toggle('share');
});



function updateform() {
    main_form.forEach(function (mainform_number) {
        mainform_number.classList.remove('signup-active');
    })
    main_form[formnumber].classList.add('signup-active');
}

function progress_forward() {
    // step_list.forEach(list => {

    // list.classList.remove('active');

    // });


    num.innerHTML = formnumber + 1;
    step_list[formnumber].classList.add('signup-active');
}

function progress_backward() {
    var form_num = formnumber + 1;
    step_list[form_num].classList.remove('signup-active');
    num.innerHTML = form_num;
}

var step_num_content = document.querySelectorAll(".step-number-content");

function contentchange() {
    step_num_content.forEach(function (content) {
        content.classList.remove('signup-active');
        content.classList.add('d-none');
    });
    step_num_content[formnumber].classList.add('signup-active');
}


function validateform() {
    validate = true;
    var validate_inputs = document.querySelectorAll(".signup-main.signup-active input");
    var validate_selects = document.querySelectorAll(".signup-main.signup-active select");

    validate_inputs.forEach(function (validate_input) {
        validate_input.classList.remove('warning');
        if (validate_input.hasAttribute('require')) {
            if (validate_input.value.length == 0) {
                validate = false;
                validate_input.classList.add('warning');
            }
        }
    });

    validate_selects?.forEach(function (vaildate_select) {
        vaildate_select.classList.remove('warning');
        if (vaildate_select.hasAttribute('require')) {
            if (vaildate_select.selectedIndex == 0) {
                validate = false;
                vaildate_select.classList.add('warning');
            }
        }
    });

    return validate;

}