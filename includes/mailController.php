<?php

function isFieldEmpty($name, $email)
{
    if (empty($name) || empty($email)) {
        return true;
    }
    return false;
}

function isEmailValid($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function submitForm($senderEmail, $senderName)
{
    return sendMail($senderEmail, $senderName);
}