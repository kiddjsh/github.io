<!--It takes 48hrs or longer, when a change to the php file is 
    made, for php services to automate the email sending process-->

<?php

$mail_to_send_to = "development@kiddjsh.xyz";
//$from_email = $_REQUEST['email'];
if(isset($_REQUEST['email'])){

    $from_email = $_REQUEST['email'];

}else{

    $from_email = $_GET['email'];

}
//$sendflag = $_REQUEST['sendflag'];
if(isset($_REQUEST['sendflag'])){

    $sendflag = $_REQUEST['sendflag'];

}else{

    $sendflag = $_GET['sendflag'];

}
//$name=$_REQUEST['name'];
if(isset($_REQUEST['name'])){

    $name = $_REQUEST['name'];

}else{

    $name = $_GET['name'];

}
//$email=$_REQUEST['email'];
if(isset($_REQUEST['email'])){

    $email = $_REQUEST['email'];

}else{

    $email = $_GET['email'];

}
$subject=$_REQUEST['subject'];
//if(isset($_REQUEST['subject'])){

    //$subject = $_REQUEST['subject'];

//}else{

    //$subject = $_GET['subject'];

//}
if ( $sendflag == "send" )
        {
                $email = $_REQUEST['email'] ;
                $message= "\r\n" . "Name: $name" . "\r\n"; //get recipient name in contact form
                $message = $message.$_REQUEST['message'] . "\r\n";//add message from the contact form to existing message(name of the client)
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email";
                $a = mail( $mail_to_send_to, $subject, $message, $headers );
                if ($a)
                {
                     print("Message was sent, you can send another one");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }

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
<br><br><br><br><br><br><br>
<footer>
    <p class="footer">
        <c>
        a production of
        <br>
        Shade Leaf Engineering & Consulting, LLC © 2018-2023
        <br>
        parent company of Spitfire Productions, LLC © 2014-2023 
        <br>
        All Rights Reserved.
        </c>
    </p>
</footer>
</html>

';
?>

