<?php
function checkFromSubmission()
{
    if (isset($_SESSION['loginErr'])) {
        $formErrors = $_SESSION['loginErr'];
        foreach ($formErrors as $data) {
            echo "<p class='fErr' >$data</p>";
        }
        unset($_SESSION['loginErr']);
    }

    if (isset($_SESSION['mailSubmitSuccess']) && $_SESSION['mailSubmitSuccess']) {
        echo'<p class="eSucc">your form submitted succesfully</p>';
        unset($_SESSION['mailSubmitSuccess']);
    }
}
?>