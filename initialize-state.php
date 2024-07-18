<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Launcher</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #1a1a1a;
        }
        #background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('backdrop/backdrop.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(1);
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
    </style>
</head>
<body>
    <div id="background"></div>
    <button id="launchButton">
        <span class="material-icons">rocket_launch</span>
        Start Countdown
    </button>
</body>
</html>