<?php

// Configuration
$pathCardGame = '/t/btc/';
$content = 'https://blockchainbird.org/t/data/cards.csv';

// Configuration: location of images
$path = '/t/media/img/social-media/system/'; // also change .env file
$domain = 'https://blockchainbird.org';
$defaultImage = 'https://blockchainbird.org/t/media/img/social-media/social-media-bitcoin8.jpg';
$shortText = 'Bitcoin misconceptions.';
$longText = 'Misconceptions about bitcoin hold back progress. Found a misconception? Lookup-Copy-Paste our permanent links with curated expert info!';

// if specific image exists (image with url as name) then use that image, else use default image
function check_file_exist($fullPath)
{
    if (file_exists($fullPath)) {
        return true;
    } else {
        return false;
    }
}

// take the parameter with name 'url'
$filename = $_GET['url'];

$socialMediaImage = "";
if (check_file_exist($_SERVER['DOCUMENT_ROOT'] . $path . $filename . '.jpg')) {
    $socialMediaImage = $domain . $path . $filename . '-text.jpg';
    $twitterImage = $domain . $path . $filename . '.jpg';
} else {
    $socialMediaImage = $defaultImage;
    $twitterImage = $defaultImage;
}

// https://phpenthusiast.com/blog/parse-csv-with-php
// The nested array to hold all the arrays
$cardContent = [];

// Open file
if (($h = fopen("{$content}", "r")) !== false) {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== false) {
        // Each individual array is pushed into the nested array
        $cardContent[] = $data;
    }

    // Close the file
    fclose($h);
}
?>


<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset=utf-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <meta name=viewport content="width=device-width,initial-scale=1">
  <title><?php echo $shortText; ?></title>
  <meta name=viewport content="width=device-width,initial-scale=1">
  <meta name=description content="<?php echo $longText; ?>">
  <meta name=keywords content="<?php echo $longText; ?>">
  <meta name=author content="Blockchain Bird">
  <!-- <meta property=og:image itemprop=image content=https://blockchainbird.org/t/cardgametest/img-twitter/twitter.jpg> <meta -->
  <meta property=og:image itemprop=image content=<?php echo $socialMediaImage; ?>>
  <meta property=og:image:width content=1200>
  <meta property=og:image:height content=628>
  <meta property=og:title content="<?php echo $shortText; ?>">
  <meta property=og:description content="<?php echo $longText; ?>">
  <meta property=og:site_name content="<?php echo $shortText; ?>">
  <meta property=og:type content=website>
  <meta name=twitter:card content=summary_large_image>
  <meta name=twitter:title content="<?php echo $shortText; ?>">
  <meta name=twitter:description content="<?php echo $longText; ?>">
  <meta name=twitter:image content=<?php echo $twitterImage; ?>>
  <meta itemprop=image content=<?php echo $twitterImage; ?>>
</head>

<body>

<?php

// find where the Unique URL is
// select the first row
$row0 = $cardContent[0];
for ($i = 0; $i < count($row0); $i++) {
    if ($row0[$i] == 'Unique URL') {
        $arrayPositionUniqueURL = $i;
    }
}

foreach ($cardContent as $key => $value) {
    if (!is_array($value)) {
        echo $value . "\r\n";
    } else {
        foreach ($value as $key2 => $value2) {
            if ($value[$arrayPositionUniqueURL] == $filename && $value2 != '') {
                if ($row0[$key2] == 'Misconception') {
                    echo "<h1>" . $value2 . "</h1>\r\n";
                } else if (
                    $row0[$key2] != '\'Nr' &&
                    $row0[$key2] != 'Pick' &&
                    $row0[$key2] != 'Unique URL' &&
                    $row0[$key2] != 'Illustration' &&
                    $row0[$key2] != '#tag' &&
                    $row0[$key2] != 'Short Url' &&
                    $row0[$key2] != 'Stack' &&
                    $row0[$key2] != 'Related' &&
                    $row0[$key2] != 'I' &&
                    $row0[$key2] != 'K' &&
                    $row0[$key2] != 'H'
                ) {
                    echo "<p>" . $value2 . "</p>\r\n";
                }
            }
        }
    }
}
?>
</body>

</html>