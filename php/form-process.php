<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required";
} else {
    $email = $_POST["email"];
}

// PHONE
$phone = $_POST["phone"];

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required";
} else {
    $message = $_POST["message"];
}


$EmailTo = "olechka.brajko@gmail.com";
$Subject = "ООО МирТехМаш. Обратная связь";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Что-то пошло не так :(";
    } else {
        echo $errorMSG;
    }
}

?>