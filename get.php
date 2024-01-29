<?php
header("Content-Type: text/html");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo '<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta property="og:title" content="Frame">
        <meta property="og:image" content="{YOURIMAGEURL}">
        <meta property="fc:frame" content="vNext">
        <meta property="fc:frame:image" content="{YOURIMAGEURL}">
        <meta property="fc:frame:button:1" content="BUTTON">
        <meta property="fc:frame:post_url" content="{YOURPOSTURL}" }="">
    </head>
    <body></body></html>';
}
?>
