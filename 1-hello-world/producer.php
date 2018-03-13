<?php

require_once __DIR__ . '/../bootstrap.php';

use PhpAmqpLib\Message\AMQPMessage;


$chan->basic_publish(
    new AMQPMessage(
        'iyo que',
        ['delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT]
    ),
    '', 'hello'
);

echo " [x] Sent 'Hello World!'\n";

$chan->close();
$conn->close();
