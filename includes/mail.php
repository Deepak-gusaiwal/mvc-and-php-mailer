<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo '' . $name . '' . $email . '';

    require_once "./mailModel.php";
    require_once "./mailController.php";

    $errors = [];

    if (isFieldEmpty($name, $email)) {
        $errors['emptyFields'] = "All Fields are required";
    }
    if (isEmailValid($email)) {
        $errors['invalidEmail'] = "provide valid email ID";
    }

    require_once "./session.php";
    if ($errors) {
        $_SESSION['loginErr'] = $errors;
        header("Location: ../");
        die();
    }

    if (submitForm($email, $name)) {
        $_SESSION['mailSubmitSuccess'] = true;
        header("Location: ../index.php");
        die();
    }

} else {
    header("Location: ../");
    die();
}
?>