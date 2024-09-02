<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blurred Background Image</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        @font-face {
            font-family: 'CustomFont';
            src: url('font.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
            overflow: hidden;
        }

        .background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('image.webp') no-repeat center center;
            background-size: cover;
            filter: blur(3px);
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            color: #fff; 
            text-align: center;
        }

        .message-container {
            padding: 2rem;
            background: rgba(0, 0, 1, 0.5);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            max-width: 80%;
            max-height: 80%;
            overflow: auto;
            font-family: 'CustomFont', sans-serif;
        }

        .message {
            font-size: 1rem; 
            line-height: 1.4; 
        }
    </style>
</head>
<body>
    <div class="background-container"></div>
    <div class="content">
        <div class="message-container">
            <div class="message">
            test
            </div>
        </div>
    </div>
</body>
</html>
