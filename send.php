<?php
        header("Access-Control-Allow-Origin: * ");
        $to = "Dj.pashke@yandex.ru";
        $subject = 'Заказ'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Адрес погрузки: '.$_POST['otkuda'].'</p>
                        <p>Адрес разгрузки: '.$_POST['kuda'].'</p>
                        <p>Дата и время: '.$_POST['datetime'].'</p>
                        <p>Грузчики: '.$_POST['gruz'].'</p>
                        <p>Пассажиры: '.$_POST['passaziri'].'</p>
                        <p>Машина: '.$_POST['cars'].'</p>
                        <p>Дополнительные услуги: '.$_POST['uslugi'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>Примечания к заказу:'.$_POST['dopolnenia'].'</p>                                   
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: Отправитель <from@example.com>\r\n"; 
        mail($to, $subject, $message, $headers); 
?>