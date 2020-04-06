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
            background-color: #222;
        }
    </style>
    <script src="https://player.vimeo.com/api/player.js"></script>
</head>

<body>


    <p>Congratulations! You made it to Yuquot!</p>
    <p>Now you can watch immersive video of people fullfilling your orders!</p>
    <iframe class="vimeo" src="https://player.vimeo.com/video/285512274?color=ADC70C&title=0&byline=0&portrait=0" width="640" height="274" frameborder="0" allow="autoplay; fullscreen; gyroscope; accelerometer" allowfullscreen></iframe>



    <script>
        getVideos();

        function getVideos() {
            var players = document.querySelectorAll('.vimeo');
            if (players.length < 1) {
                return;
            }
            let index = 0;
            let vim = new Vimeo.Player(players[0]);
            vim.play().catch(error);
            // vim.on('error', error);
            // console.log(players);

        }

        function error (data) {
            // Function logic goes here
            console.log('error?',data);
        };
    </script>
</body>

</html>