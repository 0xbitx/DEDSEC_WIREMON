<?php
header("Content-Type: text/html; charset=utf-8");
$gifPath = 'rickroll.gif';
$wavPath = 'rickroll.wav';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            font-family: Arial, sans-serif;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fullscreen-button {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            color: black;
            font-size: 17px;
            cursor: pointer;
            z-index: 10;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: none;
        }

        .gif-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        audio {
            display: none;
        }
    </style>
</head>
<body>
    <div class="fullscreen-button" id="fullscreenButton">
        <strong>Tap the screen to continue.</strong>
    </div>
    <div class="background" id="background">
        <audio id="audio" loop>
            <source src="<?php echo htmlspecialchars($wavPath); ?>" type="audio/wav">
            Your browser does not support the audio element.
        </audio>
        <img src="<?php echo htmlspecialchars($gifPath); ?>" alt="Background GIF" class="gif-background">
    </div>
    <script>
        document.getElementById('fullscreenButton').addEventListener('click', () => {
            document.getElementById('fullscreenButton').style.display = 'none';
            const background = document.getElementById('background');
            background.style.display = 'block';
            const audio = document.getElementById('audio');
            audio.play().catch(error => {
                console.log('Audio playback was prevented:', error);
            });
        });
    </script>
</body>
</html>
