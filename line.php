 <?php


function send_LINE($msg){
 $access_token = 'XIGfeOi56hMqF/zd60jKU5wT6b8ADXtLGV6ulG9V5LOJbkk026aK48Ue2kmozKABc86eBm8pucaoN1FJBiZC11fnzHSK83kspjFmar8dwu1YbRbb4SyZ9LZDnumcTmUuJnQ1fqlkgsEM6O+5MqoAAwdB04t89/1O/w1cDnyilFU=';

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '1531979031',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n";
}

?>
