<?php

$recepient = "saneki2105@gmail.com"; /* request sending to the email address */
$sitename = "saneki26.000webhostapp.com"; /* site of the form */

$name = trim($_POST["name"]);
$tel = trim($_POST["tel"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \nТелефон: $tel \nE-mail: $email";

$pagetitle = "a new request from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
