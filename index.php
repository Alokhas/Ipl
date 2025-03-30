<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluid Player</title>
    <link rel="stylesheet" href="https://cdn.fluidplayer.com/v2/current/fluidplayer.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-X6ZVYvCmiVbvD5v/C9w4Fv2NoMfrhPSuUR7fNWLzox/0YbTkiQTlNEmQJ0ZiOZMw3RExp4/6dZt6r8SzOvH5ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #283048, #859398);
            color: #fff;
            overflow: hidden;
        }
        .header {
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            background: linear-gradient(to right, #f58634, #f76803);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100% - 200px);
        }
        .video-container {
            position: relative;
            width: 90%;
            max-width: 800px;
            height: 50%;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
        }
        #my-video {
            width: 100%;
            height: 100%;
        }
        .telegram-button {
            margin-top: 20px;
            background-color: #0088cc;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 50px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(0, 136, 204, 0.3);
        }
        .telegram-button:hover {
            background-color: #0077b5;
        }
        .telegram-button i {
            margin-right: 10px;
            font-size: 24px;
        }
    </style>
    <script src="https://cdn.fluidplayer.com/v2/current/fluidplayer.min.js"></script>
</head>
<body>

<div class="header">
    <h1>IPL LIVE STREAMING</h1>
</div>

<div class="container">
    <div class="video-container">
        <video id='my-video' controls>
            <source id="video-source" title='Video' type='video/mp4' />
        </video>
    </div>
    <p>Enjoy ad-free content!</p>
    <a href="https://t.me/Linux_Bots" target="_blank" class="telegram-button">
        <i class="fab fa-telegram-plane"></i>Join our Telegram Channel
    </a>
</div>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    const videoUrl = urlParams.get('video') || 'https://1a-1791.com/live/ol95fwjc/slot-5/hvlh-hqmq_1080p/chunklist.m3u8';
    
    const videoSource = document.getElementById('video-source');
    videoSource.src = videoUrl;
    
    fluidPlayer('my-video', {
        layoutControls: {
            primaryColor: "#28B8ED",
            allowDownload: false 
        }
    });
</script>

</body>
</html>
