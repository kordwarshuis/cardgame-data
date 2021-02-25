<?php

// Configuration: location of images
$path = '/t/media/img/social-media/system/';// also change .env file
$domain = 'https://blockchainbird.org';
$defaultImage = 'https://blockchainbird.org/t/media/img/social-media/social-media-ssi2.jpg';

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
  $socialMediaImage = $domain.$path.$filename.'.jpg';
} else {
  $socialMediaImage = $defaultImage;
}
?>

<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset=utf-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <meta name=viewport content="width=device-width,initial-scale=1">
  <title>Bitcoin Misconceptions.</title>
  <meta name=viewport content="width=device-width,initial-scale=1">
  <meta name=description
    content="Misconceptions about bitcoin hold back progress. Found a misconception? Lookup-Copy-Paste our permanent links with curated expert info!">
  <meta name=keywords
    content="Misconceptions about bitcoin hold back progress. Found a misconception? Lookup-Copy-Paste our permanent links with curated expert info!">
  <meta name=author content="Blockchain Bird">
  <!-- <meta property=og:image itemprop=image content=https://blockchainbird.org/t/cardgametest/img-twitter/twitter.jpg> <meta -->
  <meta property=og:image itemprop=image content=<?php echo $socialMediaImage;?>>
  <meta property=og:image:width content=1200>
  <meta property=og:image:height content=628>
  <meta property=og:title content="Bitcoin Misconceptions.">
  <meta property=og:description
    content="Misconceptions about bitcoin hold back progress. Found a misconception? Lookup-Copy-Paste our permanent links with curated expert info!">
  <meta property=og:site_name content="Bitcoin Misconceptions.">
  <meta property=og:type content=website>
  <meta name=twitter:card content=summary_large_image>
  <meta name=twitter:title content="Bitcoin Misconceptions.">
  <meta name=twitter:description
    content="Misconceptions about bitcoin hold back progress. Found a misconception? Lookup-Copy-Paste our permanent links with curated expert info!">
  <meta name=twitter:image content=<?php echo $socialMediaImage;?>>
  <meta itemprop=image content=<?php echo $socialMediaImage;?>>
</head>

<body>
</body>

</html>