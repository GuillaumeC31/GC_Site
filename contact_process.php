<?php

require_once 'inc/config.php';

if (!empty($_POST)) {

  $errors = [];
  $post = [];

  foreach($_POST as $key => $value){
    $post[$key] = trim(strip_tags($value));
  }

  if(strlen($post['lastname']) < 2 || strlen($post['lastname']) > 30 || is_numeric($post['lastname'])){
    $errors[] = 'Votre prénom doit comporter entre 2 et 30 caractères et sans caractères numériques';
  }

  if(strlen($post['firstname']) < 2 || strlen($post['firstname']) > 30  || is_numeric($post['firstname'])){
    $errors[] = 'Votre nom de famille doit comporter entre 2 et 30 caractères et sans caractères numériques';
  }

  if(filter_var($post['email'], FILTER_VALIDATE_EMAIL) == false){
    $errors[] = 'Votre email est invalide';
  }

  if(strlen($post['subject']) < 2 || strlen($post['subject']) > 30){
    $errors[] = 'Votre sujet doit comporter entre 2 et 30 caractères';
  }

  if(strlen($post['message']) < 15 || strlen($post['message']) > 30){
    $errors[] = 'Votre message doit comporter 15 caractères minimum';
  }

  if(count($errors) > 0){
    $formValid = false;
  }
  else{
    $to = "guillaume.couget@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $firstname = $_REQUEST['firstname'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $subject = "Nouveau message de".$_REQUEST['lastname'].' '.$_REQUEST['firstname'];

    $logo = 'img/logo/logo.png';
    $link = '#';

    $message = "<!DOCTYPE html><html lang='fr'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $message .= "<table style='width: 100%;'>";
    $message .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $message .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
    $message .= "</td></tr></thead><tbody><tr>";
    $message .= "<td style='border:none;'><strong>Name:</strong> {$name} {$firstname}</td>";
    $message .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $message .= "</tr>";
    $message .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
    $message .= "<tr><td></td></tr>";
    $message .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
    $message .= "</tbody></table>";
    $message .= "</body></html>";

    $send = mail($to, $subject, $message, $headers);

    $formValid = true;

  } else {

    $formValid = false;

  }
}




?>
