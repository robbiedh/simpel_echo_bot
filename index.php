<?php 

foreach ($data['events'] as $event)
 {
  $userMessage = $event['message']['text'];
  if(strtolower($userMessage) == 'halo')
  {
   $message = "Halo juga";
    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
   $result = $bot->replyMessage($event['replyToken'], $textMessageBuilder);
   return $result->getHTTPStatus() . ' ' . $result->getRawBody();
  
  }
 }

?>