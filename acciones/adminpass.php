<?php
if (isset($_POST["btn-div-login-form-inicio-sesion"])) {
    if ($_POST["username-login"] == "admin" && $_POST["userpass-login"] == "12345") {
        header('location: admin.php');
    }
}
