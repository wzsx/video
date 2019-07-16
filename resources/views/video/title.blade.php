<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>视频展示</title>
    <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.2/skins/default/aliplayer-min.css" />
    <script charset="utf-8" type="text/javascript" src="https://g.alicdn.com/de/prismplayer/2.8.2/aliplayer-min.js"></script>
    <script charset="utf-8" type="text/javascript" src="https://g.alicdn.com/de/prismplayer/2.8.2/aliplayer-h5-min.js"></script>
</head>
<body>
    <div style="border: 1px solid grey">
        <video src="{{env('CDN_HOST')}}/{{$v['path']}}" controls="controls"></video>
        {{--<video src="https://mtcl.oss-cn-hangzhou.aliyuncs.com/video/h.mp4" controls="controls"></video>--}}
    </div>
</body>
</html>