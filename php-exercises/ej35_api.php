<?php
  $url = 'https://api.dailymotion.com/videos?limit=10';
  $options = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));
  $response = file_get_contents($url, false, stream_context_create($options));
  $objResponse = json_decode($response);
  //print_r($objResponse);

?>

<ul>
  <?php foreach($objResponse->list as $video) { ?>
    <li><?php echo $video->title ?> - <?php echo $video->channel ?></li>
  <?php } ?>
</ul>