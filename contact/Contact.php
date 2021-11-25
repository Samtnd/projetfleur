<?php
var_dump($_POST);
$message = $_POST['message'];
$headers = 'FROM: CAAA.com';

mail('ebentunda12@gmail.com', 'Formulaire de contact', $message, $headers);
