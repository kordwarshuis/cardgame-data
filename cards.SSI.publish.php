<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Publish Google Sheet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            /* font-size: 160%; */
        }
    </style>
</head>

<body style="text-align: center;">


    <?php
    function publish() {

        // echo "publish test";

    // copy content of Google Sheet to CSV
    
    // cards
    $cards = file_get_contents("https://docs.google.com/spreadsheets/d/e/2PACX-1vTpzhZCGID2ki0BbjmfVk0hbmIwdX3PoppyftMka-Vcjr6v5wSbNgs99X7je6UL6b8oBG919jxfmwD9/pub?gid=1042086149&single=true&output=csv");

    $var_str = var_export($cards, true);
    file_put_contents('cards.ssi.csv', $var_str);

    }
	
    if(isset($_POST['button1'])) { 
        publish();
    } 
	?>


    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="">
                    <h2>
                        Publish content to card game SSI
                    </h2>
                    <p>After changing content in the <a target="_blank" rel="noopener"
                            href="https://docs.google.com/spreadsheets/d/1O31PItVsmfGBHpyESOfPkCwHu_Hh_qvcwDfqWiaiZCg/edit#gid=1042086149">Google
                            Sheets</a> click on the Publish button.</p>

                    <form method="post" style="font-size: 2em;">
                        <input type="submit" name="button1" value="Publish now" />
                    </form>

                </div>
            </div>
        </div>
    </div>

</html>