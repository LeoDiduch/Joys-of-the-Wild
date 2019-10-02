<?php


$formErrors = [
    'current_password' => '',
    'new_password' => '',
    'new_password_verification' => '',
];


$savedChange = '';


$validationForm = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $new_password_verification = $_POST['new_password_verification'];

    if( empty( $current_password ) ){
        $formErrors['current_password'] = '<small>please enter your current password</small>';
    } else {
        $formErrors['current_password'] = '';
    }

    if( empty( $new_password ) ){
        $formErrors['new_password'] = '<small>please enter your new password</small>';
    } else {
        $formErrors['new_password'] = '';
    }

    if( empty( $new_password_verification ) ){
        $formErrors['new_password_verification'] = '<small>please enter your new password verification</small>';
    } else {
        $formErrors['new_password_verification'] = '';
    }

    if( '' == $formErrors['current_password'] && '' == $formErrors['new_password'] && '' == $formErrors['new_password_verification']){
        $validationForm = true;

    }

}


