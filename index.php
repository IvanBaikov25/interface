<?php

require_once 'Notification.php';
require_once 'AbstractNotification.php';
require_once 'EmailNotification.php';
require_once 'SmsNotification.php';

use baikov\work8\EmailNotification;
use baikov\work8\SmsNotification;

$emailNotification = new EmailNotification();
echo $emailNotification->send("Привет, это тестовое сообщение!"); 
echo "\nСтатус: " . $emailNotification->getStatus();
echo "\nТип: " . $emailNotification->getType();

echo "\n";

$smsNotification = new SmsNotification();
echo $smsNotification->send("Привет, это SMS сообщение!"); 
echo "\nСтатус: " . $smsNotification->getStatus(); 
echo "\nТип: " . $smsNotification->getType(); 
