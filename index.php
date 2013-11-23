<?php

require_once __DIR__.'/vendor/autoload.php';

use KeenIO\Client\KeenIOClient;

$projectId  = "INSERT PROJECT ID";
$writeKey   = "INSERT WRITE KEY";
$readKey    = "INSERT READ KEY";

$client = KeenIOClient::factory( [ "projectId"  => $projectId, 'writeKey' => $writeKey, 'readKey' => $readKey ]);

$dt = new \DateTime("2013-11-22 00:00:00");

$collection = 'test_timestamp';
$event = [
   'foo'    => 'bar',
   'keen'   => [
      'timestamp' => $dt->format('c')
   ]
];

echo " -- Add Event to Keen IO\n";
$request = $client->addEvent( $collection, $event );
print_r( [ 'collection' => $collection, 'event' => $event, 'request' => $request ] );

echo "\n\n -- Get last Event from Keen IO\n";
$doc = $client->extraction( $collection, [ 'latest' => 1 ]);
print_r( [ 'collection' => $collection, 'document' => $doc['result'][0] ] );
