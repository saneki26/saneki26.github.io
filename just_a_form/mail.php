<?php

$recepient = "saneki2105@gmail.com";
$sitename = "saneki26.000webhostapp.com";

$name = trim($_POST["name"]);
$tel = trim($_POST["tel"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \nТелефон: $tel \nE-mail: $email";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
