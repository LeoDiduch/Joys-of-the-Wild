<?php

$formErrors = [
    'errUserName' => '',
    'errUserEmail' => '',
    'errEmailForm' => '',
    'errUserPassword' => '',
    'errUserPasswordConfirm' => ''
];

$validationForm = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];
    $userPasswordConfirm = $_POST["userPasswordConfirm"];


    if (empty($userName)) {
        $formErrors['errUserName'] = "Username is required";
    } else {
        $userName = test_input($userName);
    }

    if (empty($userEmail)) {
        $formErrors['errUserEmail'] = "Email is required";
    }
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $formErrors['errEmailForm'] = "Invalid email format";
    } else {
        $userEmail = test_input($userEmail);
    }

    if (empty($userPassword)) {
        $formErrors['errUserPassword'] = "Please enter a password";
    } else {
        $userPassword = test_input($userPassword);
    }

    switch ($userPasswordConfirm) {
        case null :
            $formErrors['errUserPasswordConfirm'] = 'Please confirm your password';
            break;
        case $userPasswordConfirm != $userPassword :
            $formErrors['errUserPasswordConfirm'] = 'Password confirmation is not valid';
            break;
        default :
            $userPasswordConfirm = test_input($userPasswordConfirm);
            break;
    }

    if( '' == $formErrors['errUserName'] && '' == $formErrors['errUserEmail'] && '' == $formErrors['errUserPassword'] && '' == $formErrors['errUserPasswordConfirm']){
        $validationForm = true;
    }

    if($validationForm == true){
        //We insert all the values in the database
        $insertForm = 'INSERT INTO user_infos (user_name, user_email, user_password) VALUES (:user_name, :user_email, :user_password)';
        $pushMe = $dbh->prepare($insertForm);
        //And we execute the program
        $pushMe->execute([
            ':user_name' => $userName,
            ':user_email' => $userEmail,
            ':user_password' => $userPassword
        ]);

        header("location: profil.php");
        exit();
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

