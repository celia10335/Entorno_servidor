<?php
session_start();


unset($_SESSION);
session_destroy();


header('Location: https://localhost/php/Entorno_servidor/cookies/loginLogout/');
?>