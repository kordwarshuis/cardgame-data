<?php 

    // copy content of Google Sheet to CSV
    // $data = file_get_contents("https://docs.google.com/spreadsheets/d/e/2PACX-1vS92RQKhq5cciwO67jnAU0oZGxfQxJBVKb6xX5WVKrHf_FaKkKcz55DEUXRB1QvjXu8JrIJl2ZnOGLH/pub?gid=1042086149&single=true&output=csv");
    $data = file_get_contents("https://docs.google.com/spreadsheets/d/e/2PACX-1vT-IvZB3lGA0DJf9gjmqWxQpA8tJKIWTsO3bRIbe7aci5bCW8RY6Oh_11Oex8hZJ2Ld7rPyNxsfMhn4/pub?output=csv");


    // echo $data;

    // $var_str = var_export($data, true);
    // file_put_contents('data.csv', $var_str);
    $var_str = var_export($data, true);
    file_put_contents('cards.test.csv', $var_str);


    // function writeContent($data) {
    //     $var_str = var_export($data, true);
    //     file_put_contents('data.csv', $var_str);
    // }

    // function sendMessage() {
        // the message
        // $msgKor = "Content geupdate.";
        // $msgHenk = "Content geupdate.";

        // use wordwrap() if lines are longer than 70 characters
        // $msgKor = wordwrap($msgKor,70);
        // $msgHenk = wordwrap($msgHenk,70);

        // send email
        // mail("kor@dwarshuis.com","Hoi Kor, dit is een automatisch gegenereerde e-mail om je te laten weten dat zojuist de inhoud van Google Sheets is geupdate naar de Card Game.\n\nBelangrijk: laat de publiceerpagina open staan.\n\nNa max tien minuten gaat de content live.",$msg);
        // mail("hvancann@blockchainworkspace.com","Hoi Henk, dit is een automatisch gegenereerde e-mail om je te laten weten dat zojuist de inhoud van Google Sheets is geupdate naar de Card Game.\n\nBelangrijk: laat de publiceerpagina open staan.\n\nNa max tien minuten gaat de content live.",$msg);
    // }

    // writeContent();
    // sendMessage();

    
    // sleep( 300 );

    // $var_str = var_export($data, true);
    // file_put_contents('data.csv', $var_str);

    // sleep( 300 );

    // $var_str = var_export($data, true);
    // file_put_contents('data.csv', $var_str);

    // sendMessage();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Publish Google Sheet</title>
    <style>
        body {
            font-size: 2em;
        }
    </style>
</head>
<body style="text-align: center;">
    <button style="font-size: 30px; margin-top: 1em;">Publish Test</button>
    <hr>
    
    <p>After changing content in the <a target="_blank" rel="noopener" href="https://docs.google.com/spreadsheets/d/1O31PItVsmfGBHpyESOfPkCwHu_Hh_qvcwDfqWiaiZCg/edit#gid=1042086149">Google Sheets</a> load this page or click on the Publish button.</p>
    <p>It may take a while before Google Sheets exports the changes (a few minutes). Only then publishing works.</p>
    <!-- <p>Copy Google Sheet to CSV.</p> -->
    <p style="margin-top: 1em;" id="message"></p>
    <script>
        document.querySelector("button").addEventListener("click", function(){
            window.location = window.location;
        }, false);

        document.querySelector("#message").innerHTML = "Published: " + new Date();

    </script>
</body>
</html>
