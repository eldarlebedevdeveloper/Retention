<?  
 

        // $to = "eldarlebedev@gmail.com";
    
        // $subject = 'Контактная форма'; //Заголовок сообщения
        // $message = '
        //         <html>
        //             <head>
        //                 <title>'.$subject.'</title>
        //             </head>
        //             <body>
        //                 <p>Имя: '.$_GET['name'].'</p>
        //                 <p>Телефон: '.$_GET['contact'].'</p>
        //             </body>
        //         </html>'; //Текст сообщения
        // $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        // $headers .= "From: gainlab.tech\r\n"; //Наименование и почта отправителя
        // $headers .= "Reply-To: reply-general@gainlab.tec\r\n"; 
        // mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail



            // $message = 'Имя: ' . $_POST['name'] . ' ';
            // $message .= 'Контакт ( Email / telegram/ номер телефона): ' . $_POST['contact'] . ' ';

            // $mailTo = "eldarlebedev@gmail.com"; // Ваш e-mail
            // $subject = "Письмо с сайта"; // Тема сообщения



            // $headers= "MIME-Version: 1.0\r\n";
            // $headers .= "Content-type: text/html; charset=utf-8\r\n";
            // $headers .= "From: webmaster@gainlab.tech <webmaster@gainlab.tech>\r\n";


            // echo $headers;


            // // $headers .= "From: info@site.ru <info@site.ru>\r\n";
            // if(mail($mailTo, $subject, $message, $headers)) {
            //     echo "Спасибо, ".$_POST['name'].", мы свяжемся с вами в самое ближайшее время!"; 
            // } else {
            //     echo "Сообщение не отправлено!"; 
            // }


            // $to      = 'test-nazsougo3@srv1.mail-tester.com';
            // $subject = 'Hellloooo';
            // $message = 'Elldarrr';
            // $headers = 'From: webmaster@gainlab.tech' . "\r\n" .
            //             'Reply-To: webmaster@gainlab.tech' . "\r\n" .
            //             'X-Mailer: PHP/' . phpversion();

            // mail($to, $subject, $message, $headers)





            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $from = "webmaster@gainlab.tech";
            $to = "eldarlebedev@gmail.com";
            $subject = "Checking PHP mail";
            $message = "PHP mail works just fine";
            $headers = "From:" . $from;
            if(mail($to,$subject,$message, $headers)) {
                echo "The email message was sent.";
            } else {
                echo "The email message was not sent.";
            }




            // if(){
            //     echo "Спасибо,мы свяжемся с вами в самое ближайшее время!"; 
            // }else{
            //     echo "Сообщение не отправлено!"; 

            // }



            // // Сообщение
            // $message = "Line 1\r\nLine 2\r\nLine 3";

            // // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
            // $message = wordwrap($message, 70, "\r\n");

            // // Отправляем
            // mail('ededygoededy@gmail.com', 'My Subject', $message);


            // Pear Mail Library
            // require_once "Mail.php";

            // $from = '<from.gmail.com>';
            // $to = '<to.yahoo.com>';
            // $subject = 'Hi!';
            // $body = "Hi,\n\nHow are you?";

            // $headers = array(
            //     'From' => $from,
            //     'To' => $to,
            //     'Subject' => $subject
            // );

            // $smtp = Mail::factory('smtp', array(
            //         'host' => 'ssl://smtp.gmail.com',
            //         'port' => '465',
            //         'auth' => true,
            //         'username' => 'eldarlebedev@gmail.com',
            //         'password' => 'eldar2517'
            //     ));

            // $mail = $smtp->send($to, $headers, $body);

            // if (PEAR::isError($mail)) {
            //     echo('<p>' . $mail->getMessage() . '</p>');
            // } else {
            //     echo('<p>Message successfully sent!</p>');
            // }


            
?>