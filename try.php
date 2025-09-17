<?php
require 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Mark Angel',
    'mail_from' => 'veyronmarcell2@gmail.com',
    'name_to' => 'Peter Mondo',
    'mail_to' => 'petermondo254@gmail.com',
    'subject' => 'Hello From ICS A',
    'body' => 'Welcome to ICS A! <br> This is a new Month. Let\'s work together.'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);