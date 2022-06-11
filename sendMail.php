<?php
    ob_start(); //Turn on output buffering
    
    if (!isset($_SESSION))  //Start session if it isn't exist
    {
        session_start();
    }

    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['text']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['text'])) //Redirect
    {
        $_POST = array();
        session_unset();

        header('Location: https://pixelprod.kz/');
        exit;
    }

    $userName = $_POST['name']; //Read data from form
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];

    $_POST = array(); //Clean post

    use PHPMailer\PHPMailer\PHPMailer; //Use PHPMailer, SMTP, Exception for function sendCode()
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    require 'phpmailer/src/Exception.php';

    /*
    //I found this code example for sending mail with PHPMailer (it's some different that i use), so i leave it here maybe it's help me in future
        
    function Send_Mail($to,$subject,$body)
    {
        require 'class.phpmailer.php';
        $from       = "from@yourwebsite.com";
        $mail       = new PHPMailer();
        $mail->IsSMTP(true);            // using SMTP protocol
        $mail->IsHTML(true);
        $mail->SMTPAuth   = true;                  // access SMTP authentication
        $mail->Host       = "tls://smtp.yourwebsite.com"; // SMTP host
        $mail->Port       =  465;                    // set SMTP port
        $mail->Username   = "SMTP_Username";  // SMTP username
        $mail->Password   = "SMTP_Password";  // SMTP password
        $mail->SetFrom($from, 'From Name');
        $mail->AddReplyTo($from,'From Name');
        $mail->Subject    = $subject;
        $mail->MsgHTML($body);
        $address = $to;
        $mail->AddAddress($address, $to);
        $mail->Send(); 
    }
    */

    $mail = new PHPMailer();
    $mail -> CharSet = 'UTF-8';
    $mail -> SetLanguage("ru", 'includes/phpMailer/language/');
    $mail -> IsHTML(true);
    $mail -> setFrom('sender@gmail.com', 'Sender Name');
    $mail -> AddReplyTo('sender@gmail.com', 'Sender Name');
    $mail -> Subject = 'Заявка на обратную связь';
    $body = "<h2></h2><strong> Имя: </strong>" . $userName . "<h2></h2><strong> Email: </strong><em>" . $email . "</em><h2></h2><strong> Номер телефона: </strong>" . $phone . "<h2></h2><strong> Текст сообщения: </strong>" . $text;
    $mail -> MsgHTML($body);

    $mail -> addAddress("recipient@gmail.com");

    if (!$mail -> send())
    {
        $i = 0;

        do //If we have troubles with sending mail we will try send mail 10 times before program die. Otherwise mail successfully send
        {
            $i++;
        }
        while ($mail -> send() || $i == 9);

        if ($i == 9)
        {
            $_SESSION['send'] = false;
        }
        else
        {
            $_SESSION['send'] = true;
        }
    }
    else
    {
        $_SESSION['send'] = true;
    }

    header('Location: https://pixelprod.kz/#section-contact'); //Redirect
    exit;

    ob_end_flush(); //Turn off output buffering
?>