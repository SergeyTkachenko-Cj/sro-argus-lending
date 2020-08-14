<?
    if(isset($_POST['name'])) {
        $name = '<p><b>Имя: </b>'.$_POST['name'].'</p>';
    }
    if(isset($_POST['phone'])) {
        $phone = '<p><b>Телефон: </b>'.$_POST['phone'].'</p>';
    }
    if(isset($_POST['email'])) {
        $email = '<p><b>Email: </b>'.$_POST['email'].'</p>';
    }
    if(isset($_POST['from'])) {
        $downloadedFile = '<p><b>Откуда: </b>'.$_POST['from'].'</p>';
    }
    if(isset($_POST['cpo'])) {
        $cpo = '<p style="margin-top: 2rem;"></p><p><b>Тип СРО: </b>' .$_POST['cpo'].'</p>';
    }
    if(isset($_POST['sum'])) {
        $sum = '<p><b>Сумма договора: </b>' .$_POST['sum'].'</p>';
    }
    if(isset($_POST['city'])) {
        $city = '<p><b>Ваш город: </b>' .$_POST['city'].'</p>';
    }
    if(isset($_POST['tenders'])) {
        $tenders = '<p><b>Участие в гостендерах: </b>' .$_POST['tenders'].'</p>';
    }
    if(isset($_POST['objects'])) {
        $objects = '<p><b>Ваши объекты: </b>' .$_POST['objects'].'</p>';
    }
    if(isset($_POST['specialist'])) {
        $specialist = '<p><b>Специалисты для НРС: </b>' .$_POST['specialist'].'</p>';
    }
    if(isset($_POST['limit'])) {
        $limit = '<p><b>Срок оформления допуска СРО: </b>' .$_POST['limit'].'</p>';
    }

    $to = '131@argus-eko.ru, margo@argus-eko.ru';
    $subject = 'Заявка с sro.argus-eko.ru';
    $message = '
                    <html>
                        <head>
                            <title>'.$subject.'</title>
                        </head>
                        <body>
                            '. $name .'
                            '. $phone .'
                            '. $email .'
                            '. $downloadedFile .'
                            '. $cpo .'
                            '. $sum .'
                            '. $city .'
                            '. $tenders .'
                            '. $objects .'
                            '. $specialist .'
                            '. $limit .'
                        </body>
                    </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Argus <argus@argous.group>\r\n";
    mail($to, $subject, $message, $headers);

?>