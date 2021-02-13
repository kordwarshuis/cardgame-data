<?php

// Configuration: location of images
$path = '/t/media/img/social-media/system/';// also change .env file
$domain = 'https://blockchainbird.com';
$defaultImage = 'https://blockchainbird.com/t/media/img/social-media/social-media-bitcoin8.jpg';
$shortText = 'Bitcoin misconceptions.';
$longText = 'Misconceptions about bitcoin hold back progress. Found a misconception? Lookup-Copy-Paste our permanent links with curated expert info!';

// if specific image exists (image with url as name) then use that image, else use default image
function check_file_exist($fullPath){
  if (file_exists($fullPath)) {
    return true;
  } else {
    return false;
  }
}

// take the parameter with name 'url'
$filename = $_GET['url'];

$socialMediaImage = "";
if (check_file_exist($_SERVER['DOCUMENT_ROOT'].$path.$filename.'.jpg')) {
  $socialMediaImage = $domain.$path.$filename.'-text.jpg';
  $twitterImage = $domain.$path.$filename.'.jpg';
} else {
  $socialMediaImage = $defaultImage;
  $twitterImage = $defaultImage;
}
?>


<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset=utf-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <meta name=viewport content="width=device-width,initial-scale=1">
  <title><?php echo $shortText;?></title>
  <meta name=viewport content="width=device-width,initial-scale=1">
  <meta name=description content="<?php echo $longText;?>">
  <meta name=keywords content="<?php echo $longText;?>">
  <meta name=author content="Blockchain Bird">
  <!-- <meta property=og:image itemprop=image content=https://blockchainbird.com/t/cardgametest/img-twitter/twitter.jpg> <meta -->
  <meta property=og:image itemprop=image content=<?php echo $socialMediaImage;?>>
  <meta property=og:image:width content=1200>
  <meta property=og:image:height content=628>
  <meta property=og:title content="<?php echo $shortText;?>">
  <meta property=og:description content="<?php echo $longText;?>">
  <meta property=og:site_name content="<?php echo $shortText;?>">
  <meta property=og:type content=website>
  <meta name=twitter:card content=summary_large_image>
  <meta name=twitter:title content="<?php echo $shortText;?>">
  <meta name=twitter:description content="<?php echo $longText;?>">
  <meta name=twitter:image content=<?php echo $twitterImage;?>>
  <meta itemprop=image content=<?php echo $twitterImage;?>>
</head>

<body>
</body>

</html>