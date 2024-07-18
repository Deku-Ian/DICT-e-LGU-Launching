<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Event Launcher</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="initializenav.js"></script>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #1a1a1a;
            overflow: hidden;
        }
        #background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        #countdownVideo {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }
        #launchButton {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            padding: 2vh 4vw;
            font-size: clamp(1rem, 2vw, 1.4rem);
            font-weight: 600;
            cursor: pointer;
            background: linear-gradient(45deg, #FF00FF, #8A2BE2, #FF1493);
            color: #fff;
            border: none;
            border-radius: 35px;
            transition: all 0.4s ease, transform 0.2s ease;
            box-shadow: inset 0 -8px 0 0 rgba(0,0,0,0.2),
                        inset 0 -10px 0 0 rgba(0,0,0,0.1);
            overflow: hidden;
            animation: float 3s ease-in-out infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            width: clamp(200px, 30vw, 300px);
            height: clamp(60px, 9vh, 80px);
            text-wrap: nowrap;
            z-index: 10;
        }
        #launchButton:hover {
            transform: translateX(-50%) translateY(-5px);
            box-shadow: inset 0 -8px 0 0 rgba(0,0,0,0.3),
                        inset 0 -10px 0 0 rgba(0,0,0,0.2);
        }
        #launchButton:active {
            transform: translateX(-50%) translateY(2px);
            box-shadow: inset 0 -4px 0 0 rgba(0,0,0,0.2),
                        inset 0 -5px 0 0 rgba(0,0,0,0.1);
        }
        #launchButton::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 70%);
            transform: scale(0);
            transition: transform 0.6s;
        }
        #launchButton:hover::before {
            transform: scale(1);
        }
        #launchButton .material-icons {
            margin-right: 15px;
            font-size: clamp(24px, 3vw, 36px);
        }
        @keyframes float {
            0% {
                transform: translateX(-50%) translateY(0px);
            }
            50% {
                transform: translateX(-50%) translateY(-10px);
            }
            100% {
                transform: translateX(-50%) translateY(0px);
            }
        }
        #launchButton::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 5%;
            right: 5%;
            height: 15px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            filter: blur(5px);
            z-index: -1;
        }

        /* Media Query for iPad and other tablets */
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            #launchButton {
                width: clamp(250px, 40vw, 350px);
                height: clamp(70px, 10vh, 90px);
                font-size: clamp(1.2rem, 2.5vw, 1.6rem);
            }
            #launchButton .material-icons {
                font-size: clamp(28px, 3.5vw, 40px);
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            #countdownVideo {
                width: 100vw;
                height: 100vh;
            }
        }
    </style>
</head>
<body>
    <div id="background">
        <video id="countdownVideo" autoplay loop muted playsinline>
            <source src="videos/backdrop.mp4" type="video/mp4">
        </video>
    </div>
    <button id="launchButton" onclick="goToSecondPage()">
        <span class="material-icons">timer</span>
        Start Countdown
    </button>

    <script>
        // Ensure video plays on iOS devices
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('countdownVideo');
            video.play();
        });
    </script>
</body>
</html>