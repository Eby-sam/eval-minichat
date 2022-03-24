<?php

use App\Entity\Message;
use App\Manager\MessageManager;

require __DIR__ . '/../../Config.php';
require __DIR__ . '/../../DB.php';
require __DIR__ . '/../../Model/Entity/Message.php';
require __DIR__ . '/../../Model/Entity/User.php';
require __DIR__ . '/../../Model/Manager/MessageManager.php';

session_start();

$payload = file_get_contents('php://input');
$payload = json_decode($payload);

if(empty($payload->content)) {
    http_response_code(400);
    exit;
}

if(!isset($_SESSION['user'])) {
    http_response_code(403);
    exit;
}

$content = trim(strip_tags($payload->content));

$message = new Message();
$message->setContent($content);
$message->setDateSent(new DateTime());
$message->setUser($_SESSION['user']);

$messageManager = new MessageManager();

$messageManager->newMessage($_SESSION['user']->getId(), $content);

http_response_code(200);
exit;