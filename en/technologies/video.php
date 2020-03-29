<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
    <title>Panolens.js panorama video</title>
    <style>
        html,
        body {
            margin: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #000;
        }

        a:link,
        a:visited {
            color: #bdc3c7;
        }

        .credit {
            position: absolute;
            text-align: center;
            width: 100%;
            padding: 20px 0;
            color: #fff;
        }
    </style>
</head>

<body>


    <script src="/libs/three.js"></script>
    <script src="/libs/panolens.js"></script>

    <script>
        var panorama, viewer;

        panorama = new PANOLENS.VideoPanorama('/videos/AllSkippersInvited.mp4', {
            autoplay: true
        });

        viewer = new PANOLENS.Viewer();
        viewer.add(panorama);
    </script>

</body>

</html>