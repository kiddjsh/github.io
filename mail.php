<?php

$name =$_POST["name"];
$email =$_POST["email"];
$subject =$_POST["subject"];
$message =$_POST["message"];

$mailheader = "From:".$name."<".$email.">\r\n";

$receipient = "development@kiddjsh.xyz";

mail ($receipient, $subject, $message, $mailheader) 
    or die("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    background-color: black;
    font-family: "Montserrat", sans-serif;

}

h1 {
    color: gray;
    font-size: 40px;
    font-weight: 600;
    text-align: center;
    margin-top: 100px;
}

p {
    color: gray;
    font-size: 20px;
    font-weight: 400;
    text-align: center;
    margin-top: 20px;
}

a {
    color: gray;
}

a:hover {
  color: greenyellow;
} 

</style>
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me via my github.io portfolio.
            <br><br>
            Your inquiry is important to me.
            <br>
            I will get back to you as soon as possible.
        </h1>
        <p class="back">To return to the github.io portfolio click 
            <a href="index.html" target="blank">homepage</a>
        </p>
    </div>
</body>
</html>

';
?>
