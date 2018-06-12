<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2',
            'username' => 'root',
            'password' => 'matkhau',
            'charset' => 'utf8',
        ],

       'mail' => [
        'class' => 'yii\swiftmailer\Mailer',
        'viewPath' => '@frontend/views/mail',
        'useFileTransport' => false,//set this property to false to send mails to real email addresses
        //comment the following array to send mail using php's mail function
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'my.notifion@gmail.com',
            'password' => 'vinhqwert',
            'port' => '587',
            'encryption' => 'tls',
                        ],
    ],
    


    //    'mailer' => [
    //     'class' => 'yii\swiftmailer\Mailer',
    //     'transport'=>[
    //         'class'=>'Swift_SmtpTransport',
    //         'host'=>'smtp.gmail.com',
    //         'username'=>'my.notifion@gmail.com',
    //         'password'=>'vinhqwert',
    //         'port' => '587' ,
    //         'encryption' => 'tls' ,
    //     ],
    //     'viewPath' => '@common/mail',
    //     // send all mails to a file by default. You have to set
    //     // 'useFileTransport' to false and configure a transport
    //     // for the mailer to send real emails.
    //     //'useFileTransport' => false,
    // ],
    ],
];
