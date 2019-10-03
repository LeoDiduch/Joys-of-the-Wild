<?php


$formErrors = [
    'username' => '',
    'email' => '',
    'current_password' => '',
    'new_password' => '',
    'new_password_verification' => '',
];


$savedChange = '';
$profilChange= '';


$validationPassword = false;
$validationProfile = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $new_password_verification = $_POST['new_password_verification'];

    if( empty( $username ) ){
        $formErrors['username'] = '<small>please enter your username</small>';
    } else {
        $formErrors['username'] = '';
    }

    switch($email){
        case null :
            $formErrors['email'] = '<small>please enter your email</small>';
            break;
        case !filter_var($email, FILTER_VALIDATE_EMAIL) :
            $formErrors['email'] = '<small>Please enter a valid email</small>';
            break;
        default :
            $formErrors['email'] = '';
            break;
    }

    if( '' == $formErrors['username'] && '' == $formErrors['email']) {
        $validationProfile = true;
    }
    if($validationProfile == true){
        $profilChange = '<div>your new profile has been saved</div>';
    }

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

    if( '' == $formErrors['current_password'] && '' == $formErrors['new_password'] && '' == $formErrors['new_password_verification']) {
        $validationForm = true;
    }
    if($validationForm == true){

        $savedChange = '<div>your password has been saved</div>';

    }

}