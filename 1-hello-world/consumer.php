<?php

require_once __DIR__ . '/../bootstrap.php';

use PhpAmqpLib\Message\AMQPMessage;


echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$chan->basic_consume('hello', '', false, true, false, false, function(AMQPMessage $msg) {
    echo " [x] Received ", $msg->body, "\n";
});

while(count($chan->callbacks)) {
    $chan->wait();
}
