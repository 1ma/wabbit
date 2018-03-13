<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;


$conn = new AMQPStreamConnection('rabbitmq', 5672, 'guest', 'guest');
$chan = $conn->channel();

$chan->queue_declare('hello', false, true, false, false);
