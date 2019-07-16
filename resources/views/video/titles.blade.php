<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
    <title>Aliplayer Online Settings</title>
    <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.2/skins/default/aliplayer-min.css" />
    <script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.2/aliplayer-min.js"></script>
</head>
<body>
<div class="prism-player" id="player-con"></div>
<script>
    var player = new Aliplayer({
            "id": "player-con",
            // "source": " https://mtcl.oss-cn-hangzhou.aliyuncs.com/n.mp4",
            //"source": "rtmp://play.video.52xiuge.com/test/stream?auth_key=1562919437-0-0-ccd2555518f967fb99dadb6eaa59fd94",
            "source": "http://play.video.52xiuge.com/test/stream.flv?auth_key=1562919437-0-0-e5cf85e02461665a25c191e6c2fea1fb",
            "width": "100%",
            "height": "500px",
            "autoplay": true,
            //"isLive": true,
            "isLive": false,
            "cover": "mv",
            "rePlay": false,
            "playsinline": true,
            "preload": true,
            "controlBarVisibility": "hover",
            "useH5Prism": true
        }, function (player) {
            console.log("The player is created");
        }
    );
</script>
</body>